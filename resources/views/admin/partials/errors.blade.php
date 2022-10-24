@if (isset($errors) && count($errors) > 0)


    <div class="alert alert-danger outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-down"></i>
        <p><b> Oh snap! ! </b>
            @foreach ($errors->all() as $error)
                {{ $error }}<br />
            @endforeach
        </p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::get('error'))
    <div class="alert alert-danger outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-down"></i>
        <p><b> Oh snap! ! </b> {!! Session::get('error') !!}</p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success outline alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
        <p><b> Success! </b> {!! Session::get('success') !!}</p>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
