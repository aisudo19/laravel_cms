<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class ArticleController extends Controller
{
    public function index(){
        //もしクエリ文字列にtagが含まれていたら
        if(request('tag')){
            //タグクラスのarticlesメソッドを返す
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        }else{
            //もしタグが存在しなかったら記事一覧を表示
            $articles = Article::latest()->get();
        }
        //Render a list of resources
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article){
        //show a single resource
        // $article = Article::findOrFail($id);
        // return ($article);
        return view('articles.show', ['article' => $article]);
    }
    public function create(){
        //shows a view to create a new resource
        return view('articles.create', ['tags' =>  Tag::all()]);
    }
    public function store(){
        //バリデート
        // dd(request()->all());
        $this->validateArticle();
        $article = new Article(request(['title','excerpt','body']));
        $article->user_id = 1;
        // auth()->user()->articles()->create($article);//外部キーが自動で設定される。なぜ！？
        $article->save();
        $article->tags()->attach(request('tags'));
        //TODO: clean up
        //Persist the new resource. Createと連携
      
        return redirect(route('articles.index'));
        
    }

    public function edit(Article $article){
        //Show a view to edit an existing resource.
        // $article = Article::find($id);
        return view ('articles.edit', ['article'=> $article]);
    }
    public function update(Article $article){
        //Pesist the edited resource.editと連携
        // $article = Article::find($id);
        $article->update($this->validateArticle());
        //articles/1　のようになり、詳細画面(show)へリダイレクト
        return redirect($article->path());
    }

    public function destroy(Article $article){
        //delete the resource
        $article->delete();
        //index.blade.php一覧画面に戻す
        return redirect(route('articles.index'));
    }
    public function validateArticle(){
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id',
        ]);
    }
    
}
