@extends('layouts.main')

@section('container')

@auth('userbooking')
<h1 class="mb-4"> Pilih Jalur Pendakian </h1>

<div class="container mb-4" >
 <div class="row">
    <div class="card mb-4 start-auto" style="width: 400px; height: 460px;  margin:auto;">
        <img src="https://source.unsplash.com/500x500?hiking" style="height:300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Lembanna</h5>
            <p class="card-text">Pattapang, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92171</p>
            <a href="/booking/lembanna" class="btn btn-success ">Beli Tiket</a>
        </div>
    </div>
    <div class="card mb-4 start-auto" style="width: 400px; height: 460px; margin:auto;">
        <img src="https://source.unsplash.com/500x500?climbing" style="height:300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Tasosso'</h5>
            <p class="card-text">Gn. Perak, Kec. Sinjai Barat, Kabupaten Sinjai, Sulawesi Selatan 92653.</p>
            <a href="/booking/tasosso" class="btn btn-success">Beli Tiket</a>
        </div>
    </div>
 </div>
</div>
@elseif(Auth::Check())
<h1 style="margin-bottom:499px">Anda adalah Admin/Author tidak bisa booking<a class="text-decoration-none" href="/dashboard"> Masuk ke Menu Dashboard</a></h1>
@else
<h1 style="margin-bottom:499px">Login Terlebih Dahulu <a href="/login">Disini</a></h1>
@endauth


@endsection

