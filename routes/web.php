<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\PerformerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TicketController;


  

/*

|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

|

*/

  

Route::get('/',[PageController::class,'index'])->name('/');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('events', EventController::class);
    Route::resource('artists', ArtistController::class);
    Route::resource('venues', VenueController::class);
    Route::resource('tickets', TicketController::class);
    Route::resource('finances', FinanceController::class);
    Route::get('/analytics', [AnalyticsController::class, 'index'])->name('analytics.index');
    Route::get('/performers/{performer}/bookings', [PerformerController::class, 'bookings'])->name('performer.bookings');

});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/event-organizer', [DashboardController::class, 'eventOrganizer'])->name('dashboard.event_organizer');
    Route::get('/dashboard/artist', [DashboardController::class, 'artist'])->name('dashboard.artist');
    Route::get('/dashboard/venue-owner', [DashboardController::class, 'venueOwner'])->name('dashboard.venue_owner');
    Route::get('/dashboard/event-organizer', [DashboardController::class, 'eventOrganizer'])->name('dashboard.event-organizer');
    // Add this route in your web.php file
    Route::get('/dashboard/event-organizer', [DashboardController::class, 'eventOrganizer'])->name('dashboard.event-organizer');


    // web.php

Route::post('/events/{event}/assign-artist', [EventController::class, 'assignArtist'])->name('events.assignArtist');




});
