@extends('layout')

@section('content')


    <div id="'content">
        <div class="'title">
            <h2>{{$article->title}}</h2>
        </div>
        <h3>
            {{$article->excerpt}}
        </h3>
        <p>
            {{$article->body}}
        </p>
    </div>

@endsection
