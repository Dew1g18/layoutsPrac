<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{

    //show a specific item
    public function show($articleID){
        $article = Article::find($articleID);
        return View('articles.show', ['article'=> $article]);
    }

    //list all items
    public function index(){
        $articles = Article::latest()->get();
        return view('articles.index', ['articles'=>$articles]);
    }

    //create new item
    public function create(){
        return View('articles.create');
    }

    //save an item
    public function store()
    {
//        die('sumbit button?');
        $article = new Article();
        $article->title = request('title');
        $article->excerpt = request("excerpt");
        $article->body = request("body");

        $article->save();


        $name = $article->title;

//        return redirect("/articles");

        return redirect('/articles/'.$article->id);
//        dump(request()->all());
    }

    //edit an item...
    public function edit($articleID){
        $article = Article::find($articleID);
        return view('articles.edit', ['article'=>$article]);
    }

    public function update($articleID){
        $article = Article::find($articleID);
        $article->title = request('title');
        $article->excerpt = request("excerpt");
        $article->body = request("body");

        $article->save();

        return redirect('/articles/'.$article->id );

    }

    public function destroy(){

    }
}


