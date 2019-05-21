@extends('layouts.web')

@section('content')

@include('partials._search')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>about</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <span class="active">about</span>
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
                    <img src="{{URL::to('assets-web/img/pages/abt-mockup.png')}}" alt="mockup">
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                <h4>About Us</h4>
                <p>Achievers Connect Confluence International (ACCi) is Pan-African business networking “pool”, with membership which cuts across various sectors of African economy. This networking “pool” is purposely designed for convergence of various business platforms , ideas, inventions, manufacturing and initiatives to trigger quantum growth in African businesses and investments, and interlinking them with partners, buyers, manufacturers, and sellers within Africa and across the world. Our membership first of all is drawn amongst CEOs, MDs, Presidents and individuals occupying functional, strategic positions in their various organizations. We help our members grow their business through a structured, positive and professional referral program that enables them to develop meaningful, long-term relationships. We create unparalleled opportunities for our members to grow expand their networks and grow positive relationships.</p> 
 
                <p>The steady growth of ACCi in its brief history has been attributed to solid wheel of trust and discipline which the “pool” is running upon.</p><br><br>
            </div>

            <div class="col-lg-6 align-self-end">
                <h4>HOW WE BUILD OUR MEMBERS’ CAPACITIES</h4>
                <ul class="list-1">
                    <li>
                        <span>One-On-One & Group Mentorship </span>
                    </li>
                    <li>
                        <span>Leadership Trainings</span>
                    </li>
                    <li>
                        <span>Career Enhancement Programs</span>
                    </li>
                    <li>
                        <span> Links to Quality Relationships for Growth</span>
                    </li>
                    <li>
                        <span>Networking Business Seminars/Exhibitions</span>
                    </li>
                    <li>
                        <span>Business Referrals</span>
                    </li>
                    <li>
                        <span>Breakfast, Lunch or Dinner Hours with an Outstanding ACHIEVER</span>
                    </li>
                    <li>
                        <span> Discounted Products & Services at Selected Business Channels</span>
                    </li>
                    <li>
                        <span> 24/7 Business Help Desk</span>
                    </li>
                </ul> 

            </div>
            <div class="col-lg-6 mt-lg-0 mt-5">
                
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
                    <h2 class="count c-theme" data-count="{{$users->count()}}">0</h2>
                    <p>Businesses</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-team"></i>
                    </div>
                    <h2 class="count c-theme" data-count="{{$partners->count()}}">0</h2>
                    <p>Partners</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-trophy"></i>
                    </div>
                    <h2 class="count c-theme" data-count="{{$adverts->count()}}">0</h2>
                    <p>Buiness Listings</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
                <div class="counter-box">
                    <div class="icon-box">
                        <i class="flaticon-appointment"></i>
                    </div>
                    <h2 class="count c-theme" data-count="1">0</h2>
                    <p>Event</p>
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
                        We are dedicated to businesses
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
                        <i class="flaticon-medal"></i>
                    </div>
                    <h5>our Objective</h5>
                    <p>{{$web->site_objectives}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-rising"></i>
                    </div>
                    <h5>our vision</h5>
                    <p>{{$web->site_vision}}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="feature-item">
                    <div class="icon-box">
                        <i class="flaticon-list"></i>
                    </div>
                    <h5>mission</h5>
                    <p>{{$web->site_mission}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- features end -->

  <!-- price start-->
    <section class="bg-w sp-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            Member & Pricing
                        </h3>
                        <svg class="title-sep">
                            <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                            />
                        </svg>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($packages as $package)
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="price-item">
                        <div class="price-top">
                            <div class="amount">
                                <h4>{{$package->name}}</h4>
                                <h3>
                                    <sup>N</sup>{{$package->amount}}</h3>
                                <p class="c-theme text-capitalize mb-0">per year</p>
                            </div>
                            <div class="price-body mt-3">
                                <ul class="plan-info-list">
                                    @foreach($package->packageFeatures as $feature)
                                    <li>
                                        <p>{{$feature->description}}</p>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="price-bottom">
                            <a href="#" class="btn btn-anim btn-two mt-30">choose plan</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- price end -->

@include('partials._actionmark')

@endsection