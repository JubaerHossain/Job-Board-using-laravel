<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="./index.html">
        <img src="{{asset('../image/logo.png')}}" alt="logo" class="logo">
        </a>
        <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(auth::check())
                    {{Auth::user()->name}}
                    @endif
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="paymentstatus.html">Payment Status</a>
                    {{--<a class="dropdown-item" href="editprofile.html">Edit Profile</a>--}}
                    <a class="dropdown-item" href="support.html">Support</a>
                    <a class="dropdown-item" href="{{ route('profile') }}">Edit Profile</a>
                    <a class="dropdown-item" href="{{ route('companyPassword') }}">Change Password</a>

                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        Logout</a>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </div>
            </li>
        </ul>
    </nav>
</div>