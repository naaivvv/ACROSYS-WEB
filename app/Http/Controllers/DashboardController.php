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
        $role=Auth::user()->role;
        $totalOrganizers = User::where('role','2')->count();
        $totalClients = User::where('role','0')->count();
        $totalEvents = Event::count();
        $totalTicketsManaged = Ticket::where('status','Reserved')->count();
        $usersThisWeek = User::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
        if($role=='0') {
            return view('client.dashboard');
        }
        else if($role=='1') {
            return view('admin.admin-dashboard',
             [
                'totalOrganizers' => $totalOrganizers,
                'totalClients' => $totalClients,
                'totalEvents' => $totalEvents,
                'totalTicketsManaged' => $totalTicketsManaged,
                'usersThisWeek' => $usersThisWeek
            ]);
        }
        else if($role=='2') {
            return view('organizer.organizer-dashboard');
        }
    }
}
