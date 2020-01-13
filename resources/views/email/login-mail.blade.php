@extends('email.layout')

@section('heading', 'Regarding your Credentials')

@section('content')
    <h1>
        Dear {{ $name }},
    </h1>
    <p>
        Thank you for using our application.
    </p>
    <p>
        Your credentials for the application is as follows:
    </p>
    <p>
        Email : {{ $email }} <br>
        Password: {{ $password }}
    </p>
    <p>
        Please click the button below for logging in to the application.
    </p>
@endsection

@section('button')
    <a href="{{ route('login') }}" target="_blank">Click Here</a>
@endsection
