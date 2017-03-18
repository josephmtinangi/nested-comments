<form method="POST" action="/posts/{{ $post->id }}/comments">
    {{ csrf_field() }}

    @if(isset($parentId))
        <input type="hidden" name="parent_id" value="{{ $parentId }}">
    @endif

    <textarea name="body" cols="10" class="form-control" required="required"></textarea><br>

    <button type="submit" class="btn btn-primary">Reply</button>

</form> 