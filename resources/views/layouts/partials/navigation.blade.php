<nav class="carter-nav navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav nav-auth">
                        <li><a href="#" title="">Home</a></li>
                        <li><a href="#" title="">Technicians</a></li>
                        <li><a href="#" title="">About Us</a></li>
                        <li><a href="#" title="">Contact Us</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right nav-auth">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('signup') }}"><span class="icon fa fa-sign-in"></span>Register</a></li>
                            <li><a href="{{ route('login') }}"><span class="icon fa fa-plug"></span>Login</a></li>
                            <li><a href="{{ route('register') }}"><span class="become">Become a Member</span></a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ ucfirst(Auth::user()->first_name) . ' ' . ucfirst(Auth::user()->last_name) }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('profile') }}">Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
            </div>
        </nav>