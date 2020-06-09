@extends('layouts.employee')

@section('title','Employee | ShortList Jobs')

@section('content')
    <div class="container">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Shortlisted Job</li>
        </ol>
        <div class="onlineap">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/L</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">This Month Job</th>
                            <th scope="col">Location</th>
                        </tr>
                        </thead>
                        <tbody class="my-4">
                        <tr class="online">
                            <th scope="row">1</th>
                            <td class="djob-title">
                                <p class="company-name"><a href="companyview.html">company Name</a></p>
                            </td>
                            <td>
                                <p>25</p>
                            </td>
                            <td class="check">
                                <p>
                                    NYC
                                </p>
                            </td>
                        </tr>
                        <tr class="online">
                            <th scope="row">2</th>
                            <td class="djob-title">
                                <p class="company-name"><a href="companyview.html">company Name</a></p>
                            </td>
                            <td>
                                <p>0</p>
                            </td>
                            <td class="check">
                                <p>
                                    Uttara,Dhaka
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection