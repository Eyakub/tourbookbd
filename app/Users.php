<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public function userBlogs()
    {
        return $this->hasMany('App\Blog');
    }
}
