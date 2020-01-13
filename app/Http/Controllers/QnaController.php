<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQna;
use App\Qna;
use App\Session;
use Illuminate\Http\Request;

class QnaController extends Controller
{
    public function sendQna(StoreQna $request, Session $session)
    {
        $session->qnas()->create($request->data());

        return redirect()
            ->back()
            ->withSuccess(trans('messages.create_success', [ 'entity' => 'Question & Answer' ]));
    }

    public function fetchQna(Session $session)
    {
        $qnas = $session->qnas()->get();

        return $qnas;
    }
}
