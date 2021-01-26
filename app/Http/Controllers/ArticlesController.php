<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
        // dd($articleId);

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        

        return view('articles.create');
    }

    public function store()
    {
        // dd($articleId);

        dump(request()->all());
    }
}
