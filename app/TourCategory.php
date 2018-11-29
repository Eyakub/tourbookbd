<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    protected $table = 'tour_category';

    public function tour()
    {
        return $this->hasMany(Tour::class);
    }
}
