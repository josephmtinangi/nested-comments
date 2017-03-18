<?php

// Temporary
Auth::loginUsingId(1);

Route::get('/', function () {
    $posts = App\Post::all();
    return view('posts.index')->withPosts($posts);
});

Route::get('/posts/{post}', function (App\Post $post) {
    return view('posts.show')->withPost($post);
});

// /posts/{{ $post->id }}/comments
Route::post('/posts/{post}/comments', function (App\Post $post) {
    $post->comments()->create([
        'user_id' => Auth::id(),
        'body' => request('body')
    ]);

    return back();
})->middleware('auth');