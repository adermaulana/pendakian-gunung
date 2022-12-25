@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >Data Booking</h2>

            <a class="btn btn-success" href="/dashboard/booking"><span data-feather="arrow-left"></span> Back To All My Posts</a>
            <a class="btn btn-warning" href="/dashboard/booking/{{ $bookings->id }}/edit"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/booking/{{ $bookings->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span>Delete</button>
                </form>

            <article class="my-3 fs-5">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text">  </span>
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Lokasi</h6>
            </div>
            <span class="text">{{ $bookings->lokasi }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Pendaki</h6>
            </div>
            <span class="text">{{ $bookings->userbooking->name }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check In</h6>
            </div>
            <span class="text">{{ $bookings->checkin_date }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check Out</h6>
            </div>
            <span class="text">{{ $bookings->checkout_date }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Jumlah Pendaki</h6>
            </div>
            <span class="text">{{ $bookings->jumlah_pendaki }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Biaya yang Dibayar</h6>
            </div>
            <span class="text">{{ $bookings->bayar }}</span>
          </li>
        </ul>
            </article>
        </div>
    </div>
</div>

@endsection