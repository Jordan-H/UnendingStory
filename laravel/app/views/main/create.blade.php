{{--
Author: Jason Cheung
--}}
@extends('layouts/basic')

@section('pagetitle')
    <title>Home Page</title>
@stop

@section('headers')
    {{-- HTML::style('css/Reset.css') --}}
@stop

@section('maincontent')
    <h1>An Unending Story</h1>
    <div id="contenet">
        @if (false)
            @foreach ($posts as $p)
                <p>{{ $p }}</p>
            @endforeach
        @endif
    </div>
    {{ Form::open(['action' => 'MainController@store']) }}
    <div id="submit-post">
        {{ Form::label('post', 'Continue the story: ') }}
        {{ Form::text('post') }}
    </div>
    {{ Form::close() }}
@stop