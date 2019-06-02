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

<!-- about start-->
<!-- <div class="about-1 o-hide bg-w sp-100">


    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-lg-0 mt-5">
                <div class="abt-img">
                    <img src="{{URL::to('assets-web/img/home/ad.png')}}" alt="mockup">
                </div>{!!$event->description!!}
            </div>
        </div>
    </div>
</div> -->
<!-- about end-->

<!-- counter starts -->
<!-- <section class="counters sp-100-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-list-1"></i>
                    </div>
                    <h2 class="count c-theme" data-count="36">0</h2>
                    <p>Attendees</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-team"></i>
                    </div>
                    <h2 class="count c-theme" data-count="13">0</h2>
                    <p>Exhibitors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <h2 class="count c-theme" data-count="6">0</h2>
                    <p>Speakers</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-appointment"></i>
                    </div>
                    <h2 class="count c-theme" data-count="1">0</h2>
                    <p>Day</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- counter ends -->

<!-- features start-->
<section class="features sp-100-70 bg-w">
    <div class="container">
        <!-- <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        Event Packages
                    </h3>
                    <svg class="title-sep">
                        <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                        />
                    </svg>
                    <p>Here Are the Event Payment Packages available on sale </p>
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
            @foreach($event->eventPackages as $package)
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-list-1"></i>
                    </div>
                    <h5>{{$package->amount}}</h5>
                    <p>{{$package->event_package_description}}
                    </p>
                </div>
            </div>
            @endforeach
        </div> -->

        <div class="row">
            <div class="col-lg-12 col-md-6 col-12 mb-30">
                <h3>Registration Form</h3>
                <div class="col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Please Fill the information below</div>
                            <hr>


                            <form class="color-form" method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input-13">Name of Attendee</label>
                                        <input type="text" name="full_name" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="input-9">Category</label>
                                        <select name="category_id" id="" class="form-control ">
                                            @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for="input-9">Registration Package</label>
                                        <select name="package_id" id="" class="form-control ">
                                            <option value="">---Select Registration Package --- </option>
                                            @foreach($event->eventPackages as $package)
                                            <option value="{{$package->id}}">{{$package->event_package_description}} - N{{$package->amount}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="input-13">Email</label>
                                        <input type="email" name="email" class="form-control form-control-rounded" required/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="input-9">Would you love to be an achievers confluence member?</label>
                                        <select name="package_id" id="" class="form-control ">
                                            <option value="">---Select Membership --- </option>
                                            <option value="yes">Yes </option>
                                            <option value="no">No </option>
                                        </select>
                                    </div>



                                </div>

                               <!--  <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Address</div>
                                <hr>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input-13">Business Address</label>
                                        <textarea name="business_address" id="" cols="10" rows="3" class="form-control form-control-rounded" required></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="input-13">Branch Address (if any)</label>
                                        <textarea name="business_branch" id="" cols="10" rows="3" class="form-control form-control-rounded" required></textarea>
                                    </div>
                                </div> -->

                                <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> PARTICULARS OF PARTNERS/PROPRIETORS</div>
                                <hr>

                                <div class='repeater'>
                                    
                                    <div data-repeater-list="business_partners_details">
                                        <div data-repeater-item class="form-group row">
                                            <div class="col-md-12">
                                                <div class="card-title"><i class="fa fa-address-book-o"></i> NEW PARTNER</div><br>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="input-13">Full Name</label>
                                                <input type="text" name="full_name" class="form-control form-control-rounded" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="input-13">Email</label>
                                                <input type="email" name="email" class="form-control form-control-rounded" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="input-13">ID. Type</label>
                                                <input type="text" name="identity_type" class="form-control form-control-rounded" required/>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="input-13">ID. No</label>
                                                <input type="text" name="identity_no" class="form-control form-control-rounded" required/>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">Phone number</label>
                                                <input type="text" name="phone_number" class="form-control form-control-rounded" required/>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">Gender</label>
                                                <select name="gender" class="form-control form-control-rounded" required>
                                                    <option value="">---Select Gender---</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">Date of Birth</label>
                                                <input type="date" id="default-datepicker" name="dob" class="form-control form-control-rounded" required/>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">Nationality</label>
                                                <input type="text" name="nationality"  class="form-control form-control-rounded" required/>
                                            </div>
                
                                            <div class="form-group col-md-6">
                                                <label for="input-13">Address</label>
                                                <textarea name="address" id="" cols="10" rows="1" class="form-control form-control-rounded" required></textarea>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">City</label>
                                                <input type="text" name="city" class="form-control form-control-rounded" required/>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">State</label>
                                                <input type="text" name="state" class="form-control form-control-rounded" required/>
                                            </div>

                                            <div class="col-md-3">
                                                <label for="input-13">Country</label>
                                                <input type="text" name="country" class="form-control form-control-rounded" required/>
                                            </div>



                                            <div class="col-md-12">
                                                <hr>
                                                <div><i>You are meant to upload documents in png/jpg</i></div><br>
                                            </div>  
                                            
                                            <div class="col-md-4">          
                                                <label for="input-13">Upload ID</label>
                                                <input type="file" name="upload_id"  class="form-control form-control-rounded"/>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="input-13">Signature</label>
                                                <input type="file" name="signature" class="form-control form-control-rounded"/>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <button data-repeater-delete type="button" class="badge badge-pill badge-danger m-1" >-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
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