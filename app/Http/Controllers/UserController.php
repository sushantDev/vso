<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmNewPasswordRequest;
use App\Http\Requests\StoreUser;
use App\Mail\LoginMail;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        DB::transaction(function () use ($request) {
            $user = User::create($request->data());

            $user->assignRole($request->input('role'));

            $email = $request->input('email');

            $inputs = [
                'name'     => $request->input('name'),
                'email'    => $request->input('email'),
                'password' => $request->input('password')
            ];

            Mail::to($email)->send(new LoginMail($inputs));
        });

        return redirect()->route('user.index')->withSuccess(trans('messages.create_success', [ 'entity' => 'User' ]));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile(User $user)
    {
        return view('user.profile', compact('user'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    /**
     * @param StoreUser $request
     * @param User $user
     * @return mixed
     */
    public function update(StoreUser $request, User $user)
    {
        DB::transaction(function () use ($request, $user) {
            $user->update($request->data());

            if ( ! $user->getRoleNames()[0] == $request->input('role')) {
                $user->assignRole($request->input('role'));
            }
        });

        return redirect()->route('user.index')->withSuccess(trans('messages.update_success', [ 'entity' => 'User' ]));
    }

    /**
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->withSuccess(trans('messages.delete_success', [ 'entity' => 'User' ]));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changePassword(ConfirmNewPasswordRequest $request, User $user)
    {
        DB::transaction(function () use ($request, $user) {
            $user->update($request->data());
        });

        return redirect()->route('user.profile', compact('user'))->withSuccess(trans('messages.update_success', [ 'entity' => 'Your Password' ]));
    }
}
