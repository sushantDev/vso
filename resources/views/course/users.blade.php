@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> Users on {{ $course->name }}</h1>
        </div>
        <div>
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addUserOnCourse">
                <i class="fa fa-fw fa-lg fa-user-circle"></i> Add User on {{ $course->name }}
            </button>

            <div class="modal fade" id="addUserOnCourse" tabindex="-1" role="dialog" aria-labelledby="addUserOnCourse" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fa fa-lg fa-fw fa-user-circle"></i> Add User on {{ $course->name }}
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('course.add.users', $course->id) }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @forelse($users as $key => $user)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->getRoleNames()[0] }}</td>
                                                        <td>
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" name="users[]" value="{{ $user->id }}">Add
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td>No Users found in this course!</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($courseusers as $key => $user)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->getRoleNames()[0] }}</td>
                                    <td>
                                        <button class="btn btn-danger item-delete" data-url="{{ url('course/' . $course->id . '/' . $user->id . '/destroy') }}">Remove</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No Users found in this course!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
