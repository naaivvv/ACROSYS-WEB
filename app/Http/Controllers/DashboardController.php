<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Attendee;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $role = Auth::user()->role;
        $totalOrganizers = User::where('role', '2')->count();
        $totalClients = User::where('role', '0')->count();
        $totalAttendeesForOrg = Attendee::whereHas('events', function ($query) use ($user) {
            $query->join('event_organizer', 'events.id', '=', 'event_organizer.event_id')
                  ->where('event_organizer.user_id', $user->id);
        })->count();
        $totalEvents = Event::count();
        $totalEventsForOrg = Event::whereHas('organizers', function ($query) use ($user) {
            $query->where('users.id', $user->id);
        })->count();
        $totalTicketsManaged = Ticket::where('status', 'Reserved')->count();
        $totalTicketsManagedForOrg = Ticket::whereHas('event.organizers', function ($query) use ($user) {
            $query->where('users.id', $user->id);
        })->where('status', 'Reserved')->count();

        // Calculate the count of users created within the current month
        $usersThisMonth = User::whereYear('created_at', Carbon::now()->year)
            ->whereMonth('created_at', Carbon::now()->month)
            ->count();

        $attendeesThisMonthForOrg = Attendee::whereHas('events', function ($query) use ($user) {
            $query->join('event_organizer', 'events.id', '=', 'event_organizer.event_id')
                ->where('event_organizer.user_id', $user->id);
        })
        ->whereYear('created_at', Carbon::now()->year)
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
            return view('organizer.organizer-dashboard', [
                // 'totalOrganizers' => $totalOrganizers,
                'totalAttendeesForOrg' => $totalAttendeesForOrg,
                'totalEventsForOrg' => $totalEventsForOrg,
                'totalTicketsManagedForOrg' => $totalTicketsManagedForOrg,
                'attendeesThisMonthForOrg' => $attendeesThisMonthForOrg,
                'currentDate' => $currentDate,
            ]);
        }
    }
}
