<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    @includeIf('admin.layouts.partials.head')
    @yield('css')
</head>


<body class="dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row m-0">
                <div class="main-header-left pb-3 pt-0">

                    <div class="dark-logo-wrapper"><a href="/"><img class="img-fluid w-75"
                                src="../assets/images/logo/dark-logo.png" alt=""></a></div>

                </div>
                @if (auth()->guard('web')->check())
                    <div class="nav-right col pull-right right-menu p-0">
                        <ul class="nav-menus">

                            <li class="onhover-dropdown p-0">
                                <button class="btn btn-link" type="button"><a href="login_two.html"><i
                                            data-feather="log-out"></i>Log
                                        out</a></button>
                            </li>
                        </ul>
                    </div>
                @endif

                <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->

            <!-- Page Sidebar Ends-->
            <!-- Container-fluid starts-->
            @yield('content')


            <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer footer-dark fixed-bottom  m-l-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">{!! \Carbon\Carbon::now()->format('Y') !!} &copy; Copyright by {!! config('app.name') !!}. .</p>
                    </div>
                    <div class="col-md-6 text-end">
                        <p class="pull-right mb-0"> All rights reserve
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    @includeIf('admin.layouts.partials.footer')
    @yield('footer-js')
</body>

</html>
