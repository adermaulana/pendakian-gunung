<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBooking;
use Illuminate\Support\Facades\Hash;

class AdminDataPendakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.datapendaki.index',[
            'title' => 'Data Pendaki',
            'userbookings' => UserBooking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.datapendaki.create',[
            'title' => 'Create Data'
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
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:user_bookings|unique:users',
            'address' => 'required|max:255',
            'number' => 'required|min:6|max:13',
            'username' => ['required','min:4','max:255','unique:user_bookings','unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        UserBooking::create($validateData);

        // $request->session()->flash('success','Registration successfull! please Login');

        return redirect('/dashboard/datapendaki')->with('success','Berhasil Menambahkan User!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
