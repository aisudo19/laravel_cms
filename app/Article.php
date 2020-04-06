<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = [];

    public function path(){
        return route('articles.show', $this);
    }

    //userをauthorに変更したい場合、そのまま変更してもダメ。DBと連携しているから
    public function author(){
        return $this->belongsTo(User::class, 'user_id');//　belongsTo()の第2引数にDBのカラム名（外部キー)を当てると、上書きができる。Fn+F12で定義にジャンプ
    }

    //an article has many tags
    //tag belongs to an article
    //article name: Learn Laravel
    //add tags like laravel, php, work, education
    //一つの記事はたくさんのタグを持つ。1つのタグもまた、たくさんの記事をもつ。多対多関係

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}

