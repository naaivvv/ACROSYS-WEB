<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
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
}
