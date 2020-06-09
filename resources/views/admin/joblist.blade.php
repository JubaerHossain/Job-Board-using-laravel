@extends('layouts.admin')
@section('title','Admin | Job list')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<nav aria-label="breadcrumb" class="pl-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admDashboard')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Job list</li>
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
                        <table id="example" class="table table-bordered table-striped text-center">
                            <thead style="background: rgb(0, 105, 217);color: #fff;">							
                                <th>Job title</th>
                                <th>Company name</th>
                                <th>Slary range</th>
                                <th>Job type</th>
                                <th>Deadline</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($jobs as $key => $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->company_name}}</td>
                                    <td>{{$item->salary_upper}} - {{$item->salary_lower}}</td>
                                    <td>{{$item->organization_type}}</td>
                                    <td>{{$item->deadline}}</td>
                                    <td>
                                         
                                    <button onclick="approve({{$key}})" class="btn {{$item->status === 0?'btn-success':'btn-secondary'}} btn-sm">
                                            {{$item->status === 0?'Approve':'Disapprove'}}
                                            
                                    </button>
                                    <form id="approve-form-{{ $key }}" action="{{route('admin.approve_job',$item->id)}}" method="POST" style="display: none;">
                                            @csrf
                                            @method('POST')
                                            </form>
                                        <a href="{{route('admin.JobShow',$item->id)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        <button onclick="delePro({{$key}})" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        <form id="delete-form-{{ $key }}" action="{{route('admin.delete_job',$item->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
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
  	function approve(id) {
			swal({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					type: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, do it!',
					cancelButtonText: 'No, cancel!',
					confirmButtonClass: 'btn btn-success',
					cancelButtonClass: 'btn btn-danger',
					buttonsStyling: false,
					reverseButtons: true
			}).then((result) => {
					if (result.value) {
							event.preventDefault();
							document.getElementById('approve-form-'+id).submit();
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
