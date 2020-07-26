<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($articleID){
        $article = Article::find($articleID);
//        dd($article);
        return View('articles.show', ['article'=> $article]);
    }
}
