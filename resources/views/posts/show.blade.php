@extends('layout')

@section('content')
    
        <h1>{{ $post->title }}</h1>

        <div class="body">
            {{ $post->body }}
        </div>

        <h3>Comments</h3>

        @include('comments.list', ['collection' => $comments['root']])

        <h3>Leave a reply</h3>
        @include('comments.form') 
        
@endsection