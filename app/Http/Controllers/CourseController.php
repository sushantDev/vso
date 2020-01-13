<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests\StoreCourse;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(Auth::user()->getRoleNames()[0] == "super-admin"){
            $courses = Course::all();
        } else {
            $courses = Auth::user()->courses()->get();
        }

        return view("course.index", compact('courses'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("course.create");
    }

    /**
     * @param StoreCourse $request
     * @return mixed
     */
    public function store(StoreCourse $request)
    {
        DB::transaction(function () use ($request) {
            Course::create($request->data());
        });

        return redirect()
            ->route('course.index')
            ->withSuccess(trans('messages.create_success', [ 'entity' => 'Course' ]));
    }

    /**
     * @param Course $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Course $course)
    {
        return view("course.edit", compact('course'));
    }

    /**
     * @param StoreCourse $request
     * @param Course $course
     * @return mixed
     */
    public function update(StoreCourse $request, Course $course)
    {
        DB::transaction(function () use ($request, $course) {
            $course->update($request->data());
        });

        return redirect()
            ->route('course.index')
            ->withSuccess(trans('messages.update_success', [ 'entity' => 'Course' ]));
    }

    /**
     * @param Course $course
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('course.index')
            ->withSuccess(trans('messages.delete_success', [ 'entity' => 'Course' ]));
    }

    /**
     * @param Course $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function users(Course $course)
    {
        $courseusers = $course->users()->get();

        $users = User::with('courses')->whereDoesntHave('courses', function ($query) use ($course) {
                    $query->where('course_id', $course->id);
                })->get();

        return view('course.users', compact('courseusers', 'course', 'users'));
    }

    public function addUsers(Request $request, Course $course)
    {
        $course->users()->attach($request->users);

        $users = $course->users()->get();

        return redirect()
            ->route('course.users', compact('course', 'users'))
            ->withSuccess(trans('messages.update_success', [ 'entity' => 'Users' ]));
    }

    public function destroyUser(Course $course, User $user)
    {
        $course->users()->detach($user);

        $users = $course->users()->get();

        return redirect()
            ->route('course.users', compact('course', 'users'))
            ->withSuccess(trans('messages.delete_success', [ 'entity' => 'Users' ]));
    }
}
