<div class="form-group row">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('name', isset($course) ? $course->name : '') }}" name="name" type="text" placeholder="Enter course name">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Description</label>
    <div class="col-md-8">
        <textarea class="form-control" rows="4" value="{{ old('description', isset($course) ? $course->description : '') }}" name="description" type="text" placeholder="Enter description"></textarea>
    </div>
</div>
