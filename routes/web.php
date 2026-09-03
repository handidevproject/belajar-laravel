<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/posts', function () {
    $posts = [
        [
            "id" => 1,
            "slug" => "judul-post-pertama",
            "title" => "Judul Artikel 1",
            "author" => "Handika Dwiputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            "id" => 2,
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Handika Dwiputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ]
    ];
    ///dd($posts); /// Digunakan untuk menampilkan isi dari variabel $posts, dd = dump and die
    return view('posts', [
        'title' => 'Blog Page',
        'posts' =>  $posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            "id" => 1,
            "slug" => "judul-post-pertama",
            "title" => "Judul Artikel 1",
            "author" => "Handika Dwiputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
            "id" => 2,
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Handika Dwiputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });


    if (!$post) {
        abort(404);
    }

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
