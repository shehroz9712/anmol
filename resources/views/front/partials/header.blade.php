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
            @else
                ddd
            @endif

            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
    </div>
    <!-- Page Header Ends -->
    <!-- Page Body Start-->
