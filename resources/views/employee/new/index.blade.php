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
                        @if(session('applySucc'))
                        <p class="alert alert-success">{{ session('applySucc') }}</p>
                       @endif
                            <div class="panel">
                                    <div style="background-color: #d9d9d9; color: #333;" class="panel-heading panel-heading-01"><i class="glyphicon glyphicon-list-alt icon-padding"></i>My Stats
                                    </div>
                                    <div class="panel-body">
                                            <div class="s-d-a-page">
                                            <h4>Welcome to your DreamployJobs account! </h4>
                                                <p>Here you can check your detailed states like Companies viewed my Resume, Online Application, Emailed Resume, Shortlisted Jobs etc. Beside My Stats in Edit Resume option you can find all features at a glance to add/update.
                                                </p>
                                            </div>
                                        <div class="stats-tab">
                                            <div class="btn-group action-btn" role="group" aria-label="...">
                                                <a type="button" class="btn btn-default active" onclick="get_time('2/16/2019');">Last One Month</a>
                                                <a type="button" class="btn btn-default " onclick="get_time('');">All Time</a>
                                            </div>
                                        </div>
                                                <div id="alldiv" class="alldiv clearfix">
                                            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
                                            <meta charset="utf-8">
                                            
                                        
                                        
                                        
                                            
                                            
                                            <table class="table table-inside" style="width:96%">                                            
                                            
                                                <tbody>
                                                        <tr style="padding:0; margin:0">
                                                        <td>Companies viewed my Resume</td>
                                                        <td class="table-data-padding" style="text-align:center;"><a href="resume_view.asp?t=1" class="numbers">2</a></td>
                                                        <td>
                                                            <i class="glyphicon glyphicon-question-sign" rel="tooltip" title="" data-placement="left" style="color:#165273" data-original-title="Resume viewed by companies both for applied positions and CV bank search."></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">Online Application </td>
                                                        <td class="table-data-padding" style="text-align:center;"><a href="apply_position.asp?t=1" class="numbers">5</a></td>
                                                        <td class=""><i class="glyphicon glyphicon-question-sign" rel="tooltip" title="" data-placement="left" style="color:#165273" data-original-title="List of positions you applied for."></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="t">Emailed Resume</td>
                                                        <td class="table-data-padding" style="text-align:center;"><a href="resume_Email.asp?t=1" class="numbers">2</a></td>
                                                        <td class=""><i class="glyphicon glyphicon-question-sign" rel="tooltip" title="" data-placement="left" style="color:#165273" data-original-title="Total number of emailed resumes using Bdjobs account."></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="">Shortlisted Jobs</td>
                                                        <td class="table-data-padding" style="text-align:center;">0</td>
                                                        <td class=""><i class="glyphicon glyphicon-question-sign" rel="tooltip" title="" data-placement="left" style="color:#165273" data-original-title="Number of Shortlisted Jobs"></i></td>
                                                    </tr>
                                                    
                                                    
                                                        <tr>
                                                        <td class="">Following Employer(s) &nbsp;&nbsp; </td>
                                                        <td class="table-data-padding" style="text-align:center;">0</td>
                                                        <td class=""><i class="glyphicon glyphicon-question-sign" rel="tooltip" title="" data-placement="left" style="color:#165273" data-original-title="Number of employers you are following. Now you can follow your preferred employers and get to know about all the jobs posted by them."></i></td>
                                                        <td class="table-data-padding"></td>
                                                    </tr>
                                                    
                                                    
                                                    <tr>
                                                    
                                                        <td class="">Resume last updated on</td>
                                                        <td class="table-data-padding" style="text-align:center;"><i class="glyphicon glyphicon-calendar icon-padding"></i>26/2/2019</td>
                                                        <td class="table-data-padding"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                       <div id="lastdiv" class="lastdiv" style="display:none;">
                                          
                                       </div>
                                    </div>
                                 </div>
                    </div>
                    </div>
                    
                     </div>
           </div>
       
   
@endsection