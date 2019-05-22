<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['title', 'body', 'rating', 'user_id', 'flag', 'category', 'img_location'];
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
