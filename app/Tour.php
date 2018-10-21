<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = "tour";


    public function users()
    {
        return $this->belongsToMany('App\User','tour_user');
    }

}
