@extends('front.layouts.app')

@section('content')
    <style>
        input:disabled label {
            color: #ccc;
        }

        input[type="checkbox"] .notcheck label,
        input[type="checkbox"] .notcheck label a {
            color: #bfbfce !important;
        }
    </style>
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
                                            <p>Venue Info </p>
                                        </div>
                                        <div class="stepwizard-step"><a class="btn btn-primary"
                                                {!! route('front.menu', $data) !!}>3</a>
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
                            </div>

                            <div class="setup-content" id="step-1">

                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {{-- <div class="form-check">
                                                <div class="checkbox p-0">
                                                    <input class="form-check-input custom_package" id="invalidCheck"
                                                        type="checkbox" onchange="valueChanged()">
                                                    <label class="form-check-label" for="invalidCheck">Make your own
                                                        Package</label>
                                                </div>
                                            </div> --}}
                                            <form class="theme-form" action="{!! route('front.submit_menu') !!}" method="POST">
                                                <input type="hidden" name="id" value="{{ $data }}">
                                                @csrf
                                                <div class="menu">
                                                    <div class="row">
                                                        @foreach ($package->include as $subcat)
                                                            <div class="col-sm-6 col-lg-3 p-3">
                                                                <div class="default-according"
                                                                    id="accordion{{ $subcat->subcategory->id }}">
                                                                    <div class="card">
                                                                        <div class="class="bg-primary card-header p-2""
                                                                            id="heading{{ $subcat->subcategory->id }}">
                                                                            <h5 class="b-b-dark mb-0">
                                                                                <button type="button"
                                                                                    class="bg-transparent btn btn-link text-white"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#collapse{{ $subcat->subcategory->id }}"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapse{{ $subcat->subcategory->id }}">{{ $subcat->subcategory->name }}
                                                                                    - (only {{ $subcat->qty }})</button>

                                                                            </h5>
                                                                        </div>
                                                                        <div class="collapse"
                                                                            id="collapse{{ $subcat->subcategory->id }}"
                                                                            aria-labelledby="headingOne"
                                                                            data-bs-parent="#accordion{{ $subcat->subcategory->id }}">
                                                                            <div class="card-body p-0">
                                                                                <ul class="mycheck"
                                                                                    data-max-answers="{{ $subcat->qty }}">
                                                                                    @foreach ($subcat->subcategory->dishes as $dishe)
                                                                                        <li>
                                                                                            <input type="checkbox"
                                                                                                value="{{ $dishe->id }}"
                                                                                                name="menu[]"
                                                                                                id="myCheckbox{{ $dishe->id }}" />
                                                                                            <label
                                                                                                for="myCheckbox{{ $dishe->id }}">
                                                                                                {{ $dishe->dish_name }}

                                                                                                {{ $dishe->price }}/{{ $dishe->unit }}
                                                                                                <a id="cust_btn"
                                                                                                    itemid="{{ $dishe->id }}"
                                                                                                    href="#">Detail</a>
                                                                                            </label>

                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </form>

                                            <div class="row package">
                                                <div class="col-sm-12">
                                                    <div class="">

                                                        <div class="card-body row pricing-content ">

                                                            <div class="col-md-3">
                                                                <div class="pricing-block card text-center">
                                                                    <div class="pricing-header">
                                                                        <h2>{{ $package->package_name }}</h2>
                                                                        <div class="price-box">
                                                                            <div>
                                                                                <h3>{{ $package->person }}</h3>
                                                                                <p>Person
                                                                                    For{{ $package->currency }}{{ $package->price }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pricing-list">
                                                                        <ul class="pricing-inner">
                                                                            @foreach ($package->include as $include)
                                                                                <li>
                                                                                    <h6> {{ $include->qty }} -
                                                                                        {{ $include->subcategory->name }}
                                                                                    </h6>
                                                                                </li>
                                                                                <br>
                                                                            @endforeach


                                                                        </ul>
                                                                        <a href="{!! route('front.package', $package->id) !!}"
                                                                            class="btn btn-primary btn-lg process"
                                                                            type="button"
                                                                            data-original-title="btn btn-primary btn-lg"
                                                                            title="">Add to
                                                                            process</a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="desc card">
                                                <div class="row">
                                                    {{-- @foreach ($packages as $package)
                                                            @foreach ($package->dishes1 as $package2)
                                                                <div class="col-md-2">
                                                                    <div class="form-check">
                                                                        <div class="checkbox p-0">
                                                                            <input class="form-check-input"
                                                                                id="invalidCheck{{ $package2->id }}"
                                                                                type="checkbox">
                                                                            <label class="form-check-label"
                                                                                for="invalidCheck{{ $package2->id }}">lorem
                                                                                ipsum</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @endforeach --}}
                                                    <div class="col-lg-12">
                                                        <div class="form-check">
                                                            <div class="form-group">
                                                                <label class="form-label"
                                                                    for="exampleFormControlTextarea4">Description</label>
                                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea4" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                            <a class="btn btn-primary nextBtn pull-right" href="{!! route('front.service', $data) !!}">Skip
                                For
                                Later</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
            <!-- Modal -->

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">You May know</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="mydata">
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
@endsection
@section('footer-js')
    <script>
        $(document).on("click", "#cust_btn", function() {

            var id = $(this).attr("itemid");
            $.ajax({
                url: "{!! route('front.getdetail', 1) !!}",
                method: 'GET',
                dataType: 'JSON',

                success: function(response) {
                    console.log(typeof response);
                    $("#mydata").html(`
                        <h5>Lorem ipsum dolor</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor magnam necessitatibus saepe ea
                            blanditiis quae, fugit omnis quasi laborum sapiente eos ipsum nam non laboriosam voluptatem!
                            Dolorem, asperiores exercitationem? Esse.F</p>`);

                    $("#myModal").modal("show");

                },
                error: function(response) {}
            });
        });
        $(document).ready(function() {
            $("input[type=checkbox]").click(function(e) {
                if ($(e.currentTarget).closest("ul.mycheck li").length > 0) {
                    console.log($(e.currentTarget).closest("ul.mycheck").length);

                    toggleInputs($(e.currentTarget).closest("ul.mycheck")[0]);
                }
            });
        });

        function toggleInputs(questionElement) {
            if ($(questionElement).data('max-answers') == undefined) {
                return true;

            } else {

                maxAnswers = parseInt($(questionElement).data('max-answers'), 10);

                if ($(questionElement).find(":checked").length >= maxAnswers) {
                    $(questionElement).find(":not(:checked)").attr("disabled", true);
                    $(questionElement).find(":not(:checked)").addClass("notcheck");

                } else {

                    $(questionElement).find("input[type=checkbox]").attr("disabled", false);
                    $(questionElement).find("input[type=checkbox]").removeClass("notcheck");
                }
            }
        }
    </script>
@endsection
