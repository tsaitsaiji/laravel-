<?php

use Illuminate\Support\Facades\Route;

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

// routes/web.php

use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/make-reservation', [ReservationController::class, 'makeReservation'])->name('makeReservation');
Route::get('/admin/reservations', [ReservationController::class, 'showReservations'])->name('welcome');