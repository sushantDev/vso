@extends('layouts.app')

@section('title', 'My Profile')

@section('content')
    <div class="row user">
        <div class="col-md-12">
            <div class="profile">
                <div class="info">
                    <img class="user-img" style="width: 100%;" src="{{ asset('backend/images/user.svg') }}">
                    <h4>{{ $user->name }}</h4>
                    <p>{{ Auth::user()->getRoleNames()[0] }}</p>
                </div>
                <div class="cover-image"></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile p-0">
                <ul class="nav flex-column nav-tabs user-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="user-settings">
                    <div class="tile user-settings">
                        <h4 class="line-head">Settings</h4>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label>Name</label>
                                <input class="form-control" readonly value="{{ $user->name }}" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-4">
                                <label>Email</label>
                                <input class="form-control" readonly value="{{ $user->email }}" type="text">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#changePasswordModal">
                                    <i class="fa fa-fw fa-lg fa-lock"></i> Change my password
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><i class="fa fa-lg fa-fw fa-lock"></i> Change Password
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('user.change-password', $user->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input class="form-control" name="password" type="password" placeholder="Enter your new password">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Confirm New Password</label>
                                                <input class="form-control" name="password_confirmation" type="password" placeholder="Confirm your new password">
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
            </div>
        </div>
    </div>
@endsection
