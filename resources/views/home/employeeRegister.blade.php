@extends('layouts.home')

@section('title','Employee Register')

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
                        @include('errors.error')
                        <div class="login-form">
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="name">
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="">
                                        <label class="form-check-label" for="inlineRadio3">Others</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmpass">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="confirmpass" placeholder="Confirm Password">
                                </div>
                                <select class="custom-select" name="country">
                                    <option value="" selected>Select Country</option>
                                    @foreach($country as $c)
                                        <option value="{{ $c }}">{{ $c }}</option>
                                    @endforeach
                                </select>
                                </br></br>
                                <select class="custom-select" name="state" id="">
                                    <option value="">Select State</option>
                                </select>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">+880</span>
                                    </div>
                                    <input type="number" name="phone" class="form-control" placeholder="phone number" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="check" class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            I accept the <a href="" >terms & condition</a> of jobs.com
                                        </label>
                                    </div>
                                </div>
                                <div class="login-create">
                                    <input type="submit" name="submit" value="Sign up" class="btn btn-primary btn-block btn-lg">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        $("select[name='country']").change(function () {
            var ca = $("select[name='country']").val();
            $.ajax({
               url: window.origin+'/countryApi/state/'+ca,
                method: 'GET',
                success:function (data) {
//                    console.log(data.state[0]);
                    $("select[name='state']").html("");
                    for(var i=0;i<data.state[0].length;i++){
                        console.log(data.state[0][i]);
                        $("select[name='state']").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                }
            });
        });

    });
</script>
@endpush