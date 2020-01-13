@extends('layouts.app')

@section('title') Session {{ $session->name }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-desktop"></i> Session: {{ $session->name }}</h1>
        </div>
    </div>
    <div id="app">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-md-7">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{ $session->stream_id }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-5">
                            <div class="tile">
                                <div class="tile-title">Chats</div>
                                <p id="session" style="display: none;">{{ $session->id }}</p>
                                <div class="messanger">
                                    <chat-messages :messages="messages"></chat-messages>
                                    <div class="sender">
                                        <chat-form v-on:messagesent="addMessage" :user="{{ Auth::user() }}" :session="{{ $session->id }}"></chat-form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">
                        Questions & Answers
                    </h3>
                    <div class="tile-body">
                        <qnas :qnas="qnas"></qnas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
