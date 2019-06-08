@extends('layouts.web')

@section('stylesheets')
<style>
    .banner-image2::before {
    position: absolute;
    content: '';
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /*background-image: url("{{URL::to('assets-web/img/home/baner-img22.jpg')}}");*/

    background-size: cover;
    background-position: 0 0;
    background-repeat: repeat-x;
    z-index: -1;
    -webkit-animation: bgslide 40s linear infinite;
}
</style>
@endsection

@section('content')


@include('partials._search')
<!-- banner start -->
<section class="main-banner-2">
    <div class="banner-image2" >
        <div class="tilt-anim" data-tilt>
            <div class="banner-content">
                <p class="text-uppercase mb-4">Welcome to The Achievers Confluence Hub</p>
                <h2>We network you to businesses</h2>
            </div>
        </div>
        <div class="mt-5 text-center">
            <a href="#" class="btn btn-two btn-anim mt-5 br-5 px-5">
            <i class="fa fa-search"></i>explore more </a>
        </div>
    </div>
</section>
<!-- banner end -->


<!-- steps-section start-->
<section class="steps-section sp-100-70 bg-dull tri-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        Welcome to our website
                    </h3>
                    <svg class="title-sep">
                        <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                        />
                    </svg>
                    <p>We are an esteemed community capable of connecting business to an end goal</p>
                </div>
            </div>
        </div>
        <div class="row steps-wrap justify-content-center">
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="steps">
                    <div class="icon-box mb-3">
                        <i class="flaticon-layers"></i>
                    </div>
                    <h5>
                        <span class="c-theme">1. </span> Choose a Category</h5>
                    <p class="mb-0">Leads you to businesses that meets you category of value.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="steps">
                    <div class="icon-box mb-3">
                        <i class="flaticon-map"></i>
                    </div>
                    <h5>
                        <span class="c-theme">2. </span> Find a business</h5>
                    <p class="mb-0">Share ideas and relate with visioned businesses heading to meet way goals</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <div class="steps">
                    <div class="icon-box mb-3">
                        <i class="flaticon-shop"></i>
                    </div>
                    <h5>
                        <span class="c-theme">3. </span> Explore & Close</h5>
                    <p class="mb-0">Close a deal .</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- steps-section end -->

@if($adverts->count() > 0)
<!-- popular list start-->
<!-- <section class="popular-list sp-100 bg-w">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        popular listing
                    </h3>
                    <svg class="title-sep">
                        <path fill-rule="evenodd" d="M32.000,13.000 L32.000,7.000 L35.000,7.000 L35.000,13.000 L32.000,13.000 ZM24.000,4.000 L27.000,4.000 L27.000,16.000 L24.000,16.000 L24.000,4.000 ZM16.000,-0.000 L19.000,-0.000 L19.000,20.000 L16.000,20.000 L16.000,-0.000 ZM8.000,4.000 L11.000,4.000 L11.000,16.000 L8.000,16.000 L8.000,4.000 ZM-0.000,7.000 L3.000,7.000 L3.000,13.000 L-0.000,13.000 L-0.000,7.000 Z"
                        />
                    </svg>
                    <p>Get to Meet your business needs here</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="popular-list-slider mb-0">
                    @foreach($adverts as $advert)
                    <div class="listing-item p-2">
                        <div class="img-holder">
                            <span class="offer">save 49%
                            </span>
                            <img src="{{URL::to($advert->image)}}" alt="list">
                            <div class="rate-like centering justify-content-between">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <a class="likes" href="#">
                                    <i class="far fa-heart"></i> 4
                                </a>
                            </div>
                        </div>
                        <div class="list-content p-2">
                            <ul class="ctg-info py-2 mb-3">
                                <li>
                                    <a href="#">
                                </li>
                                <li>
                                    <span class="c-theme"> Available</span>
                                </li>
                            </ul>
                            <h5 class="mb-2">
                                <a href="">{{$advert->type}}</a>
                            </h5>
                            <p>{{$advert->title}}</p>
                            <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                <li class="mt-1">
                                    <a href="#">
                                </li>
                                <li class="mt-1">
                                    <a href="#">
                                        <i class="fa fa-phone mr-2"></i>{{$advert->phone_contact}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- popular list end -->
@endif


@include('partials._actionmark')



@if($categories->count() > 0)
<!-- categories start-->
<section class="categories sp-100-70 bg-dull">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        top categories
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
            @foreach($categories as $category)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                <div class="ctg-item">
                    <div class="icon-box" style="background-image:url({{URL::to($category->image)}})">
                        <i class="flaticon-fast-food"></i>
                    </div>
                    <div class="content-box p-4">
                        <h5 class="mb-1">
                            <a href="listing.html"> {{$category->name}}</a>
                        </h5>
                        <p class="mb-0">{{$category->adverts->count()}} Listing</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- categories end -->
@endif

@include('partials._partners')

@if($home_posts->count() > 0)
<!-- blog start-->
<section class="sp-100 bg-w">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-title">
                    <h3 class="sec-title">
                        from our News
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
            @foreach($home_posts as $post)
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="blog-item blog-1" style="background-image:url('assets-web/img/blog/blog1.png')">
                    <div class="blog-date p-2">
                        <span>{{$post->title}}</span>
                    </div>
                    <div class="blog-content">
                        <h5>
                            <a href="blog-detail.html">{{$post->excerpt}}</a>
                        </h5>
                        <ul class="blog-meta d-flex justify-content-between align-items-center">
                            <li>
                                <span class="mr-1">
                                    <img src="{{URL::to($post->excerpt)}}" alt="#">
                                </span>
                                <!-- <a href="#">Johnathan Doe</a> -->
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-eye mr-1"></i>
                                    {{$post->views}}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12 text-center mt-30">
                <a href="#" class="btn btn-one btn-anim">view all</a>
            </div>
        </div>
    </div>
</section>
<!-- blog end -->
@endif
@endsection