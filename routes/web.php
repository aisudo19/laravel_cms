<?php

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

Route::get('posts/{slug}', 'PostsController@show');

Route::get('/', function(){
    return view('welcome');
});
Route::get('contact', function(){
    return view('contact');
});

Route::get('about', function(){
    // $articles = App\Article::paginate(2);
    // $articles = App\Article::take(2)->get();
    // $articles = App\Article::latest()->get();//order by created_at desc
    
    return view('about',['articles' => App\Article::take(3)->latest()->get()]);
});

Route::get('articles','ArticleController@index')->name('articles.index');
Route::get('articles/create','ArticleController@create');
Route::post('articles/','ArticleController@store');
Route::get('articles/{article}','ArticleController@show')->name('articles.show');
Route::get('articles/{article}/edit','ArticleController@edit');
Route::put('articles/{article}', 'ArticleController@update');
Route::get('articles/{article}/delete', 'ArticleController@destroy');
