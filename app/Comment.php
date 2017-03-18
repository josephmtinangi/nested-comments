<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'body', 'parent_id'];

    public function scopeForPost($query, Post $post)
    {
        return  $query->with('owner')->where('post_id', $post->id);
    }
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function newCollection(array $models = [])
    {
        // Overkill
        return new CommentCollection($models);
    }
}
