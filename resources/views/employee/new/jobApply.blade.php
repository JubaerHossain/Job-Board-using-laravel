@extends('layouts.home')
@section('title','Employee | Apply Job')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">

@endpush
@section('content')
<div class="leftsidebar">
        <div class="container">
        <div class="row">
         @include('employee.partials.menu') 

        <div class="col-md-9 col-sm-12  text-center">

            <div class="card">
                <div class="card-header">
                    <h2>Put Expected Salary</h2>
                </div>
                <div class="card-body">
                    @include('errors.error')
                    <p>This confirmation means you will sit for interview with the needs of the company. If you will not give interview company can report and block you according to the website rules.</p>
                    <form class="form-group" action="{{ route('applyJob',$id) }}" method="POST">
                        {{ csrf_field() }}
                        <label for="">Expected Salary:</label>
                        <input class="form-control" type="number" name="expected_salary" placeholder="Expected Salary">
                        <br><input type="submit"  name="submit" value="Apply" class="btn btn-primary">
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection