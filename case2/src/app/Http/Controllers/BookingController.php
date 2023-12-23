<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $booking = $request->only(['user_id', 'shop_id','date', 'time', 'number']);
        Booking::create($booking);
            return view('done');
    }
}
