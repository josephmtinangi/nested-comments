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

    @foreach($post->comments as $comment)
        <article>
            <h3>{{ $comment->owner->name }} said...</h3>
            {{ $comment->body }}
        </article>
    @endforeach

</body>
</html>