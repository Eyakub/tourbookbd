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
        return $this->hasMany(TourReview::class);
    }

    public function wishlist()
    {
        return $this->belongsTo(TourWishlist::class);
    }

}
