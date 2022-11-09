<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {

        return view('register.index',[
            'title' => 'Register',
            'active' => 'Register'

        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'slug' => 'required'
        ]);
    }

}
