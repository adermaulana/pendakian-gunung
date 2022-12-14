<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserBooking;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {

        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:user_bookings|unique:users',
            'address' => 'required|max:255',
            'number' => 'required|min:12|max:13',
            'username' => ['required','min:4','max:255','unique:user_bookings','unique:users'],
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        UserBooking::create($validateData);

        // $request->session()->flash('success','Registration successfull! please Login');

        return redirect('/login')->with('success','Registration successfull! Please login');

    }
}
