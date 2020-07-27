<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function show($articleID){
        $article = Article::find($articleID);
////        dd($article);
//        if($article===null){
//            return View('article_selector');
//        }
        return View('articles.show', ['article'=> $article]);
    }
}
