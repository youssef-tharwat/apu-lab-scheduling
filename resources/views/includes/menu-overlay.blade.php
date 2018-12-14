<div class="menu_overlay trans_400"></div>
<div class="menu trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
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
    <nav class="menu_nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About us</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
</div>