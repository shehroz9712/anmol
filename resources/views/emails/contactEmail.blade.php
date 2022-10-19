    __Hi Admin,__<br><br>
    {!! $data['name'] .' Organization'. $data['organization'] .' Phone'. $data['phone'] !!} has contacted via the contact form on {{ config('app.name') }}. Please check the form details below:<br><br>
    <p>
        {!! nl2br($data['message']) !!}
    </p>
    Thanks,<br>
    @lang('Best Regards'),<br>
    {{ config('app.name') }}
