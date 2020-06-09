@extends('layouts.home')
@section('title','Dreamploy Job | Resume Upload')
@push('css')    
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/upload.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">
@endpush
@section('content')
    
            <div class="leftsidebar">
                <div class="container">
                    <div class="row">
                        @include('employee.partials.menu')  
                    
                        <div class="col-md-9 col-sm-12">
                            <div class="m-t-50"></div>
                            <div class="gugu-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-8 offset-md-2">
                                            <h2>Upload Your Resume Here</h2>
                                            <p class="lead pt-3"><a href="" class="create">Create</a> an attractive cv to&nbsp;<b>make sure your job</b></p>
                                            @include('errors.error')
                                            @if(session('resError'))
                                                <p class="alert alert-danger">{{ session('resError') }}</p>
                                            @endif
                                            @if(session('resSecc'))
                                                <p class="alert alert-success">{{ session('resSecc') }}</p>
                                            @endif
                                            <!-- Upload  -->
                                            <form id="file-upload-form" class="uploader" action="{{ route('uploadTheResume') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input id="file-upload" accept=".docx,.doc,.pdf" type="file" name="resume" />
                        
                                                <label for="file-upload" id="file-drag">
                                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                                    <div id="start">
                                                        <i class="fa fa-download" aria-hidden="true"></i>
                                                        <div>Select a file or drag here</div>
                                                        <div id="notimage" class="hidden">Please select an image</div>
                        
                                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                        
                                                </label>
                                                <br>
                                                <input type="submit" name="submit" value="Upload Resume" class="btn btn-success">
                        
                                            </form>
                        
                                        </div>
                                        {{--<form>--}}
                                            {{--<div class="form-group">--}}
                                                {{--<!-- <label for="cv-title" class="cvs">Cv Title</label> -->--}}
                                                {{--<input type="text" class="form-control m-t-30" id="cv-title" placeholder="cv title">--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
       
   
@endsection