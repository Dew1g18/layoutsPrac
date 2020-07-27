@extends('layout')

@section('content')
    <div>
        <ul class="style1">
            <li class="first">
                <h3>{{$article->title}}</h3>
                <p><a href="#">{{$article->body}}</a></p>
            </li>
        </ul>
    </div>

@endsection
