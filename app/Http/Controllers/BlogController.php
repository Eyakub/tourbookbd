<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\TourCategory;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BlogController extends Controller
{
    public function blogIndex()
    {
        $blogs = Blog::with(['comment'])->where('blog_status', 1)->paginate(10);
        $category = TourCategory::all();

        return view('Blogs.blog')
            ->with(compact('blogs', 'category'));
    }

    public function blogDetails($id)
    {
        $blogDetails = Blog::with(['images'])->find($id);
        $blogOwner = Users::find($blogDetails->user_id);
        $comments = Comment::with('blog')->where('blog_id', '=', $id)->get();
        /*$comments = DB::table('blog_comments')
            ->join('blog', 'blog.id', '=', 'blog_comments.blog_id')
            ->select('blog_comments.*')
            ->get();*/
        //dd($comments);
        $category = TourCategory::all();

        return view('Blogs.blog_details')
            ->with(compact('blogDetails', 'category', 'blogOwner', 'comments'));
    }

    public function saveComment(request $request)
    {
        $user_id = $request->input('user_id');
        $blog_id = $request->input('blog_id');
        $comment = $request->input('comments_desc');

        $savecomment = new Comment();
        $savecomment->user_id = $user_id;
        $savecomment->blog_id = $blog_id;
        $savecomment->comments_desc = $comment;
        //dd($saveComment);
        $savecomment->save();

        return redirect::to('/blog-details/'.$blog_id);
    }
}
