<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\District;

class Tour extends Model
{
    protected $table = 'tour';

    public function disTour()
    {
        return $this->hasMany(District::class);
    }

    public function review()
    {
        return $this->hasMany(TourReview::class, 'tour_id');
    }

    public function wishlist()
    {
        return $this->belongsToMany(TourWishlist::class);
    }

    public function booking()
    {
        return $this->hasMany(TourBooking::class);
    }

    public function category()
    {
        return $this->belongsTo(TourCategory::class, 'tour_category', 'id');
    }

}
