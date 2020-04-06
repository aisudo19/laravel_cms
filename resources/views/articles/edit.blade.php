@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
@endsection

@section('content')
<div class="wrapper">
        <div id="page">
            <div class="container">
                <h1 class="heading has-text-weight-bold is-size-4">記事の編集</h1>
                
                <form method="POST" action="/articles/{{ $article->id }}">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label" for="title">タイトル</label>
                        <div class="control">
                        <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">
                        </div>
                    </div>    
                    <div class="field">
                        <label class="label" for="excerpt">要約</label>
                        <div class="control">
                        <textarea class="textarea" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>
                        </div>
                    </div>    
                    <div class="field">
                        <label class="label" for="body">本文</label>
                        <div class="control">
                            <textarea class="textarea" name="body" id="body">{{ $article->body }}</textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <a href="../"><button class="button is-light">キャンセル</button></a>
                            <button class="button is-primary" type="submit">完了</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection