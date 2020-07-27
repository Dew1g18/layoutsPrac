@extends('layout')

@section('content')

        <ul class="style1">
            <li class="first">
                <h1 class="'title">{{$article->title}}</h1>
                <p>{{$article->body}}</p>
            </li>
        </ul>

@endsection
