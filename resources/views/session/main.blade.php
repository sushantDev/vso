@extends('layouts.app')

@section('title') Session {{ $session->name }} @endsection

@push('scripts')
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>

    <!-- Polyfill for fetch API so that we can fetch the sessionId and token in IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7/dist/polyfill.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fetch/2.0.3/fetch.min.js" charset="utf-8"></script>
@endpush

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-desktop"></i> Session: {{ $session->name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    SessionKey: {{ $session->session_token }}
                </div>
                <div id="videos">
                    <div id="subscriber"></div>
                    <div id="publisher"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
      var API_KEY = '46468792';
      var SESSION_ID = '2_MX40NjQ2ODc5Mn5-MTU3NTI2OTc2NzMyM35rN3Zvc2xGVWdGcUc3V0U2d3h6UHFTY1F-fg';
      var TOKEN = 'T1==cGFydG5lcl9pZD00NjQ2ODc5MiZzaWc9ODdmYWQ1ZTBlM2MwMWFlZDM2YTE2NTJmMDE5MmUwYTg3Y2I1Yjk1ODpzZXNzaW9uX2lkPTJfTVg0ME5qUTJPRGM1TW41LU1UVTNOVEkyT1RjMk56TXlNMzVyTjNadmMyeEdWV2RHY1VjM1YwVTJkM2g2VUhGVFkxRi1mZyZjcmVhdGVfdGltZT0xNTc1MjY5NzY3JnJvbGU9cHVibGlzaGVyJm5vbmNlPTE1NzUyNjk3NjcuNDczNzE4MTkwMzQwNTMmY29ubmVjdGlvbl9kYXRhPVNvbWUrc2FtcGxlK21ldGFkYXRhK3RvK3Bhc3MmaW5pdGlhbF9sYXlvdXRfY2xhc3NfbGlzdD0=';

      function handleError(error) {
        if (error) {
          console.error(error);
        }
      }

      function initializeSession() {
        var session = OT.initSession(API_KEY, SESSION_ID);

        // Subscribe to a newly created stream
        session.on('streamCreated', function streamCreated(event) {
          var subscriberOptions = {
            insertMode: 'append',
            width: '100%',
            height: '640px'
          };
          session.subscribe(event.stream, 'subscriber', subscriberOptions, handleError);
          console.log('Student Connected!!');
        });

        session.on('sessionDisconnected', function sessionDisconnected(event) {
          console.log('You were disconnected from the session.', event.reason);
        });

        // initialize the publisher
        var publisherOptions = {
          insertMode: 'append',
          width: '100%',
          height: '640px'
        };
        console.log('Publisher connected!!');
        var publisher = OT.initPublisher('publisher', publisherOptions, handleError);

        // Connect to the session
        session.connect(TOKEN, function callback(error) {
          if (error) {
            handleError(error);
          } else {
            // If the connection is successful, publish the publisher to the session
            session.publish(publisher, handleError);
          }
        });
      }

      if (API_KEY && TOKEN && SESSION_ID) {
        initializeSession();
      }

    </script>
@endpush
