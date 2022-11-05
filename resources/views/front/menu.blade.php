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
                            <form class="theme-form" action="{!! route('front.submit_menu') !!}" method="POST">
                                @csrf
                                <div class="setup-content" id="step-1">
                                    <input type="hidden" name="id" value="{{ $data }}">
                                    <div class="col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-check">
                                                    <div class="checkbox p-0">
                                                        <input class="form-check-input custom_package" id="invalidCheck"
                                                            type="checkbox" onchange="valueChanged()">
                                                        <label class="form-check-label" for="invalidCheck">Make your own
                                                            Package</label>
                                                    </div>
                                                </div>
                                                <div class="row menu" style="display: none;">
                                                    <div class="col-md-12">
                                                        <ul>
                                                            @foreach ($dishes as $dishe)
                                                                <li class="text-center">
                                                                    <input type="checkbox" value="{{ $dishe->id }}"
                                                                        name="menu[]" id="myCheckbox{{ $dishe->id }}" />
                                                                    <label for="myCheckbox{{ $dishe->id }}">
                                                                        <img src="{{ uploads($dishe->image) }}" /></label>

                                                                    {{ $dishe->price }}/{{ $dishe->unit }}
                                                                </li>
                                                            @endforeach

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row package">
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <div class="card-header pb-0">
                                                        <h5>Pricing</h5>
                                                    </div>
                                                    <div class="card-body row pricing-content pricing-col">
                                                        @foreach ($packages as $package)
                                                            <div class="col-md-3">
                                                                <div class="pricing-block card text-center">
                                                                    <div class="pricing-header">
                                                                        <h2>{{ $package->package_name }}</h2>
                                                                        <div class="price-box">
                                                                            <div>
                                                                                <h3>{{ $package->person }}</h3>
                                                                                <p>Person</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="pricing-list">
                                                                        <ul class="pricing-inner">
                                                                            @foreach ($package->dishes1 as $package2)
                                                                                <li>
                                                                                    <h6> {{ $package2->name->dish_name }}
                                                                                    </h6>
                                                                                </li>
                                                                                <br>
                                                                            @endforeach


                                                                        </ul>
                                                                        <button class="btn btn-primary btn-lg process"
                                                                            type="button"
                                                                            data-original-title="btn btn-primary btn-lg"
                                                                            title="">Add to process</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="desc card" style="display: none">
                                            <div class="row">
                                                @foreach ($packages as $package)
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
                                                @endforeach
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
                                <button class="btn btn-primary nextBtn pull-right" type="submit">Next</button>
                                <a class="btn btn-primary nextBtn pull-right" href="{!! route('front.service', $data) !!}">Skip For
                                    Later</a>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
