<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role;
        $totalOrganizers = User::where('role', '2')->count();
        $totalClients = User::where('role', '0')->count();
        $totalEvents = Event::count();
        $totalTicketsManaged = Ticket::where('status', 'Reserved')->count();
        
        // Calculate the count of users created within the current month
        $usersThisMonth = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();
        
        $currentDate = Carbon::now()->toDateString();

        if ($role == '0') {
            return view('client.dashboard');
        } elseif ($role == '1') {
            return view('admin.admin-dashboard', [
                'totalOrganizers' => $totalOrganizers,
                'totalClients' => $totalClients,
                'totalEvents' => $totalEvents,
                'totalTicketsManaged' => $totalTicketsManaged,
                'usersThisMonth' => $usersThisMonth,
                'currentDate' => $currentDate,
            ]);
        } elseif ($role == '2') {
            return view('organizer.organizer-dashboard');
        }
    }
}
