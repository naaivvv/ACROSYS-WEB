<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/chart-data/{period?}', 'App\Http\Controllers\Admin\AdminController@getChartData');
    Route::get('/get-ticket-data', 'App\Http\Controllers\Admin\AdminController@getTicketData');
    Route::get('/organizers', [AdminController::class, 'organizers'])->name('admin.organizers');
    Route::get('/clients', [AdminController::class, 'clients'])->name('admin.clients');
    Route::get('/events', [AdminController::class, 'events'])->name('admin.events');
    Route::get('/tickets', [AdminController::class, 'tickets'])->name('admin.tickets');
    Route::get('/notifications', [AdminController::class, 'notifications'])->name('admin.notifications');
    Route::get('/organizers/{organizer}/edit', [AdminController::class, 'edit'])->name('organizers.edit');
});

Route::middleware(['auth', 'client'])->group(function () {
    // Client routes here
});

Route::middleware(['auth', 'organizer'])->group(function () {
    // Organizer routes here
});
