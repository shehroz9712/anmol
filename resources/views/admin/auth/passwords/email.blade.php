@extends('admin.layouts.login')

@section('content')
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="login-card">
                        <form method="post" class="theme-form login-form" action="{{ route('admin.password.email') }}"
                            aria-label="{{ __('Reset Password') }}">
                            @csrf @method('POST')
                            <h4>RESET PASSWORD</h4>
                            <h6>Please enter your email address to request a password reset link.</h6>

                            @if (count($errors) > 0)
                                <div class="alert alert-danger custom">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br />
                                    @endforeach
                                </div>
                            @endif

                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Email Address</label>
                                <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                        value="{{ old('email') }}" placeholder="Email Address.." required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
