@extends('layouts.employee')

@section('title','Employee | Online Application')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Online Application</a>
            </li>
            <li class="breadcrumb-item active">Online Application</li>
        </ol>
        <div class="onlineap">
            <div class="col-md-12">
                @if(session('delSuc'))
                    <p class="alert alert-success">{{ session('delSuc') }}</p>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">S/L</th>
                            <th scope="col">Cv Title</th>
                            <th scope="col">Action</th>
                            <th scope="col">View</th>
                        </tr>
                        </thead>
                        <tbody class="my-4">
                        @php $i = 1; @endphp
                        @foreach($application as $a)
                        <tr class="online">
                            <th scope="row">{{ $i }}</th>
                            @php $i++; @endphp
                            <td class="djob-title">
                                <p class="company-name">{{ \App\Company::find(\App\Job::find($a->job_id)->company_id)->name }}</p>
                            </td>
                            <td class="check">
                                <a href="{{ route('deleteApplication',$a->id) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            <td>
                                @if($a->seen == 0)
                                    <p><i class="fa fa-times"></i></p>
                                @else
                                    <p><i class="fa fa-check"></i></p>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection