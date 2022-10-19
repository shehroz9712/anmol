@extends('admin.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.css') !!}" />
    <!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.locations.index') }}
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->

    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">

            <!-- Action buttons Code Start -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Add New Button Code Moved Here -->
                    <div class="table-toolbar pull-right">
                        <div class="btn-group">
                            <a href="{!! URL::route('admin.locations.create') !!}" id="sample_editable_1_new" class="btn blue">
                                Add <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Add New Button Code Moved Here -->
                </div>
            </div>
            <!-- Action buttons Code End -->

            @include('admin.partials.errors')

            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-th"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th width="40">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $key => $record)
                                <tr class="odd gradeX">
                                    <td>{!! $record->name !!}</td>
                                    <td>{!! $record->is_active ? '<h6 class="alert alert-success">Active</h6>' : '<h6 class="alert alert-danger">Deactive</h6>' !!}</td>
                                    <td class="center text-center">
                                        <a href="{!! URL::route('admin.locations.show', $record->id) !!}" class="btn btn-xs blue" title="Show Record">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <a href="{!! URL::route('admin.locations.edit', $record->id) !!}" class="btn btn-xs green" title="Edit Record">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a class='btn btn-xs red' data-toggle="modal" data-target="#confirmDelete"
                                            data-title="Delete Record" onclick="setRecordId({{ $record->id }})"
                                            title="Delete Record">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                        <form action="{!! URL::route('admin.locations.destroy', $record->id) !!}" method="POST"
                                            id="deleteForm{!! $record->id !!}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@stop

@section('footer-js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/jquery.dataTables.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.js') !!}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/custom/locations.js') !!}"></script>
    <script>
        jQuery(document).ready(function() {
            App.init();
            Admin.init();
            TableManaged.init();
        });
        var setRecordId = function(id) {
            jQuery(document).ready(function() {
                jQuery('#deleteButton').attr('onclick', 'document.getElementById(\'deleteForm' + id +
                    '\').submit()')
            });
        };
    </script>
@stop
