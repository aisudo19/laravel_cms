@extends('layout')

@section('content')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
@endsection

<div id="wrapper">
        <div id="page" class="container">
            @forelse($articles as $article)
                <div id="content">
                    <div class="title">
                        <h2 class="is-size-3">
                            <a href="{{ $article->path()}} ">
                                {{ $article->title}} 
                            </a>
                        </h2>
                    </div>
                    <p>
                        <img src="images/banner.jpg" alt="" class="image image-full" />
                    </p>
                    {{ $article->excerpt}}
                </div>
            @empty
                <p>まだ記事がありません。</p>
            @endforelse
        </div>
    </div>
@endsection