<div class="main-register-wrap modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Sign In <span>Achievers<strong> Hub</strong></span></h3>
            <!-- <div class="soc-log fl-wrap">
                <p>For faster login or register use your social account.</p>
                <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
            </div>
            <div class="log-separator fl-wrap"><span>or</span></div> -->
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-content">
                        <div class="custom-form">
                            <form method="post"  method="POST" action="{{ route('login') }}">
                                @csrf
                                <label>Email Address * </label>
                                <input type="text" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"> 

                                <label>Password * </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 

                                <button type="submit" class="log-submit-btn"><span>Log In</span></button> 
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input  name="check" class="form-check-input" type="checkbox" name="remember check-a" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <div class="custom-form">
                                <form method="post"  method="POST" action="{{ route('register') }}" name="registerform" class="main-register-form" id="main-register-form2">
                                    @csrf

                                    <label>Referral Email Address *</label>
                                    <input id="referral" type="email" class="form-control{{ $errors->has('referral') ? ' is-invalid' : '' }}" name="referral" value="{{ old('referral') }}" required> 
                                    <label>Full Name * </label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> 
                                    <label>Email Address *</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>                                              
                                    <label>Password *</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required> 
                                    <button type="submit" class="log-submit-btn"><span>Register</span></button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>