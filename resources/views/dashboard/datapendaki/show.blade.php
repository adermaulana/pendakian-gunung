@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >Data Pendaki</h2>

            <a class="btn btn-success" href="/dashboard/datapendaki"><span data-feather="arrow-left"></span> Back To All Data Pendaki</a>
            <a class="btn btn-warning" href="/dashboard/datapendaki/{{ $kreators->id }}/edit"><span data-feather="arrow-left"></span> Edit</a>
            <form action="/dashboard/datapendaki/{{ $kreators->id }}" method="post" class="d-inline">
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
              <h6 class="my-0">Name</h6>
            </div>
            <span class="text"> {{ $kreators->name }} </span>
          </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Email</h6>
            </div>
            <span class="text">{{ $kreators->email }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Username</h6>
            </div>
            <span class="text">{{ $kreators->username }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Number</h6>
            </div>
            <span class="text">{{ $kreators->number }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Address</h6>
            </div>
            <span class="text">{{ $kreators->address }}</span>
          </li>
        </ul>
            </article>
        </div>
    </div>
</div>

@endsection