@extends('layouts.employee')

@section('title','Employee | Edit Resume')

@push('css')
<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


<!-- CSS Files -->
<link href="{{ asset('employe/assets/css/material-bootstrap-wizard.css') }}" rel="stylesheet" />
<link href="{{ asset('employe/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('employe/css/employee.css') }}" rel="stylesheet">
<link href="{{ asset('/css/util.css') }}" rel="stylesheet">
<!-- date picker jQ-UI -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}

@endpush

@push('js')
<!-- Bootstrap core JavaScript-->

<script src="{{ asset('employe/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('employe/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Page level plugin JavaScript-->
<script src="{{ asset('employe/vendor/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('employe/vendor/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('employe/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- Custom scripts for all pages-->
<script src="{{ asset('employe/js/sb-admin.min.js') }}"></script>
<!--   Core JS Files   -->
<script src="{{ asset('employe/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('employe/assets/js/jquery.bootstrap.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ asset('employe/assets/js/material-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="{{ asset('employe/assets/js/jquery.validate.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
<script>
    $(document).ready(function(){

        $(".personal").click(function(){
            $(".hsec").toggle("blind");
        });
        $(".career").click(function(){
            $(".csec").toggle("blind");
        });
        $(".preferred").click(function(){
            $(".psec").toggle("blind");
        });
        $(".education").click(function(){
            $(".esec").toggle("blind");
        });
        $(".training").click(function(){
            $(".tsec").toggle("blind");
        });
        $(".ref").click(function(){
            $(".rsec").toggle("blind");
        });

    });
</script>
<script>
    $("button[name='add']").click(function () {
        //$("#add_course").html("");
        //$("button[name='add']").fadeOut();
        $("#add_course").append("<div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><input type='hidden' name='course_id[]' value='null'/><label class='control-label'>Course Name:</label><input name='course_name[]' type='text' class='form-control'></div></div></div><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><label class='control-label'>Course Duration</label><input name='course_duration[]' type='text' class='form-control'></div></div></div>");
        //$("#add_course").append("<div class='col-sm-12'>hi</div>");
    });

    //add reference
    $("button[name='add_butt_ref']").click(function () {
        $("#add_ref").append("<div class='row'><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><input type='hidden' name='ref_id[]' value='null' /><label class='control-label'>Reference Name </label><input name='ref_name[]' type='text' class='form-control'></div></div></div><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><label class='control-label'>Organization Name </label><input name='ref_org_name[]' type='text' class='form-control'></div></div></div><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><label class='control-label'>Designation Name </label><input name='ref_designation[]' type='text' class='form-control'></div></div></div><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><label class='control-label'>Phone Number </label><input name='ref_phone[]' type='text' class='form-control'></div></div></div><div class='col-sm-6'><div class='input-group'><span class='input-group-addon'></span><div class='form-group label-floating'><label class='control-label'>Email</label><input name='ref_email[]' type='text' class='form-control'></div></div></div></div>");
    });

    //submit the form
    $("#fin").click(function () {
        $("#res").submit();
    });
</script>
@endpush

@section('content')
    <div class="content-safari">
        <div class="container-fluid">
            <!--   Big container   -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <!--      Wizard container        -->
                        <div class="wizard-container m-b-50">
                            <div class="card wizard-card" data-color="green" id="wizardProfile">
                                <form id="res" action="{{ route('updateEmpResume') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

                                    <div class="wizard-header">
                                        <h3 class="wizard-title">
                                            Update Your Profile
                                        </h3>
                                        @include('errors.error')
                                        @if(session('resUpSucc'))
                                            <p class="alert alert-success">{{ session('resUpSucc') }}</p>
                                        @endif
                                        <h5>This information will let company know more about you.</h5>
                                    </div>
                                    <div class="wizard-navigation">
                                        <ul>
                                            <li><a href="#about" data-toggle="tab">Basic Info</a></li>
                                            <li><a href="#account" data-toggle="tab">Education/Training</a></li>
                                            <li><a href="#address" data-toggle="tab">Other Information</a></li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane" id="about">
                                            <div class="personal">
                                                <span class="info-name">Personal Info</span>
                                            </div>
                                            <div class="hsec">

                                                <div class="row">
                                                    <!-- <h4 class="info-text"> Let's start with the basic information (with validation)</h4> -->
                                                    <div class="col-sm-4 col-sm-offset-1">
                                                        <div class="picture-container">
                                                            <div class="picture">
                                                                <img src="@if(Auth::check())
                                                                @if(App\User::find(Auth::id())->employee->photo != null)
                                                                {{ asset('employe/images/profile/'.Auth::id().'.jpg') }}
                                                                @else
                                                                {{ asset('employe/images/profile/avatar.png') }}
                                                                @endif
                                                                @endif" class="picture-src" id="wizardPicturePreview"  title=""/>
                                                                <input type="file" accept="image/jpeg" id="wizard-picture" name="photo">
                                                            </div>
                                                            <h6>Choose Picture</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">First Name <small>
                                                                    </small></label>
                                                                <input name="first_name" value="{{ $emp->first_name }}" type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">record_voice_over</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Last Name <small></small></label>
                                                                <input name="last_name" value="{{ $emp->last_name }}" type="text" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">stay_current_portrait</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Mobile<small></small></label>
                                                                <input name="mobile" value="{{ $emp->mobile }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">email</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Email <small></small></label>
                                                                <input name="email" value="{{ $emp->email }}" type="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">assignment</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Birthday<small></small></label>
                                                                <input name="birthday" value="{{ $emp->birthday }}" id="datepicker" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">invert_colors</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Blood Group</label>
                                                                <input name="blood_group" value="{{ $emp->blood_group }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">location_on</i>
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Address</label>
                                                                <input name="address" value="{{ $emp->address }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="career">
                                                <span class="info-name">Career & Application Information</span>
                                            </div>
                                            <div class="csec">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">face</i>
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label >Objective</label>
                                                                <textarea name="objective" class="form-control" row="3">{{ $emp->objective }}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Current Salary</label>
                                                                <input value="{{ $emp->current_income }}" name="current_income" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Expected Salary</label>
                                                                <input name="expected_income" value="{{ $emp->expected_income }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Current Company Name</label>
                                                                <input name="current_company" value="{{ $emp->current_company }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Experience</label>
                                                                <input name="experience" value="{{$emp ?  $emp->experience : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="preferred">
                                                <span class="info-name">Preferred Areas</span>
                                            </div>
                                            <div class="psec">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">invert_colors</i>
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Prefered Job Location</label>
                                                                <input name="job_location" value="{{ $emp->job_location }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Skills</label>
                                                                <input name="skills" value="{{ $emp->skills }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">invert_colors</i>
                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Organization Type</label>
                                                                <input name="org_type" value="{{ $emp->org_type }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="account">
                                            <div class="education">
                                                <span class="info-name">Education Summary</span>
                                            </div>
                                            <div class="esec">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">

                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Institute Name </label>
                                                             
                                                                <input name="inst1_name" value="{{ $edu ? $edu->inst1_name : "" }}" type="text" class="form-control">                                                                    
                                                               
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst1_degree" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst1_degree }}">{{ $edu->inst1_degree }}</option>
                                                                    @else
                                                                        <option selected value="">Select Degree</option>
                                                                    @endif
                                                                    <option value="Psc/5 pass">Psc/5 pass</option>
                                                                    <option value="Jsc/8 pass">Jsc/8 pass</option>
                                                                    <option value="Ssc">Ssc</option>
                                                                    <option value="Hsc">Hsc</option>
                                                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                                                    <option value="Masters">Masters</option>
                                                                    <option value="PhD">PhD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst1_result" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst1_result }}">{{ $edu->inst1_result }}</option>
                                                                    @else
                                                                        <option selected value="">Select Result</option>
                                                                    @endif
                                                                    <option value="Appeared">Appeared</option>
                                                                    <option value="Enrolled">Enrolled</option>
                                                                    <option value="First Division">First Division</option>
                                                                    <option value="Second Division">Second Division</option>
                                                                    <option value="Third Division">Third Division</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Subject Name </label>
                                                                <input name="inst1_subject" value="{{ $edu ? $edu->inst1_subject : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Course Duration</label>
                                                                <input name="inst1_duration" value="{{ $edu ? $edu->inst1_duration : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                                <div class="form-group label-floating">
                                                                <label class="control-label">Passing year</label>
                                                                <input name="inst1_year" value="{{ $edu ? $edu->inst1_year : "" }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Result in GPA</label>
                                                                <input name="inst1_gpa" value="{{ $edu ? $edu->inst1_gpa : "" }}" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> <!--  row end -->

                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">

                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Institute Name </label>
                                                                <input name="inst2_name" value="{{ $edu ? $edu->inst2_name : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst2_degree" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst2_degree }}">{{ $edu->inst2_degree }}</option>
                                                                    @else
                                                                        <option selected value="">Select Degree</option>
                                                                    @endif
                                                                    <option value="Psc/5 pass">Psc/5 pass</option>
                                                                    <option value="Jsc/8 pass">Jsc/8 pass</option>
                                                                    <option value="Ssc">Ssc</option>
                                                                    <option value="Hsc">Hsc</option>
                                                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                                                    <option value="Masters">Masters</option>
                                                                    <option value="PhD">PhD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst2_result" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst2_result }}">{{ $edu->inst2_result }}</option>
                                                                    @else
                                                                        <option selected value="">Select Result</option>
                                                                    @endif
                                                                    <option value="Appeared">Appeared</option>
                                                                    <option value="Enrolled">Enrolled</option>
                                                                    <option value="First Division">First Division</option>
                                                                    <option value="Second Division">Second Division</option>
                                                                    <option value="Third Division">Third Division</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Subject Name </label>
                                                                <input name="inst2_subject" value="{{ $edu ?  $edu->inst2_subject : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Course Duration</label>
                                                                <input name="inst2_duration" value="{{ $edu ? $edu->inst2_duration : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Passing year</label>
                                                                <input name="inst2_year" value="{{ $edu ? $edu->inst2_year : "" }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Result in GPA</label>
                                                                <input name="inst2_gpa" value="{{ $edu ? $edu->inst2_gpa : "" }}" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> <!--  row end -->
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">

                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Institute Name </label>
                                                                <input name="inst3_name" value="{{ $edu ? $edu->inst3_name : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst3_degree" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst3_degree }}">{{ $edu->inst3_degree }}</option>
                                                                    @else
                                                                        <option selected value="">Select Degree</option>
                                                                    @endif
                                                                    <option value="Psc/5 pass">Psc/5 pass</option>
                                                                    <option value="Jsc/8 pass">Jsc/8 pass</option>
                                                                    <option value="Ssc">Ssc</option>
                                                                    <option value="Hsc">Hsc</option>
                                                                    <option value="Bachelor/Honors">Bachelor/Honors</option>
                                                                    <option value="Masters">Masters</option>
                                                                    <option value="PhD">PhD</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <!-- <label class="control-label">Job Type</label>-->
                                                                <select class="custom-select custom-select-lg mb-4" name="inst3_result" type="text">
                                                                    @if($edu)
                                                                        <option selected value="{{ $edu->inst3_result }}">{{ $edu->inst3_result }}</option>
                                                                    @else
                                                                        <option selected value="">Select Result</option>
                                                                    @endif
                                                                    <option value="Appeared">Appeared</option>
                                                                    <option value="Enrolled">Enrolled</option>
                                                                    <option value="First Division">First Division</option>
                                                                    <option value="Second Division">Second Division</option>
                                                                    <option value="Third Division">Third Division</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Subject Name </label>
                                                                <input name="inst3_subject" value="{{ $edu ? $edu->inst3_subject : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Course Duration</label>
                                                                <input name="inst3_duration" value="{{ $edu ? $edu->inst3_duration : "" }}" type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                        <span class="input-group-addon">
                                                        </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Passing year</label>
                                                                <input name="inst3_year" value="{{ $edu ?  $edu->inst3_year : "" }}" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Result in GPA</label>
                                                                <input name="inst3_gpa" value="{{ $edu ? $edu->inst3_gpa : "" }}" type="number" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div> <!--  row end -->


                                            </div>
                                            <div class="training">
                                                <span class="info-name">Training/Course Summary</span>
                                            </div>
                                            <div class="tsec">
                                                <div class="row" id="add_course">
                                                    @foreach($train as $t)
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <input type="hidden" name="course_id[]" value="{{ $t->id }}">
                                                                <span class="input-group-addon">

                                                                </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Course Name </label>
                                                                <input name="course_name[]" type="text" class="form-control" value="{{ $t->course_name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">

                                                            </span>
                                                            <div class="form-group label-floating">
                                                                <label class="control-label">Course Duration</label>
                                                                <input name="course_duration[]" type="text" class="form-control" value="{{ $t->course_duration }}">
                                                            </div>
                                                        </div>
                                                        <a style="float: right;color:red;" href="{{ route('delEmpResume',$t->id) }}">delete</a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="row col-sm-12">
                                                    <button type="button" name="add" class="btn btn-success">more</button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane" id="address">
                                            <div class="row">
                                                <div class="education">
                                                    <span class="info-name">Skills</span>
                                                </div>
                                                <div class="esec">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="input-group">
                                                                    <span class="input-group-addon">

                                                                    </span>
                                                                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">Add Top 5 skills</label>
                                                                    <input name="top_skills" value="{{ $emp->top_skills }}" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">

                                                                </span>
                                                                <div class="form-group">
                                                                    <label for="skilldesc">Skills Descriptions</label>
                                                                    <textarea class="form-control" id="skills_description" rows="3">{{ $emp->skills_description }}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="training">
                                                    <span class="info-name">Language</span>
                                                </div>
                                                <div class="tsec">
                                                    <div class="row">
                                                        <div class="col-md-10 offset-md-2">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">

                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <!-- <label class="control-label">Job Type</label>-->
                                                                    <select class="custom-select custom-select-lg mb-4" name="language" type="text">
                                                                        @if($emp->language != null)
                                                                            <option selected value="{{ $emp->language }}">{{ $emp->language }}</option>
                                                                        @else
                                                                            <option selected value="">Select Degree</option>
                                                                        @endif
                                                                        <option value="English">English</option>
                                                                        <option value="Bangla">Bangla</option>
                                                                        <option value="Hindi">Hindi</option>
                                                                        <option value="Arabic">Arabic</option>
                                                                        <option value="Latin">Latin</option>
                                                                        <option value="other">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ref">
                                                    <span class="info-name">Referrence</span>
                                                </div>
                                                <div class="rsec">
                                                    <div class="row" id="add_ref">
                                                        @foreach($ref as $r)
                                                        <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                                <input type="hidden" name="ref_id[]" value="{{ $r->id }}" />
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Reference Name </label>
                                                                    <input name="ref_name[]" type="text" value="{{ $r->ref_name }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Organization Name </label>
                                                                    <input name="ref_org_name[]" type="text" value="{{ $r->ref_org_name }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Designation Name </label>
                                                                    <input name="ref_designation[]" type="text" value="{{ $r->ref_designation }}" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Phone Number </label>
                                                                    <input name="ref_phone[]" value="{{ $r->ref_phone }}" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                </span>
                                                                <div class="form-group label-floating">
                                                                    <label class="control-label">Email</label>
                                                                    <input name="ref_email[]" value="{{ $r->ref_email }}" type="text" class="form-control">
                                                                </div>

                                                            </div>
                                                        </div>
                                                            <div class="col-sm-6">
                                                                <a style="float:right;margin-right:10%;color:red;" href="{{ route('delRefResume',$r->id) }}">delete</a>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        <!-- <a href="" class="btn btn-success" id="adref"></a> -->
                                                    </div>
                                                    <div class="row col-sm-12">
                                                        <button name="add_butt_ref" type="button" class="btn btn-success">Add more</button>
                                                    </div>
                                                </div>
                                </form>

                            </div>
                        </div> <!-- wizard container -->
                        <div class="wizard-footer"> <div class=""> <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
                                <input id="fin" type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Finish' />
                            </div>

                            <div class="">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div> <!--  big container -->


        </div>

    </div>
    </div>
    </form>
    </div>
@endsection