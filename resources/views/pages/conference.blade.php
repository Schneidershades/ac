@extends('layouts.web')

@section('content')

@include('partials._search')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>{{$event->title}}</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <span class="active">{{$event->excerpt}}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- page-banner ends-->


<!-- features start-->
<section class="features sp-100-70 bg-w">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12 mb-30">
               
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                             <h3>Registration Form</h3>
                            <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Please Fill the information below</div>
                            <hr>
                            <form class="color-form" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="input-13">Name</label>
                                        <input type="text" name="full_name" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-9">Registration Package</label>
                                        <select name="package_id" id="" class="form-control ">
                                            <option value="">---Select Registration Package --- </option>
                                            @foreach($event->eventPackages as $package)
                                            <option value="{{$package->id}}">{{$package->event_package_description}} - N{{$package->amount}}</option>
                                            @endforeach
                                        </select>
                                    </div>           

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Email</label>
                                        <input type="email" name="email" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Phone Number</label>
                                        <input type="text" name="phone" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Name of Organization</label>
                                        <input type="text" name="organization" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-9">What Industry are you</label>
                                        <select name="category_id" id="" class="form-control ">
                                            <option value="">---Select Industry --- </option>
                                            @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="input-9">Would you love to be an achievers confluence member?</label>
                                        <select name="package_id" id="" class="form-control ">
                                            <option value="">---Select Membership --- </option>
                                            <option value="yes">Yes </option>
                                            <option value="no">No </option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="input-9">How did you hear about us?</label>
                                        <select name="package_id" id="" class="form-control ">
                                            <option value="">---Select Survey --- </option>
                                            <option value="online-advert">Online Advert </option>
                                            <option value="radio-tv">Radio/Tv Advert </option>
                                            <option value="newspaper">Newspaper </option>
                                            <option value="flier">Flier</option>
                                            <option value="individual">Individual</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- features end -->


@include('partials._actionmark')

@endsection


@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
<script src="{{URL::to('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{URL::to('assets/js/dropzone.js')}}"></script>
<script src="{{URL::to('assets/js/dropify.js')}}"></script>
<!-- <script src="{{URL::to('https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js')}}"></script> -->
<script>

    // $('.dropify').dropify();
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