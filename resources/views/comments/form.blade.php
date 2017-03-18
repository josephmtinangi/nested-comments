<form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}
    {{ method_field('POST') }}

    <textarea name="body"></textarea><br>

    <button type="submit">Reply</button>

</form> 