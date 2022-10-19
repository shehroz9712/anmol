@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.blogs.edit', $data) }}
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

                    <form method="POST" action="{{ route('admin.blogs.update', $data->id) }}" class="form-horizontal"
                        enctype="multipart/form-data" role="form">
                        @csrf
                        @method('PUT')



                        <input type="hidden" id="id" name="id" value="{{ $data->id }}" />
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Blog Title *</label>
                            <div class="col-md-4">
                                <input type="text" id="title" name="title" maxlength="190"
                                    value="{{ old('title', $data->title) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-2 control-label">Slug *</label>
                            <div class="col-md-4">
                                <input id="slug" type="text" name="slug" maxlength="190"
                                    value="{{ old('slug', $data->slug) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="media" class="col-md-2 control-label">Media </label>
                            <div class="col-md-4">
                                @if ($data->media != '' && file_exists(uploadsDir('blogs/') . $data->media))
                                    <img src="{!! asset('uploads/blogs/' . $data->media) !!}" alt="{!! $data->title !!}"
                                        title="{!! $data->title !!}" style="width: 100px;" />
                                @endif

                                <input type="file" name="media" class="form-control" />

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Content</label>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control ckeditor" maxlength="65000" rows="3">{{ old('content', $data->content) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="slug" class="col-md-2 control-label">Meta Title</label>
                            <div class="col-md-8">
                                <input id="meta_title" type="text" name="meta_title" maxlength="190"
                                    value="{{ old('meta_title', $data->meta_title) }}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords" class="col-md-2 control-label">Meta Keywords</label>
                            <div class="col-md-8">
                                <textarea name="meta_keywords" class="form-control" maxlength="65000" rows="3">{{ old('meta_keywords', $data->meta_keywords) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="meta_description" class="col-md-2 control-label">Meta Description</label>
                            <div class="col-md-8">
                                <textarea name="meta_description" class="form-control" maxlength="65000" rows="3">{{ old('meta_description', $data->meta_description) }}</textarea>
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
                window.location.href = "{!! URL::route('admin.pages.index') !!}";
            });
            var page_id = $("#page_id").val();
        });
        $("#title").blur(function() {
            var value = $(this).val();
            $('#slug').val(slugify(value));
        }).blur();

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(/[^\w\-]+/g, '') // Remove all non-word chars
                .replace(/\-\-+/g, '-') // Replace multiple - with single -
                .replace(/^-+/, '') // Trim - from start of text
                .replace(/-+$/, ''); // Trim - from end of text
        }
    </script>
@stop
