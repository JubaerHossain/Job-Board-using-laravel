@extends('layouts.company')

@section('title','Company | Order Form')

@section('content')
    <div class="order-content">
        <div class="container">
            <div class="col-md-12">
                <div class="instruction">
                    <p> For any query regarding our services please fill up the following fields.
                        We will contact with you as early as possible over phone or through email.
                        Fields marked by * star are mandatory </p>
                </div>
                <div class="order-form">
                    <div class="form-title">
                        <h5><strong>Order Form</strong></h5>
                    </div>
                    <form>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label">Name*</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" value="your name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="companyname" class="col-sm-4 col-form-label">Company Name*</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="companyname" value="company">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-4 col-form-label">Company Address*</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="address" value="address is this">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label">Contact No*</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="phone" value="016751221212">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label">Country*</label>
                            <div class="col-sm-6">
                                <select class="custom-select">
                                    <option selected>Bangladesh</option>
                                    <option>A</option>
                                    <option>A</option>
                                    <option>A</option>
                                    <option>c</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mail" class="col-sm-4 col-form-label">Email Address*</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="mail" value="mymail@job.com">
                            </div>
                        </div>
                    </form>
                </div>	<!--  order-form -->
                <div class="corporate-form">
                    <div class="form-title">
                        <h5><strong>Corporate Services</strong></h5>
                    </div>
                    <form>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                                    <label class="form-check-label" for="autoSizingCheck2">
                                        Online Job Posting Services
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hot-job">
                                    <label class="form-check-label" for="hot-job">
                                        Hot Jobs Announcement Services
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="Lookup">
                                    <label class="form-check-label" for="Lookup">
                                        Online CV Lookup Access Services
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="corporate">
                                    <label class="form-check-label" for="corporate">
                                        Corporate Membership
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="demand">
                                    <label class="form-check-label" for="demand">
                                        On Demand Resume Supply
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="banner">
                                    <label class="form-check-label" for="banner">
                                        Banner Advertisement Services
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="other">
                                    <label class="form-check-label" for="other">
                                        Other Services
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-4 my-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="standout">
                                    <label class="form-check-label" for="standout">
                                        Stand-out Job Listing
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="col-sm-2">
                                <a href="" class="nav-link details">Details</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="comment" class="form-check-label">Comments</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <a href="" class="btn btn-primary">Submit</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection