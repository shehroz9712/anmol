@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.contact-queries.show', $data) }}
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">

            @include('admin.partials.errors')

            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-search"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">
                    <h4>&nbsp;</h4>
                    <div class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Name:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->name }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Organization:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->organization }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Email:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->email }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Phone #:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->phone }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Message:</strong> </label>
                            <div class="col-md-8">
                                <label class="col-md-8 control-label text-align-left">{{ $data->message }}</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.contact-queries.index') !!}'">
                                    < Back.. </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@stop

@section('footer-js')
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
        });
    </script>
@stop
