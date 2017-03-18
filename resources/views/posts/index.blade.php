@extends('layout')

@section('content')

    <h1>Posts</h1>

    <ul class="list-unstyled">
        @foreach($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

@endsection