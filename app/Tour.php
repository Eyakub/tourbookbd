<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    public function disTour()
    {
        return $this->hasMany('App\District');
    }

    public function review()
    {
        return $this->hasMany(TourReview::class);
    }

}
