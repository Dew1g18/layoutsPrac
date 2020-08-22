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
        <div class="control">
            <button class="button is-link" type="edit" id="edit_button" onclick="window.location.href='{{route('articles.edit', $article)}}'">Edit</button>
            <button class="button is-link" type="delete" onclick="window.location.href='{{route('articles.index')}}'; {{$article->delete()}};" >Delete</button>

        </div>
    </div>

@endsection
