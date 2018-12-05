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
        return $this->hasMany(Blog::class, 'User_id');
    }

    public function blogCount()
    {
        return $this->hasMany('Blog')->whereUserId($this->user_id)->count();
    }

    public function tourReview()
    {
        return $this->hasMany(TourReview::class);
    }

    public function wishlist()
    {
        return $this->hasMany(TourWishlist::class);
    }

    public function guidereview()
    {
        return $this->hasMany(GuideReview::class);
    }
}
