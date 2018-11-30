<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    protected $table = 'hotel_category';

    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
