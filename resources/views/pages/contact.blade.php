@extends('layouts.web')

@section('content')
<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>contact</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <span class="active">contact</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- page-banner ends-->

<!-- contact start-->
<section class="bg-w sp-100 pb-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-box">
                    <div class="d-block d-xl-flex">
                        <div class="contact-left">
                            <h4 class="mb-4">get in touch</h4>
                            <form class="custom-form" action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name" required>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <span class="fa fa-phone"></span>
                                        <input type="text" id="phn" class="form-control" name="phone" placeholder="Enter Name" required>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" required>
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-edit"></span>
                                        <textarea rows="5" name="comment" class="form-control" placeholder="Your Message" id="comment" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-one btn-anim" id="submit" name="submit">
                                            send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-right">
                            <h4 class="mb-4">contact info</h4>
                            <p>Get on touch with us to get informations, answer to suggestions and more.</p>
                            <ul class="contact-info mt-4">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    {{$web->site_main_number}}<br> 
                                    {{$web->site_whatsapp_number}} <br>
                                    {{$web->site_international_number}}<br>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    {{$web->site_email}}
                                </li>
                                <li>
                                    <i class="fa fa-map-marker-alt"></i>
                                    {{$web->site_full_address_local}}
                                </li>
                            </ul>
                            <div class="socials contact-social">
                                <a href="http://www.facebook.com/{{$web->site_facebook}}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="http://www.googleplus.com/{{$web->site_googleplus}}">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="http://www.instagram.com/{{$web->site_instagram}}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="http://www.linkedin.com/{{$web->site_linkedin}}">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="http://www.twitter.com/{{$web->site_twitter}}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact end -->

<!-- map start-->
<div class="map">
    <div id="theme-map"></div>
</div>
<!-- map end -->


@include('partials._actionmark')

@endsection