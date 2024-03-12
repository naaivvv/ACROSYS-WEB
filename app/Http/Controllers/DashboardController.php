<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='0') {
            return view('client.dashboard');
        }
        else if($role=='1') {
            return view('admin.admin-dashboard');
        }
        else if($role=='2') {
            return view('organizer.organizer-dashboard');
        }
    }
}
