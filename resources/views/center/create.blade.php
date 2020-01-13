@extends('layouts.app')

@section('title', 'Create Centers')

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-university"></i> Create a new Center</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <form class="form-horizontal" method="POST" action="{{ route('center.store') }}">
                    @csrf
                    <div class="tile-body">
                        @include('center.partials.form')
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
