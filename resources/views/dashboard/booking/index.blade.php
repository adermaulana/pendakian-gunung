@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Booking</h1>
      </div>
      
      @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-12">
        <a style="background-color : #3a5a40; color:white;" class="btn btn" href="/dashboard/booking/create">Create New Booking</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Booking ID</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Nama Pendaki</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Jumlah Pendaki</th>
              <th scope="col">Biaya yang Dibayar</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookingdata as $user)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td> {{ $user->id }} </td>
              <td>{{ $user->lokasi }}</td>
              <td>{{ $user->userbooking->name }}</td>
              <td>{{ $user->checkin_date }} </td>
              <td>{{ $user->checkout_date}} </td>
              <td>{{ $user->jumlah_pendaki }} </td>
              <td>{{ $user->bayar }}</td>
              <td>
                <a href="/dashboard/booking/{{ $user->id }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="/dashboard/booking/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/booking/{{ $user->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>

            @endforeach
            

          </tbody>
        </table>
        <div style="color:salmon;" class="d-flex justify-content-end">{{ $bookingdata->links() }}</div>
      </div>
@endsection