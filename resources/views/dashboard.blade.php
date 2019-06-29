@extends('template.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="centered">
        <h1>I .. {{ isset($name) ? $name : 'you' }}!</h1>
    </div>
@endsection
