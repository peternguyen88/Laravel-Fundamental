<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::orderBy('published_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(){
        $input = Request::all();
        $input['published_at'] = Carbon::now();
        Article::create($input);
        return redirect('articles');
    }
}
