<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function makeReservation(Request $request)
    {
        // 驗證請求...
        $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'phone' => 'required|string|max:20',
        ]);

        // 存入數據庫
        Reservation::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'phone' => $request->input('phone'),
        ]);

        return view('make-reservation')->with('reservation_success');
    }

 
public function showReservations()
{
    $reservations = Reservation::orderBy('created_at', 'desc')->get();
    return view('admin.reservations', compact('reservations'));
}
public function getLatestReservation()
{
    $latestReservation = Reservation::latest()->first();
    return view('admin.reservations', compact('latestReservation'));
}
}
