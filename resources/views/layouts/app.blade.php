<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Portal</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3" action="{{ route('news.index') }}" method="GET">
                <div class="input-group input-group-sm">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('news.index') }}" class="nav-link">EXIBIR NOTÍCIAS</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('news.create') }}" class="nav-link">CADASTRAR NOTÍCIAS</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('categories.index') }}" class="nav-link">EXIBIR CATEGORIAS</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('categories.create') }}" class="nav-link">CADASTRAR CATEGORIAS</a>
                        </li>
                    </ul>
                    <input class="form-control form-control-navbar"  name="filter" type="search" >
                    <div class="input-group-append">
                        <button class="btn btn-navbar form-control" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('dist/img/logo_news.png') }}" alt="News Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">News Portal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            NOTÍCIAS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('news.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>CADASTRAR NOTÍCIAS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>EXIBIR NOTÍCIAS</p>
                            </a>
                        </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            CATEGORIAS
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('categories.create') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>CADASTRAR CATEGORIAS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('categories.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>EXIBIR CATEGORIAS</p>
                            </a>
                        </li>

                        </ul>
                    </li>

                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <strong>&copy; 2024 News Portal</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
