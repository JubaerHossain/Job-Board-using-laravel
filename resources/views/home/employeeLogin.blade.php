@extends('layouts.home')
@section('title', "Employee | Login")

@section('content')
    <div class="container">
        <div class="login">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature-login">
                        <h3>Find the best job</h3>
                        <hr>
                        <div class="featured-list">
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="{{ asset('image/notification.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Automatic cv suggession to related company.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="{{ asset('icon/video.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Live interview by a Video call</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="{{ asset('image/notification.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Notify specific Job alert.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="{{ asset('image/notification.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Chance to get top listed job.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="{{ asset('icon/chat.png') }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Live chat with company.</h5>
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
                </div>
                <div class="col-md-5">
                    <div class="login-panel">
                        <h3 class="text-center">Login</h3>
                        <div class="login-form">
                            @if(session('regSucc'))
                                <p class="alert alert-success">{{ session('regSucc') }}</p>
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
                </div>
            </div>
        </div>
    </div>
@endsection