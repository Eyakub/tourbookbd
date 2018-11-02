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
}
