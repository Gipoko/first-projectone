<!-- ========== Left Sidebar Start ========== -->
              <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" key="t-menu">Menu</li>

            <!-- <li>
                <a href="javascript: void(0);" class="waves-effect">
                    <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                    <span key="t-dashboards">Dashboards</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="index.html" key="t-default">Default</a></li>
                    <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                    <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                    <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                </ul>
            </li> -->
            @if (Auth::user()->hasRole('admin'))
            <li>
                <a href="../dashboard" class="waves-effect">
                    <i class="bx bx-home-circle"></i>
                    <span key="t-dashboards">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bx-layout"></i>
                    <span key="t-layouts">System</span>
                </a>
                <ul class="sub-menu" aria-expanded="true">
                    <li>
                        <a href="javascript: void(0);" class="has-arrow" key="t-vertical">Setup</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="{{route('about')}}" key="t-light-sidebar">About</a></li>
                            <!-- <li><a href="layouts-compact-sidebar.html" key="t-compact-sidebar">Compact Sidebar</a></li>
                            <li><a href="layouts-icon-sidebar.html" key="t-icon-sidebar">Icon Sidebar</a></li>
                            <li><a href="layouts-boxed.html" key="t-boxed-width">Boxed Width</a></li>
                            <li><a href="layouts-preloader.html" key="t-preloader">Preloader</a></li>
                            <li><a href="layouts-colored-sidebar.html" key="t-colored-sidebar">Colored Sidebar</a></li>
                            <li><a href="layouts-scrollable.html" key="t-scrollable">Scrollable</a></li> -->
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow" key="t-horizontal">Horizontal</a>
                        <ul class="sub-menu" aria-expanded="true">
                            <li><a href="layouts-horizontal.html" key="t-horizontal">Horizontal</a></li>
                            <li><a href="layouts-hori-topbar-light.html" key="t-topbar-light">Topbar light</a></li>
                            <li><a href="layouts-hori-boxed-width.html" key="t-boxed-width">Boxed width</a></li>
                            <li><a href="layouts-hori-preloader.html" key="t-preloader">Preloader</a></li>
                            <li><a href="layouts-hori-colored-header.html" key="t-colored-topbar">Colored Header</a></li>
                            <li><a href="layouts-hori-scrollable.html" key="t-scrollable">Scrollable</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="bx bxs-user "></i>
                    <span key="t-tables">User Management</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="tables-basic.html" key="t-basic-tables">Users</a></li>
                    <li><a href="tables-datatable.html" key="t-data-tables">Data Tables</a></li>
                    <li><a href="tables-responsive.html" key="t-responsive-table">Responsive Table</a></li>
                    <li><a href="tables-editable.html" key="t-editable-table">Editable Table</a></li>
                </ul>
            </li>
            @endif
            <li class="menu-title" key="t-apps">Apps</li>

            

        </ul>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->
</nav>
