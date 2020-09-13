<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function(){
    $article =  App\Article::take(2)->latest()->get();
    return view('about',[
        'articles' => $article
    ]);
});

//Route::get('/articles', function(){
//    return view('article_selector', [
//        'articles' =>App\Article::all()
//    ]);
//});




Route::get('/articles/create','ArticlesController@create');

Route::post('/articles', 'ArticlesController@store');

Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get("/articles/{article}/edit", "ArticlesController@edit")->name('articles.edit');
Route::put("/articles/{article}", "ArticlesController@update" );

Route::get('/articles/{article}/delete', 'ArticlesController@destroy')->name('articles.delete');

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
