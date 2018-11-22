<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourReview extends Model
{
    protected $table = 'tour_review';

    public function tour()
    {
        return $this->belongsTo('App\Tour');
    }

    public function user()
    {
        return $this->belongsTo('App\Users');
    }


}
