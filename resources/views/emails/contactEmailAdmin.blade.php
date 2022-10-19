@component('mail::message')
    __Hi Admin,__<br><br>
    {!! $data['name'] !!} with email {!! $data['email'] !!} and phone number is {!! $data['phone_number'] !!} has contacted via
    the request form our {{ config('app.name') }}. Please check the form details below:<br><br>
    @component('mail::table')
        <table>
            <tr>
                <td>Name : <br> <b> {!! $data['name'] !!} </b> </td>
                <td>Title : <br> <b> {!! $data['yourtitle'] !!} </b> </td>
            </tr>
            <tr>
                <td>Phone number : <br> <b> {!! $data['phone_number'] !!} </b> </td>
                <td>Email : <br> <b> {!! $data['email'] !!} </b> </td>
            </tr>
            <tr>
                <td>Company Name : <br> <b> {!! $data['companyname'] !!} </b> </td>
                <td>Size of Company : <br> <b> {!! $data['size_of_company'] !!} </b> </td>
            </tr>
            <tr>
                <td>Industry : <br> <b> {!! $data['industry'] !!} </b> </td>
                <td>Current Practice Management System : <br> <b> {!! $data['management'] !!} </b> </td>
            </tr>
            <tr>
                <td>Description of the Other Practice Area : <br> <b> {!! $data['practice'] !!} </b> </td>
                <td>Business Address : <br> <b> {!! $data['business_address'] !!} </b> </td>
            </tr>
            <tr>
                <td>What are looking for practice management system : <br> <b> {!! $data['management_system'] !!} </b> </td>
                <td>Are You Interested in Any of These Support Services : <br> <b> {!! $data['support'] !!} </b> </td>
            </tr>
        </table>
    @endcomponent
    @lang('Thanks'),
    {{ config('app.name') }}
@endcomponent
