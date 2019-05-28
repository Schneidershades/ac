@extends('layouts.dashboard')

@section('stylesheets')
<link rel="stylesheet" href="{{ URL::to('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}"/>
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/dropzone.css')}}"/> -->
<!-- <link rel="stylesheet" href="{{ URL::to('assets/css/basic.css')}}"/> -->
  <link href="{{ URL::to('assets/plugins/dropzone/css/dropzone.css')}}" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="{{URL::to('assets/plugins/summernote/dist/summernote-bs4.css')}}"/>
@endsection

@section('content')
<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
  <div class="col-sm-9">
    <h4 class="page-title">Show Event </h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-discount"><a href="javaScript:void();">Achievers Hub</a></li>
      <li class="breadcrumb-discount"><a href="javaScript:void();">Dashboard</a></li>
      <li class="breadcrumb-discount active" aria-current="page">Show Event</li>
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
        <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Show your Event</div>
        <hr>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="input-13">Event Title</label><br>{{$event->title}}
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">Event Short Description</label><br>
              {{$event->excerpt}}
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">From</label><br>
              {{$event->from}}
            </div>

            <div class="form-group col-md-6">
              <label for="input-13">to</label><br>
              {{$event->to}}
            </div>

            <div class="form-group col-md-12">
              <label for="input-13">Venue</label><br>
              {{$event->venue}}
            </div>

            <div class="form-group col-md-12">
              <label for="input-13">Full Description</label>
              <br>{!! $event->description !!}
            </div>
            
            @if($event->image1)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image1)}}" alt="{{$event->image1}}">
            </div>
            @endif
            
            @if($event->image2)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image2)}}" alt="{{$event->image1}}">
            </div>
            @endif
            
            @if($event->image3)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image3)}}" alt="{{$event->image3}}">
            </div>
             @endif
            
            @if($event->image4)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image4)}}" alt="{{$event->image1}}">
            </div>
             @endif
            
            @if($event->image5)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image5)}}" alt="{{$event->image5}}">
            </div>
             @endif
            
            @if($event->image6)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image6)}}" alt="{{$event->image6}}">
            </div>
             @endif
            
            @if($event->image7)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image7)}}" alt="{{$event->image7}}">
            </div>
             @endif
            
            @if($event->image8)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image8)}}" alt="{{$event->image8}}">
            </div>
             @endif
            
            @if($event->image9)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image9)}}" alt="{{$event->image9}}">
            </div>
             @endif
            
            @if($event->image10)
            <div class="form-group col-md-3">
              <label for="input-13"> Image</label><br>
              <img src="{{URL::to($event->image10)}}" alt="{{$event->image10}}">
            </div>
             @endif
            

          </div><br><br>

          @foreach($event->eventPackages as $package)
          <div class="form-group row">
            <div class="col-md-12">
              <div class="card-title"><i class="fa fa-address-book-o"></i> EVENT PACKAGE</div><br>
            </div>
            <div class="col-md-12">
              <label for="input-13">Event Package Description</label><br>{{$package->event_package_description}}
            </div>
            <div class="col-md-12">
              <label for="input-13">Amount</label>{{$package->amount}}
            </div>
          </div>
          @endforeach
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

<script src="{{URL::to('assets/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
  <script>
   $('#summernoteEditor').summernote({
            height: 400,
            tabsize: 2
        });
  </script>
@endsection