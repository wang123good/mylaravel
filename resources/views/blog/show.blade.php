@extends('base')
@section('content')
    <div class="col-sm-9">
    <h1> {{ $article->title }}</h1>
        <article>
            <div class="body">
                {{ $article->content }}
            </div>
        </article>
    </div>
@stop