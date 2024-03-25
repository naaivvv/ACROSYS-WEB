<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\AdminController;
use App\Livewire\AddOrganizer;
use App\Livewire\AddClient;

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
    Route::get('/organizers/edit/{rowId}', [AdminController::class, 'editOrganizer'])->name('organizers.edit');
    Route::put('/organizers/edit/{rowId}', [AdminController::class, 'updateOrganizer'])->name('organizers.update');
    Route::get('/clients/edit/{rowId}', [AdminController::class, 'editClient'])->name('clients.edit');
    Route::put('/clients/edit/{rowId}', [AdminController::class, 'updateClient'])->name('clients.update');
    Route::get('/organizers/create', AddOrganizer::class)->name('organizers.create');
    Route::get('/organizers/create', [AddOrganizer::class, 'index'])->name('organizers.add');
    Route::get('/clients/create', AddClient::class)->name('clients.create');
    Route::get('/clients/create', [AddClient::class, 'index'])->name('clients.add');

});

Route::middleware(['auth', 'client'])->group(function () {
    // Client routes here
});

Route::middleware(['auth', 'organizer'])->group(function () {
    // Organizer routes here
    Route::get('/chart-data/{period?}', 'App\Http\Controllers\Organizer\OrganizerController@getChartData');
    Route::get('/get-ticket-data', 'App\Http\Controllers\Organizer\OrganizerController@getTicketData');
});
