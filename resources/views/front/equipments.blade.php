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
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step"><a class="btn btn-light"
                                                href="{!! route('front.create_event') !!}">1</a>
                                            <p>Event Detail</p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-light"
                                                href="{!! route('front.venue_info', $data) !!}">2</a>
                                            <p>Vanue Info </p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-light" {!! route('front.menu', $data) !!}>3</a>
                                            <p>Menu Detail</p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-light"
                                                href="{!! route('front.service', $data) !!}">4</a>
                                            <p>Services Style</p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-primary"
                                                href="{!! route('front.Equipments', $data) !!}">5</a>
                                            <p>Equipments </p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-light" disabled>6</a>
                                            <p>Labour & Staff </p>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.partials.errors')
                            </div>
                            <form class="theme-form" action="{!! route('front.submit_service') !!}" method="POST">
                                @csrf
                                <div class="setup-content" id="step-1">
                                    <div class="row">


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $data }}">
                                                <label class="control-label">Appitizer</label>
                                                <select class="form-select digits" name="appitizer_type"
                                                    id="exampleFormControlSelect9">
                                                    <option diabled selected value="">Select Appitizer
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Time Begin</label>
                                                <input class="form-control" name="appitizer_start" type="time"
                                                    required="required">
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                                <a class="btn btn-primary nextBtn pull-right" href="{!! route('front.equipments', $data) !!}">Skip For
                                    Later</a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
