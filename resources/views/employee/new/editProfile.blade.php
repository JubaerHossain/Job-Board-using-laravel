@extends('layouts.home')

@section('title','Profile')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">

@endpush

@section('content')
<div class="leftsidebar">
        <div class="container">
        <div class="row">
         @include('employee.partials.menu') 

        <div class="col-md-9 col-sm-12">
                <ol class="breadcrumb panel-heading panel-heading-01" style="background-color: #d9d9d9; color: #333;">
                        <li class="breadcrumb-item">Edit Proflie</li>
                </ol>
            @include('errors.error')
            @if(session('updateSucc'))
                <p class="alert alert-success">{{ session('updateSucc') }}</p>
            @endif
            <form action="{{ route('empProfileUpdate') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label>Change Profile Picture</label>
                    <div class="row">
                        <div class="col-md-6  my-2">
                                <input type="file" name="photo" class="form-control-file">
                        </div>
                    <div class="col-md-6 ">
                            <p class="pull-right">
                                    <img src="@if($user->employee->photo != null)
                                    {{ asset('employe/images/profile/'.$user->employee->photo) }}
                                    @else
                                    {{ asset('employe/images/profile/avatar.png') }}
                                    @endif" height="80%" width="80%" alt="">
                            </p>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" disabled value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="number">
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select name="country" class="w-100">
                        @foreach($country as $c)
                            @if($user->country == $c)
                                <option value="{{ $c }}" selected>{{ $c }}</option>
                            @else
                                <option value="{{ $c }}">{{ $c }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <select name="state" class="w-100">
                        <option value="{{ $user->state }}">{{ $user->state }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" row="3" >{{ $user->employee->address }}</textarea>
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        $("select[name='country']").change(function () {
            var ca = $("select[name='country']").val();
            $.ajax({
                url: window.origin+'/countryApi/state/'+ca,
                method: 'GET',
                success:function (data) {
                    $("select[name='state']").html("");

                    for(var i=0;i<data.state[0].length;i++){
                        $("select[name='state']").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                }
            })
        });
    });
</script>
@endpush