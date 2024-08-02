<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Agung Satrio', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts =        [
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

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Singgle post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contsct']);
});
