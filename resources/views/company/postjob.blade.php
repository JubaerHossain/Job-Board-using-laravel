@extends('layouts.company')

@section('title','Company | Postjob')

@section('content')
    <div class="main m-t-50">
        <div class="container">
            <div class="col-md-12">
                <div class="job-info-post">
                    <h3 class="post-title">Job Information</h3>
                    <div class="col-md-12">
                        @if(session('job_success'))
                            <p class="alert alert-success">{{ session('job_success') }}</p>
                        @endif
                        @include('errors.error')
                        <form action="{{ route('postJobData') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Job Title*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="title here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="vacancy" class="col-sm-2 offset-md-2 col-form-label">No of Vacancy*</label>
                                <div class="col-sm-4">
                                    <input type="number" name="vacancy" class="form-control" id="dis" value="1" placeholder="total vacancy">
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="vacancy_status" value="not_available" id="na">
                                        <label class="form-check-label" for="na">
                                            N/A
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Job Category*</label>
                                <div class="col-sm-6">
                                    <div class="post-cat" id="cat">

                                        @foreach($jobCategory as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="job_category" id="{{ $category->category }}" value="{{ $category->id }}">
                                            <label class="form-check-label" for="{{ $category->category }}">
                                                {{ $category->category }}
                                            </label>
                                        </div>
                                        @endforeach


                                    </div><!-- post-cat-end -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Job Category*</label>
                                <div class="col-sm-6">
                                    <div class="post-cat" id="sub_cat">



                                    </div><!-- post-cat-end -->
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 offset-md-2 col-form-label" for="">Organization</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="organization" id="">
                                        <option value="NGO">NGO</option>
                                        <option value="Government">Government</option>
                                        <option value="Private">Private</option>
                                        <option value="International Agencies">International Agencies</option>
                                        <option value="Semi Government">Semi Government</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Job Nature</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="job_type" class="btn rc" id="full" value="Full-Time">
                                    <label for="full">Full-Time</label>
                                    <input type="radio" name="job_type" class="btn rc" id="part" value="Part-Time">
                                    <label for="part">Part-Time</label>
                                    <input type="radio" name="job_type" class="btn rc" id="remote" value="Remote">
                                    <label for="remote">Remote</label>
                                    <input type="radio" name="job_type" class="btn rc" id="free" value="Freelance">
                                    <label for="free">Freelance</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 offset-md-2 col-form-label">Job Range</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="job_range" class="btn rc" id="entry" value="Entry">
                                    <label for="entry">Entry Range</label>
                                    <input type="radio" name="job_range" class="btn rc" id="mid" value="Mid">
                                    <label for="mid">Mid Range</label>
                                    <input type="radio" name="job_range" class="btn rc" id="sen" value="Senior">
                                    <label for="sen">Senior Range</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 offset-md-2 col-form-label">Gender:</label>
                                <div class="col-sm-8">
                                    <input type="radio" name="gender_type" class="btn rc" id="male" value="Male">
                                    <label for="male">Male</label>
                                    <input type="radio" name="gender_type" class="btn rc" id="fema" value="Female">
                                    <label for="fema">Female</label>
                                    <input type="radio" name="gender_type" class="btn rc" id="sena" value="Others">
                                    <label for="sena">Others</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 offset-md-2 col-form-label">Key Points: </label>
                                <div class="col-sm-8">
                                    <textarea name="key_points" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descrip" class="col-sm-2 offset-md-2 col-form-label">Job Description</label>
                                <div class="col-sm-8">
                                    <textarea name="details" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-2 offset-md-2 col-form-label">Experience Requirements:</label>
                                <div class="col-sm-8">
                                    <textarea name="experience_requirement" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-inline row">
                                <label for="vacancy" class="col-sm-2 offset-md-2 col-form-label">Experience Required</label>
                                <div class="col-sm-4">
                                    <input type="number" name="year_of_experience_upper" class="form-control" placeholder="Experience From years">

                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <label for="" class="mx-4">To</label>
                                        <input type="number" name="year_of_experience_lower" class="form-control" placeholder="Experience To years">
                                        {{--<input class="form-check-input" type="checkbox" value="" id="checker" checked="checked">--}}
                                        {{--<label class="form-check-label" for="checker">--}}
                                            {{--Freshers--}}
                                        {{--</label>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Educational Requirements*</label>
                                <div class="col-sm-8">
                                    <input name="education_requirement" type="text" class="form-control" id="title" placeholder="min education here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Job Requirements*</label>
                                <div class="col-sm-8">
                                    <input name="job_requirement" type="text" class="form-control" id="title" placeholder="job requirements...">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Additional Requirements</label>
                                <div class="col-sm-8">
                                    <textarea name="additional_requirements" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Compensation & Other Benefits</label>
                                <div class="col-sm-8">
                                    <textarea name="benefits" class="form-control" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Application Dealine*</label>
                                <div class="col-sm-8">
                                    <input type="text" name="deadline" class="form-control" id="datepicker" placeholder="deadline here" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 offset-sm-2 col-form-label">Select Country</label>
                                <div class="col-sm-8">
                                    <select id="country" name="country" class="custom-select">

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 offset-sm-2 col-form-label">Select State</label>
                                <div class="col-sm-8">
                                    <select id="state" name="state" class="custom-select">
                                        <option value="">Select State</option>
                                    </select>
                                </div>
                            </div>{{-- 
                            <div class="form-group row">
                                <label class="col-sm-2 offset-sm-2 col-form-label">Select City</label>
                                <div class="col-sm-8">
                                    <select id="city" name="city" class="custom-select">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="location" class="col-sm-2 offset-md-2 col-form-label">Full Location</label>
                                <div class="col-sm-8">
                                    <input type="text" name="job_location" class="form-control" id="location" placeholder="Full Location"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="salary" class="col-sm-2 offset-md-2 col-form-label">Salary Range</label>
                                <div class="col-sm-3">
                                    <input type="number" name="salary_upper" class="form-control" id="salary" placeholder="min salary">
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" name="salary_lower" class="form-control" id="salary" placeholder="max salary">
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" name="salary_type" type="checkbox" value="negotiable" id="nego">
                                        <label class="form-check-label" for="nego">
                                            Negotiable
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Resume Recieve Option*</label>
                                <div class="col-sm-8">
                                    <input type="checkbox" name="applyOption[]" value="Apply Online" id="onl">
                                    <label for="onl">Apply Online</label>

                                    <input type="checkbox" name="applyOption[]" value="Email CV" id="onl1">
                                    <label for="onl1">Email Cv</label>

                                    <input type="checkbox" name="applyOption[]" value="Hard Copy" id="onl2">
                                    <label for="onl2">Hard Copy</label>

                                    <input type="checkbox" name="applyOption[]" value="Walk In Interview" id="onl3">
                                    <label for="onl3">Walk In Interview</label>
                                </div>
                            </div>

                            {{--<div class="form-group row">--}}
                                {{--<label for="title" class="col-sm-2 offset-md-2 col-form-label">Special Instruction</label>--}}
                                {{--<div class="col-sm-8">--}}
                                    {{--<textarea class="form-control" rows="3"></textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Photograph enclose</label>
                                <div class="col-sm-8">
                                    <div class="toggleWrapper">
                                        <input type="checkbox" name="photo_enclose" class="mobileToggle" id="toggle2" value="yes">
                                        <label for="toggle2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="title" class="col-sm-2 offset-md-2 col-form-label">Publish Status</label>
                                <div class="col-sm-8">
                                    <div class="toggleWrapper">
                                        <input type="checkbox" name="publish_status" class="mobileToggle" id="toggle1" value="yes">
                                        <label for="toggle1"></label>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success" name="submit" value="Submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function(){
            //datepicker
            $( function() {
                $( "#datepicker" ).datepicker();
            } );
                console.log(window.location.hostname);
            //get country list
            $.ajax({
                url: window.origin+'/countryApi/country',
                method : 'GET',
                success:function (data) {
                    $('#country').html("");

                    for(var i=0;i<data.country[0].length;i++){
                        $('#country').append("<option value='"+data.country[0][i]+"'>"+data.country[0][i]+"</option>");
                    }
                }
            });

            //change state
            $("#country").change(function () {
                var c = $("#country").val();
                $.ajax({
                    url: window.origin+'/countryApi/state/'+c,
                    method : 'GET',
                    success:function (data) {
                        $('#state').html("");
                        //console.log(data);
                        for(var i=0;i<data.state[0].length;i++){
                            $('#state').append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                        }
                    }
                });
            });

            //change city
            $("#state").change(function () {
                var c = $("#state").val();
                $.ajax({
                    url: window.origin+'/countryApi/city/'+c,
                    method : 'GET',
                    success:function (data) {
                        $('#city').html("");

                        for(var i=0;i<data.state[0].length;i++){
                            $('#city').append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                        }
                    }
                });
            });

            //select subcategory
            $("input[name='job_category']").change(function () {
                var ca = $("input[name='job_category']:checked").val();
                console.log(ca);
                $.ajax({
                    url: window.origin+'/countryApi/sub-category/'+ca,
                    method: 'GET',
                    success:function (data) {
                        $('#sub_cat').html("");
                        for(var i=0;i<data.length;i++){
                            $('#sub_cat').append("<div class='form-check'><input class='form-check-input' type='radio' name='sub_category' id='"+data[i].id+"' value='"+data[i].id+"'><label class='form-check-label' for='"+data[i].id+"'>"+data[i].sub_category+"</label></div>");
                        }
                    }
                });
            });

        });
    </script>

@endsection