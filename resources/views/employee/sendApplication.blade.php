@extends('layouts.employee')

@section('title','Application')

@section('content')
    <div class="container">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Online Application</li>
        </ol>
        <div class="onlineap">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/L</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Expected Salary</th>
                            <th scope="col">Viewed(By Employer)</th>
                        </tr>
                        </thead>
                        <tbody class="my-4">
                        <tr class="online">
                            <th scope="row">1</th>
                            <td class="djob-title">
                                <p class="company-name">This is company Name</p>
                                <p class="company-position">
                                    <a href="" class="nav-link">Company Position</a>
                                </p>
                                <p class="apply">Applied On:&nbsp;<span>12 Mar 2018</span></p>
                            </td>
                            <td>
                                <p>25,000</p>
                            </td>
                            <td class="check">
                                <p>
                                    <i class="fa fa-check"></i>
                                </p>
                            </td>
                        </tr>
                        <tr class="online">
                            <th scope="row">2</th>
                            <td class="djob-title">
                                <p class="company-name">This is company Name</p>
                                <p class="company-position">
                                    <a href="" class="nav-link">Company Position</a>
                                </p>
                                <p class="apply">Applied On:&nbsp;<span>12 Mar 2018</span></p>
                            </td>
                            <td>
                                <p>25,000</p>
                            </td>
                            <td class="cross">
                                <p>
                                    <i class="fa fa-times"></i>
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