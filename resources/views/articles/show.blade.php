@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
@endsection
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                <h2 class="heading has-text-weight-bold is-size-4">{{ $article->title}} </h2>
                <span class="byline is-size-6">{{ $article->excerpt }}</span> </div>
                <p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
                {{ $article->body}}
                <p style="margin-top: 1em">
                    カテゴリ：
                    @foreach($article->tags as $tag)
                        <a href="{{ route('articles.index', ['tag' => $tag->name])}}">{{ $tag->name}}</a>
                    @endforeach
                </p>
                <a href="/articles/{{ $article->id }}/edit"><button class="button is-light">編集</button></a>
                <a href="/articles/{{ $article->id }}/delete"><button class="button is-white">削除</button></a><br>
            </div>
        </div>
    </div>
@endsection