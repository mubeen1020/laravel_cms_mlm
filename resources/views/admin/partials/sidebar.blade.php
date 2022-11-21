<div class="navbar nav_title" style="border: 0;">
    <a href="{{route('admin.dashboard')}}" class="site_title text-center">
        <span>Admin Panel</span>
    </a>
</div>
<div class="clearfix"></div>

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">

            <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-home"></i> Home
                </a>
            </li>

            <li class="{{ isset(request()->type) ? 'active' : '' }}">
                <a>
                    <i class="fa fa-file-text-o"></i>Content Management
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu" style="{{ isset(request()->type) ? 'display:block;' : '' }}">
                    <li class="{{ request()->type == 1 ? 'current-page' : '' }}"><a href="{{route('admin.posts.index')}}?type=1">Contents</a></li>
                    <li class="{{ request()->type == 2 ? 'current-page' : '' }}"><a href="{{route('admin.posts.index')}}?type=2">Products</a></li>
                    <li><a href="{{route('admin.categories.index')}}">Categories</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.menus')}}">
                    <i class="fa fa-bars"></i> Menu Management
                </a>
            </li>  
            
            <li>
                <a href="{{route('admin.blocks.index')}}">
                    <i class="fa fa-arrows"></i> Settlement Management
                </a>
            </li>

            <li>
                <a href="{{route('admin.language-values.index')}}">
                    <i class="fa fa-globe"></i> Language Parameters
                </a>
            </li>

            <li>
                <a href="{{route('admin.form-data')}}">
                    <i class="fa fa-edit"></i> Form Applications
                </a>
            </li>

            <li>
                <a>
                    <i class="fa fa-users"></i> Admin Actions
                    <span class="fa fa-chevron-down"></span>
                </a>
                <ul class="nav child_menu">
                    <li><a href="{{route('admin.admins.index')}}">Managers</a></li>
                    <li><a href="{{route('admin.roles.index')}}">Powers</a></li>
                    <li><a href="{{route('admin.permissions.index')}}">Permissions</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.settings') }}">
                    <i class="fa fa-cog"></i> System Settings
                </a>
            </li>

        </ul>
    </div>
</div>

<div class="sidebar-footer hidden-small">
    <a href="{{url('/')}}" target="_blank" data-toggle="tooltip" data-placement="top" title="View Site">
        <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
    </a>
    <a id="clear-cache" data-toggle="tooltip" data-placement="top" title="Clear Cache">
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
    </a>
    <a href="{{ route('admin.settings') }}" data-toggle="tooltip" data-placement="top" title="System settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" title="Log out">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

