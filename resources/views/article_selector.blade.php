@extends('layout')

@section('content')

    <div id="'wrapper">
        <ul class="style1">
            @foreach($articles as $article)
                <li class="first">
                    <h1 href="/articles/{{$article->id}}">{{$article->title}}</h1>
                    <p><a href="/articles/{{$article->id}}">{{$article->excerpt}}</a></p>
                </li>
            @endforeach

        </ul>
    </div>

@endsection
