<?php

namespace App\Http\Controllers;

use App\Center;
use App\Http\Requests\StoreStudent;
use App\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * @param Center $center
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Center $center)
    {
        $students = $center->student()->get();

        return view('center.student.index', compact('students', 'center'));
    }

    /**
     * @param Center $center
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Center $center)
    {
        return view('center.student.create', compact('center'));
    }

    /**
     * @param StoreStudent $request
     * @param Center $center
     * @return mixed
     */
    public function store(StoreStudent $request, Center $center)
    {
        DB::transaction( function () use ($request, $center){
            Student::create($request->data($center));
        });

        $students = $center->student()->get();

        return view('center.student.index', compact('students', 'center'))
                ->withSuccess(trans('messages.create_success', [ 'entity' => 'Center Student' ]));
    }

    /**
     * @param Center $center
     * @param Student $student
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Center $center, Student $student)
    {
        return view('center.student.edit', compact('center', 'student'));
    }

    /**
     * @param StoreStudent $request
     * @param Center $center
     * @param Student $student
     * @return mixed
     */
    public function update(StoreStudent $request, Center $center, Student $student)
    {
        DB::transaction( function () use ($request, $center, $student){
            $student->update($request->data($center));
        });

        $students = $center->student()->get();

        return view('center.student.index', compact('students', 'center'))
            ->withSuccess(trans('messages.update_success', [ 'entity' => 'Center Student' ]));
    }

    /**
     * @param Center $center
     * @param Student $student
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Center $center, Student $student)
    {
        $student->delete();

        $students = $center->student()->get();

        return view('center.student.index', compact('students', 'center'))
            ->withSuccess(trans('messages.delete_success', [ 'entity' => 'Center Student' ]));
    }
}
