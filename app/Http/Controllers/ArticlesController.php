<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function show($articleID){
        $article = Article::find($articleID);
        return View('articles.show', ['article'=> $article]);
    }

    public function index(){
        $articles = Article::latest()->get();
        return view('articles.index', ['articles'=>$articles]);
    }
}
