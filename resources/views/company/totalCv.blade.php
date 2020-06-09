@extends('layouts.company')
@section('title','Company | All CV ')
@push('css')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('company/css/custom.css') }}">
@endpush
@section('content')
<div class="cv-found">
        <div class="container pt-5 pb-5 ">
            <div class="col-md-12">
                <div class="app-result">
                    <span class="match"></span>
                </div>
                <div  class="pt-5 pb-5">
                <form action="{{route('company.total_cv')}}" method="get" style="background: #fff;">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-3">
                              
                                  <select name="category" id="category" class="form-control">
                                              
                                        <option value=""></option>
                                   </select>
                           </div>
                            {{-- <div class="form-group col-md-4">
                                <label for="inputState">Sub-category</label>
                                 <div class="form-group">
                                        <select id="subCat" name="subCat" class="custom-select">
                                                <option value="">Select Sub category</option>
                                            </select>                                    
                                                                                                                                
                                   </div>
                           </div> --}}
                            <div class="form-group col-md-3">
                                
                                 <div class="form-group">                                    
                                         <select name="university" class="form-control"  data-live-search="true">
                                              
                                           @foreach ($university as $item)  
                                           <option value="{{$item->name}}" >{{$item->name}}</option>
                                           @endforeach
                                         </select>                                                                                        
                                   </div>
                           </div>
                            <div class="form-group col-md-3">
                                
                                    <div class="select">  
                                            <select id="country" name="country" class="form-control">
                                                    
                                                </select>
                                        </div>
                            </div>
                            <div class="form-group col-md-2">
                                    <select id="state" name="state" class="form-control">
                                        <option value="">Select State</option>
                                    </select>
                            </div>
                           {{--  <div class="form-group col-md-4">
                                    <label for="City">City</label>
                                        <select id="city" name="city" class="custom-select">
                                            <option value="">Select City</option>
                                        </select>
                            </div> --}}
                          <div class="form-group col-md-1">
                            <input type="submit" class="form-control btn btn-success bt" value="Search" >
                          </div>
                        </div>
                        
                      </form>
                </div>
                
                
            </div>
        </div>
    </div>
<div class="">
        <div class="container pt-5 pb-5">
            <div class="col-md-12">
                  
                    <div class="app-result">
                       <span class="match">Total Cv : {{count($data)}}</span>
                        </div>
                        <div class="table-responsive">
               
                            <table class="table" id="myTable">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col" >Job Summary</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach ($data as $d) 
                                         
                                <tr>
                                    <td>
                                        <div class="d-flex justify-content-start flex-wrap">
                                            <div>
                                                <img src="
                                                @if($d->photo != null)
                                                {{ asset('employe/images/profile/'.$d->photo) }}
                                                @else
                                                {{ asset('employe/images/profile/avatar.png') }}
                                                @endif" class="app-img"><br>

                                            </div>
                                            <div class="m-l-20">
                                                <span class="name">{{$d->first_name}} {{$d->last_name}}</span><br>
                                               
                                                  
                                                @if( $d->inst3_name)
                                                <span>{{ $d->inst3_name}}</span><br>
                                                @elseif( $d->inst2_name)
                                                <span>{{ $d->inst2_name}}</span><br>
                                                @else
                                                <span>{{ $d->inst1_name}}</span><br>
                                                @endif
                                                <span>Age: {{\Carbon\Carbon::parse($d->birthday)->age}}</span><br>
                                               
                                                {{-- <p>Position:{{ $d->job->title}}</p> --}}
                                                <small >Skills: {{ $d->top_skills}}</small><br>
                                                <small class="d-none">Skills: {{ $d->skills}}</small><br>
                                                <a href="{{route('company.CompanyResume',$d->users_id)}}" class="btn btn-outline-success btn-sm">
                                                        <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                        View Cv
                                                </a>
                                                
                                                <button data-id="{{$d->users_id}}" class="btn btn-outline-info btn-sm t use_id" data-toggle="modal" data-target="#t">
                                                        Invitation
                                                </button>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="company">
                                            <h5 class="company-name">{{$d->current_company}}</h5>
                                            <h6 class="com-position">Experience {{$d->experience}} Year</h6>
                                            <h6 class="cur-sal">Expected Salary:{{$d->expected_income}}</h6>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                              
                                </tbody>
                            </table>
                        </div>
                        
                        <div class="modal fade" id="t" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                          
                                            <form>
                                                @csrf
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Job Type</label>
                                                    <select name="job_id" id="job_id" class="form-control">
                                                        <option selected value=""> ...Select Job... </option>
                                                        @foreach ($jobs as $item)
                                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Invitation</label><br>
                                                    <textarea name="message" id="message" rows="5"></textarea><br>
                                                </div>
                                                <div class="form-group text-center pt-3">
                                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                                </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
            </div>
        </div>
