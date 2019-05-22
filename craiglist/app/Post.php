<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['title', 'body', 'rating', 'flag', 'category', 'img_location', 'user_id'];
    
    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
