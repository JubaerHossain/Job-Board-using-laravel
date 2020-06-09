<div class="container">
    <div class="col-md-12">
        <div class="company-menu m-t-50">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCompany" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCompany">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                             <a href="{{route('cmpDashboard')}}" class="nav-link">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('company.cv_lookup')}}" class="nav-link">
                                <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                Cv Lookup
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Em_applican')}}" class="nav-link">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                                Applicant
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('company/message')}}" class="nav-link">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                Candidate message
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/company-package')}}" target="_blank" class="nav-link">
                                <i class="fa fa-th-large" aria-hidden="true"></i>
                                Packages
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row justify-content-end m-4">
        <a href="{{ route('postJob') }}" class="btn btn-success mx-2">Post a Job</a>
    <a href="{{url('/company/cv')}}" class="btn btn-primary">Explore Cv</a>
    </div>
</div>