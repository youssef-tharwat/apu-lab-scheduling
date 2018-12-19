<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav" style="margin-top: 1em;">
                <li class="{{ request()->is('schedule') ? 'active' : '' }}">
                    <a href="{{route('schedule')}}"> <i class="menu-icon fa fa-lg fa-calendar-check-o"></i>Schedule</a>
                </li>
                <li class="{{ request()->is('schedule/view') ? 'active' : '' }}">
                    <a href="{{route('schedule.view')}}"> <i class="menu-icon fa fa-lg fa-calendar"></i>View Lab Schedule</a>
                </li>
                <li class="{{ request()->is('feedback') ? 'active' : '' }}">
                    <a href="{{route('feedback')}}"> <i class="menu-icon fa fa-lg fa-comments"></i>Feedback</a>
                </li>

                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))

                <li class="{{ request()->is('feedback/view') ? 'active' : '' }}">
                    <a href="{{route('feedback.view')}}"> <i class="menu-icon fa fa-lg fa-eye"></i>View Feedback</a>
                </li>

                @endif

                @if(\Illuminate\Support\Facades\Auth::user()->hasRole('admin'))

                <li class="{{ request()->is('ping-test') ? 'active' : '' }}">
                    <a href="{{route('ping')}}"> <i class="menu-icon fa fa-lg fa-flask"></i>Ping Test</a>
                </li>

                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>