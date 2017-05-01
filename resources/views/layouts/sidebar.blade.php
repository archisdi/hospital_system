@if (!Auth::guest())
    <aside class="main-sidebar">
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel center-block">
                <span class="label label-default text-bold">{{strtoupper(Auth::user()->name)}}</span><br>
                <span class="label label-primary text-bold">{{strtoupper(Auth::user()->role)}}</span>
            </div>

            <ul class="sidebar-menu">
                <li class="header">NAVIGATION</li>
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{route('home')}}"><i
                                class="fa fa-home"></i>
                        <span>Home</span></a></li>

                @if(Auth::user()->isAdmin())
                    <li class="{{ Request::is('patient') || Request::is('patient/*') ? 'active' : '' }}"><a
                                href="{{route('patient.index')}}"><i class="fa fa-user"></i> <span>Patient</span></a>
                    </li>
                @else
                    <li class="{{ Request::is('doctor/patient') || Request::is('doctor/patient/*') ? 'active' : '' }}"><a
                                href="{{route('doctor.patient.index')}}"><i class="fa fa-user"></i> <span>Patient</span></a>
                    </li>
                @endif
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endif