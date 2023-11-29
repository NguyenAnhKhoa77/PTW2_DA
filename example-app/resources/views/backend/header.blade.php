<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | @yield('title')</title>
    <link rel="icon" href="{{ url('images/team/logo.png', []) }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css', []) }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css', []) }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css', []) }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('backend/plugins/jqvmap/jqvmap.min.css', []) }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('backend/css/adminlte.min.css', []) }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css', []) }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('backend/plugins/daterangepicker/daterangepicker.css', []) }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('backend/plugins/summernote/summernote-bs4.min.css', []) }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ url('backend/img/AdminLTELogo.png', []) }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Manage</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('backend/img/user2-160x160.jpg', []) }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                    <div class="info">
                        <a href="{{ route('home', ['id' => 1]) }}" class="d-block">User page</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('product.table') }}"
                                class="nav-link {{ Route::currentRouteName() == 'product.table' || Route::currentRouteName() == 'product.create' || Route::currentRouteName() == 'product.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Sản phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('bill.table', []) }}"
                                class="nav-link {{ Route::currentRouteName() == 'bill.table' || Route::currentRouteName() == 'bill.create' || Route::currentRouteName() == 'bill.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Đơn hàng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.table', []) }}"
                                class="nav-link {{ Route::currentRouteName() == 'user.table' || Route::currentRouteName() == 'user.create' || Route::currentRouteName() == 'user.edit' || Route::currentRouteName() == 'user.show' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Người dùng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manufacture.table') }}"
                                class="nav-link {{ Route::currentRouteName() == 'manufacture.table' || Route::currentRouteName() == 'manufacture.create' || Route::currentRouteName() == 'manufacture.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Nhãn hàng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('category.table') }}"
                                class="nav-link {{ Route::currentRouteName() == 'category.table' || Route::currentRouteName() == 'category.create' || Route::currentRouteName() == 'category.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Loại sản phẩm
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('comments.index') }}"
                                class="nav-link {{ Route::currentRouteName() == 'comments.table' || Route::currentRouteName() == 'comments.create' || Route::currentRouteName() == 'comments.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Bình luận
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mailbox.mailbox') }}"
                                class="nav-link {{ Route::currentRouteName() == 'comments.table' || Route::currentRouteName() == 'comments.create' || Route::currentRouteName() == 'comments.edit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-table"></i>
                                <p>Mailbox
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- /.navbar -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Success!</h5>

                    {{ session('success') }}
                </div>
            @endif
            @if (session('errors'))
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> Error!</h5>
                    {{ session('errors') }}
                </div>
            @endif
            @if (session('warning'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i>Warning!</h5>
                    {{ session('warning') }}
                </div>
            @endif
            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

    </div>
    <!-- jQuery -->
    <script src="{{ url('backend/plugins/jquery/jquery.min.js', []) }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('backend/plugins/jquery-ui/jquery-ui.min.js', []) }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('backend/plugins/bootstrap/js/bootstrap.bundle.min.js', []) }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('backend/plugins/chart.js/Chart.min.js', []) }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('backend/plugins/sparklines/sparkline.js', []) }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('backend/plugins/jqvmap/jquery.vmap.min.js', []) }}"></script>
    <script src="{{ url('backend/plugins/jqvmap/maps/jquery.vmap.usa.js', []) }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('backend/plugins/jquery-knob/jquery.knob.min.js', []) }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('backend/plugins/moment/moment.min.js', []) }}"></script>
    <script src="{{ url('backend/plugins/daterangepicker/daterangepicker.js', []) }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js', []) }}"></script>
    <!-- Summernote -->
    <script src="{{ url('backend/plugins/summernote/summernote-bs4.min.js', []) }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js', []) }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('backend/js/adminlte.js', []) }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('backend/js/demo.js', []) }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('backend/js/pages/dashboard.js', []) }}"></script>
</body>

</html>
