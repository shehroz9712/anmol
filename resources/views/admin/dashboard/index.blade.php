@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.dashboard.index') }}
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {!! Session::get('success') !!}
        </div>
    @endif
    <!-- END PAGE HEADER-->

    <!-- BEGIN DASHBOARD STATS -->
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-user"></i>
                </div>
                <div class="details">
                    <div class="number">
                        {!! isset($adminsCount) ? $adminsCount : 0 !!}
                    </div>
                    <div class="desc">
                        Admin Users
                    </div>
                </div>
                <a class="more" href="{!! route('admin.administrators.index') !!}">
                    See Admin Users <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dashboard-stat green">
                <div class="visual">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="details">
                    <div class="number">
                        {!! isset($contactQueriesCount) ? $contactQueriesCount : 0 !!}
                    </div>
                    <div class="desc">
                        Contact Queries
                    </div>
                </div>
                <a class="more" href="{!! route('admin.contact-queries.index') !!}">
                    See Contact Queries <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dashboard-stat blue">
                <div class="visual">
                    <i class="fa fa-envelope-o"></i>
                </div>
                <div class="details">
                    <div class="number">
                        {!! isset($newsletterSubscribesCount) ? $newsletterSubscribesCount : 0 !!}
                    </div>
                    <div class="desc">
                        Newsletter Subscribers
                    </div>
                </div>
                <a class="more" href="{!! route('admin.newsletter-subscribers.index') !!}">
                    See Newsletter Subscribers <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dashboard-stat yellow">
                <div class="visual">
                    <i class="fa fa-th"></i>
                </div>
                <div class="details">
                    <div class="number">
                        {!! isset($pagesCount) ? $pagesCount : 0 !!}
                    </div>
                    <div class="desc">
                        Pages
                    </div>
                </div>
                <a class="more" href="{!! route('admin.pages.index') !!}">
                    See Pages <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dashboard-stat red">
                <div class="visual">
                    <i class="fa fa-sign-out"></i>
                </div>
                <div dclass="details">
                    <div class="number">
                    </div>
{{--                    <div class="desc">--}}
{{--                        Logout--}}
{{--                    </div>--}}
                </div>
                <a class="more" href="{{ route('admin.auth.logout') }}">
                    Logout <i class="m-icon-swapright m-icon-white"></i>
                </a>
            </div>
        </div>
    </div>
@stop

@section('footer-js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/admin/scripts/core/app.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function () {
            App.init(); // initlayout and core plugins
            Admin.init();
        });
    </script>
@stop
