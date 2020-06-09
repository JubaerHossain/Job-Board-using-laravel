@extends('layouts.company')
@section('title','Company | Applicant')
@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
@endpush
@section('content')
    <div class="cv-found">
        <div class="container">
            <div class="col-md-12">
                <div class="app-result">
                    <span class="match"></span>
                </div>
                <form action="{{route('company.emplyee_search')}}" method="POST">
                        @csrf
                        <div class="form-row">
                          <div class="form-group col-md-4">
                            <label for="inputCity">Category</label>
                                  <select name="cat" class="form-control target">
                                    <option selected>...Choose Category...</option>
                                    @foreach ($category as $item)                                        
                                    <option value="{{$item->id}}">{{$item->category}}</option>
                                    @endforeach
                                  </select>
                          </div>
                          <div class="form-group col-md-4">
                            <label for="inputState">Sub-category</label>
                            <select name="sub_cat" class="form-control">
                                    <option selected>...Choose Sub Category...</option>
                                    @foreach ($subcategory as $item)                                        
                                    <option value="{{$item->id}}" class="chld child{{ $item->category->id }}">{{$item->sub_category}}</option>
                                    @endforeach
                            </select>
                          </div>
                          <div class="form-group col-md-1" style="padding-top: 33px!important;">
                            <input type="submit" class="form-control btn btn-outline-success" value="Search">
                          </div>
                        </div>
                        
                      </form>
                <div class="table-responsive">
               
                    <table class="table" id="myTable">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col" >Job Summary</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($app)
                            @foreach ($app as $d) 
                            @if($d->job->company->user_id == Auth::id())
                            
                            @if ($d->job->category_id == $cat or $d->job->subcategory_id == $sub_cat)
                                                      
                            
                        <tr>
                            <td>
                                <div class="d-flex justify-content-start flex-wrap">
                                    <div>
                                        <img src="
                                        @if($d->user->employee->photo != null)
                                        {{ asset('employe/images/profile/'.$d->user->employee->photo) }}
                                        @else
                                        {{ asset('employe/images/profile/avatar.png') }}
                                        @endif" class="app-img"><br>
                                    </div>
                                    <div class="m-l-20">
                                        <span class="name">{{$d->user->employee->first_name}} {{$d->user->employee->last_name}}</span>
                                        {{-- <span class="age">23</span> --}}
                                       {{--  @foreach ($edu as $item)                                     
                                       
                                        <p class="versity">{{ $d->employees_id ==  $item->employee_id?$item->inst3_name:"no"}}</p>
                                        @endforeach --}}
                                        <p>Position: {{ $d->job->title}}</p>
                                        <small class="d-none">Skills: {{ $d->user->employee->top_skills}}</small>
                                        <small class="d-none">Skills: {{ $d->user->employee->skills}}</small>
                                        <p><a href="{{route('company.viewResume',$d->id)}}" class="email">
                                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                &nbsp;View Cv</a></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="company">
                                    <h5 class="company-name">{{$d->user->employee->current_company}}</h5>
                                    <h6 class="com-position">Experience {{$d->user->employee->experience}} Year</h6>
                                    {{-- <h6 class="cur-sal">Current Salary:{{$d->current_income}}</h6> --}}
                                <h6 class="ex-sal">Expected Salary: {{$d->expected_salary}}</h6>
                                </div>
                            </td>
                            <td>
                                <div class="action text-center">
                                        @if ($d->status==0)
                                        <a id="success" class="btn btn-primary text-white" data-toggle="modal" data-target="#h{{ $d->id }}"><i class="fa fa-check"></i>Invite</a>
                                        @else
                                        <a class="btn btn-secondary text-white">Already Invite</a>
                                        @endif                                    
                                </div>
                            </td>
                        </tr>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="h{{ $d->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Invite for Interview</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                       
                                        <form action="{{route('company.Applicant_invterview',$d->id)}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Time/Date</label>
                                                <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>                        
                        @endif
                        

                        @endif
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
       } );
   </script>
<script>
        @if(Session::has('message'))
          var type = "{{ Session::get('alert-type', 'info') }}";
          switch(type){
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
          }
        @endif
      </script>
<script>
    $(function(){
        $( ".target" ).change(function() {
          $('.chld').hide();
          var cat = $(this).val();
          $('.child'+cat).show();
        });
    });
    </script>
    <script>
        var table = $('#myTable').DataTable();
    
    // #myInput is a <input type="text"> element
    
    $('#myInput').on( 'keyup', function () {
        table.search( this.value ).draw();
 } );
    </script>
@endpush