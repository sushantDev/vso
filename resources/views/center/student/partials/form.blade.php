<div class="form-group row">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('name', isset($student) ? $student->name : '') }}" name="name" type="text" placeholder="Enter student name">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Email</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('email', isset($student) ? $student->email : '') }}" name="email" type="email" placeholder="Enter student Email">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Phone</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('phone_no', isset($student) ? $student->phone_no : '') }}" name="phone_no" type="number" placeholder="Enter student phone">
    </div>
</div>
