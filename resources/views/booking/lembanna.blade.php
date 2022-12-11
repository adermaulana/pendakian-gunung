@extends('layouts.main')

@section('container')

<h1 class="mb-4"> Lembanna </h1>
<div class="container mb-4">
    <div class="row">
        <div id="carouselExampleControls" class=" carousel slide w-50 " data-bs-ride="carousel">
           <div class="carousel-inner">
                <div class="carousel-item active">
                 <img src="/img/bawakaraeng.jpg" class="d-inline w-100" alt="bawakareng">
               </div>
              <div class="carousel-item">
               <img src="/img/bawakaraeng.jpg" class="d-inline w-100" alt="bawakaraeng">
                 </div>
              <div class="carousel-item">
              <img src="/img/bawakaraeng.jpg" class="d-inline w-100" alt="bawakaraeng">
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
     <div class="col">
     <div class="card" style="width: 400px; height: 453px;">
        <div class="card-body">
            <h5 class="card-title">Lembanna</h5>
            <p class="card-text">Pattapang, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92171</p>
            <a href="/booking/lembanna" class="btn btn-success ">Beli Tiket</a>
        </div>
    </div>
     </div>
    </div>
</div>

        
@endsection

