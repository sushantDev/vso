@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> Users</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('user.create') }}">ADD</a>
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
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->getRoleNames()[0] }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('user.edit', $user->id) }}">Edit</a>
                                        <button class="btn btn-danger item-delete" data-url="{{ route('user.destroy', $user->id) }}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
