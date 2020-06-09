@extends('layouts.company')
@section('title','Company | explore CV')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('company/css/custom.css') }}">
@endpush
@section('content')
    <div class="explore-content">
        <div class="row">
            <div class="col-md-8">
                    <div class="explore-title">
                            <h3 class="cl-blue">Explore Cv</h3>
                        </div>
                    <div class="btn-group btn-group-justified" data-toggle="btns">
                            <a class="btn cus-btn active" href="#first" data-toggle="tab">Functional Category</a>
                            <a class="btn cus-btn" href="#second" data-toggle="tab">Special Skilled Category</a>
                          </div>
                
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($category as $item)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                               {{$item->category}} (4,567)
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                General Management/Admin (1,60,597)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                All Categories (18,97,423)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                            <label class="form-check-label" for="exampleRadios3">
                                All Categories (18,97,423)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadio4" value="option4" checked>
                            <label class="form-check-label" for="exampleRadios4">
                                All Categories (18,97,423)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" checked>
                            <label class="form-check-label" for="exampleRadios5">
                                All Categories (18,97,423)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6" checked>
                            <label class="form-check-label" for="exampleRadios6">
                                All Categories (18,97,423)
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="cat-ex bg-f5">
                    <h5>Category <span class="cl-blue">All</span> </h5>
                    <hr>
                    <h6>Recently Upload Cv <p class="cl-car">12,000</p></h6>
                    <h6>Star Candidate Cv <p class="cl-car">12,000</p></h6>
                    <h6>Currently Looking for Job <p class="cl-car">12,000</p></h6>
                </div>
            </div>
        </div>
        <div class="show">
            <a href="ex-pay.html" class="btn btn-success">Show</a>
        </div>
    </div>
@endsection