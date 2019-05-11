@extends('layouts.web')

@section('content')
 <!-- Search Form -->
    <div id="search" class="top-search d-flex">
        <span class="close">
            <i class="fa fa-times"></i>
        </span>
        <div class="w-100 text-center mt-4">
            <h3 class="c-white fw-5">search here</h3>
            <form role="search" id="searchform" action="#" method="get" class="search-bar">
                <input value="" name="q" type="search" placeholder="type to search..." class="form-control">
                <button type="submit" class="submit-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- banner start -->
    <div class="main-banner">
        <div class="banner-image" data-jarallax='{"videoStartTime": 4300}' data-jarallax-video="https://youtu.be/y1Alop4LhYI">
            <div class="container">
                <div class="banner-content">
                    <div class="row">
                        <div class="col-12">
                            <h2>Find The Best Place In Your City</h2>
                            <p class="mt-4">Lorem ipsum dolor sit amet, consecws eftetuer adscnki iscedring elit aendea cdefom ameodo lorem
                                ipsf dolor sit amet conscsec tsetuer.</p>
                        </div>
                    </div>
                    <form action="#" class="banner-form mt-5">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-3 col-md-6">
                                <input type="text" class="form-control mb-lg-0" placeholder="What are you looking for?">
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <select class="form-control mb-lg-0 custom-select" id="service2">
                                    <option>all categories</option>
                                    <option>hotel</option>
                                    <option>tour</option>
                                    <option>pharmacy</option>
                                    <option>shops</option>
                                </select>

                            </div>
                            <div class="col-lg-2 col-md-4">
                                <button type="submit" class="btn btn-one btn-anim w-100">
                                    <i class="fa fa-search"></i> search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="list-category mb-4">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-find"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">destination</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-spa"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">beauty & spa</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-cheers"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">nightlife</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-hotel"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">hotels</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-cutlery"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">restaurants</a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                            <div class="list-items mb-30 btn-anim">
                                <div class="icon-box">
                                    <i class="flaticon-shop"></i>
                                </div>
                                <h5 class="mb-0">
                                    <a href="#">shopping</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- popular list start-->
    <section class="popular-list sp-100 bg-w">
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
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                            ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="popular-list-slider mb-0">
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 49%
                                </span>
                                <img src="assets/img/home/pl-slide1.jpg" alt="list">
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
                                            <i class="flaticon-cutlery mr-2"></i> restaurants</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the lounge & bar</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco, USA</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 30%
                                </span>
                                <img src="assets/img/home/pl-slide2.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>3
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-shop mr-2"></i>shopping</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">the best shop in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco, USA</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 19%
                                </span>
                                <img src="assets/img/home/pl-slide3.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i>6
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-cheers mr-2"></i>nightlife</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">enjoy best nightlife</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco, USA</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 59%
                                </span>
                                <img src="assets/img/home/pl-slide4.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>

                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i> 9
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-spa mr-2"></i>beauty & spa</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best beauty & spa services</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco, USA</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="listing-item p-2">
                            <div class="img-holder">
                                <span class="offer">save 20%
                                </span>
                                <img src="assets/img/home/pl-slide5.jpg" alt="list">
                                <div class="rate-like centering justify-content-between">
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <a class="likes" href="#">
                                        <i class="far fa-heart"></i> 14
                                    </a>
                                </div>
                            </div>
                            <div class="list-content p-2">
                                <ul class="ctg-info py-2 mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-find mr-2"></i>desitination</a>
                                    </li>
                                    <li>
                                        <span class="c-theme"> open now</span>
                                    </li>
                                </ul>
                                <h5 class="mb-2">
                                    <a href="listing-detail.html">best destinations in city</a>
                                </h5>
                                <p>Donec pede justo, fringilla vel, aliquet nectior</p>
                                <ul class="ctg-info2 pt-2 mt-3 centering justify-content-between">
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-map-marker-alt mr-2"></i>San Francisco, USA</a>
                                    </li>
                                    <li class="mt-1">
                                        <a href="#">
                                            <i class="fa fa-phone mr-2"></i>0123-456-789</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular list end -->

    <!-- steps-section start-->
    <section class="steps-section sp-100-70 bg-dull tri-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            fitness programs
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
            <div class="row steps-wrap justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-layers"></i>
                        </div>
                        <h5>
                            <span class="c-theme">1. </span> Choose a Category</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consec rcqui adipiscing elit socada como ligaui.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-map"></i>
                        </div>
                        <h5>
                            <span class="c-theme">2. </span> Find What You Want</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consec rcqui adipiscing elit socada como ligaui.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-30">
                    <div class="steps">
                        <div class="icon-box mb-3">
                            <i class="flaticon-shop"></i>
                        </div>
                        <h5>
                            <span class="c-theme">3. </span> go Out & Explore</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consec rcqui adipiscing elit socada como ligaui.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- steps-section end -->

    <!-- cta-one start-->
    <section class="cta-one tri-bg-w text-lg-left text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 my-lg-0 my-5 py-lg-0 py-5">
                    <div class="cta-content">
                        <h3>Sign Up To Get Special Offers Every Day</h3>
                        <p>Lorem ipsum dolor sit amet, consectadetudzdae rcquisc adipiscing elit. Aenean socada commodo ligaui
                            egets dolor. </p>
                        <a href="login.html" class="btn btn-two btn-anim mt-2">
                            sign up
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-block d-none">
                    <div class="cta-img mt-4">
                        <img src="assets/img/home/cta-bg.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-one end -->

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
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor penatibus
                            ean massa. Cum sociis natoqu penatibus et magnis dis parturient montes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat1.jpg')">
                            <i class="flaticon-map"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html">destination</a>
                            </h5>
                            <p class="mb-0">35 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat2.jpg')">
                            <i class="flaticon-cutlery"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html">restaurants</a>
                            </h5>
                            <p class="mb-0">20 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat3.jpg')">
                            <i class="flaticon-shop"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> shopping</a>
                            </h5>
                            <p class="mb-0">15 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat4.jpg')">
                            <i class="flaticon-hotel"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> hotels</a>
                            </h5>
                            <p class="mb-0">12 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat5.jpg')">
                            <i class="flaticon-spa"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> Beauty & Spa</a>
                            </h5>
                            <p class="mb-0">18 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat6.jpg')">
                            <i class="flaticon-drama"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> events</a>
                            </h5>
                            <p class="mb-0">14 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat7.jpg')">
                            <i class="flaticon-cheers"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> nightlie</a>
                            </h5>
                            <p class="mb-0">25 Listing</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-30">
                    <div class="ctg-item">
                        <div class="icon-box" style="background-image:url('assets/img/home/cat8.jpg')">
                            <i class="flaticon-fast-food"></i>
                        </div>
                        <div class="content-box p-4">
                            <h5 class="mb-1">
                                <a href="listing.html"> Beauty & Spa</a>
                            </h5>
                            <p class="mb-0">10 Listing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- categories end -->

    <!-- partner start-->
    <div class="partner-one bg-red py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-slider owl-carousel owl-theme">
                        <div class="partner-slide">
                            <img src="assets/img/home/partner1.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner2.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner3.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner4.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner5.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner1.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner2.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner3.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner4.png" alt="partner">
                        </div>
                        <div class="partner-slide">
                            <img src="assets/img/home/partner5.png" alt="partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partner end-->

    <!-- blog start-->
    <section class="sp-100 bg-w">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-title">
                        <h3 class="sec-title">
                            from our blog
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
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog1.png')">
                        <div class="blog-date p-2">
                            <span>11 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-1.png" alt="#">
                                    </span>
                                    <a href="#">Johnathan Doe</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog2.png')">
                        <div class="blog-date p-2">
                            <span>21 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-2.png" alt="#">
                                    </span>
                                    <a href="#">Alicia Thomas</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog3.png')">
                        <div class="blog-date p-2">
                            <span>01 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Nullam quis ante tiam sit ame orci eget erovtiu faucid nbys</a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-3.png" alt="#">
                                    </span>
                                    <a href="#">Johnis Doe</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog4.png')">
                        <div class="blog-date p-2">
                            <span>09 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Nullam quis ante tiam sit ame orci liamco non.</a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-1.png" alt="#">
                                    </span>
                                    <a href="#">Johnas Doe</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog5.png')">
                        <div class="blog-date p-2">
                            <span>15 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Amet incididunt tempor aliqua mollit magna proident sit amet elit nostrud. </a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-3.png" alt="#">
                                    </span>
                                    <a href="#">Alexi Johnas </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                    <div class="blog-item blog-1" style="background-image:url('assets/img/blog/blog6.png')">
                        <div class="blog-date p-2">
                            <span>13 april 2019</span>
                        </div>
                        <div class="blog-content">
                            <h5>
                                <a href="blog-detail.html">Nullam quis ante tiam sit ame orci liamco non.</a>
                            </h5>
                            <ul class="blog-meta d-flex justify-content-between align-items-center">
                                <li>
                                    <span class="mr-1">
                                        <img src="assets/img/blog/aut-2.png" alt="#">
                                    </span>
                                    <a href="#">sehny Doe</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-eye mr-1"></i>
                                        20
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn btn-one btn-anim">view all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->
@endsection