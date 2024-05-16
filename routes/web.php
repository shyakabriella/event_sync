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
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\VenueRequestController;
use App\Http\Controllers\ReportController;
use App\Models\Event;


  

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
    Route::get('/dashboard/event-organizer', [DashboardController::class, 'eventOrganizer'])->name('dashboard.event-organizer');
    Route::post('/venue-requests', [VenueRequestController::class, 'store'])->name('venue-requests.store');
    Route::post('/events/{event}/send-invitations', [EventController::class, 'sendInvitations'])->name('events.sendInvitations');
    Route::post('/venue-requests', [VenueController::class, 'storeRequest'])->name('venue-requests.store');
    Route::post('/venue-requests/{id}/update-status', [VenueRequestController::class, 'updateStatus'])->name('venue-requests.update-status');
    Route::get('/book-seat/{eventId}', [BookingController::class, 'showBookingForm'])->name('book-seat');
    Route::post('/submit-booking', [BookingController::class, 'submitBooking'])->name('submit-booking');
   
    Route::get('/bookings/payment/{eventId}', function ($eventId) {
        $event = Event::findOrFail($eventId);
        return view('bookings.payment', compact('event'));
    })->name('bookings.payment');
    
    

    Route::post('/submit-booking', [BookingController::class, 'submitBooking'])->name('submit-booking');


Route::get('/bookings', [BookingController::class, 'index'])->name('booking.index');
Route::post('/events/{event}/assign-artist', [EventController::class, 'assignArtist'])->name('events.assignArtist');

Route::get('/invitations', [InvitationController::class, 'index'])->name('invitations.index')->middleware('auth');
Route::put('/invitations/{invitation}', [InvitationController::class, 'update'])->name('invitations.update');

// Route to display the list of invitations
Route::get('/invitations', [InvitationController::class, 'index'])->name('invitations.index');

// Route to create a new invitation
Route::get('/invitations/create', [InvitationController::class, 'create'])->name('invitations.create');
Route::post('/invitations', [InvitationController::class, 'store'])->name('invitations.store');

// Route to show a specific invitation
Route::get('/invitations/{invitation}', [InvitationController::class, 'show'])->name('invitations.show');

// Route to edit an invitation
Route::get('/invitations/{invitation}/edit', [InvitationController::class, 'edit'])->name('invitations.edit');
Route::put('/invitations/{invitation}', [InvitationController::class, 'update'])->name('invitations.update');

// Route to delete an invitation
Route::delete('/invitations/{invitation}', [InvitationController::class, 'destroy'])->name('invitations.destroy');


});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/artist', [DashboardController::class, 'artist'])->name('dashboard.artist');
});

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
Route::get('download-pdf', [ReportController::class, 'downloadPDF'])->name('download.pdf');
Route::get('download-excel', [ReportController::class, 'downloadExcel'])->name('download.excel');