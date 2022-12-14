@extends('layouts.main')

@section('container')

<div class="container">

@if(session()->has('success'))
      <div class="alert alert-success col-lg-2" role="alert">
        {{ session('success') }}
      </div>
      @endif
  
  <h1 class="display-4 fw-bold text-center mb-4">Portal Berita Pendakian Di Indonesia</h1>
  <div class="row justify-content-center text-center">
    <div class="col-mb-3">                 
        <div style="margin:auto; overflow:hidden; max-height:400px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="/img/pendaki.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/mendakibaru.jpg" class="d-block w-100" alt="Hipwee">
            </div>
            <div class="carousel-item">
              <img src="/img/new.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>



      <p class="lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis laboriosam ullam culpa perferendis hic, labore assumenda facilis quos earum ad. Sunt ut iusto ab perspiciatis eos error cumque quibusdam accusantium quasi itaque, alias debitis, dolorum totam nulla. Provident beatae esse delectus iusto est a quisquam doloribus qui praesentium, similique accusantium cumque odio, repudiandae pariatur nemo culpa architecto perferendis fuga totam iure eius officiis omnis natus? Corrupti, distinctio fugiat nam dolor vel itaque officia adipisci earum quas quos enim, sunt eveniet maiores consequuntur dicta inventore iste cum libero, velit vitae autem numquam? Cupiditate vero illo magni minus, iste labore ipsa asperiores?</p>         

    </div>

  </div>

</div>

</div>

<section id="design">

<div class="container">

  <div class="row text-center mb-3">

    <div class="col mb-3">

      <h2 style="margin-top:-50px">Kategori</h2>

    </div>

    <div class="row justify-content-center text-white">

    @foreach( $categories as $category)
      <div class="col-md-4 mb-3">

          <div class="card">

            <img src="https://source.unsplash.com/500x500?{{ $category->nama }}" alt="{{ $category->nama }}">

            <div class="img-title">

              <a class="text-decoration-none" style="color:green;" href="/posts?category={{ $category->slug }}"><h3> {{ $category->nama }} </h3></a>

              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, deserunt.</p>

            </div>

          </div> 

      </div>         
    @endforeach
    </div>                   

  </div>

</div>



@endsection