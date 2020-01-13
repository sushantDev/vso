@extends('layouts.app')

@section('title') Session {{ $session->name }} @endsection

@section('content')
    <div id="app">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-desktop"></i> Session: {{ $session->name }}</h1>
            </div>
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#liveStreamingKeyModal">
                    <i class="fa fa-key"></i> Input Live Stream Key
                </button>

                <!-- Enter Live stream Key Modal -->
                <div class="modal fade" id="liveStreamingKeyModal" tabindex="-1" role="dialog" aria-labelledby="liveStreamingKeyModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="liveStreamingKeyModalLabel">Input Live Streaming Key</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Stream Key</label>
                                    <input type="text" class="form-control" v-model="stream_id" name="stream_id" placeholder="Enter Live Streaming Key Here" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" @click="submitStreamKey" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="row">
                        <div class="col-md-12">
                            <iframe width="100%" height="650" src="https://studio.youtube.com/channel/UC2QZYeF0Kv-NP61iZ3NPm2w/livestreaming/stream" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-12">
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
                    <div class="tile-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addQna"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add Questions & Answers</button>

                        <!-- Modal -->
                        <div class="modal fade" id="addQna" tabindex="-1" role="dialog" aria-labelledby="addQna" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addQna">Add Questions & Answers</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('qna.send', $session->id) }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label">Question</label>
                                                <textarea class="form-control" name="question" rows="2" placeholder="Enter Question"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Answer</label>
                                                <textarea class="form-control" name="answer" rows="4" placeholder="Enter Answer"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush
