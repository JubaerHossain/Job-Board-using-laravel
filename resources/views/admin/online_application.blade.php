@extends('layouts.admin')
@section('title','Admin | Applied job')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<nav aria-label="breadcrumb" class="pl-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admDashboard')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Applied job</li>
  </ol>
</nav>
<main role="main" class="col-md-12 pb-5">
	<div class="dashboard-item">
		<div class="container">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
               @endif
                @if(session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div>
               @endif
                <div class="row">                    
                    <div class="col-md-12">
                            <table class="table" id="example">
                                    <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col" >Job Summary</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @if($app)
                                        @foreach ($app as $key => $d) 
                                                                   
                                        
                                    <tr>
                                        <td width="40%">
                                                <div class="pb-2">
                                                    <img src="
                                                    @if($d->user->employee->photo != null)
                                                    {{ asset('employe/images/profile/'.$d->user->employee->photo) }}
                                                    @else
                                                    {{ asset('employe/images/profile/avatar.png') }}
                                                    @endif" class="avatar" width="20%">
                                                </div>
                                                <div class="m-l-20">
                                                    <span class="name">{{$d->user->employee->first_name}} {{$d->user->employee->last_name}}</span>
                                                    
                                                    <p>Position: {{ $d->job->title}}</p>
                                                    <small class="d-none">Skills: {{ $d->user->employee->top_skills}}</small>
                                                    <small class="d-none">Skills: {{ $d->user->employee->skills}}</small>
                                                    <p><a href="{{route('admin.viewResume',$d->id)}}" class="email">
                                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                                            View Cv</a></p>
                                                </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <h5 class="company-name">Company : {{$d->user->employee->current_company}}</h5>
                                                <h6 class="com-position">Experience {{$d->user->employee->experience}} Year</h6>
                                                {{-- <h6 class="cur-sal">Current Salary:{{$d->current_income}}</h6> --}}
                                            <h6 class="ex-sal">Expected Salary: {{$d->expected_salary}}</h6>
                                            </div>
                                        </td>
                                        <td>
                                                <button onclick="delePro({{$key}})" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </button>
                                                        <form id="delete-form-{{ $key }}" action="{{route('admin.applied_delete_job',$d->id)}}" method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                        </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                    </div>
                    </div>
            
		</div>
    </div>
</main>

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('js/sweet-alert.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
     $(document).ready(function() {
    $('#example').DataTable();
} );
  	function delePro(id) {
			swal({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete!',
					cancelButtonText: 'No, cancel!',
					confirmButtonClass: 'btn btn-success',
					cancelButtonClass: 'btn btn-danger',
					buttonsStyling: false,
					reverseButtons: true
			}).then((result) => {
					if (result.value) {
							event.preventDefault();
							document.getElementById('delete-form-'+id).submit();
					} else if (
							result.dismiss === swal.DismissReason.cancel
					) {
							swal(
									'Cancelled',
									'Your data is safe :)',
									'error'
							)
					}
			})
	}
  
</script>
@endpush
