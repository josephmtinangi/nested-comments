<?php

Route::get('/', function () {
    $posts = App\Post::all();
    return view('posts.index')->withPosts($posts);
});
Route::get('/posts/{post}', function (App\Post $post) {
    return view('posts.show')->withPost($post);
});
