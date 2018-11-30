<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }

    public function category()
    {
        return $this->belongsTo(HotelCategory::class, 'category_id');
    }
}
