<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;


//APLIKASI KONSENTRASI UJIAN 

class DataController extends Controller
{
    public function index()
    {
        return view('ujian.data',[
            'title' => 'Data',
            'data' => Data::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('ujian.tambahdata',[
            'title' => 'Create Data'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255'
        ]);

        Data::create($validateData);

        // $request->session()->flash('success','Registration successfull! please Login');

        return redirect('/data')->with('success','Berhasil Menambahkan User!');
    }
}
