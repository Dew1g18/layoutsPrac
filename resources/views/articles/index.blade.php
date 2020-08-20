@extends('layout')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"  rel="stylesheet">
@endsection

@section('content')

    <div id="'wrapper">
        <ul class="style1">
            @foreach($articles as $article)
                <li class="first">
                    <h3><a href="{{route('articles.show', $article)}}">{{$article->title}}</a></h3>
                    <p><a href="{{route('articles.show',$article)}}">{{$article->excerpt}}</a></p>
                </li>
            @endforeach

        </ul>

        <h1><a href="/articles/create">Create new article?</a> </h1>
    </div>

@endsection
