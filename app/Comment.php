<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name','comment','post_id'];


    public function post()
    {
        return $this->belongsTo('App\Post');

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}