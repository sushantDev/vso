@extends('layouts.app')

@section('title', 'Courses')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-book"></i> Courses</h1>
        </div>
        <div>
            @if(Auth::user()->getRoleNames()[0] == "super-admin")
                <a class="btn btn-primary" href="{{ route('course.create') }}">ADD</a>
            @endif
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
                                <th>Number of Sessions</th>
                                <th>Description</th>
                                @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($courses as $key => $course)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->sessions()->count() }}</td>
                                    <td>{{ $course->description }}</td>
                                    @if(Auth::user()->getRoleNames()[0] == "super-admin")
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('course.users', $course->id) }}"><i class="fa fa-key"></i> Users</a>
                                            <a class="btn btn-primary" href="{{ route('course.edit', $course->id) }}">Edit</a>
                                            <button class="btn btn-danger item-delete" data-url="{{ route('course.destroy', $course->id) }}">Delete</button>
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <tr>
                                    <td>No courses found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
