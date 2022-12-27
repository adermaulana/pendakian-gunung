@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >{{ $categories->nama }} </h2>
            <img class="img-fluid mt-2 mb-4" src="https://source.unsplash.com/900x400?{{ $categories->nama }}" alt="{{ $categories->nama }}">
            <a class="btn btn-success" href="/dashboard/categories"><span data-feather="arrow-left"></span> Back To All Categories</a>
            <a class="btn btn-warning" href="/dashboard/categories/{{ $categories->slug }}/edit"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/categories/{{ $categories->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
        </div>
    </div>
</div>

@endsection