<?php

// Temporary
Auth::loginUsingId(1);

Route::get('/', function () {
    $posts = App\Post::all();
    return view('posts.index')->withPosts($posts);
});

Route::get('/posts/{post}', function (App\Post $post) {

    $comments = $post->getComments();

    return view('posts.show', compact('post', 'comments'));
});

Route::post('/posts/{post}/comments', function (App\Post $post) {
    $post->comments()->create([
        'user_id' => Auth::id(),
        'body' => request('body'),
        'parent_id' => request('parent_id', null)
    ]);

    return back();
})->middleware('auth');