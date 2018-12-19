<header class="header trans_400 scrolled">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <div class="logo"><a href="{{route('schedule')}}">Lab<span>Scheduling</span></a></div>
                    @else
                        <div class="logo"><a href="{{url('/')}}">Lab<span>Scheduling</span></a></div>
                    @endif
                    <nav class="main_nav ml-auto mr-auto">
                        <ul class="d-flex flex-row align-items-center justify-content-start">


                        </ul>
                    </nav>
                    <div class="log_reg">
                        <div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
                            @guest
                                <div class="login log_reg_text"><a href="{{route('login')}}">Login</a></div>
                                @if (Route::has('register'))
                                    <div class="register log_reg_text"><a href="{{route('register')}}">Register</a></div>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>

                                </li>

                            @endguest
                        </div>
                    </div>

                    <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>