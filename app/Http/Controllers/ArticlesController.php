<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{

    //show a specific item
    public function show(Article $article){
//        $article = Article::findOrFail($articleID);
        return View('articles.show', ['article'=> $article]);
    }

    //list all items
    public function index(){
        if(request('tag')){
            $articles = Tag::where('name', request('tag'))->firstOrFail();
        }else {
            $articles = Article::latest()->get();
        }
        return view('articles.index', ['articles' => $articles]);
    }

    //create new item
    public function create(){
        return View('articles.create');
    }

    //save an item
    public function store()
    {
//        die('sumbit button?');
        $validatedAttr = $this->validateArticle();

        $article = Article::create($validatedAttr);

        return redirect(route('articles.show', $article));
//        dump(request()->all());
    }

    //edit an item...
    public function edit(Article $article){
        return view('articles.edit', ['article'=>$article]);
    }


    public function update(Article $article){

        $validatedAttr = $this->validateArticle();

        $article->update($validatedAttr);


        return redirect(route('articles.show',$article));

    }

    public function destroy(Article $article){
        $article->delete();
        return redirect(route('articles.index'));
    }

    protected function validateArticle(){
        return request()->validate([

            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
    }
}


