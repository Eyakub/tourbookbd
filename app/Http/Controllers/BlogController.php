<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex()
    {
        return view('Blogs.blog');
    }

    public function blogDetails()
    {
        return view('Blogs.blog_details');
    }
}
