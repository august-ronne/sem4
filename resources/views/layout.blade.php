<!DOCTYPE html>
<html lang="en">

<head>

    <title>{{ config('app.name', 'test') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('head_specials')

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

    @yield('styles')

</head>

<body>

    <div id="application">

        <nav class="navbar-container">
            <div class="nav-link-container">
                <a href="/">Home</a>
            </div>
            <div class="nav-link-container">
                <a href="/recipes">Recipe Catalog</a>
            </div>
            <div class="nav-link-container">
                <a href="/calendar">Recipe Calendar</a>
            </div>
        @if (!Auth::check())
            <div class="nav-link-container">
                <a href="/register">Register</a>
            </div>
            <div class="nav-link-container">
                <a href="/login">Log In</a>
            </div>
        @else
            <div class="nav-link-container">
                <form class="nav-lougout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        @endif
        </nav>

        @yield('content')

        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>

        @yield('scripts')

    </div>

</body>

</html>