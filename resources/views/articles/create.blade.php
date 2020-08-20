@extends('layout')

@section('head')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"  rel="stylesheet">

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
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id = "tile">

                        @error('title')
                            <p class="help is-danger">Title is required</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="excerpt">Your exerpt here</label>
                    <div class="control">
                        <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id = "excerpt"></textarea>
                        @error('excerpt')
                        <p class="help is-danger">Excerpt is required</p>
                        @enderror
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="body">Your content here</label>
                    <div class="control">
                        <textarea class="textarea @error('body') is-danger @enderror" name="body" id = "body"></textarea>
                        @error('body')
                        <p class="help is-danger">Body is required</p>
                        @enderror
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
