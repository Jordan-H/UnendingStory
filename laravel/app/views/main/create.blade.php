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

    <div id="social-media">
        <a href="mailto:unendingstory@gmail.com" class="icons" style="color: black">&#xe010;</a>
        <a href="https://twitter.com/Unending_Story" class="icons" style="color: red">&#xe096;</a>
        <a href="https://www.facebook.com/people/Unending-Story/100011687526998" class="icons" style="color: #3B5998">&#xe093;</a>
    </div>

    <div id="main-content">
        <div id="head">
            <h1>An Unending Story</h1>
        </div>
        <div id="content">
            <h3>Day 1</h3><!-- maybe we could have something like this -->
            <p>
                @foreach ($posts as $post)
                    {{ $post }}
                    @if (strpos($post, '.') !== FALSE)
                        </p><p>
                    @endif
                @endforeach
            </p>
            <br>
        </div>
    </div>

    <a href="http://twitter.com/minimalmonkey" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
    <a href="http://facebook.com" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
    <a href="http://plus.google.com" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>

    <div id="submit-post">
        {{ Form::open(['action' => 'MainController@store']) }}

        {{ Form::label('post', 'Continue the story: ') }}
        {{ Form::text('post') }}
        {{ Form::submit('Submit') }}
        {{ Form::close() }}
    </div>



    <script type="text/javascript">
        window.scrollTo(0,document.body.scrollHeight);
    </script>
@stop


{{--
@if (strpos($post, '.') !== FALSE)
    {{ $post . "</p><p>" }}
@else
    {{ $post }}
@endif
--}}