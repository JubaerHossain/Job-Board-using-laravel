@extends('layouts.home')

@section('title','Ad Pack')

@section('content')
    <div class="main-content bg-white">
        @include('home.partials._packageMenu')

        <div class="package-content m-t-50">
            <div class="ad-pack">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="lg-vis">
                                <h5> Large Number of Visitors </h5>
                                <p>This is the largest and most popular career management site in Bangladesh. This site is being hit by over <strong> 8,00,000</strong> (on average) visitors every month, and this number is increasing rapidly. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lg-vis">
                                <h5>  Visited by Your Target Consumers  </h5>
                                <p>Just think about the background of the visitors of this site. Educated, young and modern people with an outward looking attitude. Aren't they the consumers for your brands?
                                    <span class="m-t-20"> (on average) visitors every month, and this number is increasing rapidly.</span> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lg-vis m-t-30">
                                <h5> Large Number of Visitors </h5>
                                <p>This is the largest and most popular career management site in Bangladesh. This site is being hit by over <strong> 8,00,000</strong> (on average) visitors every month, and this number is increasing rapidly. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lg-vis m-t-30">
                                <h5> Large Number of Visitors </h5>
                                <p>This is the largest and most popular career management site in Bangladesh. This site is being hit by over <strong> 8,00,000</strong> (on average) visitors every month, and this number is increasing rapidly. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lg-vis m-t-30">
                                <h5> Large Number of Visitors </h5>
                                <p>This is the largest and most popular career management site in Bangladesh. This site is being hit by over <strong> 8,00,000</strong> (on average) visitors every month, and this number is increasing rapidly. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="lg-vis m-t-30">
                                <h5> Large Number of Visitors </h5>
                                <p>This is the largest and most popular career management site in Bangladesh. This site is being hit by over <strong> 8,00,000</strong> (on average) visitors every month, and this number is increasing rapidly. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ad-pack-bt my-4">
                    <div class="d-flex justify-content-center">
                        <div class="mx-4">
                            <a href="">Book Your Banner Space</a>
                        </div>
                        <div class="mx-4">
                            <a href="ad_options.html">Advertisement Options</a>
                        </div>
                    </div>
                </div>
            </div> <!-- ad-packs end -->
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