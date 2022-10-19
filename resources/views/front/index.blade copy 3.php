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
                                <div class="stepwizard-step"><a class="btn btn-primary" href="#step-1">1</a>
                                    <p>Step 1</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light" href="#step-2">2</a>
                                    <p>Step 2</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light" href="#step-3">3</a>
                                    <p>Step 3</p>
                                </div>
                                <div class="stepwizard-step"><a class="btn btn-light" href="#step-4">4</a>
                                    <p>Step 4</p>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="POST">
                            <div class="setup-content" id="step-1">
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-check">
                                                <div class="checkbox p-0">
                                                    <input class="form-check-input custom_package" id="invalidCheck" type="checkbox" onchange="valueChanged()">
                                                    <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                                                </div>
                                            </div>
                                            <div class="row menu" style="display: none;">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>
                                                            <input type="checkbox" id="myCheckbox1" />
                                                            <label for="myCheckbox1"><img src="http://townandcountryremovals.com/wp-content/uploads/2013/10/firefox-logo-200x200.png" /></label>
                                                        </li>
                                                        <li>

                                                            <input type="checkbox" id="myCheckbox2" />
                                                            <label for="myCheckbox2"><img src="http://tech21info.com/admin/wp-content/uploads/2013/03/chrome-logo-200x200.png" /></label>
                                                        </li>
                                                        <li>

                                                            <input type="checkbox" id="myCheckbox3" />
                                                            <label for="myCheckbox3"><img src="http://www.thebusinessofsports.com/wp-content/uploads/2010/10/facebook-icon-200x200.png" /></label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row package">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header pb-0">
                                                    <h5>Pricing</h5>
                                                </div>
                                                <div class="card-body row pricing-content pricing-col">
                                                    <div class="col-md-3">
                                                        <div class="pricing-block card text-center">
                                                            <div class="pricing-header">
                                                                <h2>standard</h2>
                                                                <div class="price-box">
                                                                    <div>
                                                                        <h3>250</h3>
                                                                        <p>Person</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-list">
                                                                <ul class="pricing-inner">
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>

                                                                </ul>
                                                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="pricing-block card text-center">
                                                            <div class="pricing-header">
                                                                <h2>business</h2>
                                                                <div class="price-box">
                                                                    <div>
                                                                        <h3>300</h3>
                                                                        <p>Person</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-list">
                                                                <ul class="pricing-inner">
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                </ul>
                                                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="pricing-block card text-center">
                                                            <div class="pricing-header">
                                                                <h2>PREMIUM </h2>
                                                                <div class="price-box">
                                                                    <div>
                                                                        <h3>350</h3>
                                                                        <p>Person</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-list">
                                                                <ul class="pricing-inner">
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>

                                                                </ul>
                                                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="pricing-block card text-center">
                                                            <div class="pricing-header">
                                                                <h2>auther pack</h2>
                                                                <div class="price-box">
                                                                    <div>
                                                                        <h3>400</h3>
                                                                        <p>Person</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pricing-list">
                                                                <ul class="pricing-inner">
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                    <li>
                                                                        <h6> Lorem ipsum<span>dolor sit amet consectetur</span></h6>
                                                                    </li>
                                                                </ul>
                                                                <button class="btn btn-primary btn-lg" type="button" data-original-title="btn btn-primary btn-lg" title="">Subscribe</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck1" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck2">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck2" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck2">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck3" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck3">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck4" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck4">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-check">
                                                            <div class="checkbox p-0">
                                                                <input class="form-check-input" id="invalidCheck" type="checkbox">
                                                                <label class="form-check-label" for="invalidCheck">lorem ipsum lorem
                                                                    ipsum</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            <button class="btn btn-primary nextBtn pull-right" type="button">Skip For Later</button>
                    </div>
                </div>
                <div class="setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Event Name</label>
                                    <input class="form-control" type="text" placeholder="Johan" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Event Type</label>
                                    <select class="form-select digits" id="exampleFormControlSelect9">
                                        <option diabled selected value="">Select Event Type</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label class="control-label">Event Dates</label>
                                    <input class="form-control" type="date" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Occation</label>
                                    <input class="form-control" type="text" placeholder="Occation" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">No. of Guest</label>
                                    <input class="form-control" type="number" placeholder="No. of Guest" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">From</label>
                                    <input class="form-control" type="time" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">To</label>
                                    <input class="form-control" type="time" required="required">
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                    </div>
                </div>
                <div class="setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Venue Name</label>
                                    <input class="form-control" type="text" name="vanue_name" placeholder="Venue Name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input class="form-control" type="text" name="address" placeholder="Address" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Venue Type</label>
                                    <select class="form-select digits" name="vanue_type" id="exampleFormControlSelect9">
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
                                    <label class="control-label">Vanue/Contact Person Email </label>
                                    <input class="form-control" type="email" name="contact_email" placeholder="Vanue/Contact Person Email" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label class="control-label">Contact Person Name </label>
                                    <input class="form-control" type="text" name="contact_name" placeholder="Contact Person Name" required="required">
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label class="control-label">Contact Person Phone </label>
                                    <input class="form-control" type="number" name="contact_phone" placeholder="Contact Person Phone" required="required">
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                    </div>
                </div>
                <div class="setup-content" id="step-4">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">State</label>
                                <input class="form-control mt-1" type="text" placeholder="State" required="required">
                            </div>
                            <div class="form-group">
                                <label class="control-label">City</label>
                                <input class="form-control mt-1" type="text" placeholder="City" required="required">
                            </div>
                            <button class="btn btn-secondary pull-right" type="submit">Finish!</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection