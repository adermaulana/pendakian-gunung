@extends('layouts.main')

@section('container')

@if(session()->has('success'))
      <div class="alert alert-success col-lg-11" role="alert">
        {{ session('success') }}
        <a target="_blank" href="konfirmasipembayaran">Silahkan klik link berikut sebagai bukti telah melakukan Registrasi</a>
      </div>
@endif

@auth('userbooking')
<h1 class="mb-4"> Tasosso </h1>
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
          <span style="margin-bottom:150px" class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span style="margin-bottom:150px" class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
          </button>
     </div>
     <div class="col">
     <div class="card" style="width: 450px; height: 452px;">
        <div class="card-body">
        <form method="post" action="/booking/tasosso" class="mb-5" enctype="multipart/form-data">
                @csrf
            <input type="hidden" id="lokasi" name="lokasi" value="Tasosso">
            <h5 class="card-title">Tasosso</h5>
            <p class="card-text">Gn. Perak, Kec. Sinjai Barat, Kabupaten Sinjai, Sulawesi Selatan 92653</p>
            <div class="row">
              <div class="col form-floating col-lg-6">
              <input type="date" name="checkin_date" class="form-control rounded-top @error('checkin_date') is-invalid @enderror" id="checkin_date" placeholder="checkin_date" value="{{ old('checkin_date') }}" >
                <label style="margin-left:11px" for="checkin_date">Check In</label>
              </div>
              <div class="col form-floating col-lg-6">
              <input type="date" name="checkout_date" class="form-control rounded-bottom @error('checkout_date') is-invalid @enderror" id="checkout_date" placeholder="checkout_date" value="{{ old('checkout_date') }}" >
                <label style="margin-left:11px" for="checkout_date">Check Out</label>
                @error('checkout_date')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
              @enderror
              </div>
            </div>
            <div class="mb-3 mt-3 col-lg-6">
                <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki</label>
                <select class="form-select" id="jumlah_pendaki" name="jumlah_pendaki">
                    <option selected data-price="5.000" value="1">1 orang</option>
                    <option data-price="10.000" value="2">2 orang</option>
                    <option data-price="15.000" value="3">3 orang</option>
                    <option data-price="20.000" value="4">4 orang</option>
                    <option data-price="25.000" value="5">5 orang</option>
                    <option data-price="30.000" value="6">6 orang</option>
                    <option data-price="35.000" value="7">7 orang</option>
                    <option data-price="40.000" value="8">8 orang</option>
                    <option data-price="45.000" value="9">9 orang</option>
                    <option data-price="50.000" value="10">10 orang</option>
                </select>
            </div>
            <div class="row">
                <div class="form-floating mb-3 mt-3 col-lg-6">
                    <br>
                    <h6 style="margin-top:-40px;">Harga Rp5.000/Orang</h6>
                </div>
                <div style="margin-top:-54px;" class="form-floating col-lg-4 ">
                    <input style="height:10px; padding-top:15px; padding-bottom:20px; font-size:20px;" class="form-control" value="Rp.5000" name="bayar" id="bayar" type="text" readonly> 
                </div>
            </div>
            <hr>
            <center>
            <div class="row">
                <div class="col">
                <button style="margin-top:20px; color:white;" type="submit" class="btn btn-warning btn-lg-col-6">Booking Now</button>
                </div>
            </div>
            </center>
        </div>
    </div>
     </div>
    </div>
</form>
</div>
@elseif(Auth::check())
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
          <span style="margin-bottom:150px" class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span style="margin-bottom:150px" class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
          </button>
     </div>
     <div class="col">
     <div class="card" style="width: 450px; height: 452px;">
        <div class="card-body">
            <h5 class="card-title">Lembanna</h5>
            <p class="card-text">Pattapang, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92171</p>
            <form method="post" action="/booking/lembanna" class="mb-5" enctype="multipart/form-data">
                @csrf
            <div class="row">
              <div class="col form-floating col-lg-6">
              <input type="date" name="checkin_date" class="form-control rounded-top @error('checkin_date') is-invalid @enderror" id="checkin_date" placeholder="checkin_date" value="{{ old('checkin_date') }}" >
                <label style="margin-left:11px" for="checkin_date">Check In</label>
              </div>
              <div class="col form-floating col-lg-6">
              <input type="date" name="checkout_date" class="form-control rounded-bottom @error('checkout_date') is-invalid @enderror" id="checkout_date" placeholder="checkout_date" value="{{ old('checkout_date') }}" >
                <label style="margin-left:11px" for="checkout_date">Check Out</label>
                @error('checkout_date')
                <div  class="invalid-feedback"> 
                    {{ $message }}
                </div>
              @enderror
              </div>
            </div>
            <div class="mb-3 mt-3 col-lg-6">
                <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki</label>
                <select class="form-select" id="jumlah_pendaki" name="jumlah_pendaki">
                    <option selected data-price="5.000" value="1">1 orang</option>
                    <option data-price="10.000" value="2">2 orang</option>
                    <option data-price="15.000" value="3">3 orang</option>
                    <option data-price="20.000" value="4">4 orang</option>
                    <option data-price="25.000" value="5">5 orang</option>
                    <option data-price="30.000" value="6">6 orang</option>
                    <option data-price="35.000" value="7">7 orang</option>
                    <option data-price="40.000" value="8">8 orang</option>
                    <option data-price="45.000" value="9">9 orang</option>
                    <option data-price="50.000" value="10">10 orang</option>
                </select>
            </div>
            <div class="row">
                <div class="form-floating mb-3 mt-3 col-lg-6">
                    <br>
                    <h6 style="margin-top:-40px;">Harga Rp5.000/Orang</h6>
                </div>
                <div style="margin-top:-54px;" class="form-floating col-lg-4 ">
                    <input style="height:10px; padding-top:15px; padding-bottom:20px; font-size:20px;" class="form-control" value="Rp.5000" name="bayar" id="bayar" type="text" readonly> 
                </div>
            </div>
            <hr>
            <center>
            <div class="row">
                <div class="col">
                <button style="margin-top:20px; color:white;" type="submit" class="btn btn-warning btn-lg-col-6">Booking Now</button>
                </div>
            </div>
            </center>
        </div>
    </div>
     </div>
    </div>
</form>
</div>
@else
    <h1 style="margin-bottom:499px">Login Terlebih Dahulu <a href="/login">Disini</a></h1>
@endauth

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script type="text/javascript">
        $('#jumlah_pendaki').on('change', function(){
  // ambil data dari elemen option yang dipilih
  const price = $('#jumlah_pendaki option:selected').data('price');
  
  // kalkulasi total harga

  const total = price;
  
  // tampilkan data ke element
  $('[name=price]').val(price);
  
  $('#bayar').val(`Rp${total}`);
});

</script>
        
@endsection

