@extends('layouts.main')

@section('container')

<style>
    .nav-link {
        color:#588157;
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
                  <form action="/logout" method="post">
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
                        @if($bookings->count())
                        @foreach($bookings as $booking)
			      		<div id="container-booking-list">
                            <div id="no-data-row" class="card mb-3 nodata">						 
                                <div class="row no-gutters">						    					    
                                        <div class="col-md-12">						      
                                        <div class="card-header ">							  	
                                            <div class="row">								    
                                                <div class="col text-left text-muted">Booking ID : <strong>
                                                    {{ $booking->id }}
                                                </strong>
                                            </div>								    
                                            <div  class="col text">
                                                <strong style="margin-left:230px;" >{{ $booking->bayar }}
                                            </strong>
                                            </div>							    
                                        </div>
                                        							  
                                        </div>
                                        <div class="card-body"><p class="card-text">{{ $booking->lokasi }}</p></div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                            <div class="col text-left align-self-center">
                                                <span class="text-decoration-none badge bg-success">{{ $booking->status }} <i class="fas fa-ban"></i></span>
                                            </div>
                                                <div class="col text-right action-right">
                                                    <a style="margin-left:200px;" href="" class="btn-link disabled">See Details</a>
                                            </div>
                                            </div>
                                            </div>				  
                                        </div>						
                                    </div>
                                </div>
			      </div>
                    @endforeach
                    @else
                    <p style="margin-bottom:377px;" class="text-center fs-4">No Booking Found.</p>
                    @endif

			      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
			    </div>
			  </div>
			</div>
		</div>
    </div>

@endsection