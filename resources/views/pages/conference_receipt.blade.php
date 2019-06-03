@extends('layouts.web')

@section('content')

@include('partials._search')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3> Event Payment for {{$event->title}}</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <span class="active">Event Payments for {{$transaction->user->name}}</span>
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
                             <h3>Event Payment details</h3>
                            <div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Here your payment details for event</div>
                            <hr>
                            <form class="color-form" method="POST" action="{{route('pay')}}">
                                @csrf
                                <input type="hidden" name="amount" value="{{$transaction->eventPackage->amount }}" /> <!-- Replace the value with your transaction amount -->
                                <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
                                <input type="hidden" name="description" value="{{$transaction->eventPackage->event_package_description}}" /> <!-- Replace the value with your transaction description -->
                                <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
                                <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
                                <input type="hidden" name="email" value="{{$transaction->user->email}}" /> <!-- Replace the value with your customer email -->
                                <input type="hidden" name="firstname" value="{{$transaction->user->email}}" /> <!-- Replace the value with your customer firstname -->
                                <input type="hidden" name="lastname" value="{{$transaction->user->email}}" /> <!-- Replace the value with your customer lastname -->
                                <input type="hidden" name="phonenumber" value="{{$transaction->user->phone1}}" /> <!-- Replace the value with your customer phonenumber -->

                                <input type="hidden" name="ref" value="{{$transaction->identifier}}" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. --> 
                             
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="input-13">Name</label><br>
                                        <b>{{$transaction->user->name}}</b>
                                    </div>

                                            

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Email</label><br>
                                        <b>{{$transaction->user->email ? $transaction->user->email :''}}</b>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Phone Number</label><br>
                                        <b>{{$transaction->user->phone1 ?  $transaction->user->phone1 :''}}</b>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-13">Name of Organization</label><br>
                                        <b>{{$transaction->user->organization ? $transaction->user->organization :''}}</b>
                                    </div>


                                    <div class="form-group col-md-4">
                                        <label for="input-9">How did you hear about us?</label><br>
                                        <b>{{$transaction->user->how_did_you_hear_about_ac ? $transaction->user->how_did_you_hear_about_ac :''}}</b>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="input-9">Reference No</label><br>
                                        <b>{{$transaction->identifier ? $transaction->identifier :''}}</b>
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="input-9">Status</label><br>
                                        @if($transaction->status == 'pending')
                                        <button class="btn btn-warning">{{$transaction->status ? $transaction->status : ''}}</button>
                                        @elseif($transaction->status == 'success')
                                        <button class="btn btn-success">{{$transaction->status ? $transaction->status : ''}}</button>
                                        @endif
                                    </div>


        
                                     
                                </div>

                                <div class="form-group row col-md-12">
                                    <!-- <label for="input-9">Registration Package</label><br> -->
                                    <h4>{{$transaction->eventPackage->event_package_description}} - N{{$transaction->eventPackage->amount}}</h4>
                                </div>

                                @if($transaction->status != 'success')
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Make Payments</button>
                                        </div>
                                    </div> 
                                @endif 
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