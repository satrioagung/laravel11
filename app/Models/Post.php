<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Agung Satrio',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, ipsa saepe necessitatibus optio accusamus magni ad pariatur voluptas? Eius est consectetur voluptatem nam ut. Ea accusantium labore ullam ducimus. Libero!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Agung Satrio',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, ipsa saepe necessitatibus optio accusamus magni ad pariatur voluptas? Eius est consectetur voluptatem nam ut. Ea accusantium labore ullam ducimus. Libero!'
            ],
            [
                'id' => 3,
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Agung Satrio',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, ipsa saepe necessitatibus optio accusamus magni ad pariatur voluptas? Eius est consectetur voluptatem nam ut. Ea accusantium labore ullam ducimus. Libero!'
            ]
        ];
    }

    public static function find($slug) :array
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
            abort(404);
        }
        return $post;
    }
}
