@extends('front.layouts.app')

@section('content')
    <div class="m-l-0 page-body">
        <div class="container-fluid">
            <div class="justify-content-around row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Event Form</h5>
                        </div>
                        <div class="card-body">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step"><a class="btn btn-primary"
                                            href="{!! route('front.create_event') !!}">1</a>
                                        <p>Event Detail</p>
                                    </div>
                                    <div class="stepwizard-step"><a class="btn btn-light" disabled>2</a>
                                        <p>Venue Info</p>
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
                            <form class="theme-form" action="{!! route('front.submit_events') !!}" method="POST">
                                @csrf

                                <div class="setup-content" id="step-1">
                                    <div class="col-xs-12">
                                        <div class="align-items-end row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Event Name</label>
                                                    <input class="form-control" name="event_name" type="text"
                                                        placeholder="Johan" required="required">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Event Type</label>
                                                    <select class="form-select digits" name="event_type"
                                                        id="exampleFormControlSelect9">
                                                        <option diabled selected value="">Select Event Type</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-4">

                                                <div class="form-group">
                                                    <label class="control-label">Event Date</label>
                                                    <input class="form-control" name="event_date" type="date">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">Occasion</label>
                                                    <input class="form-control" name="occation" type="text"
                                                        placeholder="Occasion">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">No. of Guest</label>
                                                    <input class="form-control" name="guest" type="number"
                                                        placeholder="No. of Guest">
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">From</label>
                                                    <input class="form-control" name="from" type="time">
                                                </div>
                                            </div>

                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label class="control-label">To</label>
                                                    <input class="form-control" name="to" type="time">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 text-end">
                                                <div class="form-group">
                                                    <button class="btn btn-primary nextBtn pull-right"
                                                        type="submit">Next</button>
                                                </div>
                                            </div>
                                        </div>
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
