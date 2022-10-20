@extends('front.layouts.app')

@section('content')
    <div class="m-l-0 page-body">
        <div class="container-fluid">
            <div class="page-header">
                <div class="justify-content-around row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h5>Login</h5><span>Using this form to Login yourself if you are not
                                    registered <a href="{!! route('front.registration') !!}">Register here</a></span>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" action="{!! route('front.login_submit') !!}" method="POST">
                                    @csrf
                                    <div class="mb-3 row">
                                        {{-- <label class="col-form-label col-sm-3" for="exampleInputEmail1">Email address
                                            :</label> --}}
                                        <div class="col-sm-12">
                                            <input class="form-control" id="exampleInputEmail1" type="email"
                                                name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                            {{-- <small
                                                class="form-text text-muted" id="emailHelp">We'll never
                                                share
                                                your email with anyone else.</small> --}}
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        {{-- <label class="col-form-label col-sm-3" for="exampleInputPassword1">Password
                                            :</label> --}}
                                        <div class="col-sm-12">
                                            <input class="form-control" id="exampleInputPassword1" type="password"
                                                name="password" placeholder="Password">
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-iconsolid float-end right">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
