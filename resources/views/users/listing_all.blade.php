@extends('layouts.dashboard')

@section('stylesheets')
<link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}"/>
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/dropzone.css')}}"/> -->
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/basic.css')}}"/> -->
@endsection

@section('content')
<!-- Breadcrumb-->
 <div class="row pt-2 pb-2">
    <div class="col-sm-9">
	    <h4 class="page-title">New Listing</h4>
	    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Achievers hub</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">New Listing</li>
     </ol>
    </div>
 	<div class="col-sm-3">
	   <div class="btn-group float-sm-right">
	    <a href="{{route('home')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
	  </div>
	</div>
</div>
<!-- End Breadcrumb-->

<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Choose your Company Name</div>
				<hr>

				<form class="color-form" method="POST" action="{{route('advert.store')}}" enctype="multipart/form-data">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-4" >
							<label for="input-9">Category</label>
							<input type="text" class="form-control form-control-rounded" id="input-9" name="category_id" required/>
						</div>

						<div class="form-group col-md-4">
							<label for="input-9">Subcategory</label>
							<input type="text" class="form-control form-control-rounded" id="input-9" name="sub_category_id" required/>
						</div>

						<div class="form-group col-md-4">
							<label for="input-9">Type</label>
							<input type="text" class="form-control form-control-rounded" id="input-9" name="type" required/>
						</div>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="input-13"> Title of Advert</label>
							<input type="text" class="form-control form-control-rounded" id="input-9" name="title" required/>
						</div>

						<div class="form-group col-md-12">
							<label for="input-13"> Description</label>
							<textarea name="description" id="" class="form-control form-control-rounded" cols="30" rows="10"></textarea>
						</div>

						<div class="form-group col-md-12">
							<label for="input-13"> Price/Rate</label><br>
							<input type="radio" id="input-9" name="price" value="yes" required/>Yes
							<input type="radio" id="input-9" name="price" value="no" required/>No
						</div>

						<!-- <div class="form-group col-md-12">
							<label for="input-13">Contact</label>
							<input type="hidden" class="form-control form-control-rounded" id="input-9" name="title" value="{{auth()->user()->phone1}} , {{auth()->user()->phone2}}" required/>
						</div> -->

						<div class="form-group col-md-12">
							<label for="input-13"> Address</label>
							<textarea name="address" id="" class="form-control form-control-rounded" cols="30" rows="5">
								{{auth()->user()->address}}
							</textarea>
						</div>
					</div><br>

					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Add listing</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>



@endsection

@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
<script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<!-- <script src="{{URL::to('assets/js/dropzone.js')}}"></script> -->


@endsection