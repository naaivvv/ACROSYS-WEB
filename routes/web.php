<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\OrganizerController;
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
    Route::get('/organizers', [OrganizerController::class, 'organizers'])->name('organizers');
    Route::get('/organizers/{organizer}/edit', [OrganizerController::class, 'edit'])->name('organizers.edit');
});

Route::middleware(['auth', 'client'])->group(function () {
    // Client routes here
});

Route::middleware(['auth', 'organizer'])->group(function () {
    // Organizer routes here
});
