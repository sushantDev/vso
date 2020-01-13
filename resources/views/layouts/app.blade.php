<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/font-awesome/4.7.0/css/font-awesome.min.css') }}" />
</head>
<body class="app sidebar-mini rtl">
@include('partials.header')
@include('partials.sidebar')
<main class="app-content">
    @yield('content')
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('backend/js/popper.min.js') }}"></script>
<script src="{{ asset('backend/js/app.js') }}"></script>
<script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/js/main.js') }}"></script>
<script src="{{ asset('backend/js/plugins/pace.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@include('partials.alerts')
@stack('scripts')
</body>
</html>
