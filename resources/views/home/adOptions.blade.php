@extends('layouts.home')

@section('title','Ad Options')

@section('content')
    <div class="main-content bg-white">
    @include('home.partials._packageMenu')

    <div class="package-content m-t-50">
        <div class="ad-pack">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-center" colspan="4">ADVERTISEMENT OPTIONS at JObs.com</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th class="text-center" colspan="4">(For Detail Pricing of each of the following advertisement options please send an email to: sales@bdjobs.com ) </th>
                                </tr>
                                <tr>
                                    <th scope="col" class="wi-5">SI.</th>
                                    <th scope="col" class="wi-25">Product</th>
                                    <th scope="col" class="wi-70">Description</th>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>First page HOT JOBS text link </td>
                                    <td>A text link with a few words describing the jobs can be accommodated in this link. The text will then be linked to the detailed job vacancy page </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>First page HOT JOBS text link </td>
                                    <td>A text link with a few words describing the jobs can be accommodated in this link. The text will then be linked to the detailed job vacancy page </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ad-packs end -->

    </div>
    </div>
@endsection