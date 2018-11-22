<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
use App\TourReview;
use App\TourWishlist;

class Users extends Model
{
    protected $table = 'users';

    public function userBlogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function tourReview()
    {
        return $this->hasMany(TourReview::class);
    }

    public function wishlist()
    {
        return $this->hasMany(TourWishlist::class);
    }
}
