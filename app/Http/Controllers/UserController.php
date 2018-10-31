<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Users};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //

    public function Userlogin()
    {
        $this->loginCheck();
        $login = view('Users.login');
        return $login;
    }

    public function UserRegistration()
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

//        $validator = Validator::make($message);
//        if($validator->fails()){
//            return Redirect::to('/user-registration')->withErrors($validator);
//        }else{
//            echo 'no';
//        }

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

    public function loginCheck(){
        //session_start();
        $user_id = Session::get('id');

        if($user_id !== null){
            return redirect::to('/user-profile');
        }else{
            Session::put('message', 'You must login first.');
            return redirect::to('/user-login');
        }
    }

    public function user_login(Request $request){

        $user_email = $request->email;
        $user_pass = $request->password;

        $res = Users::where('email', $user_email)
            ->where('password', $user_pass)
            ->first();
        if($res !== null){
            Session::put('id', $res->id);
            $name = $res->first_name.' '.$res->last_name;
            Session::put('name', $name);
            //dd(session()->all());
            $user = Users::find($res->id);
            return view('Users.userlayout')
                ->with('user', $user);
        }else{
            Session::put('message', 'Your User ID or Password Invalid...!!!');
            return redirect::to('/user-login');
        }

    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }



    public function popularTour()
    {
        $popular_tour = view('');
        return $popular_tour;
    }

    public function closeToSea()
    {
        $close_to_sea = view('');
        return $close_to_sea;
    }

    public function hillTracking()
    {
        $hill_tracking = view('');
        return $hill_tracking;
    }

    public function waterfalls()
    {
        $waterfalls = view('');
        return $waterfalls;
    }

    public function comingSoon()
    {
        $coming_soon = view('coming_soon');
        return $coming_soon;
    }



}
