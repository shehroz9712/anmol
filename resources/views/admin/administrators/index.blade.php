@extends('admin.layouts.app')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
                        {{ Breadcrumbs::render('admin.dashboard.index') }}
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- Zero Configuration  Starts-->
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $key => $record)
                                            <tr class="odd gradeX">
                                                <td>{!! $record->fullName() !!}</td>
                                                <td>{!! $record->phone !!}</td>
                                                <td>{!! $record->email !!}</td>
                                                <td class="center text-center">
                                                    @if ($record->status == 1)
                                                        <span class="text-success">Active</span>
                                                    @else
                                                        <span class="text-danger">Blocked</span>
                                                    @endif
                                                </td>
                                                <td class="center text-center">
                                                    <a href="{!! URL::route('admin.administrators.show', $record->id) !!}" class="btn btn-xs blue"
                                                        title="Show Record">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                    <a href="{!! URL::route('admin.administrators.edit', $record->id) !!}" class="btn btn-xs green"
                                                        title="Edit Record">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    {{-- 1 = super admin user id, and it cannot be removed --}}
                                                    @if ($record->id != 1)
                                                        <a class='btn btn-xs red' data-toggle="modal"
                                                            data-target="#confirmDelete" data-title="Delete Record"
                                                            onclick="setRecordId({{ $record->id }})"
                                                            title="Delete Record">
                                                            <i class="fa fa-trash-o"></i>
                                                        </a>
                                                        <form action="{!! URL::route('admin.administrators.destroy', $record->id) !!}" method="POST"
                                                            id="deleteForm{!! $record->id !!}">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    @else
                                                        <a class='btn btn-xs red disabled' data-title="Delete Record"><i
                                                                class="fa fa-trash-o"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Zero Configuration  Ends-->

            </div>
        </div>
    @stop


    @section('footer-js')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/select2/select2.min.js') !!}"></script>
        <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/jquery.dataTables.js') !!}"></script>
        <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.js') !!}"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
        <script src="{!! URL::to('assets/admin/scripts/custom/user-administrators.js') !!}"></script>
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
