@extends('front.layouts.app')

@section('content')
    <div class="m-l-0 page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Default Form Layout</h5><span>Using the <a href="#">card</a> component, you can
                                    extend the
                                    default collapse behavior to create an accordion.</span>
                            </div>
                            <div class="card-body">
                                <form class="theme-form">
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-sm-3" for="exampleInputEmail1">Email address
                                            :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="exampleInputEmail1" type="email"
                                                name="email" aria-describedby="emailHelp" placeholder="Enter email"><small
                                                class="form-text text-muted" id="emailHelp">We'll never
                                                share
                                                your email with anyone else.</small>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-form-label col-sm-3" for="exampleInputPassword1">Password
                                            :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="exampleInputPassword1" type="password"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Username :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="url" type="text" name="username"
                                                placeholder="Username">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="inputPassword3">Phone no :</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="url" type="text" name="phone"
                                                placeholder="Phone no">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn btn-iconsolid">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
