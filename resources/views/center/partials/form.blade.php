<div class="form-group row">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('name', isset($center) ? $center->name : '') }}" name="name" type="text" placeholder="Enter center name">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Address</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('address', isset($center) ? $center->address : '') }}" name="address" type="text" placeholder="Enter center address">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Phone</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('phone', isset($center) ? $center->phone : '') }}" name="phone" type="number" placeholder="Enter center phone">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Select Supervisor</label>
    <div class="col-md-8">
        <select class="form-control" name="user">
            <option value="">Select Supervisor</option>
            @if(isset($users))
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ isset($center) ? $center->user_id == $user->id ? "selected" : "" : "" }}>{{ $user->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
