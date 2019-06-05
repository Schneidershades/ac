@extends('layouts.dashboard')

@section('content')
	@include('backend.partials._errors')
	<div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-info border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
              <h5 class="text-info">{{ $user->walletTransactions()->count() }}</h5>
                <span>Total Orders</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="icon-basket-loaded text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h5 class="text-danger">
                  N{{$user->walletTransactions()->sum('amount')}}
                </h5>
                <span>Total Order</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div>
	<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> {{$user->name}}</div>
				<hr>
				<div class="form-row">
					<div class="col-md-3">
	              		<label for="input-9">Full Name</label><br>
	              		<b>{{$user->name}}</b>
					</div>


					<div class="col-md-3">
	              		<label for="input-9">Email</label><br>
	              		<b>{{$user->email}}</b>
					</div>


					<div class="col-md-3">
	              		<label for="input-9">User Status</label><br>
	              		<span class="badge badge-danger m-1">{{$user->active}}</span>
					</div>

					<div class="col-md-3">
	              		<label for="input-9">Package</label><br>
	              		<span class="badge badge-danger m-1">{{$user->package->name}}</span>
					</div>
				</div><br><br>		


				
			</div>
		</div>
	</div>
</div>

@endsection






@section('scripts')

@include('backend.partials._datatablesjs')

@endsection


@section('stylesheets')

@include('backend.partials._datatablescss')
@endsection
