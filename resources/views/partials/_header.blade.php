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

                                    <!-- <li class="nav-item">
                                        <a class="nav-link" href="{{route('about')}}">about us</a>
                                    </li> -->

                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="{{route('about')}}">The Community</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="">Gallery</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">Conference </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="#">Speakers</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Registration</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="">Round Table</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="">Profile</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a href="javascript:void(0)" class="nav-link dropdown-toggle" data-toggle="dropdown">Business </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="#">Buyers Forum</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Advertisers Forum</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Member Forum</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Premium Advertisers</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Business Financing </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="#">Sponsorship</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('contact')}}">contact us</a>
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
                                            <i class="fa fa-plus-circle"></i> Login/Register
                                        </a>
                                    </li>  -->
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