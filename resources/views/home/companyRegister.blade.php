@extends('layouts.home')
@section('title','Company | Register')

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
                        <span>For know our packages & benefits <a href="" class="btn btn-primary">click here</a> </span>
                    </div>
                    <div class="corporate-frnd">
                        <h3>Become Our Comporate Partner</h3>
                        <span>Get your corporate membership & unlock extra features to know more <a href="" class="btn btn-success ">click here</a> </span>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="login-panel">
                        <h3 class="text-center">Company Registration</h3>
                        <hr>
                        <div class="login-form">
                            <form action="" method="POST">
                                {{ csrf_field() }}
                                @include('errors.error')
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Your Name:*</label>
                                    <input name="username" type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="confirmpass">Confirm Password</label>
                                    <input name="password_confirmation" type="password" class="form-control" id="confirmpass" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="">Your Phone *</label>
                                    <input name="phone" type="number" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="form-group">
                                    <label for="">Company Name *</label>
                                    <input name="name" type="text" class="form-control" placeholder="Company name">
                                </div>
                                <div class="form-group">
                                    <label for="">Contact Person *</label>
                                    <input name="company_person" type="text" class="form-control" placeholder="Contact Person">
                                </div>
                                <div class="form-group">
                                    <label for="">Contact Person Number *</label>
                                    <input name="person_contact" type="text" class="form-control" placeholder="Contact Person Number">
                                </div>
                                <div class="form-group">
                                    <label for="">Contact Person Designation *</label>
                                    <input name="person_designation" type="text" class="form-control" placeholder="Contact Person Number">
                                </div>
                                <div class="form-group">
                                    <select name="country" class="custom-select">
                                        @foreach($country as $c)
                                            <option value="{{ $c }}">{{ $c }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    {{--<label for=""></label>--}}
                                    <select class="custom-select" name="state" id="">
                                        <option value="">Select State ---- </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Company Address</label>
                                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="check" value="1" class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            I accept the <a href="" >terms & condition</a> of jobs.com
                                        </label>
                                    </div>
                                </div>
                                <div class="login-create">
                                    <input type="submit" name="submit" value="Sign Up"  class="btn btn-primary btn-lg btn-block">
                                        <!-- <span>Don't have an account?</span> -->
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
            console.log(window.origin+'/countryApi/state/'+ca);                      
            $.ajax({
                url: window.origin+'/countryApi/state/'+ca,
                method: 'GET',
                success:function (data) {
//                    console.log(data.state[0]);
                    $("select[name='state']").html("");
                    for(var i=0;i<data.state[0].length;i++){
                        $("select[name='state']").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                }
            });
        });

    });
</script>
@endpush