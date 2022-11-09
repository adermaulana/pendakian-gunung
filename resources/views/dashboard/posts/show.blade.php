@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >{{ $posts->title }} </h2>

            <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back To All My Posts</a>
            <a class="btn btn-warning" href=""><span data-feather="arrow-left"></span> Edit</a>
            <a class="btn btn-danger" href=""><span data-feather="arrow-left"></span> Delete</a>

            <img class="img-fluid mt-3" src="https://source.unsplash.com/900x400?{{ $posts->category->nama }}" alt="{{ $posts->category->nama }}">

            <article class="my-3 fs-5">
                {!! $posts->body !!} 
            </article>
        </div>
    </div>
</div>

@endsection