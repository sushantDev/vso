<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" style="width:57px;height:57px;" src="{{ asset('backend/images/user.svg') }}" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
            <p class="app-sidebar__user-designation">{{ ucwords(str_replace('-', ' ', Auth::user()->getRoleNames()[0])) }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        @if(Auth::user()->getRoleNames()[0] == "super-admin")
            <li>
                <a class="app-menu__item {{ request()->routeIs('user.index') ? 'active' : '' }}" href="{{ route('user.index') }}"><i class="app-menu__icon fa fa-users"></i>
                    <span class="app-menu__label">Users</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('course.index') ? 'active' : '' }}" href="{{ route('course.index') }}"><i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">Courses</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('session.index') ? 'active' : '' }}" href="{{ route('session.index') }}"><i class="app-menu__icon fa fa-desktop"></i>
                    <span class="app-menu__label">Sessions</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('center.index') ? 'active' : '' }}" href="{{ route('center.index') }}"><i class="app-menu__icon fa fa-university"></i>
                    <span class="app-menu__label">Centers</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('students') ? 'active' : '' }}" href="{{ route('students') }}"><i class="app-menu__icon fa fa-user-circle"></i>
                    <span class="app-menu__label">View Students</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('contact.index') ? 'active' : '' }}" href="{{ route('contact.index') }}"><i class="app-menu__icon fa fa-envelope"></i>
                    <span class="app-menu__label">Messages</span>
                </a>
            </li>
        @elseif(Auth::user()->getRoleNames()[0] == "supervisor")
            <li>
                <a class="app-menu__item {{ request()->routeIs('course.index') ? 'active' : '' }}" href="{{ route('course.index') }}"><i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">My Course</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('session.index') ? 'active' : '' }}" href="{{ route('session.index') }}"><i class="app-menu__icon fa fa-desktop"></i>
                    <span class="app-menu__label">Session</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('center.index') ? 'active' : '' }}" href="{{ route('center.index') }}"><i class="app-menu__icon fa fa-university"></i>
                    <span class="app-menu__label">Centers</span>
                </a>
            </li>
        @else
            <li>
                <a class="app-menu__item {{ request()->routeIs('course.index') ? 'active' : '' }}" href="{{ route('course.index') }}"><i class="app-menu__icon fa fa-book"></i>
                    <span class="app-menu__label">My Course</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ request()->routeIs('session.index') ? 'active' : '' }}" href="{{ route('session.index') }}"><i class="app-menu__icon fa fa-desktop"></i>
                    <span class="app-menu__label">Session</span>
                </a>
            </li>
        @endif
    </ul>
</aside>
