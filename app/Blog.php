<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blog";

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function commets()
    {
        return $this->hasMany('App\Comment');
    }

    public function images()
    {
        return $this->hasMany('App\BlogImage');
    }
}
