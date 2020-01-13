<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\StoreContact;
use App\Mail\MessageRecieved;
use App\Mail\MessageSent;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contact.index', compact('contacts'));
    }

    /**
     * @param StoreContact $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreContact $request)
    {
        DB::transaction(function () use ($request) {
            Contact::create($request->data());
        });

        $email = $request->get('email');

        Mail::to($email)->send(new MessageSent($request->data()));

        Mail::to(env('ADMIN_EMAIL'))->send(new MessageRecieved($request->data()));

        return redirect()->back()->withSuccess(trans('messages.sent_success', [ 'entity' => 'Message' ]));
    }

    /**
     * @param Contact $contact
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }
}
