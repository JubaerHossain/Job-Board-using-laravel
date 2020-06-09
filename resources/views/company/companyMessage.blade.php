@extends('layouts.company')

@section('title','Company | Message')

@section('content')
    <div class="message">
        <div class="container-fluid" id="mymsg">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="msg-left">
                        <div class="col-md-12 msg-title">
                            <h6>Messages</h6>
                        </div>
                        <div class="search-msg">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"> <i class="fa fa-search"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="search message">
                            </div>
                        </div>
                        <div class="msg-here">
                            <div class="d-flex justify-content-start">
                                <div class="user-pic">
                                    <img src="@if($user->employee->photo != null)
                                    {{ asset('employe/images/profile/'.$user->employee->photo) }}
                                    @else
                                    {{ asset('employe/images/profile/avatar.png') }}
                                    @endif" class="pic-msg">
                                </div>
                                <div class="usrmsg">
                                <p class="username">{{$user->name}}</p>
                                    <span class="msg-text">Hey! How are doing recently?Hey! How are doing recently?Hey! How are doing recently?</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="msg-right">
                        <div class="col-md-12 msg-title m-b-50">
                            <h6></h6>
                        </div>
                        <div class="col-md-12">
                            <div class="em-msg">
                                <p>Hey! There how are you doing?</p>
                            </div>
                            <div class="em-msg">
                                <p>Dreamploy is Looking For A Laravel Developer .
                                    Job Requirements
                                    Must have good knowledge in PHP & MySQL
                                    Write/Manage Object Oriented (OOP) code
                                    Must have experience in web based application development using Laravel
                                    Good knowledge on Ajax,Rest API, JSON etc.
                                    Good hands on optimal database designing concept using MySQL,Mongo/Postgrades(preferrable).
                                    Social APIs (Twitter, Facebook, Youtube,LinkedIn, etc.)
                                    Self-motivated and open to accept ideas from team members.
                                    Collaborate with other team members.

                                    Salary Range
                                    Negotiable

                                    Location: Sector-11, Uttara.
                                </p>
                            </div>
                        </div>
                        <div class="msg-box">
                            <div class="col-md-12">
                                <div class="form-group row ">
                                    <input type="text" class="form-control w-75 mx-2" placeholder="write message....">
                                    <a href="" class="btn btn-primary m-l-10">Send</a>
                                </div>
                            </div>
                        </div>
                    </div> <!--   msgright -->
                </div>
            </div>
        </div>
    </div>
@endsection