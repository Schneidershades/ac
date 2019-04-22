@extends('layouts.dashboard')

@section('content')

<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
	<div class="col-sm-9">
		<h4 class="page-title">User Profile</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
			<li class="breadcrumb-item"><a href="javaScript:void();">Pages</a></li>
			<li class="breadcrumb-item active" aria-current="page">User Profile</li>
		</ol>
	</div>
	<div class="col-sm-3">
		<div class="btn-group float-sm-right">
			<button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
			<button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
				<span class="caret"></span>
			</button>
			<div class="dropdown-menu">
				<a href="javaScript:void();" class="dropdown-item">Action</a>
				<a href="javaScript:void();" class="dropdown-item">Another action</a>
				<a href="javaScript:void();" class="dropdown-item">Something else here</a>
				<div class="dropdown-divider"></div>
				<a href="javaScript:void();" class="dropdown-item">Separated link</a>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumb-->


<div class="row">
	<div class="col-lg-4">
		<div class="profile-card-3">
			<div class="card">
				<div class="user-fullimage">
					<img src="{{URL::to('assets/images/avatars/avatar-22.png')}}" alt="user avatar" class="card-img-top">
					<div class="details">
						<h5 class="mb-1 text-white ml-3">{{auth()->user()->name}}</h5>
						<h6 class="text-white ml-3">{{auth()->user()->name}}</h6>
					</div>
				</div>
				<div class="card-body text-center">
					<p>Lorem Ipsum available, but the majority have suffered</p>
					<div class="row">

						<div class="col p-2">
							<h5 class="mb-0 line-height-5">{{auth()->user()->balance}}</h5>
							<small class="mb-0 font-weight-bold">Wallet</small>
						</div>
						<div class="col p-2">
							<h5 class="mb-0 line-height-5">{{auth()->user()->adverts->count()}}</h5>
							<small class="mb-0 font-weight-bold">Adverts</small>
						</div>
						<div class="col p-2">
							<h5 class="mb-0 line-height-5">{{auth()->user()->package_id}}</h5>
							<small class="mb-0 font-weight-bold">Package</small>
						</div>
					</div>

					<div class="list-inline mt-2">
						@if(auth()->user()->facebook != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-behance waves-effect waves-light"><i class="fa fa-facebook"></i></a>
						@elseif(auth()->user()->twitter  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-dribbble waves-effect waves-light"><i class="fa fa-twitter"></i></a>
						@elseif(auth()->user()->instagram  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-instagram"></i></a>
						@elseif(auth()->user()->linkedin  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-linkedin"></i></a>
						@elseif(auth()->user()->googleplus  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-googleplus"></i></a>
						@elseif(auth()->user()->pinterest  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-pinterest"></i></a>
						@elseif(auth()->user()->whatsapp  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-whatsapp"></i></a>
						@elseif(auth()->user()->youtube  != NULL)
						<a href="javascript:void()" class="list-inline-item btn-social btn-social-circle btn-github waves-effect waves-light"><i class="fa fa-youtube"></i></a>
						@endif
					</div>
					<hr>
					<a href="javascript:void():" class="btn btn-primary shadow-primary btn-sm btn-round waves-effect waves-light m-1">Hire Me</a>
					<a href="javascript:void():" class="btn btn-outline-primary btn-sm btn-round waves-effect waves-light m-1">Profile</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
					<li class="nav-item">
						<a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
					</li>
					<li class="nav-item">
	                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Referrals</span></a>
	                </li>
					<li class="nav-item">
						<a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit Profile</span></a>
					</li>
				</ul>
				<div class="tab-content p-3">
					<div class="tab-pane active" id="profile">
						<h5 class="mb-3">User Profile</h5>
						<div class="row">
							<div class="col-md-6">
								@if(auth()->user()->about != NULL)
								<h6>About</h6>
								<p>
									{{auth()->user()->about}}
								</p>
								@elseif(auth()->user()->official_email != NULL)
								<h6>Official Email Address</h6>
								<p>
									{{auth()->user()->official_email}}
								</p>
								@elseif(auth()->user()->facebook != NULL)
								<h6>Registered Email Address</h6>
								<p>
									{{auth()->user()->email}}
								</p>
								@elseif(auth()->user()->facebook != NULL)
								<h6>Primary Contact</h6>
								<p>
									{{auth()->user()->phone1}}
								</p>
								@elseif(auth()->user()->facebook != NULL)
								<h6>Alternate Contact</h6>
								<p>
									{{auth()->user()->phone2}}
								</p>
								@endif

								<!-- <h6>Hobbies</h6>
								<p>
									Indie music, skiing and hiking. I love the great outdoors.
								</p> -->
							</div>
							<div class="col-md-6">
								<!-- <h6>Recent badges</h6>
								<a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
								<a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
								<hr>
								<span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
								<span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
								<span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span> -->
							</div>
						</div>
						<!--/row-->
					</div>
					<div class="tab-pane" id="messages">
						<!-- <div class="alert alert-info alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<div class="alert-icon">
								<i class="icon-info"></i>
							</div>
							<div class="alert-message">
								<span><strong>Info!</strong> Lorem Ipsum is simply dummy text.</span>
							</div>
						</div> -->
						<table class="table table-hover table-striped">
							<tbody> 
								@if(auth()->user()->referrals->count() > 0)
									@foreach(auth()->user()->referrals as $referral)                                   
									<tr>

										<td>
											{{$referral->user()->name}}
										</td>
									</tr>
									@endforeach
								@else
									<span><strong>Info!</strong> you have no referral at the moment kindly spread the word and your lik about the platform.</span>
								@endif
							</tbody> 
						</table>
					</div>
					<div class="tab-pane" id="edit">
						<form action="" method="post">
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Full name</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="name" value="{{auth()->user()->name}}" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Official Email</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="official_email" value="{{auth()->user()->official_email}}" required>
								</div>
							</div>
							<div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Primary Contact</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="phone1" value="{{auth()->user()->phone1}}" placeholder="Primary Contact"required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Primary Contact</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="phone2" value="{{auth()->user()->phone2}}" placeholder="Alternate Contact"required>
	                            </div>
	                        </div>
							<div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Website</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="website" value="{{auth()->user()->Website}}" placeholder="Website" required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Facebook Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="facebook" value="{{auth()->user()->facebook}}" placeholder="Alternate Contact"required>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Linkedin Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="website" value="{{auth()->user()->linkedin}}" placeholder="Linkedin Username" required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Twitter Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="twitter" value="{{auth()->user()->twitter}}" placeholder="Twitter Contact"required>
	                            </div>
	                        </div>
							
							<div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Instagram Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="instagram" value="{{auth()->user()->instagram}}" placeholder="Instagram Username" required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Pinterest Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="pinterest" value="{{auth()->user()->pinterest}}" placeholder="Pinterest Username"required>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Googleplus Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="googleplus" value="{{auth()->user()->googleplus}}" placeholder="Googleplus Username" required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Twitter Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="twitter" value="{{auth()->user()->twitter}}" placeholder="Twitter Contact"required>
	                            </div>
	                        </div>

	                        <div class="form-group row">
	                            <label class="col-lg-3 col-form-label form-control-label">Whatsapp Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="whatsapp" value="{{auth()->user()->whatsapp}}" placeholder="Whatsapp Username" required>
	                            </div>

	                            <label class="col-lg-3 col-form-label form-control-label">Youtube Username</label>
	                            <div class="col-lg-3">
	                                <input class="form-control" type="text" name="youtube" value="{{auth()->user()->youtube}}" placeholder="Youtube Contact"required>
	                            </div>
	                        </div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Change profile</label>
								<div class="col-lg-9">
									<input class="form-control" name="image" type="file">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Website</label>
								<div class="col-lg-9">
									<input class="form-control" type="url" value="">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Address</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" name="address" value="{{auth()->user()->address}}" placeholder="Street">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"></label>
								<div class="col-lg-6">
									<input class="form-control" type="text" name="city_id" value="{{auth()->user()->city_id}}" placeholder="City">
								</div>
								<div class="col-lg-3">
									<input class="form-control" type="text" value="{{auth()->user()->city_id}}" name="state_id" placeholder="State">
								</div>
								<div class="col-lg-3">
									<input class="form-control" type="text" value="{{auth()->user()->postal_code}}" name="postal_code" placeholder="Postal Code">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">What has been your experience with the platform</label>
								<div class="col-lg-9">
									<input class="form-control" type="url" value="">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Username</label>
								<div class="col-lg-9">
									<input class="form-control" type="text" value="jhonsanmark">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Password</label>
								<div class="col-lg-9">
									<input class="form-control" type="password" value="11111122333">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
								<div class="col-lg-9">
									<input class="form-control" type="password" value="11111122333">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label"></label>
								<div class="col-lg-9">
									<input type="reset" class="btn btn-secondary" value="Cancel">
									<input type="button" class="btn btn-primary" value="Save Changes">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection