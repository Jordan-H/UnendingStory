{{--
Author: Jason Cheung
--}}
@extends('layouts/basic')

@section('pagetitle')
    <title>Home Page</title>

@stop

@section('headers')
{{-- HTML::style('css/Reset.css') --}}
 {{ HTML::style('css/main.css') }}
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Lora|Tangerine' rel='stylesheet' type='text/css'>
@stop

@section('maincontent')
    <div id="main-content">
        <h1>An Unending Story</h1>
        <div id="content">
            <p>
            @foreach ($posts as $post)
                {{ $post }}
            @endforeach
            </p>
        </div>
        {{ Form::open(['action' => 'MainController@store']) }}
        <div id="submit-post">
            {{ Form::label('post', 'Continue the story: ') }}
            {{ Form::text('post') }}
        </div>
        {{Form::submit('Submit')}}
        {{ Form::close() }}
    </div>
@stop