<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TambahKreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tambahkreator.index',[
            'title' => 'Tambah Kreator',
            'kreator' =>  User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambahkreator.create',[
            'title' => 'Tambah Kreator'
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
            'username' => ['required','min:4','max:255','unique:user_bookings','unique:users'],
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        // $request->session()->flash('success','Registration successfull! please Login');

        return redirect('/dashboard/kreator')->with('success','Berhasil Menambahkan User!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $kreator)
    {
        return view ('dashboard.tambahkreator.show',[
            'kreator' => $kreator,
            'title' => 'Data Creator'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $kreator)
    {
        return view('dashboard.tambahkreator.edit',[
            'title' => 'Edit Data',
            'kreator' => $kreator
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $kreator)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'username' => ['required','min:4','max:255'],
            'is_admin' => 'required'
        ];

        $validateData = $request->validate($rules);

        User::where('id',$kreator->id)
            ->update($validateData);

        return redirect('/dashboard/kreator')->with('success','Data has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        User::destroy($user->id);
        return redirect('/dashboard/kreator')->with('success','Data has been Deleted');
    }
}
