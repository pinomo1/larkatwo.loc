<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Admin Panel</title>

        <!-- Fevicon-->
        <link rel="icon" href="{{ asset('site/img/Fevicon.png') }}" type="image/png">
        @section('style')
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}" />
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}" />
        @show
    </head>
    <body class="hold-transition sidebar-mini">

        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="{{ route('adminka') }}" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{ route('adminka') }}" class="nav-link">Home</a>
                    </li>
                </ul>
                <!-- SEARCH FORM -->
                <!--
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            -->
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </nav>
            @section('menu')
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
                    <span class="brand-text font-weight-light">Admin Panel</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">

                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <li class="nav-item {{ Request::is('adminka') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Request::is('adminka') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Home
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('adminka') }}" class="nav-link {{ Request::is('adminka') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Home Title</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Request::is('adminka/blog*') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Request::is('adminka/blog*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Blog
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('bloglist') }}" class="nav-link {{ Request::is('adminka/blog/list') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Blog List</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('categorylist') }}" class="nav-link {{ Request::is('adminka/blog/categories') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Categories</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Request::is('adminka/about') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Request::is('adminka/about') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        About
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('homeAbout') }}" class="nav-link {{ Request::is('adminka/about') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>About Page</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Request::is('adminka/contact') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Request::is('adminka/contact') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Contact
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link {{ Request::is('adminka/contact') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Edit Contact</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item {{ Request::is('adminka/social') ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link {{ Request::is('adminka/social') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Social
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('social') }}" class="nav-link {{ Request::is('adminka/social') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Social list</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </nav>
                </div>

            </aside>
            @show

            @section('content')



            @show

            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block"><b>Version</b> 1.1.0</div>
                <strong>Copyright &copy; 2023.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            
        </div>

        @section('script')
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- overlayScrollbars -->
        <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('admin/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <!-- ChartJS -->
        <script src="{{ asset('admin/plugins/chart.js/Chart.min.j') }}s"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('admin/dist/js/pages/dashboard2.js') }}"></script>
        @show
    </body>
</html>