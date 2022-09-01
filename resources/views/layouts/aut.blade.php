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

<body class="account-body">

<!-- Log In page -->
<div class="row vh-100">
    <div class="col-lg-3  pr-0">
        <div class="card mb-0 shadow-none">
            @yield('content')
        </div>
    </div>
    <div class="col-lg-9 p-0 d-flex justify-content-center">
        <div class="accountbg d-flex align-items-center">
            <div class="account-title text-white text-center">
                <img src="{{  url('/')  }}/assets/images/logo.png" alt="" class="thumb-sm">
                <h4 class="mt-3">Добрапожаловать в Neko</h4>
                <div class="border w-25 mx-auto border-primary"></div>
                <h1 class="">Давайте начнём работать</h1>

            </div>
        </div>
    </div>
</div>
<!-- End Log In page -->


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
