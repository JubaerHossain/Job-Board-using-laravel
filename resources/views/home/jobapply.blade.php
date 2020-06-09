@extends('layouts.home')

@section('title','Job Apply')

@section('content')

        <div class="container">
            <div class="login">
                <div class="row">
                    <div class="col-md-8">
                        <div class="job-apply-left">
                            <div class="job-position">
                                <h5>{{ $getJob->title }}</h5>
                            </div>
                            <div class="company-name-logo">
                                <div class="d-flex justify-content-between">
                                    <div class="company-name">
                                        <h4>{{ $getJob->company->name }}</h4>
                                    </div>
                                    <div class="company-logo">
                                        <img src="{{ asset('/company/images/company_logo/'.$getJob->company->image) }}" class="logo"> <br>
                                    </div>
                                </div>
                                <a href="" class="nav-other">View Other Jobs Of this company</a>

                            </div>
                            <div class="key-points">
                                <h5>Key Points</h5>
                                <p> {{ $getJob->attributes->key_points }} </p>
                            </div>
                            <div class="job-description">
                                <h5>Job Description / Responsibility </h5>
                                <div class="detail-list">
                                    {{ $getJob->attributes->details }}
                                </div>
                            </div>
                            <div class="job-nature">
                                <h5>Job Nature</h5>
                                <span>{{ $getJob->type }}</span>
                            </div>
                            <div class="education">
                                <h5>Educational Requirement</h5>
                                <div class="detail-list">
                                    {{ $getJob->attributes->education_requirement }}
                                </div>
                            </div>
                            <div class="experience">
                                <h5>Experience Requirements</h5>
                                <div class="detail-list">
                                    {{ $getJob->attributes->experience_requirement }}
                                </div>
                            </div>
                            <div class="job-requirements">
                                <h5>Job Requirements</h5>
                                <div class="detail-list">
                                    {{ $getJob->attributes->job_requirement }}
                                </div>
                            </div>
                            <div class="job-location">
                                <h5>Job Location</h5>
                                <div class="detail-list">
                                    <p>{{ $getJob->country }},{{ $getJob->state }},{{ $getJob->city }}</p>
                                </div>
                            </div>
                            <div class="salary-range">
                                <h5>Salary Range</h5>
                                <div class="detail-list">
                                    <p>{{ $getJob->salary_upper }} - {{ $getJob->salary_lower }}</p>
                                </div>
                            </div>

                            <div class="spi">
                                <h6 class="read-bf">Read Before Apply</h6>
                                <h6 class="m-t-50">Have to attend full one day practical session before hiring....</h6>
                                <h6><span>*Photograph</span> must be enclosed with the resume.</h6>
                                <h5 class="apply-pro"> Apply Procedure </h5>
                                @if($applyStatus == 0)
                                <a href="{{ route('showApplyJob',$id) }}" class="btn btn-success">Apply Online</a>
                                @else
                                    <a href="#" class="btn btn-warning disabled">Already Applied</a>
                                @endif
                                {{--<p class="fs-13">Application Deadline : June 23, 2018</p>--}}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="job-apply-right">
                            <div class="job-r-t">
                                <div class="category">
                                    <h6>Category:&nbsp; <span>{{ \App\Category::find($getJob->category_id)->category }}</span></h6>
                                </div>
                            </div>
                            <div class="job-summary">
                                <h5>Job Summary</h5>
                                <div class="job-body">
              <span class="job-body-item">
              <strong>Published On:&nbsp;</strong>
              <span>{{ $getJob->created_at->format('d M Y') }}</span>
              </span>
                                    <span class="job-body-item">
              <strong>Vacancy:&nbsp;</strong>
              <span>{{ $getJob->attributes->vacancy }}</span>
              </span>
                                    <span class="job-body-item">
              <strong>Employment Status:&nbsp;</strong>
              <span>{{ $getJob->type }}</span>
              </span>
                                    <span class="job-body-item">
              <strong>Employment Experience:&nbsp;</strong>
              <span>{{ $getJob->attributes->year_of_experience_upper }} to {{ $getJob->attributes->year_of_experience_lower }} Years</span>
              </span>
                                    <span class="job-body-item">
              <strong>Gender:</strong>
              <span>{{ $getJob->attributes->gender_type }}</span>
              </span>
                                    <span class="job-body-item">
              {{--<strong>Age:&nbsp;</strong>--}}
              {{--<span>25-30 Years</span>--}}
              </span>
                                    <span class="job-body-item">
              <strong>Job Location:&nbsp;</strong>
              <span>{{ $getJob->attributes->job_location }}</span>
              </span>
                                    <span class="job-body-item">
              <strong>Salay:&nbsp;</strong>
              <span>{{ $getJob->salary_upper }} - {{ $getJob->salary_lower }}</span>
              </span>
                                    <span class="job-body-item">
              <strong>Deadline:&nbsp;</strong>
              <span>{{ $getJob->deadline }}</span>
              </span>
                                </div>
                                <div class="job-sum-ot">
              <span class="job-body-ot">
              <a href="" class="nav-sum"><strong><i class="fa fa-star"></i>Add to Favourite&nbsp;</strong></a>
              </span>
                                    <span class="job-body-ot">
                <a href="" onclick="window.print()" class="nav-sum"><strong><i class="fa fa-print"></i>Print this job&nbsp;</strong></a>
              </span>
                                    <span class="job-body-ot">
             <a href="" class="nav-nc"><strong><i class="fa fa-eye"></i>View all job to this company&nbsp;</strong></a>
              </span>
                                    <div class="social" id="socia">
                                        <a href="{{ $getJob->company->facebook }}"><i class="fa fa-facebook"></i></a>
                                        <a href="{{ $getJob->company->twitter }}"><i class="fa fa-twitter"></i></a>
                                        <a href="{{ $getJob->company->linkedin }}"><i class="fa fa-linkedin"></i></a>
                                        <a href="{{ $getJob->company->website }}"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="job-apply-ads">
                            <img src="image/ad1.png" class="img-fluid">
                        </div>
                        <div class="job-apply-ads">
                            <img src="image/ad1.png" class="img-fluid">
                        </div>
                    </div>
                    <!-- 		<div class="col-md-1">
                                <div class="job-apply-ads">
                                    <img src="image/ad1.png" class="img-fluid">
                                </div>
                            </div> -->
                </div>
            </div>
        </div>

@endsection