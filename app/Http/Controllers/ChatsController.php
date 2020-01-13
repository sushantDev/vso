<?php

namespace App\Http\Controllers;

use App\Message;
use App\Session;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Fetch all messages
     *
     * @return Message
     */
    public function fetchMessages(Session $session)
    {
        $message = Message::with('user')->where('session_id', $session->id)->get();

        return $message;
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        $user = Auth::user();

        $data = [
            'user_id' => $request->input('user')['id'],
            'session_id' => $request->input('session'),
            'message' => $request->input('message')
        ];

        $message = Message::create($data);

        broadcast(new MessageSent($user, $message))->toOthers();

        return ['status' => 'Message Sent!'];
    }
}
