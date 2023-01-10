<style>
        #navbar {

        background-color : #3a5a40;

    }

    #warna {
        text-decoration :none;
    }

    .text-decoration-none {
        color :#3a5a40;
    }

</style>

@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
         <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Masukkan Berita yang Ingin di Cari.." name="search" value="{{ request ('search') }}">
           <button class="btn btn" type="submit" style="border-radius:5px;background-color:#3a5a40; color:white;">Search</button>
           <div class="row">
            <div class="col">
                <a  href="/categories" class="btn btn" style="background-color:#3a5a40; color:white;">Categories</a>
            </div>
           </div> 
         </div>
        </form>
    </div>
</div>

@if ($posts->count())

<div class="card mb-3">

    @if ($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden;">
            <img class="img-fluid" src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->nama }}">
        </div>
    @else
        <img class="card-img-top" src="https://source.unsplash.com/900x400?{{ $posts[0]->category->nama }}" alt="{{ $posts[0]->category->nama }}">
    @endif
 
  <div class="card-body text-center">
    <h4 class="card-title"><a  class="text-decoration-none" href="/posts/{{ $posts[0]->slug  }}">{{ $posts[0]->title }}</a> </h4>
    <p class="mb-3">
        <small class="text-muted">    
        By <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }} </a> in<a id="warna" href="/posts?category={{ $posts[0]->category->slug }}"> {{ $posts[0]->category->nama   }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>
        
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a class="text-decoration-none btn btn-dark"  href="/posts/{{ $posts[0]->slug  }}">Read More</a>

  </div>
</div>


<div class="container">
    <div class="row">

        @foreach($posts->skip(1) as $post)

        <div class="col-md-4 mb-3">
             <div class="card">
                <div class="position p-2  rounded" style="background-color:rgba(58,90,64,0.9)"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->nama }}</a> </div>
                    @if ($post->image)
                        <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->nama }}">
                    @else
                        <img class="img-fluid" src="https://source.unsplash.com/900x400?{{ $post->category->nama }}" alt="{{ $post->category->nama }}">
                    @endif
                 <div class="card-body">
                  <h5 class="card-title">{{ $post -> title }}</h5>
                  <p class="mb-3">
                     <small class="text-muted">    
                     By <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }} </a> {{ $post->created_at->diffForHumans() }}
                    </small>
                 </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post -> slug  }}" class="btn " style="background-color:#3a5a40;color:white;">Read More</a>
                 </div>
            </div>
        </div>

        @endforeach

    </div>
</div>

@else
    <p style="margin-bottom:377px;" class="text-center fs-4">No Posts Found.</p>
@endif


<div style="color:salmon;" class="d-flex justify-content-end">{{ $posts->links() }}</div>


@endsection

