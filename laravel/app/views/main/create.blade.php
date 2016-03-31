{{--
Author: Jason Cheung
--}}
@extends('layouts/basic')

@section('pagetitle')
    <title>Home Page</title>
    {{ HTML::style('css/main.css') }}
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Lora|Tangerine' rel='stylesheet' type='text/css'>
@stop

@section('headers')
    {{-- HTML::style('css/Reset.css') --}}
@stop

@section('maincontent')
    <div id="main-content">
        <h1>An Unending Story</h1>
        <div id="content">
            @if (false)
                @foreach ($posts as $p)
                    <p>{{ $p }}</p>
                @endforeach
            @endif
            {{-- Dummy data --}}
            <p>Once upon a time</p>
            <p>die(), die(), die()</p>
            <p>finally { die() }</p>
        </div>
        {{ Form::open(['action' => 'MainController@store']) }}
        <div id="submit-post">
            {{ Form::label('post', 'Continue the story: ') }}
            {{ Form::text('post') }}
        </div>
        {{ Form::close() }}
    </div>
@stop