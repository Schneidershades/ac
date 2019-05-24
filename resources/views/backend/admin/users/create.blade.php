@extends('layouts.dashboard')

@section('stylesheets')
<!--Select Plugins-->
<link href="{{URL::to('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<!--inputtags-->
<link href="{{URL::to('assets/plugins/inputtags/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
<!--multi select-->
<link href="{{URL::to('assets/plugins/jquery-multi-select/multi-select.css')}}" rel="stylesheet" type="text/css">
<!--Bootstrap Datepicker-->
<link href="{{URL::to('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css">
<!--Touchspin-->
<link href="{{URL::to('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css">
<style>
	.select2-selection--multiple{
		overflow: hidden !important;
		height: auto !important;
	}
</style>
@endsection

	@section('content')
<!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Create User Service Discount</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">LegalHub</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User Service Discount</li>
         </ol>
	   </div>
     <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <a href="{{route('service.index')}}"><button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-left mr-1"></i> Back</button></a>
      </div>
     </div>
     </div>
    <!-- End Breadcrumb-->
	@include('backend.partials._errors')
	<div class="row">
		<div class="col-lg-12 mx-auto">
			<div class="card">
				<div class="card-body">
					<div class="card-title text-uppercase "><i class="fa fa-address-book-o"></i> Create User Service Discount</div>
					<hr>
					<form class="color-form" method="POST" action="{{route('discount.store')}}" enctype="multipart/form-data">
						@csrf
						<div class='repeater'>
							<!-- Make sure the repeater list value is different from the first repeater  -->
							<div data-repeater-list="user_special_discounts">
								<div data-repeater-item class="form-group row">
									<div class="col-md-12">
										<div class="card-title"><i class="fa fa-address-book-o"></i> NEW SERVICE DISCOUNT</div><br>
									</div>
									<div class="col-md-3">
										<label for="input-13">Item</label>
										<select name="item_id" id="" class="form-control">
											@foreach($items as $item)
												<option value="{{$item->id}}">{{$item->name}}</option>
											@endforeach
										</select>
									</div>

									<div class="col-md-3">
										<label for="input-13">Item</label>
										<select name="user_id" id="" class="form-control">
											@foreach($users as $user)
												<option value="{{$user->id}}">{{$user->name}}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-3">
										<label for="input-13">Percentage Discount</label>
										<input type="number" name="percentage" class="form-control form-control-rounded" max="100" min="0" required/>
									</div>

									<div class="col-md-3">					
										<label for="input-13">Would the Percentage be flexible</label>		
										<select name="flexible"  class="form-control">
											<option value="">----Select Flexibility----</option>
											<option value="yes">Yes</option>
											<option value="no">No</option>
										</select>
									</div>

									<div class="col-md-3">
										<label for="input-13">At what percentage would it be Flexible </label>
										<input type="number" name="flexible_percentage" class="form-control form-control-rounded" max="100" min="0"/>
									</div>

									<div class="col-md-3">
										<label for="input-13">Flexible Amount State</label>
										<input type="number" name="flexible_amount_state" class="form-control form-control-rounded" min="0"/>
									</div>

							        <div class="form-group col-md-12">
							        	<button data-repeater-delete type="button" id="" class="badge badge-pill badge-danger m-1" >-</button>
							        </div>
							    </div>
							</div>
							<div class="text-right">
								<button data-repeater-create type="button" class="btn btn-primary waves-effect waves-light m-1"> + </button>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary shadow-primary px-5"><i class="icon-lock"></i> Save Discounts</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
	@endsection

@section('scripts')
<script src="{{URL::to('assets/js/jquery.repeater.js')}}"></script>
<script>
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
	});
</script>

<!--Select Plugins Js-->
<script src="{{URL::to('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Multi Select Js-->
<script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.multi-select.js')}}"></script>
<script src="{{URL::to('assets/plugins/jquery-multi-select/jquery.quicksearch.js')}}"></script>

<script>
	$(document).ready(function() {
		$('.single-select').select2();

		$('.multiple-select').select2();

		$('#my_multi_select1').multiSelect();
		$('#my_multi_select2').multiSelect({
			selectableOptgroup: true
		});

		$('#my_multi_select3').multiSelect({
			selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
			selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
			afterInit: function (ms) {
				var that = this,
				$selectableSearch = that.$selectableUl.prev(),
				$selectionSearch = that.$selectionUl.prev(),
				selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
				selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

				that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
				.on('keydown', function (e) {
					if (e.which === 40) {
						that.$selectableUl.focus();
						return false;
					}
				});

				that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
				.on('keydown', function (e) {
					if (e.which == 40) {
						that.$selectionUl.focus();
						return false;
					}
				});
			},
			afterSelect: function () {
				this.qs1.cache();
				this.qs2.cache();
			},
			afterDeselect: function () {
				this.qs1.cache();
				this.qs2.cache();
			}
		});

		$('.custom-header').multiSelect({
			selectableHeader: "<div class='custom-header'>Selectable items</div>",
			selectionHeader: "<div class='custom-header'>Selection items</div>",
			selectableFooter: "<div class='custom-header'>Selectable footer</div>",
			selectionFooter: "<div class='custom-header'>Selection footer</div>"
		});
	});

</script>

@endsection