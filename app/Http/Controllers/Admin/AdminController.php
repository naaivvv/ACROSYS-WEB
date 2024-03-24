<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

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

        $totalPendings = Ticket::where('status', 'Pending')->whereYear('created_at', $currentYear)->count();

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

        $pendingTickets = Ticket::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->whereYear('created_at', $currentYear)
            ->where('status', 'Pending')
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

    public function editOrganizer($rowId) {
        $user = User::findOrFail($rowId);
        return view('admin.organizers-edit', ['user' => $user]);
    }

    public function updateOrganizer(Request $request, $rowId) {
        $user = User::findOrFail($rowId);
        $data = $request->all();

        // Check if the password is being updated
        if(isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        if($user->wasChanged()) {
            return redirect()->route('admin.organizers')->with('success', 'Organizer updated successfully!');
        } else {
            return redirect()->route('admin.organizers')->with('error', 'No changes were made.');
        }
    }

    public function editClient($rowId) {
        $user = User::findOrFail($rowId);
        return view('admin.clients-edit', ['user' => $user]);
    }

    public function updateClient(Request $request, $rowId) {
        $user = User::findOrFail($rowId);
        $data = $request->all();

        // Check if the password is being updated
        if(isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }

        $user->update($data);

        if($user->wasChanged()) {
            return redirect()->route('admin.clients')->with('success', 'Organizer updated successfully!');
        } else {
            return redirect()->route('admin.clients')->with('error', 'No changes were made.');
        }
    }
}
