<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideReview extends Model
{
    protected $table = 'guide_review';

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function guide()
    {
        return $this->belongsTo(Guide::class);
    }
}
