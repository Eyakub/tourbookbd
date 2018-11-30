<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';

    public function tourDis()
    {
        return $this->hasMany('App\Tour', 'id');
    }

    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
