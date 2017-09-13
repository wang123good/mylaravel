<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\article;
use App\Http\Requests\CreateArticleRequest;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all()->sortByDesc('published_at')->where('published_at','<=',Carbon::now());
        return view('blog.articles',compact('articles'));
    }


    public function show($id)
    {
        $article = Article::all()->find($id);
        if ($article == null){
            return 'Article is not exist';
        }
        return view('blog.show',compact('article'));
//        return view('blog.articles',compact('articles'));
    }

    public function edit(){
        return view('blog.edit');
    }

    public function store(CreateArticleRequest $request){

        $input = $request->all();
//        $input['published_at'] = Carbon::now();
        $article = new Article($input);
        $article->save();
        return redirect('/articles');

    }

}