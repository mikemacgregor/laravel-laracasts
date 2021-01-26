<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() // list of a resource
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }
    
    public function show($id) // show a single resource
    {
        // dd($articleId);

        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create() // a view to create a new resource
    {
        

        return view('articles.create');
    }

    public function store() // persist the create form
    {
        dump(request()->all());
    }

    public function edit() // a view to edit an existing resource
    {

    }

    public function update() // persist the edit form
    {
        
    }

    public function destroy() // delete a resource
    {
        
    }
}
