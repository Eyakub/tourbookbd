<?php

namespace App\Http\Controllers;

use App\Blog;
use App\TourCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogIndex()
    {
        $blogs = Blog::where('blog_status', 1)->paginate(10);
        $category = TourCategory::all();

        return view('Blogs.blog')
            ->with(compact('blogs', 'category'));
    }

    public function blogDetails($id)
    {
        $blogDetails = Blog::find($id);
        $category = TourCategory::all();

        return view('Blogs.blog_details')
            ->with(compact('blogDetails', 'category'));
    }
}
