@extends('layouts.home')
@section('title','Dreamploy Job | View Resume')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">
@endpush
@section('content')
    
            <div class="leftsidebar">
                    <div class="container">
                    <div class="row">
                     @include('employee.partials.menu')  
                    
                    <div class="col-md-9 col-sm-12">
                    
                            <div class="panel">
                               <div class="panel-heading panel-heading-01"><i class="fa fa-eye"></i>View Resume</div>
                    
                                <div class="s-d-a-page v-resume">
                                   
                                </div>
                    
                               <div class="panel-body panel-body-02">
                                    <div class="view-cv-wrapper" style="margin-bottom: 6px;">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="download-list">
                                                        <h4 class="title"> Download: </h4>
                                                        <ul>
                                                            <li>
                                                                <button class="btn btn-outline-info btn-sm" href="#" onclick="printPdf('resume')" title="Word Format">
                                                                    <i class="fa fa-file-word-o"></i>
                                                                </button>
            
                                                            </li> 
                                                            <li>
                                                                <button class="btn btn-outline-info btn-sm" onclick="printPdf('resume')" title="PDF Format">
                                                                    <i class="fa fa-file-pdf-o"></i>
                                                                </button>
            
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    
                                                </div>
                                            </div>
                                        </div>
                               
                     
                               <div id="resume">	
                                
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750">
                                    
                                    
                                    
                                            <tbody><tr>
                                            <td colspan="6">
                                            <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
                                                <tbody><tr>
                                                <td width="73%" height="" align="left" valign="bottom" class="BDJApplicantsName">
                                                <!--Applicant's Name:-->
                                                {{ $emp->first_name }} {{ $emp->last_name }}
                                                </td>
                                                
                                                <td width="27%" rowspan="2" align="right" valign="bottom">
                                                <!--Photograph:-->
                                                
                                                    <table width="140" height="140" border="0" align="center" cellpadding="0" cellspacing="7" bgcolor="#dadce1">
                                                        <tbody><tr> 
                                                        <td width="126" height="135" align="center" bgcolor="#e2e4e5" valign="middle"> 
                                                        <img src="@if($user->employee->photo != null)
                                                        {{ asset('employe/images/profile/'.$user->employee->photo) }}
                                                        @else
                                                        {{ asset('employe/images/profile/avatar.png') }}
                                                        @endif" width="124" height="135">
                                                        </td>
                                                        </tr>
                                                    </tbody></table>
                                                
                                                </td>
                                                </tr>
                                        
                                                <tr>
                                                <td class="BDJNormalText04" align="left" valign="middle">
                                                <!--Contact Address:-->
                                                
                                                {{ $emp->address }} 		 
                                                <!--Home Phone:-->
                                                
                                                    <br>
                                                    {{ $user->country }}
                                                    <br>
                                                    {{ $user->phone }}<br>	 
                                                <!--Office Phone:-->
                                                
                                                                                                  
                                                    <br>		
                                                    e-mail : {{ $user->email }}
                                                </td>
                                                </tr>
                                            </tbody></table>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                        
                                        <!---------------
                                        CAREER OBJECTIVE:
                                        ----------------->
                    
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750">	
                                        <tbody><tr>
                                        <td colspan="6" style="border-bottom:1px solid #000000;">&nbsp;</td>
                                        </tr>
                                        
                                        <tr><td colspan="6">&nbsp;</td></tr>		 
                                        
                                        <tr>
                                        <td colspan="6" class="BDJHeadline01"><u>Career Objective:</u></td>
                                        </tr>
                                        
                                        <tr>
                                        <td colspan="6" align="left" style="padding-left:5px;word-break: break-all;" class="BDJNormalText01">
                                            {{ $emp->objective }}	
                                        </td>
                                        </tr>		
                                        </tbody>
                                    </table>
                    
                                    <!--------------
                                    CAREER SUMMARY :
                                    ---------------->
                    
                                    <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">	
                                        <tbody><tr>
                                        <td colspan="6" class="BDJHeadline01"><u>Career Summary:</u></td>
                                        </tr>
                                        
                                        <tr>
                                        <td colspan="6" align="left" style="padding-left:5px;word-break: break-all;" class="BDJNormalText01">
                                            {{ strip_tags($emp->summary) }}
                                        </td>
                                        </tr>
                                        <br>
                                        </tbody>
                                    </table>	 
                    
                    
                                    <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
                                                    
                                                    <tbody>
                                                    <tr>
                                                    <td colspan="6" class="BDJHeadline01"><u>Employment History:</u></td>
                                                    </tr>
                                                    <!--Total Year of Experience:-->
                                                    
                                                    <tr>
                                                    <td colspan="5" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                                    <strong>Total Year of Experience : </strong> {{ $emp->experience }} Year(s)
                                                    </td>
                                                    </tr>	
                                                    <tr>
                                                    <td colspan="5" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                                    <strong>Current Working company  </strong> {{ $emp->current_company }}
                                                    </td>
                                                </td>
                                                <tr>
                                                <tr>
                                                <td colspan="6" class="BDJHeadline01"><u>Duties/Responsibilities :</u></td>
                                                </tr>
                                                <tr>
                                                 <td colspan="6" align="left" style="padding-left:5px;word-break: break-all;" class="BDJNormalText01">
                                                        {{ strip_tags($emp->duty) }}
                                                </td>
                                                </tr>
                                                <br>
                                                   
                                                        
                                             </tr 
                                                    
                                            
                                                 
                                    
                                       </tbody>
                                    </table>
                                                
                                    <!----------------------
                                    'ACADEMIC QUALIFICATION:
                                    ------------------------>
                                
                                    <table border="0" cellpadding="0" style="margin-top:3px;" cellspacing="0" align="center" width="750">
                                        <tbody><tr>
                                        <td colspan="6" class="BDJHeadline01"><u>Academic Qualification:</u></td>
                                        </tr>
                                    
                                        <tr>
                                        <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666;word-break: break-all;">
                                            <tbody>
                                                <tr class="BDJNormalText02">
                                                    <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Degree</strong></td>
                                                    <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Subject</strong></td>
                                                    <td width="20%" align="center" style="border-right:1px solid #666666"><strong>Institute</strong></td>
                                                    <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Result</strong></td>                                            
                                                    <td width="12.5%" align="center" style="border-right:1px solid #666666"><strong>Pas.Year</strong></td>
                                                    <td width="15%" align="center"><strong>Duration</strong></td>
                                            
                                               </tr>			 
                                            
                                                <tr class="BDJNormalText02">
                                                    <!--Exam Title:-->
                                                    @if ($edu)
                                                        <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                {{ $edu->inst1_degree }}
                                                        &nbsp;
                                                        </td>
                                                    <!--Concentration/Major:-->
                                                        <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                {{ $edu->inst1_subject }}
                                                        &nbsp;
                                                        </td>
                                                    <!--Institute:-->
                                                        <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                {{ $edu->inst1_name }}	
                                                        &nbsp;				
                                                        </td>
                                                    <!--Result:-->
                                                        <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                {{ $edu->inst1_gpa }}
                                                        &nbsp;					
                                                        </td>
                                                    <!--Passing Year:-->
                                                    
                                                            <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
                                                                    {{ $edu->inst1_year }}
                                                            &nbsp;
                                                            </td>
                                                    
                                                    
                                                        <!--Duration:-->
                                                            <td width="15%" style="border-top:1px solid #666666" align="center">
                                                                    {{ $edu->inst1_duration }}
                                                            &nbsp;					
                                                            </td>
                                                     @endif 
                                                </tr>
                                                <tr class="BDJNormalText02">
                                                        <!--Exam Title:-->
                                                        @if ($edu)
                                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                    {{ $edu->inst2_degree }}
                                                            &nbsp;
                                                            </td>
                                                        <!--Concentration/Major:-->
                                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                    {{ $edu->inst2_subject }}
                                                            &nbsp;
                                                            </td>
                                                        <!--Institute:-->
                                                            <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                    {{ $edu->inst2_name }}	
                                                            &nbsp;				
                                                            </td>
                                                        <!--Result:-->
                                                            <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                    {{ $edu->inst2_gpa }}
                                                            &nbsp;					
                                                            </td>
                                                        <!--Passing Year:-->
                                                        
                                                                <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
                                                                        {{ $edu->inst2_year }}
                                                                &nbsp;
                                                                </td>
                                                        
                                                        
                                                            <!--Duration:-->
                                                                <td width="15%" style="border-top:1px solid #666666" align="center">
                                                                        {{ $edu->inst2_duration }}
                                                                &nbsp;					
                                                                </td>
                                                         @endif 
                                                    </tr>
                                                    <tr class="BDJNormalText02">
                                                            <!--Exam Title:-->
                                                            @if ($edu)
                                                                <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                        {{ $edu->inst3_degree }}
                                                                &nbsp;
                                                                </td>
                                                            <!--Concentration/Major:-->
                                                                <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                        {{ $edu->inst3_subject }}
                                                                &nbsp;
                                                                </td>
                                                            <!--Institute:-->
                                                                <td width="20%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                        {{ $edu->inst3_name }}	
                                                                &nbsp;				
                                                                </td>
                                                            <!--Result:-->
                                                                <td width="12.5%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                                        {{ $edu->inst3_gpa }}
                                                                &nbsp;					
                                                                </td>
                                                            <!--Passing Year:-->
                                                            
                                                                    <td width="12.5%" style="border-right:1px solid #666666;border-top:1px solid #666666;" align="center">
                                                                            {{ $edu->inst3_year }}
                                                                    &nbsp;
                                                                    </td>
                                                            
                                                            
                                                                <!--Duration:-->
                                                                    <td width="15%" style="border-top:1px solid #666666" align="center">
                                                                            {{ $edu->inst3_duration }}
                                                                    &nbsp;					
                                                                    </td>
                                                             @endif 
                                                        </tr>
                                            </tbody>
                                    </table> 
                                        </td>
                                        </tr>
                                        </tbody>
                                    </table>
                    
                                    <!--------
                                    TRAINING:
                                    --------->
                                    <!-------------------------------
                                    Bdjobs-AMCAT Certification Test
                                    
                                    -------------------------------->
                    
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                                        <tbody><tr>
                                        <td colspan="6" class="BDJHeadline01"><u>Training Summary:</u></td>
                                        </tr>
                                    
                                        <tr>
                                        <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="border:1px solid #666666; word-break: break-all;">
                                            <tbody><tr class="BDJNormalText02">
                                            <td width="19%" align="center" style="border-right:1px solid #666666"><strong>Training Title</strong></td>
                                            <td width="15%" align="center"><strong>Duration</strong></td>
                                            </tr>
                                            
                                                
                                                @foreach($tr as $t)
                                                <tr class="BDJNormalText02">
                                                    <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">
                                                            {{ $t->course_name }}
                                                    &nbsp;
                                                    </td>
                                                    <td width="15%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666; padding-left:1px;">
                                                            {{ $t->course_duration }}
                                                        &nbsp;			   
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                                </td>
                                                </tr>
                                                </tbody>
                                    </table>
                                    
                                   
                    
                                    <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                                        <!--
                                        Career and Application Information:
                                        -->
                                        <tbody><tr>
                                        <td colspan="6" class="BDJHeadline01"><u>Career and Application Information:</u></td>
                                        </tr>
                                    
                                        <tr>
                                        <td colspan="6" align="left" class="BDJNormalText01">
                                        <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
                                            <!--Looking For:-->
                                            
                                                <tbody>
                                            
                                            <!--Available For:-->
                                            
                                                <tr class="BDJNormalText03">
                                                <td width="32%" align="left" style="padding-left:5px;">Available  For</td>
                                                <td width="2%" align="center">:</td>
                                                <td width="66%" align="left">
                                                {{$emp->job_typ}}
                                                </td>
                                                </tr>
                                        
                                        </tbody>
                                    </table>
                                        </td>
                                        </tr>
                                       </tbody>
                                    </table>
                    
                    
                                        <!--
                                        Specialization:
                                        -->
                    
                    
                         <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                             <tbody><tr>
                            <td colspan="6" class="BDJHeadline01"><u>Specialization:</u></td>
                            </tr>
                            
                                 <tr>
                                 <td colspan="6" align="left" class="BDJNormalText01">
                                    {{ $emp->top_skills }}
                                 </td>
                                 </tr>			  
                            
                           </tbody>
                        </table>
                    
                         <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                              <tbody><tr>
                             <td colspan="6" class="BDJHeadline01"><u>Language Proficiency:</u></td>
                             </tr>
                        
                             <tr>
                             <td colspan="6" align="left" style="padding-left:5px;" class="BDJNormalText01">
                             <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="border:1px solid #666666">
                                  <tbody><tr class="BDJNormalText02">
                                 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Language</strong></td>
                                 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Reading</strong></td>
                                 <td width="25%" align="center" style="border-right:1px solid #666666"><strong>Writing</strong></td>
                                 <td width="25%" align="center"><strong>Speaking</strong></td>
                                 </tr>
                                 
                                       <tr class="BDJNormalText02">
                                       <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;"> {{ $emp->language }}&nbsp;</td>
                                       <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">High&nbsp;</td>
                                       <td width="25%" align="center" style="border-right:1px solid #666666;border-top:1px solid #666666;">High&nbsp;</td>
                                       <td width="25%" align="center" style="border-top:1px solid #666666;">High&nbsp;</td>
                                       </tr>
                                 
                             </tbody></table>
                             </td>
                             </tr>
                           </tbody>
                        </table>
                    
                            <!--
                            PERSONAL DETAILS:
                            -->
                    
                         <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                            <!--
                            Personal Details
                            -->
                            <tbody><tr>
                            <td colspan="6" class="BDJHeadline01"><u>Personal Details :</u></td>
                            </tr>
                        
                            <tr>
                            <td colspan="6" align="left" class="BDJNormalText01">
                            <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" style="word-break: break-all;">
                                <!--Fathers Name:-->
                                
                                     <tbody><tr class="BDJNormalText03">
                                     <td width="22%" align="left" style="padding-left:5px;">Father's Name </td>
                                     <td width="2%" align="center">:</td>
                                     <td width="76%" align="left">
                                            {{ $emp->father }}
                                     </td>
                                     </tr>
                                
                                <!--Mothers Name:-->
                                
                                     <tr class="BDJNormalText03">
                                     <td width="22%" align="left" style="padding-left:5px;">Mother's Name </td>
                                     <td width="2%" align="center">:</td>
                                     <td width="76%" align="left">
                                            {{ $emp->mother }}
                                     </td>
                                     </tr>
                                
                                <!--Date of Birth:-->
                                <tr class="BDJNormalText03">
                                <td width="22%" align="left" style="padding-left:5px;">Date  of Birth</td>
                                <td width="2%" align="center">:</td>
                                <td width="76%" align="left">
                                 {{$emp->birthday}}	 
                                </td>
                                </tr>
                                <!--Gender:-->
                                <tr class="BDJNormalText03">
                                <td width="22%" align="left" style="padding-left:5px;">Gender</td>
                                <td width="2%" align="center">:</td>
                                <td width="76%" align="left">
                                {{$user->gender=='2'?'Female':'Male'}}
                                </td>
                                </tr>
                                <!--Marital Status:-->
                                <tr class="BDJNormalText03">
                                <td width="22%" align="left" style="padding-left:5px;">Marital  Status </td>
                                <td width="2%" align="center">:</td>
                                <td width="76%" align="left">
                                        {{ $emp->marital_status }}
                                </td>
                                </tr>
                                
                                <tr class="BDJNormalText03">
                                <td align="left" style="padding-left:5px;">National Id No.</td>
                                <td align="center">:</td>
                                <td align="left">
                                        {{ $emp->nat_id }}
                                </td>
                                </tr>
                                
                                <!--Religion:-->
                                
                                     <tr class="BDJNormalText03">
                                     <td align="left" style="padding-left:5px;">Religion</td>
                                     <td align="center">:</td>
                                     <td align="left">
                                            {{ $emp->religion }}
                                     </td>
                                     </tr>
                                
                                <!--Permanent Address:-->
                                
                                     <tr class="BDJNormalText03">
                                     <td align="left" style="padding-left:5px;">Permanent  Address</td>
                                     <td align="center">:</td>
                                     <td align="left">
                                            {{ $emp->address }}
                                     </td>
                                     </tr>
                                
                                <!--Current Location:-->
                                <tr class="BDJNormalText03">
                                <td align="left" style="padding-left:5px;">Current  Location</td>
                                <td align="center">:</td>
                                <td align="left">			
                                        {{ $emp->curr_address }}		
                                </td>
                                </tr>
                            </tbody></table>
                            </td>
                            </tr>
                          </tbody>
                         </table>
                        
                            <!--
                            REFERENCE:
                            -->
                    
                         <table border="0" cellpadding="0" cellspacing="0" align="center" width="750" style="margin-top:3px;">
                            <!--
                            Reference:
                            -->
                            <tbody>
                                <tr>
                            <td colspan="6" class="BDJHeadline01"><u>Reference (s):</u></td>
                            </tr>
                            
                            <tr>
                              
                                    
                              
                            <td colspan="6" align="left" class="BDJNormalText01">
                            <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0" style="word-break: break-all;">
                                
                                      <!--Name:-->
                                       
                                      <tbody>
                                            @foreach ($refe as $ref)
                                            @if ($ref)                                                
                                           
                                        <tr class="BDJNormalText03">                                        
                                          <td width="22%" align="left" style="padding-left:5px;">Name </td>
                                          <td width="2%" align="center">:</td>
                                          <td width="35%" align="left">
                                         {{$ref->ref_name}}
                                          &nbsp;
                                          </td>
                                          
                                              <td width="41%" align="left" style="padding-left: 10px;">
                                              
                                              </td>
                                            
                                          </tr>
                                          @endif
                                          @if ($ref) 
                                      <!--Organization:-->
                                       
                                      <tr class="BDJNormalText03">
                                      
                                      <td width="22%" align="left" style="padding-left:5px;">Organization</td>
                                      <td width="2%" align="center">:</td>
                                      <td width="35%" align="left">
                                            {{$ref->ref_org_name}}
                                      &nbsp;
                                      </td>
                                      
                                          <td width="41%" align="left" style="padding-left: 10px;">
                                                            
                                          </td>
                                      
                                      </tr>
                                      @endif
                                      @if ($ref) 
                                      <!--Designation:-->	 
                                      
                                          <tr class="BDJNormalText03">
                                         
                                          <td width="22%" align="left" style="padding-left:5px;">Designation</td>
                                          <td width="2%" align="center">:</td>
                                          <td width="35%" align="left">
                                                {{$ref->ref_designation}}
                                          &nbsp;
                                          </td>
                                          
                                                  <td width="41%" align="left" style="padding-left: 10px;">
                                                                    
                                                  </td>
                                             
                                          </tr>
                                          @endif
                                          @if ($ref) 
                                      <!--Mobile:-->
                                       
                                          <tr class="BDJNormalText03">
                                         
                                          <td align="left" style="padding-left:5px;">Mobile</td>
                                          <td align="center">:</td>
                                          <td align="left">
                                                {{$ref->ref_phone}}
                                          &nbsp;
                                          </td>
                                           
                                              <td align="left" style="padding-left: 10px;">
                                                                
                                              </td>
                                         
                                          </tr>
                                          @endif
                                          @if ($ref) 
                                      <!--E-Mail:-->
                                          
                                          <tr class="BDJNormalText03">
                                          
                                          <td align="left" style="padding-left:5px;">E-Mail</td>
                                          <td align="center">:</td>
                                          <td align="left">
                                                {{$ref->ref_email}}
                                          &nbsp;
                                          </td>
                                          
                                              <td align="left" style="padding-left: 10px;">
                                                                
                                              </td>
                                          
                                          </tr>
                                          @endif
                                          @if ($ref) 
                                      
                                      <tr class="BDJNormalText03">
                                      <td align="left">&nbsp;</td>
                                      <td align="center">&nbsp;</td>
                                      <td colspan="2" align="left">
                                      </td>
                                      </tr>
                                      @endif
                                    
                                      @endforeach
                            </tbody>
                        </table>
                            </td>
                            </tr>
                          </tbody>
                        </table>
                    
                        <center>
                        <div id="divCopyRight" class="BDJCopyRight" style="border-top:1px solid #999999; width:595px;">
                            
                        </div>
                        </center>
                    
                            </div>
                             
                          </div>
                        </div>
                    </div>
                    </div>
                    
                     </div>
                    </div>
                    
                     
       
   
@endsection
@push('js')
<script type="text/javascript">

    
  
        function printPdf(resume) {
        var printContents = document.getElementById(resume).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;

    }
    
    </script>

@endpush