@extends('layouts.home')

@section('title','Company Pakcage')

@section('content')
    <div class="main-content bg-white">
        @include('home.partials._packageMenu')
        <div class="package-content m-t-50">
            <div class="col-md-12">
                <div class="job-posting-package">
                    <h4 class="package-title cl-blue">Job Posting Package</h4>
                    <a href="{{ url('company-package/basic-package') }}" class="link-none">
                        <div class="package-item">
                            <h5>Basic Listing</h5>
                            <p>This job will be live for 30 days</p>
                        </div>
                    </a>
                    <a href="" class="link-none">
                    </a><div class="package-item"><a href="" class="link-none">
                            <h5>Stand Out</h5>
                        </a><p><a href="" class="link-none">Likely basic listing jobs, the job will be online for maximum 30 days, it will enhance your company branding through company logo visibility and highlighting the job. </a><a href="package-details.html">know more</a> and Order</p>
                    </div>

                    <a href="" class="link-none">
                    </a><div class="package-item"><a href="" class="link-none">
                            <h5>Hot Job</h5>
                        </a><p><a href="" class="link-none">The job will be visible on Bdjobs.com homepage for maximum 10 days with company’s branding (Company logo and brand color ) and complementary 30 days on basic listing page. The customized job detail page may attract the applicants in best way to apply the job.  </a><a href="package-details.html">know more</a>  and Order</p>
                    </div>

                    <a href="" class="link-none">
                    </a><div class="package-item"><a href="" class="link-none">
                            <h5>Other Packages</h5>
                        </a><p><a href="" class="link-none">Distinguish jobs and CV packages are available with attractive price in corporate membership. Through this service your job will be published instantly just after posting.</a><a href="package-details.html">know more</a>  and Order</p>
                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <div class="job-posting-package">
                    <h4 class="package-title">Cv Lookup Packages</h4>
                    <a href="" class="link-none">
                        <div class="package-item">
                            <h5>Cv Lookup Access Packages</h5>
                            <p>CVs and jobs package in corporate membership will unlock Bdjobs.com’s CV bank for your company. Explore the affluent CV Bank(1.6 million+) of the country for right fit candidates and contact them directly using Bdjobs.com communication panel. Know more and Order</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="job-posting-package">
                    <h6>You can make payment through these</h6>
                    <a href="" class="link-none">
                        <div class="package-item">
                            <div class="make-payment">
                                <img src="{{ asset('image/payment/master.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/dbbl.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/master.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/dbbl.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/master.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/dbbl.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/master.png') }}" class="bank-logo">
                                <img src="{{ asset('image/payment/dbbl.png') }}" class="bank-logo">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection