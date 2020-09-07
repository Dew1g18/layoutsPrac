@extends('layout')

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"  rel="stylesheet">
@endsection

@section('content')


    <div id="'content">
            <h2 class ='title'>{{$article->title}}</h2>
        <h3 class="subtitle">
            {{$article->excerpt}}
        </h3>
        <p>
            {{$article->body}}
        </p>

        <p style="margin-outside: 1em">
            @foreach($article->tags as $tag)
                <a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a>
            @endforeach
        </p>
        <div class="control">

{{--            <button type="button"--}}
{{--                    onclick="Url.Action('ArticlesController@edit')">Edit</button>--}}



{{--            <button class="button" type="edit" id="edit_button" onclick="{{'ArticlesController@edit', $article}}">Edit</button>--}}
            <button class="button" type="edit" id="edit_button" onclick="window.location.href='{{route('articles.edit', $article)}}'">Edit</button>
            <button class="button" type="delete" onclick="window.location.href='{{action('ArticlesController@destroy', ['article'=>$article])}}'">Delete</button>

{{--            <button class="button" type="delete" onclick="{{'ArticlesController@destroy', $article}}">Delete</button>--}}
        </div>
    </div>

@endsection
