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
    <h4 class="page-title">Update  Events </h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-discount"><a href="javaScript:void();">Achievers Hub</a></li>
      <li class="breadcrumb-discount"><a href="javaScript:void();">Dashboard</a></li>
      <li class="breadcrumb-discount active" aria-current="page">Update Events</li>
    </ol>
  </div>
  <div class="col-sm-3">
   <div class="btn-group float-sm-right">
    <a href="{{route('admin-events.create')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Create Events</button></a>
  </div>
</div>
</div>
<!-- End Breadcrumb-->
@include('backend.partials._errors')

<div class="row">
  <div class="col-lg-12 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Edit your Event</div>
        <hr>

        <form class="color-form" method="POST" action="{{route('admin-events.update')}}" enctype="multipart/form-data">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="input-13">Event Name</label>
              <input type="text" name="name" class="form-control " maxlength="150" required value="{{$event->name}}">
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">Event Short Description</label>
              <input type="text" name="excerpt" class="form-control " maxlength="150" required value="{{$event->excerpt}}">
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">From</label>
              <input type="date" name="from" class="form-control " maxlength="150" required value="{{$event->from}}">
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">to</label>
              <input type="date" name="to" class="form-control " maxlength="150" required value="{{$event->to}}">
            </div>

            <div class="form-group col-md-12">
              <label for="input-13">Venue</label>
              <textarea name="venue" id="" cols="20" rows="4" class="form-control ">{{$event->venue}}</textarea>
            </div>

            <div class="form-group col-md-12">
              <label for="input-13">Full Description</label>
              <textarea name="description" id="" cols="20" rows="4" class="form-control ">{{$event->description}}</textarea>
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image1" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image2" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image3" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image4" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image5" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image6" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image7" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image8" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image9" />
            </div>

            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <input type="file" class="dropify" name="image10" />
            </div>

          </div><br><br>

          <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i>Create Event Package</div>
          <hr>

          <div class='repeater'>
            
            <!-- Make sure the repeater list value is different from the first repeater  -->
            <div data-repeater-list="event_package_details">
              @foreach($event->eventPackage as $package)
              <div data-repeater-item class="form-group row">
                <div class="col-md-12">
                  <div class="card-title"><i class="fa fa-address-book-o"></i> NEW EVENT PACKAGE</div><br>
                </div>
                <div class="col-md-12">
                  <label for="input-13">Event Package Description</label>
                  <textarea name="event_package_description" id="" cols="20" rows="4" class="form-control" value="{{$package->event_package_description}}"></textarea>
                </div>
                <div class="col-md-12">
                  <label for="input-13">Amount</label>
                  <input type="email" name="email" class="form-control " required value="{{$package->amount}}"/>
                </div>

                <div class="form-group col-md-12">
                  <button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
                </div>
              </div>
              @endforeach
            </div>
            <div class="text-right">
                <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary bg-white text-info shadow px-5"><i class="icon-lock"></i> Update Event</button>
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
<script src="{{URL::to('assets/js/dropzone.js')}}"></script>
<script src="{{URL::to('assets/js/dropify.js')}}"></script>
<!-- <script src="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js')}}"></script> -->
<script>

  $('.dropify').dropify();
  // 
  
  $(document).ready(function () {
    'use strict';

  
    

    $('.repeater').repeater({
      isFirstItemUndeletable: true,
      defaultValues: {
        'textarea-input': 'foo',
        'text-input': 'bar',
        'select-input': 'B',
        'checkbox-input': ['A', 'B'],
        'radio-input': 'B'
      },
      show: function () {
        $(this).slideDown();
      },
      hide: function (deleteElement) {
        if(confirm('Are you sure you want to delete this element?')) {
          $(this).slideUp(deleteElement);
        }
      },
      ready: function (setIndexes) {

      }
    });


    $('.dropify').dropify();
    


  });
</script>

@endsection