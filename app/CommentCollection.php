<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;

class CommentCollection extends Collection
{
    public function threaded()
    {
        $comments = parent::groupBy('parent_id');

        if(count($comments)){

            // Change '' key to root
            $comments['root'] = $comments[''];
            // Unset the old key
            unset($comments['']);
        }

        return $comments;
    }
}