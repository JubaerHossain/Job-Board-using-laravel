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
    <li class="breadcrumb-item active" aria-current="page">Edit-Subcategory</li>
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
               @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
                <div class="row">                    
                    <div class="col-md-6 offset-md-3">
                            <form action="{{route('admin.update_sub_category',$data->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subcategory name</label>
                                    <input type="text" class="form-control" name="sub_category" value="{{$data->sub_category}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category name</label>
                                        <select name="category_id" class="custom-select">
                                          @foreach ($category as $item)                                  
                                        <option value="{{$item->id}}"{{$item->id === $data->category_id?'selected':''}}>{{$item->category}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                    </div>
                    </div>
            
		</div>
    </div>
</main>

@endsection
