<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingData;
use App\Models\UserBooking;
use Illuminate\Support\Str;

class AdminDataBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.booking.index',[
            'title' => 'Data Booking',
            'bookingdata' => BookingData::latest()->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.booking.create',[
            'title' => 'Create Data',
            'bookings' => UserBooking::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'checkin_date' => 'required|after:yesterday',
            'checkout_date' => 'required|after:checkin_date',
            'jumlah_pendaki' => 'required',
            'bayar' => 'required',
            'lokasi' => 'required',
            'id_pendaki' => 'required'
        ]);
        
        // $validatedData['id_pendaki'] = auth('userbooking')->user()->id;

        BookingData::create($validatedData);

        return redirect('/dashboard/booking')->with('success','Berhasil Booking Ticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BookingData $booking)
    {
        return view ('dashboard.booking.show',[
            'title' => 'Data Booking',
            'bookings' => $booking
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingData $booking)
    {
        return view('dashboard.booking.edit',[
            'title' => 'Edit Data',
            'booking' => $booking
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BookingData $booking)
    {
                
        $rules = [
            'checkin_date' => 'required|after:yesterday',
            'checkout_date' => 'required|after:checkin_date',
            'jumlah_pendaki' => 'required',
            'bayar' => 'required',
            'lokasi' => 'required',
            'status' => 'required'
        ];

        
        $validateData = $request->validate($rules);

        BookingData::where('id',$booking->id)
            ->update($validateData);

        return redirect('/dashboard/booking')->with('success','Post has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingData $booking)
    {
        BookingData::destroy($booking->id);

        return redirect('/dashboard/booking')->with('success','Post has been Deleted');
    }
}
