<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    protected $guarded = [];

    public function parentPost()
    {
        return $this->belongsTo('App\Comment', 'parent', 'id');
    }

    public function thread() {
        return $this->belongsTo('App\Post');

    }
}
