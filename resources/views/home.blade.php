@extends('layouts.app')

@section('title') Dashboard @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
    </div>
    @if (Auth::user()->getRoleNames()[0] == "super-admin")
        <div class="row">
            <div class="col-md-6 col-lg-4" onclick="location.href='{{ route('user.index') }}';" style="cursor: pointer;">
                <div class="widget-small primary coloured-icon">
                    <i class="icon fa fa-users fa-3x"></i>
                    <div class="info">
                        <h4>Users</h4>
                        <p><b>{{ App\User::all()->count() }}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" onclick="location.href='{{ route('course.index') }}';" style="cursor: pointer;">
                <div class="widget-small info coloured-icon">
                    <i class="icon fa fa-book fa-3x"></i>
                    <div class="info">
                        <h4>Courses</h4>
                        <p><b>{{ App\Course::all()->count() }}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" onclick="location.href='{{ route('session.index') }}';" style="cursor: pointer;">
                <div class="widget-small warning coloured-icon">
                    <i class="icon fa fa-desktop fa-3x"></i>
                    <div class="info">
                        <h4>Sessions</h4>
                        <p><b>{{ App\Session::all()->count() }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 col-lg-6" onclick="location.href='{{ route('course.index') }}';" style="cursor: pointer;">
                <div class="widget-small info coloured-icon">
                    <i class="icon fa fa-book fa-3x"></i>
                    <div class="info">
                        <h4>Courses</h4>
                        <p><b>{{ App\Course::all()->count() }}</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6" onclick="location.href='{{ route('session.index') }}';" style="cursor: pointer;">
                <div class="widget-small warning coloured-icon">
                    <i class="icon fa fa-desktop fa-3x"></i>
                    <div class="info">
                        <h4>Sessions</h4>
                        <p><b>{{ App\Session::all()->count() }}</b></p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
