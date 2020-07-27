@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul class="style1">
                    <li class="first">
                        <h1 class="'title">{{$article->title}}</h1>
                        <p><a href="#">{{$article->body}}</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection
