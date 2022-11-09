<style>
    #navbar {

        background-color : #3a5a40;

    }

    #back {
        color : #3a5a40;
    }

    .warna {
        color : #3a5a40;
    }

    .warna:hover {
        color :#3a5a40;
    }


</style>

@extends ('layouts.main')

@section ('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-4" >{{ $posts->title }} </h2>

            <p class="mb-3"><a class="warna text-decoration-none" href="/posts?author={{ $posts->author->username }}">{{ $posts->author->name }}</a> in<a class="warna text-decoration-none" href="/posts?category={{ $posts->category->slug }}"> {{ $posts->category->nama }}</a></p>

            <img class="img-fluid" src="https://source.unsplash.com/900x400?{{ $posts->category->nama }}" alt="{{ $posts->category->nama }}">

            <article class="my-3 fs-5">
                {!! $posts->body !!} 
            </article>

            <a class="d-block text-decoration-none" id="back" href="/posts">Back To Post</a>
        </div>
    </div>
</div>


@endsection