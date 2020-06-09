@extends('layouts.company')

@section('title','Edit Profile')

@push('css')
<style>
    .edit-left, .edit-right{
        padding: 4%;
    }
</style>
@endpush

@section('content')
    <div class="edit-main row">
        
        <div class="edit-content col-md-12">
            
            <div class="row">
                <div class="edit col-md-12">
                    @if(session('updateSuccess'))
                        <p class="alert alert-success">{{ session('updateSuccess') }}</p>
                    @endif
                    @include('errors.error')
                    <div class="row">
                        <div class="edit-left col-md-6">

                            <form action="{{ route('generalProfileUpdate') }}" method="POST">
                                {{ csrf_field() }}
                            <h3>General Information:</h3>
                            <label for="">User Name:</label>
                            <input class="form-control" type="text" name="username" placeholder="Your Name" value="{{ $user->name }}">
                            <label for="">Email:</label>
                            <input class="form-control" type="email" name="email" value="{{ $user->email }}" disabled>
                            <label for="">Phone:</label>
                            <input type="number" class="form-control" name="phone" value="{{ $user->phone }}">
                            <label for="">Country:</label>

                            <select class="form-control" name="country" id="">
                                @foreach($country as $c)
                                    @if($user->country == $c)
                                        <option value="{{ $c }}" selected>{{ $c }}</option>
                                    @else
                                        <option value="{{ $c }}">{{ $c }}</option>
                                    @endif
                                @endforeach
                            </select>

                            <label for="">State:</label>
                            <select class="form-control" name="state" id="">
                                <option value="{{ $user->state }}">{{ $user->state }}</option>
                            </select><br>
                            <input class="btn btn-success" type="submit" name="submit" value="Update Data">
                            </form>
                        </div>

                        <div class="edit-right col-md-6">

                            <form class="form-group" action="{{ route('companyProfileUpdate') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <h3>Company Information:</h3>
                                <label for="">Company Name:</label>
                                <input class="form-control" type="text" name="name" placeholder="Company Name" value="{{ $company->name }}">
                                <label for="">Company Description:</label>
                                <textarea class="form-control" name="description" id="" placeholder="Company Description">{{ $company->description }}</textarea>
                                <label for="">Company Address:</label>
                                <textarea class="form-control" name="address" id="" placeholder="Company Address">{{ $company->address }}</textarea>
                                <label for="">About:</label>
                                <textarea class="form-control" name="about" id="" placeholder="About">{{ $company->about }}</textarea>
                                <label for="">Youtube Video Link:</label>
                                <input class="form-control" type="text" name="video" placeholder="Youtube Video Link" value="{{ $company->video }}">
                                <label for="">Facebook Link:</label>
                                <input class="form-control" type="text" name="facebook" placeholder="Fb Link" value="{{ $company->facebook }}">
                                <label for="">Twitter Link:</label>
                                <input class="form-control" type="text" name="twitter" placeholder="Twitter Link" value="{{ $company->twitter }}">
                                <label for="">Linked In:</label>
                                <input class="form-control" type="text" name="linkedin" placeholder="Linked In Link" value="{{ $company->linkedin }}">
                                @if($company->image != null)
                                    <img height="50px" width="100px" src="{{ asset('company/images/company_logo/'.$company->image) }}" alt="">
                                    <br>
                                @else
                                @endif    
                                <label for="">Image:</label>
                                <input type="file" accept="image/jpeg" class="form-control" name="image" >
                                <label for="">Website Link:</label>
                                <input class="form-control" type="text" name="website" placeholder="Website Name" value="{{ $company->website }}">
                                <label for="">Contact Person Name:</label>
                                <input class="form-control" name="company_person" type="text" placeholder="Contact Person Name" value="{{ $company->company_person }}">
                                <label for="">Contact Person Phone:</label>
                                <input class="form-control" type="text" name="person_contact" placeholder="Contact Person Phone" value="{{ $company->person_contact }}">
                                <label for="">Contact Person Designation:</label>
                                <input class="form-control" type="text" name="person_designation" placeholder="Contact Person Designation" value="{{ $company->person_designation }}">
                                <br>
                                <input class="btn btn-primary btn-block" type="submit" name="submit" value="Update Data">

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            
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