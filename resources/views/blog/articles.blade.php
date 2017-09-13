@extends('base')
@section('content')
    <div class="col-sm-7">
        <h1>     My Blog Articles</h1>
        <br>
        @foreach($articles as $article)
            <h2><a href="{{ url('articles',$article->id) }} ">{{ $article->title }}</a></h2>
            <article>
                <div class="col-sm-5 body">
                    <span>     {{ $article->intro }}</span>
                </div>
            </article>
        @endforeach
    </div>
@stop