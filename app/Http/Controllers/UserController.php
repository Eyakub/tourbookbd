<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Blog, BlogImage, Comment, Country, Tour, TourCategory, TourWishlist, Users};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //

    public function userloginform()
    {
        $this->loginPrevent();
        $login = view('Users.login');
        return $login;
    }

    public function userRegistration()
    {
        $this->loginPrevent();
        $reg = view('Users.registering');
        return $reg;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUserInformation(request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|confirmed|min:6',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'country' => 'required',
            'user_profile' => 'image|max:3000'
        ]);

        $message = array(
            'password_confirmation.required' => 'The confirm password is required',
            'user_profile.required' => 'Photo is required'
        );


        //handle file upload
        if ($request->hasFile('user_profile')) {
            $fileName = $request->file('user_profile')->getClientOriginalName();
            //Upload image
            $request->file('user_profile')->storeAs('/public/user_images', $fileName);
        } else {
            return back()->with('msg', 'Please upload your photo');
        }

        //Create user profile
        $user = new Users;
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->street_address = $request->input('street_address');
        $user->city = $request->input('city');
        $user->zip_code = $request->input('zip_code');
        $user->country = $request->input('country');
        $user->src_user = $fileName;
        $user->save();

        return Redirect::to('/user-registration')->with('success', 'Successfully Registered');

    }

    public function loginPrevent()
    {
        session_start();
        $user_id = Session::get('user_id');
        $username = Session::get('username');
        if ($user_id !== NULL) {
            return redirect::to('/user-profile/' . $username)->send();
        }
    }

    public function auth_check()
    {
        session_start();
        $user_id = Session::get('user_id');
        if ($user_id === NULL) {
            return Redirect::to('/user-login')->send();
        }
    }

    public function user_login(Request $request)
    {

        $user_email = $request->email;
        $user_pass = $request->password;

        $user = Users::where('email', $user_email)
            ->where('password', $user_pass)
            ->first();

        if ($user !== NULL) {
            Session::put('user_id', $user->id);
            Session::put('username', $user->username);
            $name = $user->first_name . ' ' . $user->last_name;
            Session::put('name', $name);
            Session::put('user', $user);

            return redirect::to('/user-profile/' . $user->username);
        }

        Session::put('message', 'Your User ID or Password Invalid...!!!');
        return redirect::to('/user-login');

    }

    public function userprofile(request $reqest, $username)
    {
        $user_id = Session::get('user_id');
        $user = Users::find($user_id);
        $country = Country::all();
        $userAll = Users::all();
        $tours = DB::table('tour_wishlist')
            ->join('tour', 'tour.id', '=', 'tour_wishlist.tour_id')
            ->where('tour_wishlist.user_id', '=', $user_id)
            ->select('tour.*', 'tour_wishlist.id')
            ->get();
        //$tours = Tour::with('wishlist, tour')->where('user_id', '=', $user_id)->get();
        //dd($tours);
        /**
         * $blog = Blog::find($id)
         * $img = $blog->images()->get(); //images()it's in the model function
         */

        $blogs = Blog::with(['images'])->where('user_id', $user_id)->paginate(10);
        //$comments = Blog::with('comment')->where('user_id', '=', $user_id)->get();
        $blogImage = BlogImage::whereIn('blog_id', $blogs->pluck('id'))->get();
        //dd($blogs);
        $blogCat = TourCategory::all();

        if($user_id){
            return view('Users.userlayout')
                ->with(compact('userAll','user', 'blogCat', 'blogs', 'username', 'blogImage', 'tours', 'country'));
        }else{
            return redirect::to('user-login');
        }
    }

    public function updateUserProfile(request $request)
    {
        $user_id = $request->input('user_id');
        $username = Session::get('username');
        $user = Users::find($user_id);
        //dd($request->all());
        /*$this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'date_of_birth' => 'required',
            'zip_code' => 'required',
            'street_address' => 'required',
            'city' => 'required',
            'country' => 'required',
        ]);*/
        //dd($request->all());
        if($request->hasFile('src_user')){
            $userPicture = time().'-'.$request->file('src_user')->getClientOriginalName();
            $userOldPicture = $request->input('src_user_old');
            $request->file('src_user')->storeAs('public/user_images/', $userPicture);

            //delete old photo
            Storage::delete('public/user_images/'.$userOldPicture);
        }else{
            $userPicture = $request->input('src_user_old');
        }

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->phone_number = $request->input('phone_number');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->zip_code = $request->input('zip_code');
        $user->street_address = $request->input('street_address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->src_user = $userPicture;
        //dd($user);
        $user->save();

        return redirect::to('/user-profile/'.$username)->with('success', 'Profile Updated Successfully');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }


    /**
     * blogs
     */
    public function saveBlog(request $request)
    {
        $user_id = Session::get('id');
        $username = Session::get('username');
        //dd($user_id);
        $this->validate($request, [
            'blog_desc' => 'required',
            'blog_img.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        /**
         * blog table
         */
        $blog = new Blog();
        $blog->blog_desc = $request->input('blog_desc');
        $blog->blog_category = $request->input('blog_category');
        $blog->blog_status = $request->input('blog_status');
        $blog->user_id = $user_id;
        $blog->save();

        if ($request->hasFile('blog_img')) {
            foreach ($request->file('blog_img') as $file) {
                $imgModel = new BlogImage();
                $name = time() . '-' . $file->getClientOriginalName();
                print_r($name);
                $file->storeAs('public/blog_img/', $name);
                $imgModel->blog_img = $name;
                $imgModel->blog_id = $blog->id;
                $imgModel->save();
            }
        } else {
            return back()->with('blogMsg', 'Please upload photos of your blog');
        }

        return redirect::to('/user-profile/' . $username . '#timeline');
    }

    public function saveComment(request $request)
    {
        $user_id = $request->input('user_id');
        $username = Session::get('username');
        $blog_id = $request->input('blog_id');
        $comment = $request->input('comments_desc');

        $savecomment = new Comment();
        $savecomment->user_id = $user_id;
        $savecomment->blog_id = $blog_id;
        $savecomment->comments_desc = $comment;
        //dd($savecomment);
        $savecomment->save();

        return redirect::to('/user-profile/'.$username.'/blog-details/'.$blog_id);
    }

    public function blogDetails($username, $id)
    {

        //$this->auth_check();

        $blogDetails = Blog::with(['images'])->find($id);
        $blogOwner = Users::where('username', '=', $username)->first();
        //$blogDetailsView = view('Users.blogDetails');
        $comments = Comment::with('blog')->where('blog_id', '=', $id)->get();
        /*$comments = DB::table('blog_comments', 'blog')
            ->join('blog', 'blog.id', '=', 'blog_comments.blog_id')
            ->select('blog_comments.*', 'blog.*')
            ->get();*/
        //dd($blogOwner);
        $category = TourCategory::all();

        /*return redirect('/user-profile/'.$username.'/blog-details/'.$id)
            ->with(compact('blogDetailsView', 'blogDetails', 'category', 'blogOwner', 'comments'));*/

        return view('Users.blogDetails')
            ->with(compact('blogDetails', 'category', 'blogOwner', 'comments', 'username'));
    }

    public function removewishlist($id)
    {
        $remove = TourWishlist::find($id);
        $remove->delete();
        return Redirect::back()->withErrors(['msg', 'Item removed Successful']);
    }

    public function deletePersonalBlog($id)
    {
        $remove = Blog::find($id);
        $username = Session::get('username');
        $remove->delete();
        return Redirect::to('/user-profile/'.$username);
    }


    public function imageslider()
    {
        $user_id = 1;
        $blogs = BlogImage::all();
        return view('Users.imageslider')
            ->with(compact('blogs'));
    }

    public function comingSoon()
    {
        return view('coming_soon');
    }


}
