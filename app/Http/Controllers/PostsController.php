<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    function show($slug) {

        $post = Post::where('slug', $slug)->firstOrFail(); // generates 404 on fail
        
        // $post = \DB::table('posts')->where('slug', $slug)->first();

        // dd($post); // dump and die

        /* $posts = [
            'my-first-post' => 'Hello, this is my first blog post',
            'my-second-post' => 'And here is the second blog post'
        ]; */
    
        /* if(! array_key_exists($post, $posts)) {
            abort(404, 'Sorry, that blog post was not found');
        } */
    
        return view('post', [
            'post' => $post
        ]);
        
        
    }
}
