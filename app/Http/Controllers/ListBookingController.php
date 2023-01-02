<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingData;
use App\Models\UserBooking;
use Illuminate\Support\Facades\Auth;

class ListBookingController extends Controller
{
    public function index(){
        return view('user-list-booking.listbooking',[
            'title' => 'My Booking',
            'bookings' => BookingData::latest()->where('id_pendaki', auth('userbooking')->user()->id)->get()
        ]);
    }

    public function myAccount(){
        return view('user-account.index',[
            'title' => 'My Account'
        ]);
    }


    public function detail($id){

        $booking = BookingData::find($id);
        return view('user-list-booking.detail',[
            'title' => 'Details',
            'bookings' => $booking
        ]);
    }


    public function keluar(Request $request){
        if(Auth::logout());

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
}
