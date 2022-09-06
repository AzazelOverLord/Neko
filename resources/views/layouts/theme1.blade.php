<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>@yield('title-block')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{  url('/')  }}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{  url('/')  }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{  url('/')  }}/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="{{  url('/')  }}/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="{{  url('/')  }}/assets/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

{{
                        Route::group(['middleware' => 'role:web-developer'], function()
                        {
                            Route::get('/asd', function() {
                                return 'Добро пожаловать, Веб-разработчик';
                            });
                        })
                        Route::group(['middleware' => 'role:guest'], function()
                        {
                            Route::get('/login', function() {
                                return 'Добро пожаловать, Веб-разработчик'
                            });
                        })
}}

<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                        <span>
                            <img src="{{  url('/')  }}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                        </span>
                <span>
                            <img src="{{  url('/')  }}/assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topbar-nav float-right mb-0">

            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <i class="mdi mdi-bell-outline nav-icon"></i>
                    <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                    <!-- item-->
                    <h6 class="dropdown-item-text">
                        Notifications (258)
                    </h6>
                    <div class="slimscroll notification-list">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                            <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                            <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                        </a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                            <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                        </a>
                    </div>
                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                        View all <i class="fi-arrow-right"></i>
                    </a>
                </div>
            </li>

            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{  url('/')  }}/assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                    <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                    <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                </div>
            </li>
        </ul>

        <ul class="list-unstyled topbar-nav mb-0">

            <li>
                <button class="button-menu-mobile nav-link waves-effect waves-light">
                    <i class="mdi mdi-menu nav-icon"></i>
                </button>
            </li>

            <li class="hide-phone app-search">
                <form role="search" class="">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fas fa-search"></i></a>
                </form>
            </li>

        </ul>

    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="{{  url('/')  }}/assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body align-item-center">
                <h5>{{ Auth::user()->name }}</h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class=""><i class="mdi mdi-account"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="javascript: void(0);" class=""><i class="mdi mdi-settings"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ url('/login') }}" class=""><i class="mdi mdi-power"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div><!--end page-wrapper-img-inner-->
</div><!--end page-wrapper-img-->

<div class="page-wrapper">
    <div class="page-wrapper-inner">

        <!-- Left Sidenav -->
    @include('inc/navbar')
    <!-- end left-sidenav-->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- container -->

            @include('inc/footer')
        </div>
        <!-- end page content -->
    </div>
    <!--end page-wrapper-inner -->
</div>
<!-- end page-wrapper -->

<!-- jQuery  -->
<script src="{{  url('/')  }}/assets/js/jquery.min.js"></script>
<script src="{{  url('/')  }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{  url('/')  }}/assets/js/metisMenu.min.js"></script>
<script src="{{  url('/')  }}/assets/js/waves.min.js"></script>
<script src="{{  url('/')  }}/assets/js/jquery.slimscroll.min.js"></script>

<!-- App js -->
<script src="{{  url('/')  }}/assets/js/app.js"></script>

</body>
</html>
