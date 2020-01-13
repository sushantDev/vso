<?php

namespace App\Http\Controllers;

use App\Center;
use App\Http\Requests\StoreCenter;
use App\Http\Requests\UpdateCenter;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user()->getRoleNames()[0] == "super-admin") {
            $centers = Center::all();
        } else {
            $centers = Auth::user()->center()->get();
        }

        return view("center.index", compact('centers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $users = [];
        $allUsers = User::all();

        foreach ($allUsers as $user) {
            if ($user->getRoleNames()[0] == 'supervisor')
                array_push($users, $user);
        }

        return view("center.create", compact('users'));
    }

    /**
     * @param StoreCenter $request
     * @return mixed
     */
    public function store(StoreCenter $request)
    {
        DB::transaction(function () use ($request) {
            Center::create($request->data());
        });

        return redirect()
            ->route('center.index')
            ->withSuccess(trans('messages.create_success', [ 'entity' => 'Center' ]));
    }

    /**
     * @param Center $center
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Center $center)
    {
        $users = [];
        $allUsers = User::all();

        foreach ($allUsers as $user) {
            if ($user->getRoleNames()[0] == 'supervisor')
                array_push($users, $user);
        }

        return view("center.edit", compact('center', 'users'));
    }

    /**
     * @param StoreCenter $request
     * @param Center $center
     * @return mixed
     */
    public function update(UpdateCenter $request, Center $center)
    {
        DB::transaction(function () use ($request, $center) {
            $center->update($request->data());
        });

        return redirect()
            ->route('center.index')
            ->withSuccess(trans('messages.update_success', [ 'entity' => 'Center' ]));
    }

    /**
     * @param Center $center
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Center $center)
    {
        $center->delete();

        return redirect()
            ->route('center.index')
            ->withSuccess(trans('messages.delete_success', [ 'entity' => 'Center' ]));
    }
}
