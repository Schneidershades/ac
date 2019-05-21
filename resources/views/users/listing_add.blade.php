@extends('layouts.dashboard')

@section('stylesheets')
<link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}"/>
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/dropzone.css')}}"/> -->
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/basic.css')}}"/> -->
  <link href="{{ URL::to('assets/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" type="text/css" rel="stylesheet" />
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
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Add Listing</div>
				<hr>

				<form class="color-form" method="POST" action="{{route('listings.store')}}" enctype="multipart/form-data">
					@csrf
					<!-- {{$listing->identifier}} -->
					<div class="form-row">
						<div class="form-group col-md-4" >
							<label for="input-9">Category</label>
							<select name="category_id" id="" class="form-control ">
								@foreach($categories as $cat)
								<option value="{{$cat->id}}">{{$cat->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group col-md-8">
							<label for="input-13"> Title of Advert</label>
							<input type="text" class="form-control " id="input-9" name="title" required/>
						</div>

						<!-- <div class="form-group col-md-4">
							<label for="input-9">Subcategory</label>
							<input type="text" class="form-control" id="input-9" name="sub_category_id" required/>
						</div>

						<div class="form-group col-md-4">
							<label for="input-9">Type</label>
							<input type="text" class="form-control" id="input-9" name="type" required/>
						</div> -->
					</div>
					
					<div class="form-row">

						<div class="form-group col-md-12">
							<label for="input-13"> Is the Advert a Sale of service or product</label><br>

							<select name="" id="" class="form-control" required onchange="
						        if(this.value=='yes'){ 
						          $('#amount_price').fadeIn(); }else{ $('#amount_price').fadeOut(); 

						        }" >
					        	<option value="">the Advert a Sale of service or product </option>
					        	<option value="yes">Yes</option>
					        	<option value="no">No</option>
					        </select>
						</div>
					</div>
					<div class="form-row"  id="amount_price" style="display:none">
						<div class="form-group col-md-6">
							<label for="input-13"> Cost Price of service/product</label>
							<input type="number" class="form-control " id="input-9" name="cost_price" required min="0"/>
						</div>

						<div class="form-group col-md-6">
							<label for="input-13"> Selling Price of service/product</label>
							<input type="number" class="form-control " id="input-9" name="selling_price" required min="0"/>
						</div>
					</div>


					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="input-13"> Description</label>
							<textarea name="description" id="" class="form-control " cols="30" rows="10"></textarea>
						</div>
						<!-- <div class="form-group col-md-12">
							<div id="file" class="dropzone" id="dropzone">
							</div>
						</div> -->

						<div class="form-group col-md-3">
							<label for="input-13"> Image</label><br>
							<input type="file" class="dropify" name="featured" />
						</div>

						<div class="form-group col-md-3">
							<label for="input-13"> Image</label><br>
							<input type="file" class="dropify" name="featured2" />
						</div>

						<div class="form-group col-md-3">
							<label for="input-13"> Image</label><br>
							<input type="file" class="dropify" name="featured3" />
						</div>

						<div class="form-group col-md-3">
							<label for="input-13"> Image</label><br>
							<input type="file" class="dropify" name="featured3" />
						</div>

						<div class="form-group col-md-3">
							<label for="input-13"> Contact Person</label>
							<input type="text" class="form-control " id="input-9" name="contact" required/>
						</div>

						<!-- <div class="form-group col-md-3">
							<label for="input-13"> State</label>
							<select name="state_id" id="" class="form-control ">
								@foreach($states as $state)
								<option value="{{$state->id}}">{{$state->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-3">
							<label for="input-13"> State</label>
							<select name="state_id" id="" class="form-control ">
								@foreach($states as $state)
								<option value="{{$state->id}}">{{$state->name}}</option>
								@endforeach
							</select>
						</div>
						 -->

						<div class="form-group col-md-12">
							<label for="input-13"> Address</label>
							<textarea name="address" id="" class="form-control " cols="30" rows="5">
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

              </form>
			</div>
		</div>
	</div>
</div>



@endsection

@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
<script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js')}}"></script>
<!-- <script src="{{URL::to('assets/js/dropzone.js')}}"></script> -->

 <!-- <script src="{{URL::to('assets/plugins/dropzone/js/dropzone.js')}}"></script> -->

<<script>
	 $('.dropify').dropify();
	// Dropzone.autoDiscover = false;
 //    var drop = new Dropzone('#file', {
 //        createImageThumbnails: true,
 //        addRemoveLinks: true,
 //        url: '{{route('upload.store', $listing)}}',
 //        headers:{
 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 //        }
 //    });

 //    @foreach($listing->uploads as $upload)
 //      drop.emit('addedfile', {
 //          id: '{{ $upload->id }}',
 //          name: '{{ $upload->filename }}',
 //          size: '{{ $upload->size }}',
 //      });
 //      @endforeach

 //      // Pull id from Event
 //      drop.on('success', function(file, response){
 //      	console.log(response.id);
 //        file.id = response.id;
 //      });

 //      // Event to remove file from front-end
 //      drop.on('removedfile', function(file){
 //      	console.log(file);
 //        $.get('{{ $listing->identifier }}/upload/' + file.id).catch(function(error){
 //         console.log(error);
 //        })
 //      });

</script>
@endsection