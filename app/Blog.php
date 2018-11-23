<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BlogImage;
use App\Comment;
use App\Users;

class Blog extends Model
{
    protected $table = 'blog';

    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }
}
