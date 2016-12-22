@extends('layouts.template')

@section('content')
<p><i>Dear {{ $data['first_name'] . ' '. $data['last_name'] }},<br><br>
    Please click on the link below or copy and paste the link into your browser to download your Tremor Report. <br>You will need the PIN number you entered into the app for validation purposes.</i>

    <br><br>

    <i><strong>Link</strong></i>: <a href={{ url("report?token=$data[id]&key=$data[hash_key]") }}>{{ url("report&token=$data[id]&key=$data[hash_key]") }}</a>
    <br><br>
    <i>Thank You!<br>
    Tremor App Support</i><br><br>
    
    ****<br>
    <i>"Please do not reply to this email.  You can email support@mytremor.org for queries related to this email."</i> 
</p>
@endsection