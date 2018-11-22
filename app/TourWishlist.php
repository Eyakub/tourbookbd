<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourWishlist extends Model
{
    protected $table = 'tour_wishlist';

    public function user()
    {
        return $this->belongsTo('App\Users');
    }
}
