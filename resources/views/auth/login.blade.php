@extends('layouts.web')

@section('content')


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


 <!-- page-banner start-->
    <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>login / register</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">pages</a>
                        </li>
                        <li>
                            <span class="active">login / register</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner ends-->

    <!-- login start-->
    <div class="login-section bg-w sp-100">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <ul class="nav d-flex log-tab mb-5" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#register" role="tab" data-toggle="tab">register</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active show" id="login">
                            <form class="custom-form" id="loginform"  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name1"  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6">
                                        <input type="checkbox" name="remember" id="checkbox_id1" value="value"  {{ old('remember') ? 'checked' : '' }}>

                                        <label for="checkbox_id1"> {{ __('Remember Me') }}</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="#" class="paswd"> forgot password ?</a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit-login" name="submit-login">
                                            login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="register">
                            <form class="custom-form" id="registerform" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" id="name2" class="form-control" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Organization/ Individual Name">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Organization Email" id="email2">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" id="password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password" id="c-password">
                                    </div>
                                    
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-one btn-anim w-100" id="submit" name="submit">
                                            register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->

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
                        <img src="assets-web/img/home/cta-bg.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-one end -->

@endsection
