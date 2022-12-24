@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 mt-4" >{{ $categories->nama }} </h2>

            <a class="btn btn-success" href="/dashboard/categories"><span data-feather="arrow-left"></span> Back To All My Posts</a>
        </div>
    </div>
</div>

@endsection