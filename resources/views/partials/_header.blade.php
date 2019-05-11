<header class="header">
        <div class="head-top head-top-two d-none d-lg-block py-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="socials socials-header text-lg-left text-center">
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
                    <div class="col-lg-9">
                        <ul class="head-contact text-lg-right text-center">
                            <li>
                                <i class="fa fa-phone"></i>
                                {{$web->site_main_number}}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                {{$web->site_email}}
                            </li>
                            <li>
                                <i class="fa fa-map-marker-alt"></i>
                                {{$web->site_state_country}}
                            </li>
                            @auth
                            <li class="login-sign">
                                <a href="{{route('home')}}">
                                    <i class="fa fa-user"></i> Dashboard 
                                </a>
                            </li>
                            @else
                            <li class="login-sign">
                                <a href="{{route('login')}}">
                                    <i class="fa fa-user"></i> login / signup
                                </a>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-header-two affix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo-two logo-wrap">
                            <div class="logo my-1">
                                <a href="index.html">
                                    <img src="{{URL::to($web->site_logo_footer)}}" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12">
                        <div class="menu menu-two">
                            <nav class="navbar navbar-expand-lg">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon bar1"></span>
                                    <span class="navbar-toggler-icon bar2"></span>
                                    <span class="navbar-toggler-icon bar3"></span>
                                </button>
                                <!-- Links -->
                                <div class="main-menu collapse navbar-collapse" id="nav-content">
                                    <ul class="navbar-nav ml-auto align-items-lg-center">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('home')}}">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('about')}}">about us</a>
                                        </li>

                                        <!-- <li class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">listing</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="listing.html">all listings</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-sidebar.html">listing with sidebar</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-with-map.html">listing with map</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="listing-detail.html">listing detail</a>
                                                </li>
                                            </ul>
                                        </li> -->

                                        <li class="nav-item dropdown">
                                            <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">blogs</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-item">
                                                    <a href="blog-page.html">blog page</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="blog-right-sidebar.html">blog rightbar</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="blog-left-sidebar.html">blog leftbar</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="blog-detail.html">blog detail</a>
                                                </li>
                                                <li class="dropdown-item dropdown">
                                                    <a class="dropdown-toggle" href="javascript:void(0)">level 1</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-item">
                                                            <a href="javascript:void(0)">level 2</a>
                                                        </li>
                                                        <li class="dropdown-item dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle">level 2</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-item">
                                                                    <a href="javascript:void(0)">level 3</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- <li class="nav-item dropdown has-mega">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                pages
                                            </a>
                                            <ul class="dropdown-menu mega-dropdown">
                                                <li>
                                                    <ul>
                                                        <li class="dropdown-item">
                                                            <a href="about.html">about us</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="faq.html">faq</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="service.html">service</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="pricing.html">pricing</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <ul>
                                                        <li class="dropdown-item">
                                                            <a href="error-page.html">error page</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="add-list.html">add list</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="contact.html">contact us</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="login.html">login / signup</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="dropdown-item">
                                                            <a href="listing.html">all listings</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="listing-sidebar.html">listing with sidebar</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="listing-with-map.html">listing with map</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="listing-detail.html">listing detail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                        <li class="dropdown-item">
                                                            <a href="blog-page.html">blog page</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="blog-right-sidebar.html">blog rightbar</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="blog-left-sidebar.html">blog leftbar</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="blog-detail.html">blog detail</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->

                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">contact us</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#search">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                        @auth
                                       <!--  <li class="nav-item d-lg-block d-none">
                                            <a href="" class="btn btn-one btn-anim br-5 px-3 nav-btn">
                                                <i class="fa fa-plus-circle"></i> add listing
                                            </a>
                                        </li> -->
                                        @else
                                        <!-- <li class="nav-item d-lg-block d-none">
                                            <a href="{{route('login')}}" class="btn btn-one btn-anim br-5 px-3 nav-btn">
                                                <i class="fa fa-plus-circle"></i> add listing
                                            </a>
                                        </li> -->
                                        @endauth
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>