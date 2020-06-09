@extends('layouts.company')
@section('title','Company | CV LookUp')
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
                                        <option value="">Select District</option>
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
                        console.log(data.category);
                        
                        $('#category').html("");
    
                        for(var i=0;i<data.category[0].length;i++){
                            
                            $('#category').append("<option value='"+data.category[0][i].id+"'>"+data.category[0][i].category+"</option>");
                        }
                    }
                });
                //sub category
                $("#category").change(function () {
                    var c = $("#category").val();
                    console.log(c);
                    
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
@endpush