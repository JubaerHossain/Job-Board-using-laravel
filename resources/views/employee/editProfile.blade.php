@extends('layouts.employee')

@section('title','Profile')

@section('content')
    <div class="container-fluid">
        <div class="col-md-6 offset-md-2">
            @include('errors.error')
            @if(session('updateSucc'))
                <p class="alert alert-success">{{ session('updateSucc') }}</p>
            @endif
            <form action="{{ route('empProfileUpdate') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label>Change Profile Picture</label>
                    <input type="file" name="photo" class="form-control-file">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="hidden" name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="number">
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <select name="country" class="w-100">
                        @foreach($country as $c)
                            @if($user->country == $c)
                                <option value="{{ $c }}" selected>{{ $c }}</option>
                            @else
                                <option value="{{ $c }}">{{ $c }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Country</label>
                    <select name="state" class="w-100">
                        <option value="{{ $user->state }}">{{ $user->state }}</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <textarea name="address" class="form-control" row="3" >{{ $user->employee->address }}</textarea>
                </div>
                <input type="submit" name="submit" value="Update" class="btn btn-success">
            </form>

        </div>
    </div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        $("select[name='country']").change(function () {
            var ca = $("select[name='country']").val();
            $.ajax({
                url: window.origin+'/countryApi/state/'+ca,
                method: 'GET',
                success:function (data) {
                    $("select[name='state']").html("");

                    for(var i=0;i<data.state[0].length;i++){
                        $("select[name='state']").append("<option value='"+data.state[0][i]+"'>"+data.state[0][i]+"</option>");
                    }
                }
            })
        });
    });
</script>
@endpush