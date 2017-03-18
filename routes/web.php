<?php

// Temporary
Auth::loginUsingId(1);

Route::get('/', function () {
    $posts = App\Post::all();
    return view('posts.index')->withPosts($posts);
});

Route::get('/posts/{post}', function (App\Post $post) {

    $post->load('comments.owner'); 

    $comments = $post->comments->groupBy('parent_id');

    $comments['root'] = $comments[''];

    unset($comments['']);

    // return $post;

    return view('posts.show', compact('post', 'comments'));
});

// /posts/{{ $post->id }}/comments
Route::post('/posts/{post}/comments', function (App\Post $post) {
    $post->comments()->create([
        'user_id' => Auth::id(),
        'body' => request('body'),
        'parent_id' => request('parent_id', null)
    ]);

    return back();
})->middleware('auth');