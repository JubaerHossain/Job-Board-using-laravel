@extends('layouts.employee')

@section('title','invitaiton')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Company Invitation</li>
        </ol>
        <div class="onlineap">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/L</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Viewed Date</th>
                        </tr>
                        </thead>
                        <tbody class="my-4">
                        <tr class="online">
                            <th scope="row">1</th>
                            <td class="djob-title">
                                <p class="company-name">This is company Name</p>
                            </td>
                            <td class="check">
                                <a href="" class="btn btn-primary">
                                    <i class="fa fa-check"></i>&nbsp;Attending
                                </a>
                                <a href="" class="btn btn-success">
                                    <i class="fa fa-times"></i>&nbsp;Not Attending
                                </a>
                            </td>
                            <td>
                                <p>25 Feb 2018</p>
                            </td>
                        </tr>
                        <tr class="online">
                            <th scope="row">2</th>
                            <td class="djob-title">
                                <p class="company-name">This is company Name</p>
                            </td>
                            <td class="cross">
                                <a href="" class="btn btn-primary">
                                    <i class="fa fa-check"></i>&nbsp;Attending
                                </a>
                                <a href="" class="btn btn-success">
                                    <i class="fa fa-times"></i>&nbsp;Not Attending
                                </a>
                            </td>
                            <td>
                                <p>25 Feb 2018</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection