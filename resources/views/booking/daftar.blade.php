@extends('layouts.main')

@section('container')
<h1 class="mb-4"> Pilih Jalur Pendakian </h1>

<div class="container mb-4" >
    <div class="row">

    <div class="card" style="width: 400px; height: 460px;  margin-left:100px;">
        <img src="https://source.unsplash.com/500x500?hiking" style="height:300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Lembanna</h5>
            <p class="card-text">Pattapang, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92171</p>
            <a href="/booking/lembanna" class="btn btn-success ">Beli Tiket</a>
        </div>
    </div>
    <div class="card" style="width: 400px; height: 460px; margin-left:70px;">
        <img src="https://source.unsplash.com/500x500?pendakian" style="height:300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Tasosso'</h5>
            <p class="card-text">Gn. Perak, Kec. Sinjai Barat, Kabupaten Sinjai, Sulawesi Selatan 92653.</p>
            <a href="/booking/tasosso" class="btn btn-success">Beli Tiket</a>
        </div>
    </div>

    </div>
</div>


@endsection
