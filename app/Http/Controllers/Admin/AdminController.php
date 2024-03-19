<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function organizers() {
        return view('admin.organizers');
    }

    public function clients() {
        return view('admin.clients');
    }

    public function events() {
        return view('admin.events');
    }

    public function tickets() {
        return view('admin.tickets');
    }

    public function notifications() {
        return view('admin.notifications');
    }

    public function getChartData()
    {
        $users = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
                     ->whereYear('created_at', date('Y'))
                     ->groupBy('month')
                     ->get();

        $counts = $users->pluck('count');
        $months = $users->pluck('month')->map(function ($month) {
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
        $currentYear = date('Y');

        $totalTickets = Ticket::whereYear('created_at', $currentYear)->count();

        $totalReserved = Ticket::where('status', 'Reserved')->whereYear('created_at', $currentYear)->count();

        $totalTerminated = Ticket::where('status', 'Terminated')->whereYear('created_at', $currentYear)->count();

        $reservedRate = ($totalReserved / $totalTickets) * 100;

        $reservedTickets = Ticket::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->whereYear('created_at', $currentYear)
            ->where('status', 'Reserved')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $reservedCounts = $reservedTickets->pluck('count');

        $terminatedTickets = Ticket::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->whereYear('created_at', $currentYear)
            ->where('status', 'Terminated')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $terminatedCounts = $terminatedTickets->pluck('count');

        $months = $reservedTickets->pluck('month')->map(function ($month) {
            return date('F', mktime(0, 0, 0, $month, 1));
        });

        return response()->json([
            'totalTickets' => $totalTickets,
            'totalReserved' => $totalReserved,
            'totalTerminated' => $totalTerminated,
            'reservedRate' => $reservedRate,
            'reservedCounts' => $reservedCounts,
            'terminatedCounts' => $terminatedCounts,
            'months' => $months
        ]);
    }
}
