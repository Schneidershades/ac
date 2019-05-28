@extends('layouts.web')

@section('content')
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
                            <a class="nav-link active" href="#register" role="tab" data-toggle="tab">register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#login" role="tab" data-toggle="tab">login</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        
                        <div role="tabpanel" class="tab-pane fade in active show" id="register">
                            <form class="custom-form" id="registerform" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" class="form-control" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required  placeholder="Enter Organization/ Individual Name">

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    
                                    <div class="col-12">
                                        <span class="fa fa-envelope"></span>
                                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Enter Organization Email">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text" class="form-control" class="form-control{{ $errors->has('referral') ? ' is-invalid' : '' }}" name="referral" value="{{ old('referral') }}" required  placeholder="Email Referral">

                                        @if ($errors->has('referral'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('referral') }}</strong>
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

                        <div role="tabpanel" class="tab-pane fade " id="login">
                            <form class="custom-form" id="loginform"  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">

                                    <div class="col-12">
                                        <span class="fa fa-user"></span>
                                        <input type="text"  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required >
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="col-12">
                                        <span class="fa fa-lock"></span>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="col-6">
                                        <input type="checkbox" name="remember" value="value"  {{ old('remember') ? 'checked' : '' }}>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->
    @include('partials._actionmark')

@endsection
