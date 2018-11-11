<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Blog, TourCategory, Users};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //

    public function userloginform()
    {
        $this->auth_check();
        $login = view('Users.login');
        return $login;
    }

    public function userRegistration()
    {
        $reg = view('Users.registering');
        return $reg;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUserInformation(request $request){
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
            'password_confirmation.required'=>'The confirm password is required',
            'user_profile.required'=>'Photo is required'
        );


        //handle file upload
        if($request->hasFile('user_profile')){
            $fileName = $request->file('user_profile')->getClientOriginalName();
            //Upload image
            $request->file('user_profile')->storeAs('/public/user_images', $fileName);
        }else{
            $fileName = 'noimage.jpg';
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

    public function auth_check()
    {
        session_start();
        $user_id = Session::get('id');
        $username = Session::get('username');
        if($user_id !== NULL){
            return redirect::to('/user-profile/'.$username)->send();
        }
    }

    public function user_login(Request $request){

        $user_email = $request->email;
        $user_pass = $request->password;

        $user = Users::where('email', $user_email)
            ->where('password', $user_pass)
            ->first();

        if($user !== NULL){
            Session::put('id', $user->id);
            Session::put('username', $user->username);
            $name = $user->first_name.' '.$user->last_name;
            Session::put('name', $name);
            Session::put('user', $user);

            return redirect::to('/user-profile/'.$user->username);
        }

        Session::put('message', 'Your User ID or Password Invalid...!!!');
        return redirect::to('/user-login');

    }

    public function userprofile(request $reqest, $username)
    {
        $user_id = Session::get('id');
        $user = Users::find($user_id);
        $blogs = Blog::where('user_id', $user_id)
            ->paginate(10);
        $blogCat = TourCategory::all();

        return view('Users.userlayout')
            ->with(compact('user', 'blogCat', 'blogs', 'username'));
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

        $this->validate($request,[
           'blog_desc' => 'required',
           'blog_img' => 'image|mimes:jpeg, png, jpg, gif, svg | max:3048'
        ]);


        if($request->hasFile('blog_image')){
            foreach ($request->blog_image as $file){

            }
        }
    }

    public function comingSoon()
    {
        return view('coming_soon');
    }



}
