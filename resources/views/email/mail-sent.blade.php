@extends('email.layout')

@section('heading', 'Regarding your sent message.')

@section('content')
    <h1>
        Dear {{ $name }},
    </h1>
    <p>
        We have successfully received your message. We will get back to you soon.
    </p>
    <p>
        Thank you for using our application.
    </p>
@endsection
