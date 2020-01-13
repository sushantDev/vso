@extends('layouts.app')

@section('title', 'Center Students')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-user-circle"></i> Students at {{ $center->name }}</h1>
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('center.student.create', $center->id) }}">ADD</a>
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
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($students as $key => $student)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone_no }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('center.student.edit',[ 'center' => $center->id, 'student' => $student->id]) }}">Edit</a>
                                    <button class="btn btn-danger item-delete" data-url="{{ route('center.student.destroy',[ 'center' => $center->id, 'student' => $student->id]) }}">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No student found in this center!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
