@extends('front.layouts.app')

@section('content')
    <div class="m-l-0 page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Form Wizard And Validation</h5><span>Validation Step Form Wizard</span>
                        </div>
                        <div class="card-body">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step"><a class="btn btn-light"
                                            href="{!! route('front.create_event') !!}">1</a>
                                        <p>Event Detail</p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-primary"
                                            href="{!! route('front.venue_info', $data) !!}">2</a>
                                        <p>Venue Info </p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-light" disabled>3</a>
                                        <p>Menu Detail</p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-light" disabled>4</a>
                                        <p>Services Style</p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-light" disabled>5</a>
                                        <p>Equipments </p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-light" disabled>6</a>
                                        <p>Labour & Staff </p>
                                    </div>
                                </div>
                            </div>
                            @include('admin.partials.errors')
                            <form class="theme-form" action="{!! route('front.submit_venue') !!}" method="POST">
                                @csrf
                                <div class="setup-content" id="step-1">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Venue Name</label>
                                                    <input class="form-control" type="text" name="venue_name"
                                                        placeholder="Venue Name">
                                                    <input type="hidden" name="id" value="{{ $data }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Address</label>
                                                    <input class="form-control" type="text" name="address"
                                                        placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Venue Type</label>
                                                    <select class="form-select digits" name="venue_type"
                                                        id="exampleFormControlSelect9">
                                                        <option diabled selected value="">Select Venue Type</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="control-label">Venue Contact Person Email </label>
                                                    <input class="form-control" type="email" name="contact_email"
                                                        placeholder="Venue Contact Person Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="control-label">Venue Contact Person Name </label>
                                                    <input class="form-control" type="text" name="contact_name"
                                                        placeholder="Venue Contact Person Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">

                                                <div class="form-group">
                                                    <label class="control-label">Venue Contact Person Phone </label>
                                                    <input class="form-control" type="number" name="contact_phone"
                                                        placeholder="Venue Contact Person Phone">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
