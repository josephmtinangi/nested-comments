<?php

Route::get('/posts/{post}', function (App\Post $post) {
    return view('posts.show')->withPost($post);
});
