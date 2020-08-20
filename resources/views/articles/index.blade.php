@extends('layout')

@section('content')

    <div id="'wrapper">
        <ul class="style1">
            @foreach($articles as $article)
                <li class="first">
                    <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                    <p><a href="/articles/{{$article->id}}">{{$article->excerpt}}</a></p>
                </li>
            @endforeach

        </ul>

        <h1><a href="/articles/create">Create new article?</a> </h1>
    </div>

@endsection
