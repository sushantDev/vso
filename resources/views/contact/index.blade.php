@extends('layouts.app')

@section('title', 'Messages')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-envelope"></i> Messages</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($contacts as $key => $contact)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone_no }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('contact.show', $contact->id) }}">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No messages found!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
