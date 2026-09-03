<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    private static $blogPosts = [
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

    public static function all($columns = ['*'])
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), fn($post) => $post['slug'] === $slug) ?? abort(404);
    }
}
