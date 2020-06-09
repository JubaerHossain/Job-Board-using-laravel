@extends('layouts.admin')
@section('title','Admin | Category')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

@endpush
@section('content')
<nav aria-label="breadcrumb" class="pl-4">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admDashboard')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
  </ol>
</nav>
<main role="main" class="col-md-12 pb-5">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h2 class="text-center border-bottom"></h2>
                <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Add Subcategory</a>
              </div>
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
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered table-striped text-center">
                            <thead style="background: rgb(0, 105, 217);color: #fff;">							
                                <th>Subcategory name</th>
                                <th>Category name</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach($sub_category as $key => $c)
                                <tr>
                                    <td class="show">{{$c->sub_category}}</td>
                                    <td class="show">{{$c->category->category}}</td>
                                    <td> 
                                        <a href="{{route('admin.edit_sub_category',$c->id)}}" class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>                                         
                                        <button onclick="delePro({{$key}})" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        <form id="delete-form-{{ $key }}" action="{{route('admin.delete_sub_category',$c->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sub_category->links() }}
                    </div>
                    </div>
            
		</div>
    </div>
    
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Add category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.store_sub_category')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Subcategory name</label>
                            <input type="text" class="form-control" name="sub_category"  placeholder="E.G: IT communication">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category name</label>
                            <select name="category_id" class="custom-select">
                              @foreach ($category as $item)                                  
                            <option value="{{$item->id}}">{{$item->category}}</option>
                              @endforeach
                            </select>
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
</main>

@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('js/sweet-alert.js')}}"></script>
<script>
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
