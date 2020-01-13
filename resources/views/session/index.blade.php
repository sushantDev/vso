@extends('layouts.app')

@section('title', 'Sessions')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-desktop"></i> Sessions</h1>
        </div>
        @if(Auth::user()->getRoleNames()[0] == "super-admin")
            <div>
                <a class="btn btn-primary" href="{{ route('session.create') }}">ADD</a>
            </div>
        @endif
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
                            <th>Start</th>
                            <th>End</th>
                            <th>Course</th>
                            <th>Description</th>
                            <th>Stream ID</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($sessions as $key => $session)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $session->name }}</td>
                                <td>{{ $session->start }}</td>
                                <td>{{ $session->end }}</td>
                                <td>{{ $session->course()->first()['name'] }}</td>
                                <td>{{ Str::limit($session->description, 15) }}</td>
                                <td>{{ $session->stream_id }}</td>
                                <td>
                                    @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                        <a class="btn btn-primary" href="{{ route('session.join', $session->id) }}">View</a>
                                        <a class="btn btn-primary" href="{{ route('session.edit', $session->id) }}">Edit</a>
                                        <button class="btn btn-danger item-delete" data-url="{{ route('session.destroy', $session->id) }}">Delete</button>
                                    @elseif(Auth::user()->getRoleNames()[0] == "teacher")
                                        <a class="btn btn-primary" href="{{ route('session.start', $session->id) }}">Start</a>
                                    @else
                                        <a class="btn btn-primary" href="{{ route('session.join', $session->id) }}">Join</a>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No sessions found!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
