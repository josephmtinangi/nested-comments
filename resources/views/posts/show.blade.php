@extends('layout')

@section('content')
    
        <h1>{{ $post->title }}</h1>

        <div class="body">
            {{ $post->body }}
        </div>

        <h3>Comments</h3>

        <ul>
            @foreach($post->comments as $comment)
                <li>
                    <article>
                        <h3>{{ $comment->owner->name }} said...</h3>
                        {{ $comment->body }}

                        @include('comments.form', ['parentId' => $comment->id])

                    </article>            
                </li>
            @endforeach    
        </ul>

        <h3>Leave a reply</h3>
        @include('comments.form') 
        
@endsection