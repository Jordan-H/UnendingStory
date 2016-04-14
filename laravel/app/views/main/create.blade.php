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
    {{ HTML::style('https://fonts.googleapis.com/css?family=Montserrat|Lora|Tangerine') }}
@stop

@section('maincontent')
    <div id="main-content">
        <div id="head">
            <h1>An Unending Story</h1>
        </div>
        <div id="content">
            <p>
            @foreach ($posts as $post)
                @if (strpos($post, '.') !== FALSE)
                    {{ $post . "</p><p>" }}
                @else
                    {{ $post }}
                @endif
            @endforeach
            </p>
            <br>
        </div>
    </div>

    {{ Form::open(['action' => 'MainController@store']) }}
    <div id="submit-post">
        {{ Form::label('post', 'Continue the story: ') }}
        {{ Form::text('post') }}
        {{Form::submit('Submit')}}
    </div>
    {{ Form::close() }}

    <script type="text/javascript">
        window.scrollTo(0,document.body.scrollHeight);
    </script>
@stop