<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>Company</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('employe/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('employe/css/employee.css') }}" rel="stylesheet" />
    <!-- date picker jQ-UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="company-main">
                <div class="col-md-12">
                    <h1 class="display-4 text-center">
                        <img src="{{ asset('company/images/company_logo/'.$company->image) }}" class="company-logo-top">
                    </h1>
                    <p class=""><b>Desrcripton:&nbsp;</b> {{ $company->description }}</p>
                    <span><b>Address:</b> &nbsp; {{ $company->address }}</span>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-md-9">
                <div class="col-md-12">
                    <div class="company-about">
                        <h5 class="header-cl">About Us</h5>
                        <p>{{ $company->about }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="company-video">
                        <h5 class="header-cl">Pormo Video</h5>
                        <div class="promo">
                            <iframe src="{{ $company->video }}" allowfullscreen="" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="company-jobs">
                        <h5 class="header-cl">Jobs Available</h5>
                        @foreach($companyJobs as $jobs)
                        <div class="new-job job-white" id="company-jb">
                            <div class="d-flex justify-content-between">
                                <div class="p-2">
                                    <h4>
                                        {{--<img src="{{ asset('/image/company.jpg') }}" class="img-comp">--}}
                                        {{ $jobs->title }}</h4>
                                </div>
                                <div class="p-2">
                                    <h6 class="part"><i class="fa fa-bookmark-o" aria-hidden="true"></i>&nbsp;{{ $jobs->type }}</h6>
                                </div>
                            </div>
                            <div class="d-flex align-content-md-start flex-wrap">
                                <div class="p-2">
                                    <span class="company">{{ $jobs->company_name }}</span>
                                </div>
                                <div class="p-2">
                                    <span class="salary">Salary:{{ $jobs->salary_upper }}-{{ $jobs->salary_lower }} BDT</span>
                                </div>
                                <div class="p-2">
                                    <span class="loc"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Location:{{ $jobs->country }},{{ $jobs->state }},{{ $jobs->city }}</span>
                                </div>
                                <div class="ml-auto p-2">
                                    <a href="{{ url('/jobapply/view/'.$jobs->id) }}" target="_blank" class="btn btn-outline-primary">Apply</a>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="connect-us">
                    <div class="col-md-12">
                        <h5>Connect With Us</h5>
                    </div>
                </div>
                <div class="social-rt">
                    <div class="col-md-12">
                        <a href="{{ $company->facebook }}" class="m-r-10" title="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="{{ $company->twitter }}" class="m-r-10" title="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="{{ $company->linkedin }}" class="m-r-10" title="twitter"><i class="fa fa-linkedin"></i></a>
                        <a href="{{ $company->website }}" class="m-r-10" title="website"><i class="fa fa-globe"></i></a>
                    </div>
                </div>
                {{--<div class="map-header">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<h5>We are Here?</h5>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="company-map">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<img src="{{ asset('employe/images/map.png') }}" class="img-fluid">--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>

        </div>
    </div>

</div>
</div>
</body>
</html>





