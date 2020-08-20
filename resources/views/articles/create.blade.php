@extends('layout')

@section('header')


@endsection


@section('content')


    <div id="wrapper">
        <div id="page" class="container">

            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="title">Your Title</label>
                    <div class="control">
                        <input class="input" type="text" name="" id = "tile">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Your exerpt here</label>
                    <div class="control">
                        <textarea class="textarea" type="textarea" name="excerpt" id = "excerpt"></textarea>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="body">Your content here</label>
                    <div class="control">
                        <textarea class="textarea" type="textarea" name="body" id = "body"></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>

{{--                    <div class="control">--}}
{{--                        <button class="button is-link" type="cancel">Cancel</button>--}}
{{--                    </div>--}}
                </div>

            </form>

        </div>
    </div>

@endsection
