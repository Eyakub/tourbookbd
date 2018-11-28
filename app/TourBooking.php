<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    protected $table = 'bookings';

    public function tour()
    {
        return $this->hasOne(Tour::class);
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
