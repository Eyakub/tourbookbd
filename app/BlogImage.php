<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    protected $table = 'blog_images';

    public function blogimg()
    {
        return $this->belongsTo('App\Blog');
    }
}
