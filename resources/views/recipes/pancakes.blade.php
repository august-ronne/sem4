@extends('recipe-layout')

@section('recipe-section')

@endsection

@section('comment-section')
        <comments :recipe="'{{ $recipe }}'" :user="'{{ $user }}'"></comments>
@endsection
