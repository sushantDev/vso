@extends('layouts.app')

@section('title', 'All Students')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users"></i> All Students</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h4>Individual Students</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($individualStudents as $key => $student)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->phone_no }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td>No individual students found!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h4>Center Students</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Center</th>
                            <th>Phone No.</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($centerStudents as $key => $student)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->center()->first()['name'] }}</td>
                                <td>{{ $student->phone_no }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td>No center students found!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
