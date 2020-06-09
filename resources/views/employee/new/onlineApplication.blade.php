@extends('layouts.home')

@section('title','Employee | Online Application')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">

@endpush
@section('content')
<div class="leftsidebar">
        <div class="container">
        <div class="row">
         @include('employee.partials.menu') 
    <div class="col-md-9 col-sm-12">
         
        <!-- Breadcrumbs-->
        <ol class="breadcrumb panel-heading panel-heading-01" style="background-color: #d9d9d9; color: #333;">
           
            <li class="breadcrumb-item">Online Application</li>
        </ol>
    
        <div class="onlineap">
            <div class="col-md-12">
                @if(session('delSuc'))
                    <p class="alert alert-success">{{ session('delSuc') }}</p>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead">
                        <tr>
                            <th scope="col">S/L</th>
                            <th scope="col">Cv Title</th>
                            <th scope="col">Action</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody class="my-4">
                        @php $i = 1; @endphp
                        @foreach($application as $a)
                        <tr class="online">
                            <th scope="row">{{ $i }}</th>
                            @php $i++; @endphp
                            <td class="djob-title">
                                <p class="company-name">{{ \App\Company::find(\App\Job::find($a->job_id)->company_id)->name }}</p>
                            </td>
                            <td class="check">
                                <a href="{{ route('deleteApplication',$a->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                @if($a->seen == 0)
                                    <p><i class="fa fa-times"></i></p>
                                @else
                                    <p><i class="fa fa-check"></i></p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection