@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >{{ $posts->title }} </h2>

            <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back To All My Posts</a>
            <a class="btn btn-warning" href="/dashboard/posts/{{ $posts->slug }}/edit"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Delete</button>
                </form>

                @if ($posts->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img class="img-fluid mt-3" src="{{ asset('storage/' . $posts->image) }}" alt="{{ $posts->category->nama }}">
                </div>
                @else
                    <img class="img-fluid mt-3" src="https://source.unsplash.com/900x400?{{ $posts->category->nama }}" alt="{{ $posts->category->nama }}">
                @endif

            <article class="my-3 fs-5">
                {!! $posts->body !!} 
            </article>
        </div>
    </div>
</div>

@endsection