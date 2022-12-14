@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Booking</h1>
      </div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/booking" class="mb-5" enctype="multipart/form-data">
        @csrf
         <div class="mb-3">
        <label for="pendaki" class="form-label">Nama Pendaki</label>
            <input type="text" class="form-control @error('pendaki') is-invalid @enderror" id="pendaki" name="pendaki" required autofocus value="{{ old('pendaki')  }}">
            @error('pendaki')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="checkin_date" class="form-label">Check In</label>
            <input type="date" class="form-control @error('checkin_date') is-invalid @enderror" id="checkin_date" name="slug" value="{{ old('checkin_date') }}">
            @error('checkin_date')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="checkout_date" class="form-label">Check Out</label>
            <input type="date" class="form-control @error('checkout_date') is-invalid @enderror" id="checkout_date" name="slug" value="{{ old('checkout_date') }}">
            @error('checkout_date')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="jumlah_pendaki" class="form-label">Jumlah Pendaki</label>
            <select class="form-select" name="jumlah_pendaki">
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
            <button style="background-color:#3a5a40; color:white;" type="submit" class="btn btn">Create Data</button>
    </form>  
</div>  

<script>

    const title = document.querySelector('#title'); 
    const slug = document.querySelector('#slug');
    
    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?title=${title.value}')
          .then(response => response.json())
          .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }

    
</script>

@endsection