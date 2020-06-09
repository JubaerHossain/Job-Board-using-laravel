@extends('layouts.admin')
@section('title','Admin | Category')
@section('style')
<link href="{{ url('/') }}/css/product_j.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<main role="main" class="col-md-12">

	<div class="dashboard-item">
		<div class="container">
			<div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Category</h2>
                </div>
				<div class="col-md-4 offset-md-3">
					
					<form class="mx-auto" method="post" action="" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
						<label for="exampleInputname">Category name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" placeholder=""  name="name">
						</div>
					    <button type="submit" class="btn btn-primary mt-3 mb-3" style="background:#8818fd;">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection
@section('script')

@endsection
