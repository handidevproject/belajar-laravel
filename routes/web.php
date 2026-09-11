<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/posts', function () {
    $posts = Post::all();

    ///dd($posts); /// Digunakan untuk menampilkan isi dari variabel $posts, dd = dump and die
    return view('posts', [
        'title' => 'Blog Page',
        'posts' =>  $posts
    ]);
});

Route::get('/posts/{id}', function ($id) {

    $post = Post::find($id);

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About Page',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact Page',
    ]);
});
