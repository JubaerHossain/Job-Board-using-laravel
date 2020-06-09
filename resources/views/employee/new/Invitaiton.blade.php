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
                                <li class="breadcrumb-item">Invitation By Company</li>
                            </ol>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead">
                                    <tr>
                                        <th scope="col">S/L</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Invite Text</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody class="my-4">
                                    @if($data)
                                    @foreach ($data as $key => $item)                                       
                                    <tr class="online">
                                        <th scope="row">{{$key+1}}</th>
                                        <td class="djob-title">
                                            <p class="company-name">{{$item->company->name}}</p>
                                        </td>                                        
                                        <td><p>{{$item->job_id ? $item->job->title: ""}}</p></td>
                                       
                                        <td><p>{{$item->message}}</p></td>
                                        <td>
                                                @if ($item->status==0)
                                                <a class="btn btn-info" name="tabs" data-id="{{ $item->id }}" data-toggle="modal" data-target="#t{{$item->id}}">
                                                    <i class="fa fa-eye-slash" style="color:#fff"></i>
                                                  </a>
                                                @else
                                                <a class="btn btn-secondary" data-toggle="modal" data-target="#t{{$item->id}}">
                                                  <i class="fa fa-eye" style="color:#fff">
                                                 </i>
                                                  </a>
                                                @endif
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
          
           @foreach ($data as $item)
     <div class="modal fade" id="t{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="border:0">
              <h5 class="modal-title text-center" id="exampleModalLabel">invitaiton</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                 
                    <div class="media-list">
                        <div class="card-header p-0">
                            <a class="collapsed email-app-sender list-group-item list-group-item-action no-border bg-blue-grey bg-lighten-5">
                               
                               <div class="media-body pb-3">
                                       <h6 class="list-group-item-heading"><b>Copmpany name : {{$item->company->name}}</b></h6>
                                        <div class="pl-3">
                                            <p class="company-name">Job title: {{$item->job_id ? $item->job->title: ""}}</p>
                                            <p class="text-justify">Salary range : {{$item->job_id ? $item->job->salary_lower: ""}} - {{$item->job_id ? $item->job->salary_lower: ""}} </p>
                                            <p class="text-justify">Experience : {{$item->job_id ? $item->job->min_experience: ""}} Years</p>
                                            <p class="text-justify">District : {{$item->job_id ? $item->job->state: ""}}</p>
                                            <p class="text-justify">{{$item->message}}</p>
                                        </div>
                                        <small class="float-right blockquote-footer">{{$item->created_at->format('F d, Y ')}}</small>
                                        
                              </div>
                                
                            </a>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
       
   
@endsection
@push('js')
<script>
 
        $("a[name=tabs]").on("click", function () { 
                   var a = $(this).data("id"); 
        
             $.ajax({
                 headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },
                   type: 'post',
                   url: window.origin+'/employee/view-invitation/'+a,
                   data: {},
                   dataType : 'json',
                   success: function(data) {
                     
                   }
               });
           });
       </script>
@endpush