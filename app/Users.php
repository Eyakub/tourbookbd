<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    public function userBlogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function tourReview()
    {
        return $this->hasMany('App\TourReview');
    }

    public function wishlist()
    {
        return $this->hasMany('App\TourWishlist');
    }
}
