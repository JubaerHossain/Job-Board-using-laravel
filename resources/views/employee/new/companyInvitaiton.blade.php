@extends('layouts.home')
@section('title','Dreamploy Job |invitaiton')
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
                                        <li class="breadcrumb-item">Invitation</li>
                                    </ol>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead">
                                    <tr>
                                        <th scope="col">S/L</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Job Title</th>
                                       {{--  <th scope="col">Action</th> --}}
                                        <th scope="col">Interview Date</th>
                                    </tr>
                                    </thead>
                                    <tbody class="my-4">
                                    @if($data)
                                    @foreach ($data as $key => $item)                                       
                                    <tr class="online">
                                        <th scope="row">{{$key+1}}</th>
                                        <td class="djob-title">
                                            <p class="company-name">{{$item->job->company->name}}</p>
                                        </td>
                                        <td><p>{{$item->job->title}}</p></td>
                                        {{-- <td class="check">
                                            
                                            <a href="" class="btn btn-primary">
                                                <i class="fa fa-check"></i>&nbsp;Attending
                                            </a>
                                            <a href="" class="btn btn-success">
                                                <i class="fa fa-times"></i>&nbsp;Not Attending
                                            </a>
                                        </td> --}}
                                        <td>
                                           <p>{{Carbon\Carbon::parse($item->date)->format('F d, Y ')}}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                            <td class="text-center">There is no invitaiton for you !</td>
                                    </tr>  
                                    @endif                                  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                     </div>
           </div>
       
   
@endsection