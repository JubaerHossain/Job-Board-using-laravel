@extends('layouts.employee')

@section('title','Company View Resume')

@push('css')
<style>
    .bg-gr-bb{
        background-color: gainsboro;
       /*  border-bottom: 2px solid black; */
       padding: 5px;
    }
    .cv{
        padding: 3%;
    }
    .cv-p-a{
        text-align: right;
    }
    .cv-p-a img{
       /*  border: 2px solid black; */
        padding: 5px;
        height: 120px;
        width: 110px;
    }
    .cv-objective p b{
        /*border-bottom: 2px solid black;*/
        padding-left: 8px
    }
    .obj-head{
        text-align: center;
    }
    hr{
        margin: 0;
        padding: 0;
        border-width: 2px;
        border-color: #2F3133;
    }
    .cr{
        line-height: 5px;
    }
</style>
@endpush

@section('content')
    <div class="container-fluid">
        <div class="uppder-bound row">
            <div class="col-sm-12">

            </div>
        </div>

        <div class="cv-main row">
            <div class="cv col-sm-12">
                <div class="cv-pic-address row">
                    <div class="cv-p-b col-sm-6">
                        <h4>{{ $emp->first_name }} {{ $emp->last_name }}</h4>
                        <small>{{ $emp->address }}<br>
                        {{ $user->country }}<br>
                        {{ $user->phone }}<br>
                        {{ $user->email }}</small>
                    </div>
                    <div class="cv-p-a col-sm-6">
                        <img src="@if(Auth::check())
                        @if(App\User::find(Auth::id())->employee->photo != null)
                        {{ asset('employe/images/profile/'.Auth::id().'.jpg') }}
                        @else
                        {{ asset('employe/images/profile/avatar.png') }}
                        @endif
                        @endif" height="80%" width="30%" alt="">
                    </div>
                </div>
                <div class="cv-objective row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Objectives</b></p>
                    </div>
                    <div class="obj col-sm-12">
                        <p>{{ $emp->objective }}</p>
                    </div>
                </div>
                <div class="cv-sp row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Special Qualification</b></p>
                    </div>
                    <div class="sp col-sm-12">
                        <p>{{ $emp->top_skills }}</p>
                    </div>
                </div>
                <div class="cv-exp row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Experience:</b></p>
                    </div>
                    <div class="exp col-sm-12">
                        <p><b>Years Of Experiecne:</b> {{ $emp->experience }} Years</p>
                        <p><b>Current Company:</b> {{ $emp->current_company }}</p>
                    </div>
                </div>
                <div class="cv-edu row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Education:</b></p>
                    </div>
                    <div class="edu col-sm-12">
                        <table border="1" width="100%">
                            <tr>
                                <th>Institute Name</th>
                                <th>Degree</th>
                                <th>Result</th>
                                <th>Subject</th>
                                <th>Duration</th>
                                <th>Year</th>
                                <th>GPA</th>
                            </tr>
                            <tr>
                                @if ($edu)
                                    <td>{{ $edu->inst1_name }}</td>
                                    <td>{{ $edu->inst1_degree }}</td>
                                    <td>{{ $edu->inst1_result }}</td>
                                    <td>{{ $edu->inst1_subject }}</td>
                                    <td>{{ $edu->inst1_duration }}</td>
                                    <td>{{ $edu->inst1_year }}</td>
                                    <td>{{ $edu->inst1_gpa }}</td>                                
                                @endif                               
                            </tr>
                            <tr>
                                @if ($edu)
                                    <td>{{ $edu->inst2_name }}</td>
                                    <td>{{ $edu->inst2_degree }}</td>
                                    <td>{{ $edu->inst2_result }}</td>
                                    <td>{{ $edu->inst2_subject }}</td>
                                    <td>{{ $edu->inst2_duration }}</td>
                                    <td>{{ $edu->inst2_year }}</td>
                                    <td>{{ $edu->inst2_gpa }}</td>                                    
                                @endif
                            </tr>
                            <tr>
                                @if ($edu)
                                    <td>{{ $edu->inst3_name }}</td>
                                    <td>{{ $edu->inst3_degree }}</td>
                                    <td>{{ $edu->inst3_result }}</td>
                                    <td>{{ $edu->inst3_subject }}</td>
                                    <td>{{ $edu->inst3_duration }}</td>
                                    <td>{{ $edu->inst3_year }}</td>
                                    <td>{{ $edu->inst3_gpa }}</td>                                    
                                @endif
                            </tr>
                        </table>
                    </div>
                </div>
                <br>
                <div class="cv-tr row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Training:</b></p>
                    </div>
                    <div class="tr col-sm-12">
                        <table border="1" width="100%">
                            <tr>
                                <th>Training Name</th>
                                <th>Duration</th>
                            </tr>
                            @foreach($tr as $t)
                                <tr>
                                    <td>{{ $t->course_name }}</td>
                                    <td>{{ $t->course_duration }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <br>
                <div class="cv-cr row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Career Information:</b></p>
                    </div>
                    <div class="cr col-sm-12">
                        <p><b>Language:</b> {{ $emp->language }}</p>
                        <p><b>Current Salary:</b> {{ $emp->current_income }}</p>
                        <p><b>Expected Salary:</b> {{ $emp->expected_income }}</p>
                        <p><b>Organization Type:</b> {{ $emp->org_type }}</p>
                        <p><b>Skills:</b> {{ $emp->skills }}</p>
                        <p><b>Special Skills:</b> {{ $emp->top_skills }}</p>
                    </div>
                </div>
                <br>
                <div class="cv-ref row">
                    <div class="tt-head col-sm-12">
                        <p class="bg-gr-bb"><b>Reference:</b></p>
                    </div>
                    <div class="reff col-sm-12">
                        <table border="1" width="100%">
                            <tr>
                                <th>Name</th>
                                <th>Organization</th>
                                <th>Designation</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                            @foreach($emp->reference as $r)
                                <tr>
                                    <td>{{ $r->ref_name }}</td>
                                    <td>{{ $r->ref_org_name }}</td>
                                    <td>{{ $r->ref_designation }}</td>
                                    <td>{{ $r->ref_phone }}</td>
                                    <td>{{ $r->ref_email }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection