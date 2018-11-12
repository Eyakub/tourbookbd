<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    protected $table = 'tour_review';

    public function tourR()
    {
        return $this->belongsTo('App\Tour');
    }
}
