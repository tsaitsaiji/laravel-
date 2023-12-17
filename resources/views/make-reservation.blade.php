<!-- resources/views/make-reservation.blade.php -->

<!-- resources/views/reservation-success.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4 text-center mt-80">
        <div class="mt-8 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md mx-auto max-w-md" role="alert">
            <strong class="font-bold text-xl">預約成功！</strong>
            <span class="block sm:inline">{{ $reservation_success }}</span>
        </div>
    </div>
@endsection