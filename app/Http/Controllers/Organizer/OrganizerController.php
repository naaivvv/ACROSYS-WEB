<?php

namespace App\Http\Controllers\Organizer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Attendee;

class OrganizerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('organizer');
    }

    public function events() {
        return view('organizer.events');
    }
    public function attendees() {
        return view('organizer.attendees');
    }

    public function tickets() {
        return view('organizer.tickets');
    }

    public function getChartData()
    {
        $user = auth()->user();

        $attendees = Attendee::whereHas('events', function ($query) use ($user) {
                $query->join('event_organizer', 'events.id', '=', 'event_organizer.event_id')
                      ->where('event_organizer.user_id', $user->id);
            })
            ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->get();

        $counts = $attendees->pluck('count');
        $months = $attendees->pluck('month')->map(function ($month) {
            return date('F', mktime(0, 0, 0, $month, 10));
        });

        // Calculate the percentage change
        $lastMonthCount = $counts->slice(-2, 1)->first();
        $currentMonthCount = $counts->last();
        $percentageChange = (($currentMonthCount - $lastMonthCount) / $lastMonthCount);

        return response()->json(['counts' => $counts, 'months' => $months, 'percentageChange' => $percentageChange]);
    }

    public function getTicketData()
    {
        $user = auth()->user();
        $currentYear = date('Y');

        $totalTickets = Ticket::whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->count();

        $totalReserved = Ticket::where('status', 'Reserved')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->count();

        $totalTerminated = Ticket::where('status', 'Terminated')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->count();

        $totalPendings = Ticket::where('status', 'Pending')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->count();

        $reservedRate = ($totalReserved / $totalTickets) * 100;

        $reservedTickets = Ticket::where('status', 'Reserved')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $reservedCounts = $reservedTickets->pluck('count');

        $terminatedTickets = Ticket::where('status', 'Terminated')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $terminatedCounts = $terminatedTickets->pluck('count');

        $pendingTickets = Ticket::where('status', 'Pending')
            ->whereYear('created_at', $currentYear)
            ->whereHas('event.organizers', function ($query) use ($user) {
                $query->where('users.id', $user->id);
            })
            ->select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $pendingCounts = $pendingTickets->pluck('count');

        $months = $reservedTickets->pluck('month')->map(function ($month) {
            return date('F', mktime(0, 0, 0, $month, 1));
        });

        return response()->json([
            'totalTickets' => $totalTickets,
            'totalReserved' => $totalReserved,
            'totalTerminated' => $totalTerminated,
            'totalPendings' => $totalPendings,
            'reservedRate' => $reservedRate,
            'reservedCounts' => $reservedCounts,
            'terminatedCounts' => $terminatedCounts,
            'pendingCounts' => $pendingCounts,
            'months' => $months
        ]);
    }
}
