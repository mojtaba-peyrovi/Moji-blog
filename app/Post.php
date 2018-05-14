<?php

namespace App;
use App\Comment;
use App\Post;


class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
        /*Comment::create([
            'body' => $body,
            'post_id' => $this->id
        ]); */

        $this->comments()->create(compact('body'));
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
