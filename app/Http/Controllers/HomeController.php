<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function students()
    {
        $individualStudents = [];

        $allUsers = User::all();

        foreach ($allUsers as $user) {
            if ($user->getRoleNames()[0] == 'student')
                array_push($individualStudents, $user);
        }

        $centerStudents = Student::all();

        return view('students', compact('individualStudents', 'centerStudents'));
    }
}
