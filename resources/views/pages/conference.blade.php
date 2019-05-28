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
<div class="about-1 o-hide bg-w sp-100">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-end">
                <div class="abt-img">
                    <img src="{{URL::to('assets-web/img/home/ad.png')}}" alt="mockup">
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <h4>{{$event->title}}</h4>
                <p>{{$event->excerpt}}
                </p>
                <ul class="list-1">
                    <li>
                        <span>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</span>
                    </li>
                    <li>
                        <span>Nulla consequat massa quis enim. Donec fringilla vel, aliquet nec.</span>
                    </li>
                    <li>
                        <span> Aenean leo ligula, porttitor eu consequat vitae eleifend ac enim.</span>
                    </li>
                    <li>
                        <span> Sociis na toque penatibus et magnis dis parturien monte nascetur ridic.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-lg-0 mt-5">
                <div class="abt-img">
                    <img src="{{URL::to('assets-web/img/home/ad.png')}}" alt="mockup">
                </div>{!!$event->description!!}
            </div>
        </div>
    </div>
</div>
<!-- about end-->

<!-- counter starts -->
<section class="counters sp-100-70">
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
</section>
<!-- counter ends -->

<!-- features start-->
<section class="features sp-100-70 bg-w">
    <div class="container">
        <div class="row">
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
        </div>
        <div class="row">
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
        </div>
    </div>
</section>
<!-- features end -->


@include('partials._actionmark')

@endsection