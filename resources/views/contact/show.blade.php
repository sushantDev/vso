@extends('layouts.app')

@section('title', 'Message from user')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-envelope"></i> Message from {{ $contact->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <p> Name: {{ $contact->name }}</p>
                <p> Email: {{ $contact->email }}</p>
                <p> Phone Number: {{ $contact->phone_no }}</p>
                <p> Message: {{ $contact->message }}</p>
            </div>
        </div>
    </div>
@endsection
