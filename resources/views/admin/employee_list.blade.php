@extends('layouts.admin')
@section('title','Admin | Employee list')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush
@section('content')
<nav aria-label="breadcrumb" class="pl-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admDashboard')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Employee list</li>
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
                                <th>Sl no</th>
                                <th>Employee name</th>
                                <th>Skills</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($employee as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->first_name}} {{$item->last_name}}</td>
                                    <td>{{$item->top_skills}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td> 
                                        <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                        
                                    <button onclick="delePro({{$key}})" class="btn {{$item->locks == 1?'btn-danger':'btn-secondary'}} btn-sm">
                                        <i class="{{$item->locks == 1?'fas fa-trash-alt':'fas fa-user-lock'}}" aria-hidden="true"></i>
                                        </button>
                                        <form id="delete-form-{{ $key }}" action="{{route('admin.employee_delete',$item->id)}}" method="POST" style="display: none;">
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
  
</script>
@endpush
