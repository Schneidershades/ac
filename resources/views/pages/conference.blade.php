@extends('layouts.web')

@section('content')

@include('partials._search')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Conference 2019</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <span class="active">Conference</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- page-banner ends-->

<!-- about start-->
<div class="about-1 o-hide bg-w sp-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-end">
                <div class="abt-img">
                    <img src="{{URL::to('assets/img/pages/abt-mockup.png')}}" alt="mockup">
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <h4>our awesome story</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligu eg dolor. Aenatibus parturien
                    monte, nascetur rt ridiculus mus. Donec quam felis ultricies nec pellent esqueu pretium quis, sem.
                    Nulla con sequat massa quis enim. Donec pede justo, fringil vel, aliquet nec, vulputate eget, arcu.
                    In enim justo dictum felis eu mollis ju pretium tincidunt.
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
                    <h2 class="count c-theme" data-count="5256">0</h2>
                    <p>total listing</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-team"></i>
                    </div>
                    <h2 class="count c-theme" data-count="1250">0</h2>
                    <p>total listing</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <h2 class="count c-theme" data-count="160">0</h2>
                    <p>total listing</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-appointment"></i>
                    </div>
                    <h2 class="count c-theme" data-count="12">0</h2>
                    <p>total listing</p>
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
                        Why We Are Best
                    </h3>
                    <svg class="title-sep">
                        <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                        />
                    </svg>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                        ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-rising"></i>
                    </div>
                    <h5>our vision</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-list"></i>
                    </div>
                    <h5>missions</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-medal"></i>
                    </div>
                    <h5>our value</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-find-1"></i>
                    </div>
                    <h5>find your listing</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-map"></i>
                    </div>
                    <h5>find the way</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-support"></i>
                    </div>
                    <h5>24/7 support</h5>
                    <p>Lorem ipsum dolor sit ame conse castei efte tuerg scn kt iscedring elit ende cd magum socadaiis nato
                        ipsf.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features end -->


@include('partials._actionmark')

@endsection