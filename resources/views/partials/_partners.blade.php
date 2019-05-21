
@if($partners->count() > 0)
<!-- partner start-->
<div class="partner-one bg-red py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partner-slider owl-carousel owl-theme">
                    @foreach($partners as $partner)
                    <div class="partner-slide">
                        <img src="{{URL::to($partner->image)}}" alt="partner">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partner end-->
@endif
