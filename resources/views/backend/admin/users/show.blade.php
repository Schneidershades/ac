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
                  <i class="icon-basket-loaded text-white"></i>
               </div>
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
                  <i class="icon-wallet text-white"></i>
               </div>
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
                  <br>
                  <div class="user-fullimage">
                     <img src="{{URL::to('assets/images/avatars/avatar-22.png')}}" alt="user avatar" style="width:300px; height:200px" class="card-img-top">
                     <div class="details">
                        <h5 class="mb-1 text-white ml-3">{{$user->name}}</h5>
                        <h6 class="text-white ml-3">{{$user->name}}</h6>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <label for="input-9">Full Name</label><br>
                  <b>{{$user->name ? $user->name : 'Not Available'}}</b>
               </div>
               <div class="col-md-3">
                  <label for="input-9">Email</label><br>
                  <b>{{$user->email  ? $user->email : 'Not Available'}}</b>
               </div>
               <div class="col-md-3">
                  <label for="input-9">Phone Number</label><br>
                  {{$user->phone1  ? $user->phone1 : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-9">Package</label><br>
                  <span class="badge badge-danger m-1">{{$user->package->name  ? $user->package->name : 'Not Available'}}</span>
               </div>
               <div class="col-md-3">
                  <label for="input-13">Official Email</label><br>{{$user->phone2  ? $user->phone2 : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Website</label><br>
                  {{$user->Website  ? $user->website : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Facebook Username</label><br>
                  {{$user->facebook  ? $user->facebook : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Linkedin Username</label><br>
                  {{$user->linkedin  ? $user->linkedin : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Twitter Username</label><br>{{$user->twitter  ? $user->twitter : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Instagram Username</label><br>{{$user->instagram  ? $user->instagram : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Pinterest Username</label><br>{{$user->pinterest  ? $user->pinterest : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Googleplus Username</label><br>{{$user->googleplus  ? $user->googleplus : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Whatsapp number</label><br>{{$user->whatsapp  ? $user->whatsapp : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Address</label><br>{{$user->address  ? $user->address : 'Not Available'}}
               </div>
               <div class="col-md-3">
                  <label for="input-13">Postal Code</label><br>{{$user->postal_code  ? $user->postal_code : 'Not Available'}}
               </div>
               <div class="col-md-6">
                  <label for="input-13">Biography</label><br>
                  {{$user->about  ? $user->about : 'Not Available'}}
               </div>
               <div class="col-md-6"><br>
                  <label for="input-13">Tell us about your journey with achievers confluence</label><br>
                  {{$user->testimonials  ? $user->testimonial : 'Not Available'}}
               </div>
            </div>
         </div>
         <br><br>   
      </div>
   </div>
</div>
@endsection