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
    public function store(){
        die('sumbit button?');
    }

    //edit an item...
    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}


