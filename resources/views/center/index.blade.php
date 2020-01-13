@extends('layouts.app')

@section('title', 'Centers')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-university"></i> Centers</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('center.create') }}">ADD</a>
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
                                <th>Address</th>
                                <th>Phone</th>
                                @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                    <th>Supervisor</th>
                                @endif
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($centers as $key => $center)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $center->name }}</td>
                                    <td>{{ $center->address }}</td>
                                    <td>{{ $center->phone }}</td>
                                    @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                        @php
                                            $user = App\User::where('id', $center->user_id)->get();
                                        @endphp
                                        <td>{{ isset($user) && sizeof($user) != 0 ? $user[0]->name : '' }}</td>
                                    @endif
                                    <td>
                                        @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                            <a class="btn btn-primary" href="{{ route('center.students', $center->id) }}">Students</a>
                                            <a class="btn btn-primary" href="{{ route('center.edit', $center->id) }}">Edit</a>
                                            <button class="btn btn-danger item-delete" data-url="{{ route('center.destroy', $center->id) }}">Delete</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No centers found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
