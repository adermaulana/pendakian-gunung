@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
<div class="row justify-content-center me-5">
  <img style="width:330px;" src="/img/pendaki.jpg" alt="pendaki">
</div>
@endsection