<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingData;


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

    public function konfirmasi(){
        return view('booking.konfirmasi',[
            'title' => 'Konfirmasi Booking',
            'bookingdata' => BookingData::latest()->where('id_pendaki', auth('userbooking')->user()->id)->paginate(1)
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'checkin_date' => 'required|after:yesterday',
            'checkout_date' => 'required|after:checkin_date',
            'jumlah_pendaki' => 'required',
            'bayar' => 'required',
            'lokasi' => 'required',
            'status' => 'required'
        ]);
        
        $validatedData['id_pendaki'] = auth('userbooking')->user()->id;

        BookingData::create($validatedData);
        
        if($request->lokasi == 'Tasosso'){
            return redirect('/booking/tasosso')->with('success','Berhasil Booking Ticket');
        } else  {
            return redirect('/booking/lembanna')->with('success','Berhasil Booking Ticket');
        }
        
    }

}
