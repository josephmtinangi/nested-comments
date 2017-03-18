<li>
    <article>
        <h3>{{ $comment->owner->name }} said...</h3>

        {{ $comment->body }}

        @include('comments.form', ['parentId' => $comment->id])

        @if(isset($comments[$comment->id]))

            @include('comments.list', ['collection' => $comments[$comment->id]])

        @endif

    </article>            
</li>