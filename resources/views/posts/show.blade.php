<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

                     @include('comments.form')

                </article>            
            </li>
        @endforeach    
    </ul>

    <h3>Leave a reply</h3>
    @include('comments.form')

</body>
</html>