@extends('layouts.admin')

@section('title','Admin | Job show')
@push('css')
<link href="{{ asset('employe/css/stylejob.css') }}" rel="stylesheet"> 
@endpush

@section('content')
<nav aria-label="breadcrumb" class="pl-4">
        
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admDashboard')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Job show</li>
        </ol>
        
</nav>
<main role="main" class="col-md-12 pb-5 pl-4">
        <div class="container">
            <div class="login jobshow">
                <div class="row">
                    <div class="col-md-8">
                        <div class="job-apply-left">
                           
                            
                            <div class="key-points">
                                <h4>Job Title</h4>
                                <p> {{ $getJob->title }}</p>
                            </div>
                            <div class="job-description">
                                <h5>Job Description / Responsibility </h5>
                                <div class="detail-list">
                                    <p>{{ $getJob->attributes->details }}</p>
                                </div>
                            </div>
                            <div class="job-nature">
                                <h5>Job Nature</h5>
                                <span>{{ $getJob->type }}</span>
                            </div>
                            <div class="">
                                <h5>Educational Requirement</h5>
                                <div class="detail-list">
                                   <p> {{ $getJob->attributes->education_requirement }}</p>
                                </div>
                            </div>
                            <div class="experience">
                                <h5>Experience Requirements</h5>
                                <div class="detail-list">
                                    <p>{{ $getJob->attributes->experience_requirement }}</p>
                                </div>
                            </div>
                            <div class="job-requirements">
                                <h5>Job Requirements</h5>
                                <div class="detail-list">
                                    <p>{{ $getJob->attributes->job_requirement }}</p>
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
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="job-apply-right">
                            <div class="job-r-t">
                                <div class="category">
                                    <h6>Category:&nbsp; <span>{{ \App\Category::find($getJob->category_id)->category }}</span></h6>
                                </div>
                            </div>
                            <div class="job-summary">
                                <h4>Job Summary :</h4>
                                <div class="job-body">
                                    <div class="job-body-item">
                                        <p><strong>Published On:</strong>
                                        {{ $getJob->created_at->format('d M Y') }}
                                        </p>
                                    </div>
                                    <div class="job-body-item">
                                        <P><strong>Vacancy:</strong>
                                        {{ $getJob->attributes->vacancy }}
                                        </p>
                                    </div>
                                    <div class="job-body-item">
                                        <p><strong>Employment Status:&nbsp;</strong>
                                        {{ $getJob->type }}
                                        </p>
                                    </div>
                                    <div class="job-body-item">
                                        <p><strong>Employment Experience:&nbsp;</strong>
                                             {{ $getJob->attributes->year_of_experience_upper }} to {{ $getJob->attributes->year_of_experience_lower }} Years
                                        </p>
                                    </div>
                                    <div class="job-body-item">
                                        <p><strong>Gender:&nbsp;</strong>
                                           {{ $getJob->attributes->gender_type }}
                                        </p>
                                    </div>
                                     <div class="job-body-item">
                                        {{--<strong>Age:&nbsp;</strong>--}}
                                        {{--<span>25-30 Years</span>--}}
                                    </div>
                                    <div class="job-body-item">
                                        <p><strong>Job Location:&nbsp;</strong>
                                           {{ $getJob->attributes->job_location }}
                                        <p>
                                    </div>
                                    <div class="job-body-item">
                                        <p><strong>Salay:&nbsp;</strong>
                                           {{ $getJob->salary_upper }} - {{ $getJob->salary_lower }}
                                        </p>
                                    </div>
                                   <div class="job-body-item">
                                    <p><strong>Deadline:&nbsp;</strong>
                                       {{ $getJob->deadline }}
                                    <p>
                                    </div>
                                </div>
                                
                            </div>
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
</main>
@endsection