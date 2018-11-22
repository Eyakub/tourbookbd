<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;


class TourWishlist extends Model
{
    protected $table = 'tour_wishlist';

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function tour()
    {
        return $this->hasMany(Tour::class);
    }
}
