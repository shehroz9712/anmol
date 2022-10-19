@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.testimonials.show', $data) }}
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
                            <label class="col-md-2 control-label"><strong>name:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->name }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Designation:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->designation }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Image:</strong> </label>
                            <div class="col-md-8">
                                @if ($data->image != '' && file_exists(uploadsDir('testimonials/') . $data->image))
                                    <img src="{!! asset('uploads/testimonials/' . $data->image) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Stars:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->stars }} Stars</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Content:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{!! $data->content !!}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Status:</strong> </label>
                            <div class="col-md-8">
                               {!! $data->is_active ? '<h6 class="alert alert-success">Active</h6>' : '<h6 class="alert alert-danger">Deactive</h6>' !!}

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.testimonials.index') !!}'">
                                    < Back..</button>
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
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
        });
    </script>
@stop
