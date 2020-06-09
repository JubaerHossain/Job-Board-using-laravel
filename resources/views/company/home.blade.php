@extends('layouts.company')

@section('title','Company|Home')

@section('content')
    <div class="post-type">
        <div class="container">
                @if(session('updateSuccess'))
                <p class="alert alert-success">{{ session('updateSuccess') }}</p>
                 @endif
            <div class="col-md-12">
                   
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                     <a class="nav-link active cl-dis" id="post-tab" data-toggle="tab" href="#post" role="tab" aria-controls="post" aria-selected="true">Post Jobs <span>{{$totalJob}}</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link cl-dis" id="Drafted-tab" data-toggle="tab" href="#Drafted" role="tab" aria-controls="Drafted" aria-selected="false">Drafted Jobs <span>{{$totalJob_draft}}</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link cl-dis" id="Archived-tab" data-toggle="tab" href="#Archived" role="tab" aria-controls="Archived" aria-selected="false">Archived Jobs <span>{{$totalJob_archived}}</span></a>
                    </li>
                    <div class="col-md-2 offset-md-1">
                        <div class="input-group ">
                            <input type="text" class="form-control" id="inputExmple" placeholder="Search">
                            <div class="input-group-append" id="search">
                                <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name="daterange" id="datepicker" placeholder="choose date">
                            <div class="input-group-append" id="date">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Vacancy</th>
                                    <th scope="col">Post Date</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($jobs as $job)
                                    <tr>
                                        <th scope="row">{{ $job->title }}</th>
                                        <td>{{ $job->attributes->vacancy }}</td>
                                        <td>{{ $job->created_at->toDateString() }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>
                                           <a href="{{route('editpost',$job->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('postJobShow',$job->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button href="" id="" class="btn btn-success stop"></button>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>No jobs found!</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Drafted" role="tabpanel" aria-labelledby="Drafted-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Post Date</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($draft_job as $job)
                                    <tr>
                                        <th scope="row">{{ $job->title }}</th>
                                        <td>{{ $job->attributes->vacancy }}</td>
                                        <td>{{ $job->created_at->toDateString() }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>
                                            <a href="{{route('editpost',$job->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('postJobShow',$job->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <a href="{{route('postJobpublish',$job->id)}}" class="btn btn-info"><i class="fa fa-upload"></i></a>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                                <td>No jobs found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Archived" role="tabpanel" aria-labelledby="Archived-tab">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Vacancy</th>
                                    <th scope="col">Post Date</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse($archived_job as $job)
                                    <tr>
                                        <th scope="row">{{ $job->title }}</th>
                                        <td>{{ $job->attributes->vacancy }}</td>
                                        <td>{{ $job->created_at->toDateString() }}</td>
                                        <td>{{ $job->deadline }}</td>
                                        <td>
                                           <a href="{{route('editpost',$job->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{route('postJobShow',$job->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                            <button href="" id="" class="btn btn-success stop"></button>
                                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                                <td>No jobs found!</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- container	 -->
    </div>
@endsection