@extends('email.layout')

@section('heading', 'Regarding new message received')

@section('content')
    <h1>
        Dear Admin,
    </h1>
    <p>
        New message from {{ $name }} have been received with email {{ $email }}.
    </p>
    <p>
        Please click the button below for viewing new message.
    </p>
@endsection

@section('button')
    <a href="{{ route('contact.index') }}" target="_blank">Click Here</a>
@endsection
