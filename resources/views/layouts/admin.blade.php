<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>@yield('title')</title>
    <!--plugins-->
    <link href="{{ asset('admin/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet"/>
    <!-- loader-->
    <link href="{{ asset('admin/assets/css/pace.min.css') }}" rel="stylesheet"/>
    <script src="{{ asset('admin/assets/js/pace.min.js') }}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}"/>
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/icons.css') }}"/>
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app.css') }}"/>


</head>

<body class="bg-theme bg-theme1">
<!-- wrapper -->
<div class="wrapper">
    <!--sidebar-wrapper-->

    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <h4 class="logo-text">GMdev | ADMIN</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i>Главная</a>
                    </li>
                    <li><a href="#"><i class="bx bx-right-arrow-alt"></i>Обзоры</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">МЕНЮ</li>
            <li>
                <a href="{{ route('admin.categories.index') }}">
                    <div class="parent-icon"><i class="bx bx-book"></i>
                    </div>
                    <div class="menu-title">Категории</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.news.index') }}">
                    <div class="parent-icon"><i class="bx bx-list-ol"></i>
                    </div>
                    <div class="menu-title">Новости</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar-wrapper-->
    <!--header-->
    <header class="top-header">
        <nav class="navbar navbar-expand">
            <div class="left-topbar d-flex align-items-center">
                <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
                </a>
            </div>
            <div class="flex-grow-1 search-bar">
                <div class="input-group">
                    <div class="input-group-prepend search-arrow-back">
                        <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="search"/>
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="right-topbar ml-auto">
                <ul class="navbar-nav">
                    <li class="nav-item search-btn-mobile">
                        <a class="nav-link position-relative" href="javascript:;"> <i
                                class="bx bx-search vertical-align-middle"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-user-profile">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                           data-toggle="dropdown">
                            <div class="media user-box align-items-center">
                                <div class="media-body user-info">
                                    <p class="user-name mb-0">Mik Gir</p>
                                    <p class="designattion mb-0">Available</p>
                                </div>
                                <img src="https://via.placeholder.com/110x110" class="user-img" alt="user avatar">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-user"></i><span>Profile</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-cog"></i><span>Settings</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-tachometer"></i><span>Dashboard</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-wallet"></i><span>Earnings</span></a>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-cloud-download"></i><span>Downloads</span></a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="javascript:;"><i
                                    class="bx bx-power-off"></i><span>Logout</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--end header-->
    <!--page-wrapper-->
    <main>
        <div class="page-wrapper">
            <!--page-content-wrapper-->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
            <!--end page-content-wrapper-->
        </div>

    </main>
    <!--end page-wrapper-->
    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <footer>
        <div class="footer">
            <p class="mb-0">GMdev REPORTER &copy; {{ date('Y') }}</p>
        </div>
    </footer>
    <!-- end footer -->
</div>

<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('admin/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

<script src="{{ asset('admin/assets/js/index2.js') }}"></script>
<!-- App JS -->
<script src="{{ asset('admin/assets/js/app.js') }}"></script>
</body>

</html>
