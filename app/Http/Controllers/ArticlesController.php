<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articles = Article::orderBy('published_at', 'desc')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Request $request){
        $this->validate($request, ['title' => 'required|min:3', 'body' => 'required', 'published_at' => 'required|date']);
        Article::create($request->all());
        return redirect('articles');
    }

    public function edit($id){
        return view('articles.edit');
    }
}
