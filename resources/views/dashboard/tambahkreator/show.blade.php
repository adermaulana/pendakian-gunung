@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >Data Admin/Creator</h2>

            <a class="btn btn-success" href="/dashboard/kreator"><span data-feather="arrow-left"></span> Back To All Data User</a>
            <a class="btn btn-warning" href="/dashboard/kreator/{{ $kreator->id }}/edit"><span data-feather="arrow-left"></span> Edit</a>

            <article class="my-3 fs-5">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
            
          <span class="text">  </span>
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Name</h6>
            </div>
            <span class="text"> {{ $kreator->name }} </span>
          </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Email</h6>
            </div>
            <span class="text">{{ $kreator->email }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Username</h6>
            </div>
            <span class="text">{{ $kreator->username }}</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Role</h6>
            </div>
            @if($kreator->is_admin == 1)
            <span name="is_admin" class="text-success">Admin</span>
            @else
            <span name="is_admin" class="text-primary">Author</span>
            @endif
          </li>
        </ul>
            </article>
        </div>
    </div>
</div>

@endsection