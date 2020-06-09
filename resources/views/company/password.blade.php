@extends('layouts.company')

@section('title','Change Password')

@section('content')

    <div class="row">
        <div class="password-main col-lg-12">

            <div class="row">
                <div class="password col-lg-6 offset-lg-3">
                    <h3>Change Password:</h3>
                    <hr>
                    @include('errors.error')
                    @if(session('passSuc'))
                        <p class="alert alert-success">{{ session('passSuc') }}</p>
                    @endif
                    @if(session('updateErr'))
                        <p class="alert alert-danger">{{ session('updateErr') }}</p>
                    @endif
                    <form action="{{ route('companyPasswordUpdate') }}" method="POST" class="form-group">
                        {{ csrf_field() }}
                        <label for="">Old Password:</label>
                        <input class="form-control" type="password" name="prev_password" placeholder="Old Password">
                        <label for="">New Password:</label>
                        <input class="form-control" type="password" name="password" placeholder="New Password">
                        <label for="">Confirm New Password:</label>
                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm New Password">
                        <br>
                        <input type="submit" name="submit" value="Change Password" class="btn btn-outline-success">
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection