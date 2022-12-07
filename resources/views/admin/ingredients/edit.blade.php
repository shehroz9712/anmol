@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PACKAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PACKAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.ingredients.edit', $data) }}
            <!-- END PACKAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PACKAGE HEADER-->
    <!-- BEGIN PACKAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">

            @include('admin.partials.errors')

            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet box blue">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-edit"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>

                    <form method="POST" action="{{ route('admin.ingredients.update', $data->id) }}" class="form-horizontal"
                        enctype="multipart/form-data" role="form">
                        @csrf
                        @method('PUT')

                        <input type="hidden" id="package_id" name="id" value="{{ $data->id }}" />
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Category *</label>
                            <div class="col-md-4">
                                <input type="text" id="name" name="name" maxlength="190"
                                    value="{{ old('name', $data->name) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Active *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status">
                                    <option value=""> - Select - </option>
                                    <option value="0"
                                        {{ old('0', $data->status) == '0' ? 'selected="selected"' : '' }}>Deactive
                                    </option>
                                    <option value="1"
                                        {{ old('1', $data->status) == '1' ? 'selected="selected"' : '' }}>Active
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" class="btn blue" id="save" value="Save">
                                <input type="button" class="btn black" name="cancel" id="cancel" value="Cancel">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END PACKAGE CONTENT-->
@stop

@section('footer-js')
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function() {
                window.location.href = "{!! URL::route('admin.ingredients.index') !!}";
            });
            var package_id = $("#package_id").val();
        });
    </script>
@stop