@endsection
@push('js')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $(".sub").select2({
  maximumSelectionLength: 2,
  tokenSeparators: [',', ' ']
});
});
</script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
       } );
   </script>



    
    <script>
            $(document).ready(function(){
                
                //get country list
                $.ajax({
                    url: window.origin+'/countryApi/country',
                    method : 'GET',
                    success:function (data) {
                        $('#country').html("");
    
                        for(var i=0;i<data.country[0].length;i++){
                            $('#country').append("<option  value='"+data.country[0][i]+"'>"+data.country[0][i]+"</option>");
                        }
                    }
                });
    
                //change state
                $("#country").change(function () {
                    var c = $("#country").val();
                    
                    
                    $.ajax({
                        url: window.origin+'/countryApi/state/'+c,
                        method : 'GET',
                        success:function (data) {
                            $('#state').html("");
                            //console.log(data);
                            for(var i=0;i<data.state[0].length;i++){
                                $('#state').append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                            }
                        }
                    });
                });
    
                //change city
                $("#state").change(function () {
                    var c = $("#state").val();
                    $.ajax({
                        url: window.origin+'/countryApi/city/'+c,
                        method : 'GET',
                        success:function (data) {
                            $('#city').html("");
    
                            for(var i=0;i<data.state[0].length;i++){
                                $('#city').append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                            }
                        }
                    });
                });
                
                //category
                $.ajax({
                    url: window.origin+'/countryApi/category',
                    method : 'GET',
                    success:function (data) {
                                                
                        $('#category').html("");
    
                        for(var i=0;i<data.category[0].length;i++){
                            
                            $('#category').append("<option value='"+data.category[0][i].id+"'>"+data.category[0][i].category+"</option>");
                        }
                    }
                });
                //sub category
                $("#category").change(function () {
                    var c = $("#category").val();
                    
                    
                    $.ajax({
                        url: window.origin+'/countryApi/sub-category/'+c,
                        method : 'GET',
                        success:function (data) {
                            $('#subCat').html("");
    
                            for(var i=0;i<data.length;i++){
                                $('#subCat').append("<option id='"+data[i].id+"' value='"+data[i].id+"'>"+data[i].sub_category+"</option>");
                            }
                        }
                    });
                });
    
                
            });
        </script>
<script>
$(function() {
    var user_id;         
     $(".use_id").on('click',function() {
        window.user_id = $(this).data('id');        
        });
        $("#submit").click(function(e){
        e.preventDefault();
        var job_id=$("#job_id").val();
        var message=$("#message").val();
         user_id=window.user_id;
        $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '{{route('company.jobinvitation')}}',
                method : 'POST',
                dataType:"json",
                data:{
                    job_id:job_id,
                    message:message,
                    user_id:user_id,
                },
                success:function (data) {
                        $("#job_id").val("");
                        $("#message").val("");
                        $(".modal").modal('toggle');
                        user_id
                        toastr.success("Invitation sent !");                        
                        toastr.options.timeOut = 300;
                     },
                     error: function (request, status, error) {
                        
                            json = $.parseJSON(request.responseText);
                            $.each(json.errors, function(key, value){
                                
                                
                             $(".modal").modal('toggle');
                             toastr.error(value);
                             toastr.options.timeOut = 300;
                            });
                        
                        }
                });
        });
        });
</script>
@endpush