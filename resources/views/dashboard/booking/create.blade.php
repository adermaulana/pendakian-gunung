@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Booking</h1>
      </div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/booking" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
         <label for="lokasi" class="form-label">Lokasi</label>
            <select class="form-select" id="lokasi" name="lokasi">
                  <option value="Lembanna " selected>Lembanna</option>
                  <option value="Tasosso">Tasosso</option>
            </select>
        </div>
         <div class="mb-3">
         <label for="id_pendaki" class="form-label">Nama Pendaki</label>
            <select class="form-select" name="id_pendaki">
                @foreach ($bookings as $booking)

                 @if(old('id_pendaki') == $booking->id)
                  <option value="{{ $booking->id }} " selected> {{ $booking->name }} </option>
                 @else
                  <option value="{{ $booking->id }}"> {{ $booking->name }} </option>
                 @endif

                @endforeach
            </select>
        </div>
         <div class="mb-3">
            <label for="checkin_date" class="form-label">Check In</label>
            <input type="date" class="form-control @error('checkin_date') is-invalid @enderror" id="checkin_date" name="checkin_date" value="{{ old('checkin_date') }}">
            @error('checkin_date')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="checkout_date" class="form-label">Check Out</label>
            <input type="date" class="form-control @error('checkout_date') is-invalid @enderror" id="checkout_date" name="checkout_date" value="{{ old('checkout_date') }}">
            @error('checkout_date')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki</label>
            <select class="form-select" id="jumlah_pendaki" name="jumlah_pendaki">
            <option selected data-price="5.000" value="1">1 Orang</option>
                    <option data-price="10.000" value="2">2 Orang</option>
                    <option data-price="15.000" value="3">3 Orang</option>
                    <option data-price="20.000" value="4">4 Orang</option>
                    <option data-price="25.000" value="5">5 Orang</option>
                    <option data-price="30.000" value="6">6 Orang</option>
                    <option data-price="35.000" value="7">7 Orang</option>
                    <option data-price="40.000" value="8">8 Orang</option>
                    <option data-price="45.000" value="9">9 Orang</option>
                    <option data-price="50.000" value="10">10 Orang</option>
            </select>
        </div>
        <div class="mb-3">
                <div class=" mb-3 mt-3">
                    <br>
                    <h6 style="margin-top:-25px;">Harga Rp5.000/Orang</h6>
                </div>
                <div  class="mb-3">
                    <input  class="form-control" value="Rp.5000" name="bayar" id="bayar" type="text" readonly> 
                </div>
            </div>
            <div class="mb-3">
         <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
                  <option value="Belum Bayar" selected>Belum Bayar</option>
                  <option value="Sudah Bayar">Sudah Bayar</option>
                  <option value="Pending">Pending</option>
            </select>
        </div>
            <button style="background-color:#3a5a40; color:white;" type="submit" class="btn btn">Create Data</button>
    </form>  
</div>  

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