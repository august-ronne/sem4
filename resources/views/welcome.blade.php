<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <title>Vue Comments</title>

        <!-- Fonts -->
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Quicksand');
        </style>

    </head>
    <body>
        <div id="app">
            <navbar></navbar>

            <comments></comments>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
