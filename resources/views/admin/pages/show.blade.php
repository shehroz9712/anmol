@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.pages.show', $data) }}
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
                        {{-- <div class="form-group"> --}}
                        {{-- <label class="col-md-2 control-label"><strong>Media File:</strong> </label> --}}
                        {{-- @if (isset($data->mediafile) && $data->mediafile != '') --}}
                        {{-- <div class="col-md-8"> --}}
                        {{-- <img height="50" width="150" src="{!! asset(uploadsDir().$data->mediafile) !!}"> --}}
                        {{-- </div> --}}
                        {{-- @endif --}}
                        {{-- </div> --}}
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Page Title:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->page_title }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Slug:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->slug }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Contents:</strong> </label>
                            <div class="col-md-8">
                                <label class="">{!! strip_tags($data->content) !!}</label>
                            </div>
                        </div>
                        @if ($data->id == '12' || $data->id == '6')

                            @if ($data->id == '12')
                                <div class="form-group">
                                    <label for="content" class="col-md-2 control-label">Faq Section</label>
                                    <div class="col-md-8">
                                        <label class="">{!! strip_tags($data->faq_section) !!}</label>
                                    </div>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="content" class="col-md-2 control-label">Video Preview</label>
                                <div class="col-md-8">
                                    @if ($data->video != '' && file_exists(uploadsDir('video/') . $data->video))
                                        <video id="playerID" controls style="width: 100%;">
                                            <source src="{!! asset('uploads/video/' . $data->video) !!}" type="video/mp4">
                                            <source src="movie.ogg" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
                            </div>

                        @endif

                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Meta Title:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->meta_title }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Meta Keywords:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->meta_keywords }}</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><strong>Meta Description:</strong> </label>
                            <div class="col-md-8">
                                <label class="control-label">{{ $data->meta_description }}</label>
                            </div>
                        </div>
                        {{-- <div class="form-group"> --}}
                        {{-- <label class="col-md-2 control-label"><strong>Created At:</strong> </label> --}}
                        {{-- <div class="col-md-8"> --}}
                        {{-- <label class="control-label">{{ $data->created_at->diffForHumans() }}</label> --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="form-group"> --}}
                        {{-- <label class="col-md-2 control-label"><strong>Updated At:</strong> </label> --}}
                        {{-- <div class="col-md-8"> --}}
                        {{-- <label class="control-label">{{ $data->updated_at->diffForHumans() }}</label> --}}
                        {{-- </div> --}}
                        {{-- </div> --}}
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button class="btn black" id="cancel"
                                    onclick="window.location.href = '{!! URL::route('admin.pages.index') !!}'">
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
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            // initiate layout and plugins
            App.init();
            Admin.init();
        });
    </script>
@stop
