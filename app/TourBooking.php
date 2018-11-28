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
}
