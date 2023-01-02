@extends('layouts.main')

@section('container')

<style>

 .nav-link {
  color: #369647;
}

</style>

<div style="margin-bottom:278px;" id="content-wrapper">	
		<div class="container">
			<!-- <div class="row">
				<div class="col-md-4">hwhw</div>
				<div class="col-md-8">jafhjjhfwjfafawf</div>
			</div> -->
			
			<div class="row justify-content-center">
			  <div class="col-md-3">
			    <div class="nav flex-column nav-pills bg-white border rounded" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			      <div class="nav-link p-3 text-dark" href="#">
		           <div class="text-center">
		           <img src="https://bookingciremai.menlhk.go.id/kawasan-sso/images/user.png?1670035419402787" width="50px"> 
		           </div>
		           <div class="text-center"><strong>{{ auth('userbooking')->user()->name }}</strong> <div class="text-muted small">{{ auth('userbooking')->user()->email }}</div>
		           </div>
		          </div>
		          <div class="border text-dark border-bottom"></div>
			      <a  class="nav-link" href="/list-booking" role="tab"><i class=""></i> My Booking</a>
			      
			      <a  class="nav-link"  href="/my-account" role="tab" ><i class=""></i>  My Account</a>
			      <div class="border text-dark border-bottom"></div>
                  <form action="/logout-user" method="post">
                    @csrf
                  <button type="submit" class="nav-link text-dark p-3"> Log Out</button>
                  </form>

			    </div>
			  </div>


			  <div class="col-md-7">
			    <div class="tab-content" id="v-pills-tabContent">
			      <div class="mt-3 mt-md-1 tab-pane fade active show" id="v-pills-booking_list" role="tabpanel" aria-labelledby="v-pills-messages-tab">
			      		<h4>My Booking</h4>
                        <hr>
                        <div class="container">

        <div class="col-md-12">
            <article class="my-3 fs-5">
        </h4>
        <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div class="">
              <h6 class="my-0">Booking ID</h6>
            </div>
            <span class="text"> {{ $bookings->id }} </span>
          </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Lokasi</h6>
            </div>
            <span class="text"> {{ $bookings->lokasi }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Pendaki</h6>
            </div>
            <span class="text"> {{ $bookings->userbooking->name }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check In</h6>
            </div>
            <span class="text"> {{ $bookings->checkin_date }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Check Out</h6>
            </div>
            <span class="text"> {{ $bookings->checkout_date }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Jumlah Pendaki</h6>
            </div>
            <span class="text"> {{ $bookings->jumlah_pendaki }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Biaya yang Dibayar</h6>
            </div>
            <span class="text"> {{ $bookings->bayar }} </span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Status</h6>
            </div>
            @if($bookings->status == "Sudah Bayar")
            <span  name="status" class="text-success">{{ $bookings->status }}</span>
            @elseif($bookings->status == "Pending")
            <span  name="status" class="text-warning">{{ $bookings->status }}</span>
            @else
            <span  name="status" class="text-danger">{{ $bookings->status }}</span>
            @endif
          </li>
        </ul>
            </article>
            <a class="btn btn-success" href="/list-booking"><span data-feather="arrow-left"></span> Back</a>
        </div>
    </div>
</div>

			      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
			    </div>
			  </div>
			</div>
		</div>
    </div>

@endsection