@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Data</h1>
      </div>

<div class="col-lg-8">
    <form method="post" action="/data/create" class="mb-5" enctype="multipart/form-data">
        @csrf
         <div class="mb-3">
        <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nim" name="nim" required autofocus value="{{ old('nim')  }}">
            @error('nim')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="nama" class="form-label">NAMA</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="nama" value="{{ old('nama') }}">
            @error('nama')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
        </div>
         <div class="mb-3">
            <label for="alamat" class="form-label">ALAMAT</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
            @error('slug')
            <div  class="invalid-feedback"> 
                {{ $message }}
            </div>
            @enderror
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