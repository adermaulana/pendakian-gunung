@extends('layouts.main')

@section('container')
<style>
  @media (max-width: 768px) { 
    .container {
      margin-top:90px;
      margin-bottom:83px;
    }
   }
</style>
<div  class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <form action="/register" method="post">
          @csrf
          <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}" >
              <label for="name">Name</label>
              @error('name')
              <div  class="invalid-feedback"> 
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
              <div  class="invalid-feedback"> 
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="address" class="form-control rounded-bottom @error('address') is-invalid @enderror" id="address" placeholder="address" required value="{{ old('address') }}">
              <label for="address">Address</label>
              @error('address')
              <div  class="invalid-feedback"> 
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="number" name="number" class="form-control rounded-bottom @error('number') is-invalid @enderror" id="number" placeholder="Handphone Number" required value="{{ old('number') }}">
              <label for="number">Handphone Number</label>
              @error('number')
              <div  class="invalid-feedback"> 
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
              <div  class="invalid-feedback"> 
                  {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
              <label for="password">Password</label>
              @error('password')
              <div  class="invalid-feedback"> 
                  {{ $message }}
              </div>
              @enderror
            </div>
            <button style="background-color:#588157;color:white;" class="w-100 btn btn-lg mb-2 mt-3" type="submit">Register</button>
          </form>
          <small style="margin-bottom:62px;" class="d-block text-center">Already Registered? <a style="color:#588157;" href="/login">Login</a></small>
        </main>
    </div>
</div>
</div>
@endsection