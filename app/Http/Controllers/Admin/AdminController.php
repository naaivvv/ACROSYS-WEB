<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\View\View;


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

    public function tickets() {
        return view('admin.tickets');
    }

    public function notifications() {
        return view('admin.notifications');
    }
}
