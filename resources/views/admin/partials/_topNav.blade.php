<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Unistag Panel</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fahim" id="user-info">
            <img src="{{asset('/')}}image/avatar.png" class="img-avatar"> <br>
                <span class="nav-link-text">{{ \App\User::find(Auth::id())->name }}</span>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{route('front.home')}}" target="_blank">
                    <i class="fa fa-fw fa-home"></i>
                    <span class="nav-link-text">Main Site</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{route('admDashboard')}}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Category</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseComponents">
                    <li>
                    <a href="{{route('admin.category')}}">
                            <i class="fa fa-fw  fa-pencil-square-o"></i>
                            Category list</a>
                    </li>
                    <li>
                       <a href="{{route('admin.sub_category')}}">
                            <i class="fa fa-fw fa-cloud-upload"></i>
                            Sub category list</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Activity">
                <a class="nav-link  nav-link-collapse collapsed" data-toggle="collapse" href="#collapseActivity" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Activity</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseActivity">
                    <li>
                       <a href="{{route('admin.appliedjob')}}">
                            <i class="fa fa-fw fa-file-o"></i>
                            Online Application</a>
                    </li>

                    <li>
                        <a href="{{route('admin.joblist')}}">
                            <i class="fa fa-fw fa-eye"></i>
                            Job list</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Activity">
                <a class="nav-link  nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAssesment" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Users</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseAssesment">
                    <li>
                       <a href="{{route('admin.company_list')}}">
                            <i class="fa fa-fw fa-certificate"></i>
                            Company list</a>
                    </li>
                    <li>
                       <a href="{{route('admin.employee_list')}}">
                            <i class="fa fa-fw fa-certificate"></i>
                            Employee list</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Activity">
                <a class="nav-link  nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSupport" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-info-circle"></i>
                    <span class="nav-link-text">Support</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseSupport">
                    <li>
                        <a href="editprofile.html">
                            <i class="fa fa-fw fa-video-camera"></i>
                            <span class="nav-link-text">Help Videos</span>
                        </a>
                    </li>
                    <li>
                        <a href="editprofile.html">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">Tips & Tricks</span>
                        </a>
                    </li>
                    <li>
                        <a href="editprofile.html">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">How to Update Pro</span>
                        </a>
                    </li>
                </ul>

            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Settings">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-cog fa-spin"></i>
                    <span class="nav-link-text">Settings</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="editprofile.html">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="changepass.html">
                            <i class="fa fa-fw fa-lock"></i>

                            <span class="nav-link-text">Change Password</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-dedent"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">New Messages:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">New Alerts:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                </div>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item">
                    <a onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
            </li>
        </ul>
    </div>
</nav>