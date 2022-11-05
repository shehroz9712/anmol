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
                                                href="{!! route('front.equipments', $data) !!}">5</a>
                                            <p>Equipments </p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-light" disabled>6</a>
                                            <p>Labour & Staff </p>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.partials.errors')
                            </div>
                            <form class="theme-form" action="{!! route('front.submit_equipments') !!}" method="POST">
                                @csrf
                                <div class="setup-content" id="step-1">
                                    <div class="align-items-end row">


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="{{ $data }}">
                                                <label class="control-label">Equipments</label>
                                                <select class="form-select digits" name="equipment[]" id="equipment"
                                                    id="exampleFormControlSelect9">
                                                    <option diabled selected value="">Select Equipments
                                                    </option>
                                                    @foreach ($equipments as $row)
                                                        <option value="{{ $row->equipment }}">
                                                            {{ $row->equipment }}2</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="control-label">QTY</label>
                                                <input class="form-control" name="qty[]" id="qty" type="number">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <button type="button" id="add_row" class="btn  btn-primary">Add</button>
                                            </div>
                                        </div>

                                    </div>





                                    <div id="dynamic_field">
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

    s
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var finaltotal = 0;
            var i = 1;
            $('#add_row').click(function() {

                var qty = document.getElementById("qty").value;
                var equipment = document.getElementById("equipment").value;



                if (document.getElementById("qty").value != "") {

                    i++;

                    $('#dynamic_field').append(`
                    
                    <div id="row${i}" class="align-items-end row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data }}">
                                <label class="control-label">Equipments</label>
                                <input   class="form-select " type="text" readonly name="equipment[]" value="${equipment}">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">QTY</label>
                                <input class="form-control" readonly name="qty[]" id="qty" value="${qty}"
                                    type="number" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <button type="button"  name="remove" id="row${i}"class="btn btn-danger btn_remove">Delete</button>
                            </div>
                        </div>

                        </div>`

                    );


                } else {
                    alert("select quantity")

                }
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#' + button_id).remove();

            });
        });
    </script>
@endsection
