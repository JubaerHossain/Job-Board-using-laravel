@extends('layouts.employee')

@section('title','Employee | Change Pass')

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 offset-md-2">
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