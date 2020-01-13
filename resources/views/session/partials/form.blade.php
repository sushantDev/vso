<div class="form-group row">
    <label class="control-label col-md-3">Name</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('name', isset($session) ? $session->name : '') }}" name="name" type="text" placeholder="Enter session name">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Course</label>
    <div class="col-md-8">
        <select class="form-control" name="course">
            <option value="">Select Course</option>
            @if($courses = App\Course::all())
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ isset($session) ? $session->course_id == $course->id ? "selected" : "" : "" }}>{{ $course->name }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Start</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('start', isset($session) ? preg_replace('#\s+#','T',trim($session->start)) : '') }}" name="start" type="datetime-local" placeholder="Enter Start Date & Time">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">End</label>
    <div class="col-md-8">
        <input class="form-control" value="{{ old('end', isset($session) ? preg_replace('#\s+#','T',trim($session->end)) : '') }}" name="end" type="datetime-local" placeholder="Enter End Date & Time">
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3">Description</label>
    <div class="col-md-8">
        <textarea class="form-control" rows="4" name="description" type="text" placeholder="Enter description">
            {{ old('description', isset($session) ? $session->description : '') }}
        </textarea>
    </div>
</div>
