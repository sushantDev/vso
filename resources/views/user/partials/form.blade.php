<div class="form-group row">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('name', isset($user) ? $user->name : '') }}" name="name" type="text" placeholder="Enter full name">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Email</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('email', isset($user) ? $user->email : '') }}" name="email" type="email" placeholder="Enter email">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Password</label>
    <div class="col-md-8">
        <input class="form-control" name="password" type="password" placeholder="Enter password">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Phone No</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('phone_no', isset($user) ? $user->phone_no : '') }}" name="phone_no" type="number" placeholder="Enter Phone No">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Role</label>
    <div class="col-md-8">
        <select class="form-control" name="role">
            <option value="">Select Role</option>
            @if($roles = Spatie\Permission\Models\Role::all())
                @foreach($roles as $role)
                    <option value="{{ $role->name }}" {{ isset($user) ? $user->getRoleNames()[0] == $role->name ? "selected" : "" : "" }}>{{ $role->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Intro</label>
    <div class="col-md-8">
        <textarea class="form-control" rows="4" name="intro" type="text" placeholder="Enter Intro">
            {{ old('intro', isset($session) ? $session->intro : '') }}
        </textarea>
    </div>
</div>
