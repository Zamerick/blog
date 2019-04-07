<?php
use Corcel\Model\Post;

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
Route::get('/posts/{id}', function ($id) {
    $post = Post::find($id);
    return view('single')->with("post", $post);
});

Route::get('/', function () {
    $posts = Post::published()->paginate(5);
    return view('feed')->with("posts", $posts);
});
