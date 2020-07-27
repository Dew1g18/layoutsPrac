@extends('layout')

@section('content')

    <div id="'wrapper">
        <ul class="style1">
            @foreach($articles as $article)
                <li class="first">
                    <h3 id="'banner">{{$article->title}}</h3>
                    <p><a href="#">{{$article->body}}</a></p>
                </li>
            @endforeach

        </ul>
    </div>

@endsection
