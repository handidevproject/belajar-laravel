<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
    ]);
});

Route::get('/posts', function () {
    $posts = [
        [
            "title" => "Judul Artikel 1",
            "author" => "Handika Dwiputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum."
        ],
        [
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
