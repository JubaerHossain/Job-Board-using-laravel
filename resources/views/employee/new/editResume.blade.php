@extends('layouts.home')
@section('title','Dreamploy Job | Edit Resume')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/edit_resume.css') }}">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
<style>
.select2-container--default .select2-search--inline .select2-search__field {
    padding-right: 235px;
}
</style>

@endpush
@section('content')    
<div class="leftsidebar">
    <div class="container">
        <div class="row">
            @include('employee.partials.menu')
            <div class="col-md-9 content">

                    <div class="big-card">
                      
                        <div class="s-d-a-page e-resume">                                             
                            <p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information. </p>                      
                        </div>
                      
                 <div class="row">
                  <div class="col-md-6">
                        <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{route('empDashboard')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Edit resume</li>
                                </ol>
                        </nav>
                   </div>
                   <div class="col-md-6">
                           
                   </div>
                   </div> 
                         <div class="btn-group tab-group" role="group">                        
                             <button style="width:25%" class="btn btn-tab-education" id="hide" checked> <Span><i class="fa fa-user-circle"></i></Span><span class="d-none d-sm-block">Personal</span></button>
                             <button style="width:25%" type="button" id="education" class="btn btn-tab-education"><i class="fa fa-graduation-cap"></i></Span><span class="d-none d-sm-block">Education/Training</span></button>
                             <button style="width:25%" type="button" id="employment" class="btn btn-tab-education"><i class="fa fa-user"></i></Span><span class="d-none d-sm-block">Employment</span></button>
                             <button style="width:25%" type="button" id="photo" class="btn btn-tab-education"><i class="fa fa-image"></i></Span><span class="d-none d-sm-block">Photograph</span></button>                        
                            
                          </div>
                          @if(session('resUpSucc'))
                          <p class="alert alert-success">{{ session('resUpSucc') }}</p>
                      @endif
                <form id="res" action="{{ route('updateEmpResume') }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                    <div style="color: rgb(0, 0, 0);" id="Personal" class="collapse show" aria-labelledby="">
                         <div class="panel" >
                             <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Personal Details&nbsp;<i class="indicator icon-plus"></i>
                                        </a>
                                    </h4>
                            </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" style="height: 0px;">
                                        <div class="panel-body">
                                            <div class="all-info per_0">
                                                        <div class="tab-pane" id="about">
                                                                
                                                                <div class="hsec">
                    
                                                                    <div class="row">
                                                                        <!-- <h4 class="info-text"> Let's start with the basic information (with validation)</h4> -->
                                                                        
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="input-group">
                                                                            
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">First Name <small>
                                                                                        </small></label>
                                                                                    <input name="first_name" value="{{ $emp->first_name }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">                   
                                                                            <div class="input-group">
                                                                               
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Last Name <small></small></label>
                                                                                    <input name="last_name" value="{{ $emp->last_name }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                                <div class="input-group">                                                                                
                                                                                    <div class="form-group label-floating">
                                                                                        <label class="control-label">Father's Name</label>
                                                                                        <input name="father" value="{{ $emp->father }}" type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6">  
                                                                                <div class="input-group">                                                                                
                                                                                    <div class="form-group label-floating">
                                                                                        <label class="control-label">Mother's Name</label>
                                                                                        <input name="mother" value="{{ $emp->mother }}" type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">
                                                                               
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Mobile<small></small></label>
                                                                                    <input name="mobile" value="{{ $emp->mobile }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Email <small></small></label>
                                                                                    <input name="email" value="{{ $emp->email }}" type="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Birthday<small></small></label>
                                                                                    <input name="birthday" value="{{ $emp->birthday }}" id="datepicker" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                               
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Blood Group</label>
                                                                                    <input name="blood_group" value="{{ $emp->blood_group }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Permanent  Address</label>
                                                                                    <input name="address" value="{{ $emp->address }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Marital Status</label>
                                                                                    <select class="form-control" name="marital_status">
                                                                                            <option value="married" {{ $emp->marital_status =='married'?'selected':'no' }}>Married</option>
                                                                                            <option value="Unmarried" {{ $emp->marital_status =='Unmarried'?'selected':'no' }}>Unmarried</option>                                                                                           
                                                                                          </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">National Id No.</label>
                                                                                    <input name="nat_id" value="{{ $emp->nat_id }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Religion</label>
                                                                                    <select class="form-control" name="religion">
                                                                                            <option value="islam" {{ $emp->religion =='islam'?'selected':'no' }}>Islam</option>
                                                                                            <option value="hindu" {{ $emp->religion =='hindu'?'selected':'no' }}>Hindu</option>
                                                                                            <option value="christian" {{ $emp->religion =='christian'?'selected':'no' }}>Christianity</option>
                                                                                            <option value="buddhist" {{ $emp->religion =='buddhist'?'selected':'no' }}>Buddhist</option>
                                                                                          </select>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">  
                                                                            <div class="input-group">                                                                                
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Current Address</label>
                                                                                    <input name="curr_address" value="{{ $emp->curr_address }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            
                                                                        </div>
                    
                                                                    </div>
                    
                                                                </div>
                                                            </div>
                                              
            
                                            </div>
                                            <!-- <div class="loader">Loading...</div> -->
                                            
                                        </div>
                                </div><!-- end of collapseOne div-->
                         </div>
                         <div class="panel">
                        
                         
                                 <div class="panel-heading" role="tab" id="headingTwo">
                                     <h4 class="panel-title">
                                          <!-- do in bangla -->
                                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Career & Application Information<i class="indicator icon-plus"></i>
                                         </a>
                                     </h4>
                                 </div>
                                 <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                     <div class="panel-body">
                                      <!-- do in bangla -->
                                     
                                      <!-- do in bangla -->
                                         <div class="all-info adrs_0" style="display:block;">
                                                    <div class="csec">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="input-group">
                                                                            <label >Objective</label>
                                                                            <textarea name="objective" id="summernote1" class="form-control" row="6">{{ $emp->objective }}</textarea>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-group">
                                                                            <label >Career Summary</label>
                                                                            <textarea name="summary" id="summernote2" class="form-control" row="6">{{ $emp->summary }}</textarea>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="input-group">
                                                                            <label >Duties/Responsibilities</label>
                                                                            <textarea name="duty" id="summernote3" class="form-control" row="6">{{ $emp->duty }}</textarea>
                                                                        
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Job Type</label>
                                                                            <select class="form-control" name="job_typ">
                                                                                    <option value="full" {{ $emp->job_typ =='full'? 'selected' :'no'}}>Full Time</option>
                                                                                    <option value="part" {{ $emp->job_typ =='part'?'selected' :'no'}}>Part Time</option>
                                                                                    <option value="remote" {{ $emp->job_typ =='remote'? 'selected' :'no'}}>Remote</option>
                                                                          </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Current Salary</label>
                                                                            <input value="{{ $emp->current_income }}" name="current_income" type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Expected Salary</label>
                                                                            <input name="expected_income" value="{{ $emp->expected_income }}" type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Current Company Name</label>
                                                                            <input name="current_company" value="{{ $emp->current_company }}" type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="input-group">
                                                                        <div class="form-group label-floating">
                                                                            <label class="control-label">Experience</label>
                                                                            <input name="experience" value="{{$emp ?  $emp->experience : "" }}" type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </div>
            
                                                            </div>
                                                        </div>
                                         </div>
                 
                                     </div>
                                 </div>
                         </div>
                         <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Preferred Areas<i class="indicator icon-plus"></i>
                                        </a>
                                    </h4>
                                </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="height: 0px;">
                                               <div class="panel-body">
                                                  <div class="all-info cai_0">
                                                     
                                                    
                                                            <div class="psec">
                                                                    <div class="row">
                                                                            <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                             <label>Functional (max 2)</label><br>
                                                                                              <select class="js-example-basic-multiple-limit form-control" name="skills[]" data-live-search="true" multiple="multiple">
                                                                                                @foreach ($cat as $item)   
                                                                                                   <option {{ in_array($item->id, explode(" ", $emp->skills))  ? 'selected' : '' }} value="{{$item->id}}">{{$item->category}}</option>
                                                                                                @endforeach
                                                                                              </select>                                                                                        
                                                                                        </div>
                                                                            </div>
                                                                            {{-- <div class="col-md-6">
                                                                                 <div class="form-group">
                                                                                        <label>Special Skills (max 2)</label><br>
                                                                                        <select  name="skills" value="{{ $emp->skills }}" class="selectpicker"  name="name[]" data-live-search="true" multiple>
                                                                                           
                                                                                            <option value="" class="id">test</option>
                                                                                            <option value="" class="id">hi</option>
                                                                                            <option value="" class="id">lol</option>
                                                                                       
                                                                                        </select>
                                                                                </div>
                                                                            </div> --}}
                                                                            <div class="col-md-6">
                                                                            <div class="input-group">
                                                                            
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Prefered Job Location</label>
                                                                                    <input name="job_location" value="{{ $emp->job_location }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="input-group">
                                                                                <div class="form-group label-floating">
                                                                                    <label class="control-label">Organization Type</label>
                                                                                    <input name="org_type" value="{{ $emp->org_type }}" type="text" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        
                                                    
                                                  </div>
                                                  
                                               </div>
                                            </div>
                         </div>
                    </div>
                     <div style="color: rgb(0, 0, 0);" id="Education" class="collapse show" aria-labelledby="">
                                                       
                        <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Academic Informations&nbsp;<i class="indicator icon-plus"></i>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="all-info jclo_0">
                                                
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
                                                </div>
                                            </div>
                                        </div>
                        </div>
                      <div class="panel">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                               <h4 class="panel-title">
                                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Training/Course Summary<i class="indicator icon-plus"></i>
                                                  </a>
                                               </h4>
                                            </div>
                    
                    
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" style="height: 0px;">
                                               <div class="panel-body">
                                                  <div class="all-info ori_0">
                                                     
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
                                               </div>
                                            </div>
                       </div>
                     
                     </div>
                     <div style="color: rgb(0, 0, 0);" id="Employment" class="panel-group resume-panel-group personal" id="accordion3" role="tablist" aria-multiselectable="true">
        
                            <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFive">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFiv" aria-expanded="false" aria-controls="collapseFive">
                                                Skills<i class="indicator icon-plus"></i>
                                          </a>
                                       </h4>
                                    </div>
            
            
                                    <div id="collapseFiv" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" style="height: 0px;">
                                       <div class="panel-body">
                                          <div class="all-info ori_0">
                                             
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
                                                    </div></div>
                                       </div>
                                    </div>
                            </div>

                            <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFi">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFi" aria-expanded="false" aria-controls="collapseFive">
                                                Language<i class="indicator icon-plus"></i>
                                          </a>
                                       </h4>
                                    </div>
            
            
                                    <div id="collapseFi" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFi" style="height: 0px;">
                                       <div class="panel-body">
                                          <div class="all-info ori_0">
                                             
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
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingF">
                                       <h4 class="panel-title">
                                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseF" aria-expanded="false" aria-controls="collapseFive">
                                                Referrence<i class="indicator icon-plus"></i>
                                          </a>
                                       </h4>
                                    </div>
            
            
                                    <div id="collapseF" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingF" style="height: 0px;">
                                       <div class="panel-body">
                                          <div class="all-info ori_0">
                                             
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
                                                            </div>
                                                            @endforeach
                                                            <!-- <a href="" class="btn btn-success" id="adref"></a> -->
                                                        </div>
                                                    </div>
                                        </div>
                                    </div>
                               </div>
                           
             
                           </div>
                    </div>
                     <div style="color: rgb(0, 0, 0);" id="Photo" class="panel-group resume-panel-group personal" id="accordion3" role="tablist" aria-multiselectable="true">
        
                            <div class="panel">
                                <div class="panel-body">
                                    <div class="all-info ori_0">
                                       
                                          <div class="esec">
                                                  <div class="row">
                                                      <div class="col-sm-12">
                                                          <div class="picture-container">
                                                              <div class="picture">
                                                                  <img src="
                                                                  @if(App\User::find(Auth::id())->employee->photo != null)
                                                                  {{ asset('employe/images/profile/'.App\User::find(Auth::id())->employee->photo) }}
                                                                  @else
                                                                  {{ asset('employe/images/profile/avatar.png') }}
                                                                  @endif
                                                                 " class="picture-src" id="wizardPicturePreview"  title=""/>
                                                                  <input type="file" accept="image/jpeg" id="wizard-picture" name="photo">
                                                              </div>
                                                              <h6>Choose Picture</h6>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                 </div>
                            </div>
                    </div>
                     
                     
                        <input id="fin" type="button" class="btn btn-finish btn-fill btn-success btn-wd" name="finish" value="save" style="display: inline-block;">
                

                </form>
                     

                     
                     
                     </div>
                    </div>
                    
                    
        </div>
                    
    </div>
</div>
       
   
@endsection
@push('js')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $(".js-example-basic-multiple-limit").select2({
  maximumSelectionLength: 2
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
<script>
$(document).ready(function() {
  $('#summernote1').summernote();
});
$(document).ready(function() {
  $('#summernote2').summernote();
});
$(document).ready(function() {
  $('#summernote3').summernote();
});
</script>
<script>
    $("#fin").click(function () {
        $("#res").submit();
    });
        $(document).ready(function(){
            $("#Personal").show();
           $("#Education").hide();
           $("#Employment").hide();
           $("#Photo").hide();
            $("#hide").click(function(){             
               
                $("#Personal").show();
                $("#Education").hide();
                $("#Employment").hide();
                $("#Photo").hide();
            });
            $("#education").click(function(){ 
               $("#Personal").hide();
               $("#Photo").hide();
               $("#Employment").hide();
               $("#Education").show();
           });
            $("#employment").click(function(){ 
               $("#Personal").hide();
               $("#Education").hide();
               $("#Photo").hide();
               $("#Employment").show();
           });
            $("#photo").click(function(){ 
               $("#Personal").hide();
               $("#Education").hide();
               $("#Employment").hide();
               $("#Photo").show();
           });
        });
    </script>
    
@endpush