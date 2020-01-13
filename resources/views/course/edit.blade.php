@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-course"></i> Edit {{ $course->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form class="form-horizontal" method="post" action="{{ route('course.update', $course->id) }}">
                    @csrf
                    {{ method_field('put') }}
                    <div class="tile-body">
                        @include('course.partials.form')
                    </div>
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-fw fa-lg fa-check-circle"></i>
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
