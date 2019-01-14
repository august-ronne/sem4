@extends('layout')

@section('head_specials')
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
@endsection

@section('content')
    <div id="app">
        @yield('recipe-section')
        @yield('comment-section')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection