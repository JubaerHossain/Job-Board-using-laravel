@extends('layouts.home')

@section('title','Employee | Change Password')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">

@endpush
@section('content')
<div class="leftsidebar">
        <div class="container">
        <div class="row">
         @include('employee.partials.menu') 
        <div class="col-md-9 col-sm-12 pt-5">
                    <ol class="breadcrumb panel-heading panel-heading-01" style="background-color: #d9d9d9; color: #333;">
                        <li class="breadcrumb-item">Password Cahnge</li>
                    </ol>
            <form action="{{ route('empPassUpdate') }}" method="POST" >
                {{ csrf_field() }}
                @include('errors.error')
                @if(session('passErr'))
                    <p class="alert alert-danger">{{ session('passErr') }}</p>
                @endif
                @if(session('passSucc'))
                    <p class="alert alert-success">{{ session('passSucc') }}</p>
                @endif
                <div class="form-group">
                    <label for="">Current Password *</label>
                    <input type="password" name="old_password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">New Password</label>
                    <input type="password" name="password" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" >
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection