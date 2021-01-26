<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    // $articles = App\Models\Article::latest()->get(); // ::all() // ::take(2) // ::paginate(2)

    return view('about', [
        'articles' => App\Models\Article::take(2)->latest()->get()
    ]);
});

Route::get('/articles/', [ArticlesController::class, 'index']);
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);




Route::get('/test', function () {

    $name = request('name'); // from query string /test?name=Mike

    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
