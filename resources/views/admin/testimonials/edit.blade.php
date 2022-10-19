@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.testimonials.edit', $data) }}
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
                        <i class="fa fa-edit"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>

                    <form method="POST" action="{{ route('admin.testimonials.update', $data->id) }}"
                        class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name *</label>
                            <div class="col-md-4">
                                <input type="text" id="name" maxlength="190" name="name"
                                    value="{{ old('question', $data->name) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="designation" class="col-md-2 control-label">Designation *</label>
                            <div class="col-md-4">
                                <input id="designation" type="text" name="designation" maxlength="190"
                                    value="{{ old('question', $data->designation) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logo" class="col-md-2 control-label">Images </label>
                            <div class="col-md-4">
                                @if ($data->image != '' && file_exists(uploadsDir('testimonials/') . $data->image))
                                    <img src="{!! asset('uploads/testimonials/' . $data->image) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="image" class="form-control" />


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Stars *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="stars">
                                    <option value=""> - Select - </option>
                                    <option value="1"
                                        {{ old('1', $data->stars) == '1' ? 'selected="selected"' : '' }}>1 Star
                                    </option>
                                    <option value="2"
                                        {{ old('2', $data->stars) == '2' ? 'selected="selected"' : '' }}>2 Star
                                    </option>
                                    <option value="3"
                                        {{ old('3', $data->stars) == '3' ? 'selected="selected"' : '' }}>3 Star
                                    </option>
                                    <option value="4"
                                        {{ old('4', $data->stars) == '4' ? 'selected="selected"' : '' }}>4 Star
                                    </option>
                                    <option value="5"
                                        {{ old('5', $data->stars) == '5' ? 'selected="selected"' : '' }}>5 Star
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control ckeditor" maxlength="65000"> {{ old('Content', $data->content) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Status *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="is_active">
                                    <option value=""> - Select - </option>
                                    <option value="1"
                                        {{ old('status', $data->is_active) == '1' ? 'selected="selected"' : '' }}>Active
                                    </option>
                                    <option value="0"
                                        {{ old('status', $data->is_active) == '0' ? 'selected="selected"' : '' }}>Deactive
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
            $('#cancel').click(function() {
                window.location.href = "{!! URL::route('admin.testimonials.index') !!}";
            });
        });
    </script>
@stop
