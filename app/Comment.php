<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Comment extends Model
{
    protected $table = 'blog_comments';

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
