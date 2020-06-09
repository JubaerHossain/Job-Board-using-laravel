@extends('layouts.home')

@section('title','| Employee Register')

@section('content')
    <div class="container">
        <div class="login">
            <div class="row">
                <div class="col-md-7">
                    <div class="feature-login">
                        <h3>Upgrade to Pro</h3>
                        <hr>
                        <div class="featured-list">
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="image/notification.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Get instant Notification about New job Posting, Match Jobs and More.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="image/notification.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Your world of Jobs on the go. Search, View, Apply to any jobs from anywhere.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="image/notification.png" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <h5 class="feature-text">Receive Messages from Employers and Increase your Possibility.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="featured-items">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="feature-icon">
                                            <img src="image/notification.png" class="img-fluid">
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
                                            <img src="image/notification.png" class="img-fluid">
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
                        <h3 class="text-center">Registration</h3>
                        @foreach($errors->all() as $message)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $message }}
                        </div>
                        @endforeach
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="0">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmpass">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <select class="custom-select" name="country">
                                    <option selected>Select Country</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="India">India</option>
                                </select>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+880</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="phone number" name="phone">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            I accept the <a href="" >terms & condition</a> of jobs.com
                                        </label>
                                    </div>
                                </div>
                                <input type="submit" value="Sign Up" class="btn btn-success btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection