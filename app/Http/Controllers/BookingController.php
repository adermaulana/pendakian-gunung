<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){
        return view('booking.index',[
            'title' => 'Booking Pendakian'
        ]);
    }

    public function daftar(){
        return view ('booking.daftar',[
            'title' => 'Pendaftaran'
        ]);
    }

    public function lembanna(){
        return view ('booking.lembanna',[
            'title' => 'Pendaftaran Lembanna'
        ]);
    }

    public function tasosso(){
        return view ('booking.tasosso',[
            'title' => 'Pendaftaran Tasosso'
        ]);
    }
}
