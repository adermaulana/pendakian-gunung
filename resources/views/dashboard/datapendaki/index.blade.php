@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Pendaki</h1>
      </div>
      
      @if(session()->has('success'))
      <div class="alert alert-success col-lg-10" role="alert">
        {{ session('success') }}
      </div>
      @endif

      <div class="table-responsive col-lg-10">
        <a style="background-color : #3a5a40; color:white;" class="btn btn" href="/dashboard/datapendaki/create">Create New Data</a>
        <table class="table table-striped table-sm mt-3">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
              <th scope="col">Number</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($userbookings as $user)

            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $user->name }} </td>
              <td>{{ $user->email}} </td>
              <td>{{ $user->address }} </td>
              <td>{{ $user->number }} </td>
              <td>
                <a href="/dashboard/datapendaki/{{ $user->id }}" class="badge bg-success"><span data-feather="eye"></span></a>
                <a href="/dashboard/datapendaki/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                <form action="/dashboard/datapendaki/{{ $user->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><span data-feather="x-circle"></span></button>
                </form>
              </td>
            </tr>

            @endforeach 

          </tbody>
        </table>
      </div>
@endsection