@extends('layout')
@section('content')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
@endsection
    <div class="wrapper">
        <div id="page">
            <div class="container">
                <h1 class="heading has-text-weight-bold is-size-4">記事を新規作成する</h1>
                
                <form method="POST" action="/articles">
                    @csrf
                    <div class="field">
                        <label class="label" for="title">タイトル</label>
                        <div class="control">
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title" value={{ old('title') }}>
                            @error('title')
                                <p class="help is-danger">{{ $errors->first('title') }}</p>
                            @enderror
                        </div>
                    </div>    
                    <div class="field">
                        <label class="label" for="excerpt">要約</label>
                        <div class="control">
                            <textarea class="textarea @error('excerpt') is-danger @enderror" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                            @error('excerpt')
                                <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                            @enderror

                        </div>
                    </div>    
                    <div class="field">
                        <label class="label" for="body">本文</label>
                        <div class="control">
                            <textarea class="textarea @error('body') is-danger @enderror" name="body" id="body">{{ old('body') }}</textarea>
                            @error('body')
                                <p class="help is-danger">{{ $errors->first('body') }}</p>
                            @enderror

                        </div>
                    </div>

                    <div class="field">
                        <label class="label" for="tags">タグ(Ctrlキーで複数選択できます)</label>
                        <div class="select is-multiple control">
                            <select name="tags[]" multiple>
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name}}</option>
                                @endforeach
                            </select>
                            @error('tags')
                                <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary" type="submit">作成</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection