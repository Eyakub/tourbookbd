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

    public function loginCheck(Request $request){
//        $data = Input::except(array('_token'));
//
//        $rule = array(
//            'email'=>'required|email',
//            'password'=>'required',
//        );
//
//        $validator = Validator::make($data, $rule);
//        if($validator->fails()){
//            return Redirect::to('user-login')->withErrors($validator);
//        }else{
//            $data = Input::except(array('_token'));
//            if(Auth::attempt($data)){
//                return Redirect::to('/coming_soon');
//            }else{
//                return Redirect::to('user-login');
//            }
//        }

        $user_email = $request->email;
        $user_pass = $request->password;


        $result = DB::table('users')->select('*')
            ->where('email', $user_email)
            ->where('password', $user_pass)
            ->first();

        $res = USERS::where('email', $user_email)
            ->where('password', $user_pass)
            ->first();
        if($res){
            Session::put('id', $res->id);
            //dd(session()->all());
            return Redirect::to('/coming_soon');
        }

    }

    public function auth_check(){
        session_start();
        $user_id = Session::get('id');
        if($user_id !== NULL){
            return Redirect::to('/coming_soon')->send();
        }
    }

//    public function allTour()
//    {
//        $tour_content = view('Tours.tour_contents');
//
//        return view('Tours.all_tour_list_in_grid')
//            ->with('content_of_tours', $tour_content);
//    }

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

    public function singleDetails(){
        $single_details = view('Tours.single_tour_details');
        return $single_details;
    }
}
