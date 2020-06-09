@extends('layouts.home')

@section('title','Resume Email | Employee')
@push('css')    
<link rel="stylesheet" type="text/css" href="{{ asset('employe/css/custom_css.css') }}">
@endpush
@section('content')
<div class="leftsidebar">
    <div class="container">
      <div class="row">
       @include('employee.partials.menu')  
    
        <div class="col-md-9 col-sm-12">
                <div class="panel">
                  <div class="panel-heading panel-heading-01"><i class="fa fa-envelope"></i>Email Resume</div>
                   <div class="p-3">
                    <form>
                        <div class="form-group">
                            <label for="email">My Email</label>
                            <input type="email" class="form-control" id="email" placeholder="<autoemail@gmail.com>">
                        </div>
                        <div class="form-group">
                            <label for="cemail">Company Email</label>
                            <input type="email" class="form-control" id="cemail" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="email" class="form-control" id="subject" placeholder="your subject">
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="job_cv" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">My Jobsite Format <a href="{{route('viewResum')}}" target="_blank" class="under"> (View)</a></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="attach_cv" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Attach Uploaded Resume</label>
                        </div>
                        <div class="form-group m-t-20">
                            <label for="">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="message here..."></textarea>
                        </div>
                        <a href="" type="submit" class="btn btn-success">Send</a>
                    </form>
                   </div>
                </div>
        </div>
      </div>
    </div>
</div>
@endsection