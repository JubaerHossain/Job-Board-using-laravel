@extends('layouts.home')
@section('title', "World's largest Jobsite | JobGetor")
@section('content')
    @include('home.partials._slider')
    <div class="main-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="work">
                    <h1>How it works?</h1>
                    <h6>Each month, more than 7 million Jobhunt turn to website in their search for work, making over <br>
                      160,000 applications every day.
                    </h6>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-0">
                  <div class="create mt-4">
                   <span class="icon">
                    <img src="image/adduser.png" class="icon-img">
                   </span>
                    <h4>Create An Account</h4>
                    <p>Getting a dream job is just a matter of time! Create an account on JOBGETOR to make your dream come true.</p>
                  </div>
                </div>
                <div class="col-md-4 pr-0">
                  <div class="create mt-4">
 <span class="icon">
  <img src="image/find.png" class="icon-img">
 </span>
                    <h4>Find &amp; Hire</h4>
                    <p>Are you a recruiter or employer looking to hire employees? Search for employees, resumes, and post jobs on one of the top job recruiting sites today! . Getting started is free. Receive quotes in seconds</p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="create mt-4">
 <span class="icon">
  <img src="image/editdoc.png" class="icon-img">
 </span>
                    <h4>Live Interview</h4>
                    <p class="text-center">Live video interviews empower recruiters to connect with their candidates face to face on video call</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- job cat -->

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="item-white">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="cat-head">
                          <h3><img src="image/cat.png" class="cat-img">&nbsp; Job Categories</h3>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      @foreach ($category as $item)
                          <li class="col-md-4 cat" id="cat" style="list-style:none">
                          <a href="" class="nav-link"><i class="fa fa-arrow-right pr-1" aria-hidden="true"></i><span>{{$item->category}}</span></a>
                          </li>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="job-title item-white">
                    <h3 class="item-title">Hot Job</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                @foreach ($hot as $item)
                <div class="col-md-12 col-sm-4 col-xs-4">
                  <div class="new-job job-white">
                    <div class="d-flex justify-content-between">
                      <div class="p-2">
                        <h4>
                          @if ($item->company->image)                              
                          <img src="{{ asset('/company/images/company_logo/'.$item->company->image) }}" class="logo">
                          @else
                          <img src="/company/images/company_logo//com_logo.png" class="img-comp">
                          @endif
                          {{$item->title}}</h4>
                      </div>
                      <div class="p-2">
                        <h6 class="full"><i class="fa fa-bookmark" aria-hidden="true"></i>{{$item->type}}</h6>
                      </div>
                    </div>
                    <div class="d-flex align-content-md-start flex-wrap">
                      <div class="p-2">
                        <span class="company"><a href="">{{$item->company_name}}</a></span>
                      </div>
                      <div class="p-2">
                        <span class="salary">{{$item->salary_upper}}</span>
                      </div>
                      <div class="p-2">
                        <span class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->street_location}}</span>
                      </div>
                      <div class="ml-auto p-2">
                      <a href="{{route('view.jobapply',$item->id)}}" class="btn btn-outline-primary">Apply</a>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="job-title item-white">
                    <h3 class="item-title">Highly Paid Job</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                @foreach ($high as $item)
                <div class="col-md-12 col-sm-4 col-xs-4">
                    <div class="new-job job-white">
                      <div class="d-flex justify-content-between">
                        <div class="p-2">
                          <h4>
                            @if ($item->company->image)                              
                            <img src="{{ asset('/company/images/company_logo/'.$item->company->image) }}" class="logo">
                            @else
                            <img src="{{ asset('/company/images/company_logo/com_logo.png') }}" class="img-comp">
                            @endif
                            {{$item->title}}</h4>
                        </div>
                        <div class="p-2">
                          <h6 class="full"><i class="fa fa-bookmark" aria-hidden="true"></i>{{$item->type}}</h6>
                        </div>
                      </div>
                      <div class="d-flex align-content-md-start flex-wrap">
                        <div class="p-2">
                          <span class="company"><a href="">{{$item->company_name}}</a></span>
                        </div>
                        <div class="p-2">
                          <span class="salary">{{$item->salary_upper}}</span>
                        </div>
                        <div class="p-2">
                          <span class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->street_location}}</span>
                        </div>
                        <div class="ml-auto p-2">
                        <a href="{{route('view.jobapply',$item->id)}}" class="btn btn-outline-primary">Apply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
           {{--  <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="job-title item-white">
                    <h3 class="item-title-blue">Most Visited Cv</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="employee">
                <div class="row no">
                  <div class="col-md-4">
                    <div class="profile">
                      <div class="profile-image">
                        <img src="image/profile.jpg" class="img-pro">
                      </div>
                      <div class="profile-body">
                        <h5 class="user-name">User Name</h5>
                        <small id="job-type">Job Title</small> <br>
                        <strong>Current Salary:&nbsp;12,000$</strong> <br>
                        <strong>Company:&nbsp;N/A</strong> <br>
                        <strong>Job Location:&nbsp;City,Country</strong> <br>
                        <a href="" class="btn btn-primary">Visit Profile</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="profile">
                      <div class="profile-image">
                        <img src="image/profile.jpg" class="img-pro">
                      </div>
                      <div class="profile-body">
                        <h5 class="user-name">User Name</h5>
                        <small id="job-type">Job Title</small> <br>
                        <strong>Current Salary:&nbsp;12,000$</strong> <br>
                        <strong>Company:&nbsp;N/A</strong> <br>
                        <strong>Job Location:&nbsp;City,Country</strong> <br>
                        <a href="" class="btn btn-primary">Visit Profile</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="profile">
                      <div class="profile-image">
                        <img src="image/profile.jpg" class="img-pro">
                      </div>
                      <div class="profile-body">
                        <h5 class="user-name">User Name</h5>
                        <small id="job-type">Job Title</small> <br>
                        <strong>Current Salary:&nbsp;12,000$</strong> <br>
                        <strong>Company:&nbsp;N/A</strong> <br>
                        <strong>Job Location:&nbsp;City,Country</strong> <br>
                        <a href="" class="btn btn-primary">Visit Profile</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <!-- container -->
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="job-title item-white">
                    <h3 class="item-title-blue">Corpotate Partners</h3>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="partners item-white">
                    <img src="image/p1.png" class="img-partner">
                    <img src="image/p2.png" class="img-partner">
                    <img src="image/p3.png" class="img-partner">
                    <img src="image/p2.png" class="img-partner">
                    <img src="image/p3.png" class="img-partner">
                  </div>
                </div>
              </div>
            </div>
            <!--  <div class="container-fluid p-5">
              <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center pb-3">App Download</h1>
                </div>
                <div class="col-md-6">
                  <a href="#"><img src="image/playstore.png" class="img-fluid" width="50%"></a>
                </div>
                <div class="col-md-6">
                  <a href="#"><img src="" class="img-fluid" width="50%"></a>
                </div>
                </div>
              </div> -->
            
            </div>

          <!-- end col md-->
          <div class="col-md-2 ad-space">
            <div class="ad-right">
              <a href=""><img src="image/ad1.png" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad2.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad3.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad4.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad6.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad1.png" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad2.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad3.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad4.jpg" class="img-fluid">
              </a>
            </div>
            <div class="ad-right">
              <a href=""><img src="image/ad5.jpg" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </div>
@endsection
@section('script')
@endsection