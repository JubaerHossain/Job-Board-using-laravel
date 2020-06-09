@extends('layouts.home')
@section('title', "Company | Login")

@section('content')

    <div class="container">
        <div class="login">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature-login">
                        <h3>Find the best candidates.</h3>
                        <hr>
                        <div class="featured-list">
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x icon-border"></i>
                                                <i class="fa fa-circle fa-stack-2x icon-circle" style="color:#524d4d"></i>
                                                <i class="fas fa-stack-1x fa-briefcase text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <p class="feature-text">By posting job, you can reach the largest candidate pool of Bangladesh.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x icon-border"></i>
                                                <i class="fa fa-circle fa-stack-2x icon-circle" style="color:#524d4d"></i>
                                                <i class="far fa-stack-1x fa-address-card text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <p class="feature-text">You can find out and communicate with most suitable candidates from our affluent CV Bank.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <span class="fa-stack fa-lg">
                                                <i class="fa fa-circle fa-stack-2x icon-border"></i>
                                                <i class="fa fa-circle fa-stack-2x icon-circle" style="color:#524d4d"></i>
                                                <i class="fas fa-stack-1x fa-user-tie text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <p class="feature-text">Everyday over 1,00,000 candidates apply through "Apply Online" in various categories.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-help">
                        <h3>Need Help?</h3>
                        <p> If you are facing any problem and have any query then feel free to ask.</p>
                        <div class="call">
                            <i class="fa fa-mobile"></i>16578
                        </div>
                        <div class="email-us">
                            <i class="fa fa-envelope"></i>Info@jobgetor.com
                        </div>
                    </div>
                    <div class="job-package">
                        <h3>Packages</h3>
                        <span>For know our packages & benefits <a href="{{ url('company-package') }}" class="btn btn-primary mx-4">click here</a> </span>
                    </div>
                    <div class="corporate-frnd">
                        <h3>Become Our Comporate Partner</h3>
                        <span>Get your corporate membership & unlock extra features to know more <a href="" class="btn btn-success my-4">click here</a> </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="login-panel">
                        <h3 class="text-center">Company Login</h3>
                        <hr>
                        <div class="login-form">
                            @if(session('RegSuccess'))
                                <p class="alert alert-success">{{ session('RegSuccess') }}</p>
                            @endif
                            <form method="POST" action="{{ route('login') }}">

                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    {{--<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">--}}
                                    <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
                                    <input id="exampleInputPassword1" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                    <br>
                                    <a class="btn btn-link under" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>

                                </div>
                                <div class="form-check">
                                    {{--<input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="exampleCheck1">{{ __('Remember Me') }}</label>
                                </div>
                                <input type="submit" class="btn btn-primary m-t-20">
                            </form>
                            <div class="login-panel-bottom">

                            </div>
                            <div class="login-create">
                                <a href="employereg.html" class="under">
                                    <!-- <span>Don't have an account?</span> -->
                                    <h4 class="text-center">Create Account</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ad-space">
                        <img src="{{ asset('image/ad2.jpg') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection