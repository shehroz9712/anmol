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

    @includeIf('front.layouts.partials.head')

    @yield('css')
</head>


<body class="dark-only">
    @includeIf('front.layouts.partials.header')

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

    @includeIf('front.layouts.partials.footer')
    @yield('footer-js')
</body>

</html>
