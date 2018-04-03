<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Comment
 *
 * @property-read \App\Post $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\CommentReply[] $replies
 * @mixin \Eloquent
 */
class Comment extends Model
{
    //
    protected $fillable = ['post_id', 'author', 'email', 'photo', 'body',
    'is_active'];

    public function replies(){
        return $this->hasMany('App\CommentReply');
    }
    public function post(){
        return $this->belongsTo('App\Post');
    }
}
