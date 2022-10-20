<p><b>Hi {{ $data['name'] }},</b></p>
<p>Your account was created at <a href="{{ route('front.registration') }}">Registration</a>, please
    follow the link below to access it:</p>

<p>
    <b>Link:</b> <a href="{{ route('front.login') }}">Login Here</a>
    <br />
    <b>Email Address:</b> {{ $data['email'] }}
    <br />
    @if ($data['code'])
        <b>Password:</b> {{ $data['code'] }}
    @endif
</p>

<p>Thanks,</p>

<p>
    <b>Best Regards,</b>
    <br />
    {{ config('app.site_title') }}
</p>
