@extends('layouts.dashboard')

@section('content')
	@include('backend.partials._errors')

	<div class="row">
	<div class="col-lg-12 mx-auto">
		<div class="card">
			<div class="card-body">
				<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> wt Transaction Details</div>
				<hr>
				<div class="form-row">
					

					<div class="col-md-3">
	              		<label for="input-9">ID</label><br>
	              		<b>{{$transaction->identifier}}</b>
					</div>

					<div class="col-sm-3">
                    	<label class="input-9">Title</label><br>
                        {{$wt->title  ? $wt->title : 'Not Available'}}
                    </div>

                    <div class="col-sm-3">
                    	<label class="input-9">Remarks</label><br>
                        {{$wt->remarks  ? $wt->remarks : 'Not Available'}}
                    </div>

                    <div class="col-sm-3">
                    	<label class="input-9">Type</label><br>
                        {{$wt->transaction_type  ? $wt->transaction_type : 'Not Available'}}
                    </div>
					
					<div class="col-sm-3">
                    	<label class="input-9">Amount</label><br>
                        {{$wt->amount  ? $wt->amount : 'Not Available'}}
                    </div>
					
					<div class="col-sm-3">
                    	<label class="input-9">Amount Paid</label><br>
                        {{$wt->amount_paid  ? $wt->amount_paid : 'Not Available'}}
                    </div>

					<div class="col-md-3">
	              		<label for="input-9">Service Fee</label><br>
	              		<b>{{$transaction->service_charge ? $transaction->service_charge : "N0.00"}}</b>
					</div>

					@if($transaction->status == 'pending')
					<div class="col-md-3">
		              	<form method="POST" action="{{ route('pay') }}" id="paymentForm">
	                        @csrf
	                        <input type="hidden" name="amount" value="{{$wt->amount_paid }}" /> <!-- Replace the value with your transaction amount -->
	                        <input type="hidden" name="payment_method" value="both" /> <!-- Can be card, account, both -->
	                        <input type="hidden" name="description" value="{{$wt->title }}" /> <!-- Replace the value with your transaction description -->
	                        <input type="hidden" name="country" value="NG" /> <!-- Replace the value with your transaction country -->
	                        <input type="hidden" name="currency" value="NGN" /> <!-- Replace the value with your transaction currency -->
	                        <input type="hidden" name="email" value="{{Auth::user()->email}}" /> <!-- Replace the value with your customer email -->
	                        <input type="hidden" name="firstname" value="{{Auth::user()->email}}" /> <!-- Replace the value with your customer firstname -->
	                        <input type="hidden" name="lastname" value="{{Auth::user()->email}}" /> <!-- Replace the value with your customer lastname -->
	                        <input type="hidden" name="phonenumber" value="090123456789" /> <!-- Replace the value with your customer phonenumber -->
	                        <input type="hidden" name="ref" value="{{$transaction->identifier}}" /> <!-- Ucomment and  Replace the value with your transaction reference. It must be unique per transaction. You can delete this line if you want one to be generated for you. --> 
	                        <button class="btn btn-success btn-round waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-money"></i> Pay {{$transaction->amount_total}}</button>
	                    </form>  
					</div>
					@else
					<div class="col-md-3">
	              		<label for="input-9">ID</label><br>
	              		<b>{{$transaction->amount }}</b>
					</div>
					@endif


                    

				</div><br><br>	
				<br><br>	

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
