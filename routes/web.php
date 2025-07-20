<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'homepage']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'about']);
});

Route::get('/posts', function () {
    return view('posts', 
    ['title' => 'blog', 
    'posts' => [

    [
        'id' => '1',
        'slug' => 'bubur-ayam-diaduk',
        'title' => 'Bubur ayam diaduk lebih sehat secara ilmiah',
        'author' => 'Sheva Meazza',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laboriosam reiciendis, quasi alias provident pariatur excepturi delectus, maxime, velit odio obcaecati sed natus harum quibusdam! Quo obcaecati fuga placeat nam?'
    ],
    [
        'id' => '2',
        'title' => 'Mengenal asal muasal Cireng',
        'slug' => 'mengenal-asal-muasal-cireng',
        'author' => 'Ocha Audyna',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laboriosam reiciendis, quasi alias provident pariatur excepturi delectus, maxime, velit odio obcaecati sed natus harum quibusdam! Quo obcaecati fuga placeat nam?'
    ]
    ]
]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
        'id' => '1',
        'slug' => 'bubur-ayam-diaduk',
        'title' => 'Bubur ayam diaduk lebih sehat secara ilmiah',
        'author' => 'Sheva Meazza',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laboriosam reiciendis, quasi alias provident pariatur excepturi delectus, maxime, velit odio obcaecati sed natus harum quibusdam! Quo obcaecati fuga placeat nam?'
    ],
    [
        'id' => '2',
        'slug' => 'mengenal-asal-muasal-cireng',
        'title' => 'Mengenal asal muasal Cireng',
        'author' => 'Ocha Audyna',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti laboriosam reiciendis, quasi alias provident pariatur excepturi delectus, maxime, velit odio obcaecati sed natus harum quibusdam! Quo obcaecati fuga placeat nam?'
    ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
         return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'posts' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});