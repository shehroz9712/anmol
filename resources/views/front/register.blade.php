@extends('front.layouts.app')

@section('content')
    <div class="m-l-0 page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="justify-content-around row">
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Booking Form</h5><span>Using this form to register yourself if you are already
                                    registered <a href="{!! route('front.login') !!}">login here</a></span>
                            </div>
                            @include('admin.partials.errors')
                            <form class="theme-form" action="{!! route('front.register') !!}" method="POST">
                                <div class="card-body">
                                    @csrf
                                    <div class="mb-3 row">
                                        {{-- <label class="col-form-label col-sm-3" for="exampleInputEmail1">Email address
                                            :</label> --}}
                                        <div class="col-sm-6">
                                            <input class="form-control" id="exampleInputEmail1" type="email"
                                                name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                            {{-- <small
                                                class="form-text text-muted" id="emailHelp">We'll never
                                                share
                                                your email with anyone else.</small> --}}
                                        </div>
                                        {{-- </div>
                                    <div class="mb-3 row"> --}}
                                        {{-- <label class="col-form-label col-sm-3" for="exampleInputPassword1">Password
                                            :</label> --}}
                                        <div class="col-sm-6">
                                            <input class="form-control" id="exampleInputPassword1" type="password"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        {{-- <label class="col-sm-3 col-form-label" for="inputPassword3">Username :</label> --}}
                                        <div class="col-sm-6">
                                            <input class="form-control" id="url" type="text" name="username"
                                                placeholder="Username">
                                        </div>
                                        {{-- </div>

                                    <div class="mb-3 row"> --}}
                                        {{-- <label class="col-sm-3 col-form-label" for="inputPassword3">Phone no :</label> --}}
                                        <div class="col-sm-6">
                                            <input class="form-control" id="url" type="number" name="phone"
                                                placeholder="Phone no">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-iconsolid float-end right mb-4">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
