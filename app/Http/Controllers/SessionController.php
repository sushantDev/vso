<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSession;
use App\Session;
use App\Http\Requests\StoreSession;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(Auth::user()->getRoleNames()[0] == "super-admin"){
            $sessions = Session::all();
        } else {
            $sessions = [];

            $courses = Auth::user()->courses()->get();

            foreach ($courses as $course) {
                $courseSessions = $course->sessions()->get();

                foreach ($courseSessions as $courseSession) {
                    array_push($sessions, $courseSession);
                }
            }
        }

        return view("session.index", compact('sessions'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view("session.create");
    }

    /**
     * @param StoreSession $request
     * @return mixed
     */
    public function store(StoreSession $request)
    {
        DB::transaction(function () use ($request) {
            Session::create($request->data());
        });

        return redirect()
            ->route('session.index')
            ->withSuccess(trans('messages.create_success', [ 'entity' => 'Session' ]));
    }

    /**
     * @param Session $session
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Session $session)
    {
        return view("session.edit", compact('session'));
    }

    /**
     * @param StoreSession $request
     * @param Session $session
     * @return mixed
     */
    public function update(StoreSession $request, Session $session)
    {
        DB::transaction(function () use ($request, $session) {
            $session->update($request->data());
        });

        return redirect()
            ->route('session.index')
            ->withSuccess(trans('messages.update_success', [ 'entity' => 'Session' ]));
    }

    /**
     * @param Session $session
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Session $session)
    {
        $session->delete();

        return redirect()
            ->route('session.index')
            ->withSuccess(trans('messages.delete_success', [ 'entity' => 'Session' ]));
    }

    /**
     * @param Session $session
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function start(Session $session)
    {
        return view('session.teacher', compact('session'));
    }

    /**
     * @param Session $session
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function join(Session $session)
    {
        return view('session.student', compact('session'));
    }

    /**
     * @param Request $request
     * @param Session $session
     * @return mixed
     */
    public function updateStreamId(Request $request, Session $session)
    {
        $streamId = $request->input('stream_id');

        $session->update([
            'stream_id' => $streamId
        ]);

        return redirect()->back()->withSuccess(trans('messages.update_success', [ 'entity' => 'Live Streaming Key' ]));
    }
}
