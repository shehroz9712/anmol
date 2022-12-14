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
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.administrators.store') }}" class="form-horizontal"
                                role="form">
                                @csrf
                                @method('POST')
                                <div class="form-group  row">
                                    <div class="col-md-6">

                                        <label for="first_name" class=" control-label">First Name *</label>
                                        <input type="text" maxlength="32" name="first_name"
                                            value="{{ old('first_name') }}" class="form-control" />
                                    </div>
                                    <div class="col-md-6">

                                        <label for="last_name" class="control-label">Last Name *</label>
                                        <input type="text" maxlength="32" name="last_name" value="{{ old('last_name') }}"
                                            class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">


                                    <div class="col-md-6">
                                        <label for="email" class=" control-label">Email *</label>
                                        <input type="text" maxlength="128" name="email" value="{{ old('email') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password" class=" control-label">Password *</label>
                                        <input type="text" maxlength="128" name="password" value="{{ old('password') }}"
                                            class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="phone" class=" control-label">Phone *</label>
                                        <input type="text" name="phone" maxlength="24" value="{{ old('phone') }}"
                                            class="form-control" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name" class=" control-label">Status *</label>
                                        <select class="form-control" name="status">
                                            <option value=""> - Select - </option>
                                            <option value="1" {{ old('status') == '1' ? 'selected="selected"' : '' }}>
                                                Active</option>
                                            <option value="0" {{ old('status') == '0' ? 'selected="selected"' : '' }}>
                                                Blocked</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                        <a href="{!! URL::route('admin.administrators.index') !!}" class="btn btn-danger"><i class="fa fa-user"></i>
                                            Back </a>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer-js')

@stop
