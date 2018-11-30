<?php

namespace App\Http\Controllers;

use App\Blog;
use App\District;
use App\Guide;
use App\HotelCategory;
use App\SuperAdmin;
use App\Tour;
use App\TourBooking;
use App\TourCategory;
use App\Hotel;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){

        $this->auth_checkAdmin();

        $admin_id = Session::get('admin_id');
        $admininfo = SuperAdmin::find($admin_id);

        //dd($admininfo);
        $dashboard_content = view('Admin.dashboard');

        return view('Admin.adminlayout')
            ->with('dashboard_content', $dashboard_content)
            ->with(compact( 'admininfo'));

    }

    public function showAdminForm ()
    {
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return redirect::to('/admin-panel');
        }else{
            return view('Admin.superadmin.adminlogin');
        }
    }

    public function superadminlogin(request $request)
    {
        $admin_email = $request->admin_email;
        $admin_pass = $request->admin_password;

        $admin = SuperAdmin::where('admin_email', $admin_email)
            ->where('admin_password', $admin_pass)
            ->first();

        if ($admin !== NULL) {
            Session::put('admin_id', $admin->id);

            return redirect::to('/admin-panel/');
        }

        Session::put('message', 'Your User ID or Password Invalid...!!!');
        return redirect::to('/admin-login');
    }

    public function loginPreventAdmin()
    {
        session_start();
        $admin_id = Session::get('admin_id');
        if ($admin_id !== NULL) {
            return redirect::to('/admin-panel');
        }
    }

    public function auth_checkAdmin()
    {
        session_start();
        $admin_id = Session::get('admin_id');
        if ($admin_id === NULL) {
            return redirect::to('/admin-login')->send();
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/admin-login');
    }



    /**
     * @return Tour
     */
    public function showTourForm()
    {
        $this->auth_checkAdmin();
        $categorys = TourCategory::all();
        $district = District::all();
        return view('Admin.forms.inserttour')
            ->with('categorys', $categorys)
            ->with('district', $district);
    }

    public function insertTour(request $request){

        $this->validate($request, [
            'tour_title' => 'required',
            'tour_description' => 'required',
            'tour_address' => 'required',
            'tour_category' => 'required',
            'district_id' => 'required',
        ]);

        if($request->hasFile('tour_small_cover') && $request->hasFile('tour_large_cover')){
            $tourSmallCover = time().'-'.$request->file('tour_small_cover')->getClientOriginalName();
            $tourLargeCover = time().'-'.$request->file('tour_large_cover')->getClientOriginalName();
            $request->file('tour_small_cover')->storeAs('public/small_cover', $tourSmallCover);
            $request->file('tour_large_cover')->storeAs('public/large_cover', $tourLargeCover);
        }

        //Store tour information to db using model
        $file = new Tour;
        $file->tour_title = $request->input('tour_title');
        $file->tour_description = $request->input('tour_description');
        $file->tour_address = $request->input('tour_address');
        $file->tour_category = $request->input('tour_category');
        $file->tour_adult_price = $request->input('tour_adult_price');
        $file->tour_children_price = $request->input('tour_children_price');
        $file->tour_small_cover = $tourSmallCover;
        $file->tour_large_cover = $tourLargeCover;
        $file->district_id = $request->input('district_id');
        $file->save();

        return Redirect::to('/admin-panel/tours-insert-form')->with('success', 'Successfully Inserted');
    }

    public function showData()
    {
        $this->auth_checkAdmin();

        $showData = Tour::with('district')->get()->sortBy('tour_title');
        return view('Admin.tourstable')
            ->with('showData', $showData);
    }

    public function editTourInfo($id)
    {
        $this->auth_checkAdmin();

        $datapass = Tour::with('category')->find($id);
        $categorys = TourCategory::all();
        $districts = District::all();
        $oneDis = $datapass->district_id;
        $oneDiss = District::find($oneDis);
        return view('Admin.forms.editTourInfo')
            ->with(compact('datapass', 'categorys', 'districts', 'oneDis', 'oneDiss'));

    }

    public function updateTourInfo(request $request)
    {
        $this->auth_checkAdmin();

        $tour_id = $request->tour_id;
        //var_dump($tour_id);
        $tour = Tour::find($tour_id);
        //var_dump($tour);
        $this->validate($request, [
            'tour_title' => 'required',
            'tour_description' => 'required',
            'tour_address' => 'required',
            'tour_category' => 'required',
            'district_id' => 'required',
        ]);

        if($request->hasFile('tour_small_cover') || $request->hasFile('tour_large_cover')){
            $tourSmallCover = time().'-'.$request->file('tour_small_cover')->getClientOriginalName();
            $tourLargeCover = time().'-'.$request->file('tour_large_cover')->getClientOriginalName();
            $oldsmallcover = $request->input('tour_small_old_photo');
            $oldlargecover = $request->input('tour_large_old_photo');
            $request->file('tour_small_cover')->storeAs('public/small_cover', $tourSmallCover);
            $request->file('tour_large_cover')->storeAs('public/large_cover', $tourLargeCover);

            //delete old photo
            Storage::delete('public/small_cover/'.$oldsmallcover);
            Storage::delete('public/large_cover/'.$oldlargecover);
        }else{
            $tourSmallCover = $request->input('tour_small_old_photo');
            $tourLargeCover = $request->input('tour_large_old_photo');
        }


        //update data into database
        $tour->tour_title = $request->input('tour_title');
        $tour->tour_description = $request->input('tour_description');
        $tour->tour_address = $request->input('tour_address');
        $tour->tour_category = $request->input('tour_category');
        $tour->tour_adult_price = $request->input('tour_adult_price');
        $tour->tour_children_price = $request->input('tour_children_price');
        $tour->tour_small_cover = $tourSmallCover;
        $tour->tour_large_cover = $tourLargeCover;
        $tour->district_id = $request->input('district_id');
        $tour->save();

        return Redirect::to('/admin-panel/edit-tour-information/'.$tour_id)->with('success', 'Successfully Updated');

    }

    public function deleteTour($id)
    {
        $deleteTour = Tour::find($id);
        $deleteTour->delete();
        return Redirect::to('/admin-panel/all-tour-data/');

    }


    /**
     * Tour @GUIDE
     */
    public function showGuideForm()
    {
        $this->auth_checkAdmin();
        return view('Admin.forms.insertGuide');
    }

    public function insertGuide(request $request)
    {

        $this->validate($request, [
            'guide_username' => 'required',
            'guide_name' => 'required',
            'guide_address' => 'required',
            'guide_about' => 'required',
            'guide_quote' => '',
            'guide_number' => 'required',
            'guide_languages' => 'required',
            'guide_education' => 'required',
            'guide_experience' => 'required',
            'guide_certificates' => 'required',
            'guide_nid' => 'required',
        ]);

        if($request->hasFile('guide_picture')){
            $guidePicture = time().'-'.$request->file('guide_picture')->getClientOriginalName();
            $request->file('guide_picture')->storeAs('public/guide_pic', $guidePicture);
        }

        //Store GUIDE information to db using model
        $file = new Guide;
        $file->guide_name = $request->input('guide_name');
        $file->guide_username = $request->input('guide_username');
        $file->guide_picture = $guidePicture;
        $file->guide_address = $request->input('guide_address');
        $file->guide_number = $request->input('guide_number');
        $file->guide_about = $request->input('guide_about');
        $file->guide_quote = $request->input('guide_quote');
        $file->guide_languages = $request->input('guide_languages');
        $file->guide_education = $request->input('guide_education');
        $file->guide_experience = $request->input('guide_experience');
        $file->guide_certificates = $request->input('guide_certificates');
        $file->guide_nid = $request->input('guide_nid');

        $file->save();

        return Redirect::to('/admin-panel/guideform')->with('success', 'Successfully Registered a guide');
    }

    public function guidesData()
    {
        $this->auth_checkAdmin();
        $guides = Guide::all();
        return view('Admin.guidestable')
            ->with(compact('guides'));
    }

    public function editGuideInfo($id)
    {
        $this->auth_checkAdmin();
        $datapass = Guide::find($id);
        return view('Admin.forms.editGuideInfo')
            ->with(compact('datapass'));
    }

    public function updateGuideInfo(request $request)
    {
        $guide_id = $request->guide_id;
        //var_dump($guide_id);
        $guide = Guide::find($guide_id);
        //dd($request);
        $this->validate($request, [
            'guide_username' => 'required',
            'guide_name' => 'required',
            'guide_address' => 'required',
            'guide_about' => 'required',
            'guide_quote' => 'required',
            'guide_number' => 'required',
            'guide_languages' => 'required',
            'guide_education' => 'required',
            'guide_experience' => 'required',
            'guide_certificates' => 'required',
            'guide_nid' => 'required',
        ]);

        if($request->hasFile('guide_picture')){
            $guidePicture = time().'-'.$request->file('guide_picture')->getClientOriginalName();
            $oldGuidePhoto = $request->input('guide_old_picture');
            $request->file('guide_picture')->storeAs('public/guide_pic/', $guidePicture);

            //delete old photo
            Storage::delete('public/guide_pic/'.$oldGuidePhoto);
        }else{
            $guidePicture = $request->input('guide_old_picture');
        }


        //update data into database
        $guide->guide_name = $request->input('guide_name');
        $guide->guide_username = $request->input('guide_username');
        $guide->guide_picture = $guidePicture;
        $guide->guide_address = $request->input('guide_address');
        $guide->guide_number = $request->input('guide_number');
        $guide->guide_about = $request->input('guide_about');
        $guide->guide_quote = $request->input('guide_quote');
        $guide->guide_languages = $request->input('guide_languages');
        $guide->guide_education = $request->input('guide_education');
        $guide->guide_experience = $request->input('guide_experience');
        $guide->guide_certificates = $request->input('guide_certificates');
        $guide->guide_nid = $request->input('guide_nid');
        //dd($guide);
        $guide->save();

        return Redirect::to('/admin-panel/edit-guide-information/'.$guide_id)->with('success', 'Successfully Updated the guide Information');
    }

    public function deleteGuide($id)
    {
        $deleteGuide = Guide::find($id);
        $deleteGuide->delete();
        return Redirect::to('/admin-panel/all-guide-profile/');
    }


    /**
     * @User Panel
     */
    public function showUserData()
    {
        $this->auth_checkAdmin();

        $showUserData = Users::all();
        return view('Admin.userstable')
            ->with('showUserData', $showUserData);
    }

    public function showUserProfile()
    {
        $this->auth_checkAdmin();

        $showUserData = Users::withCount('userBlogs')->get();

        //dd($showUserData);
        return view('Admin.usersprofileview')
            ->with('showUserProfile', $showUserData);
    }

    public function deleteUser($id)
    {
        $deleteuser = Users::find($id);
        $deleteuser->delete();
        return Redirect::to('/admin-panel/all-user-data/');
    }



    /**
     * @Hotels Panel
     */
    public function showHotelForm()
    {
        $this->auth_checkAdmin();
        $category = HotelCategory::all();
        return view('Admin.forms.inserthotelsResorts')
            ->with(compact('category'));
    }

    public function insertHotel(request $request){

        $this->validate($request, [
            'hotels_title' => 'required',
            'hotels_description' => 'required',
            'hotels_address' => 'required',
            'category_id' => 'required',
        ]);

        if($request->hasFile('hotels_small_cover') && $request->hasFile('hotels_large_cover')){
            $hotelsSmallCover = time().'-'.$request->file('hotels_small_cover')->getClientOriginalName();
            $hotelsLargeCover = time().'-'.$request->file('hotels_large_cover')->getClientOriginalName();
            $request->file('hotels_small_cover')->storeAs('public/small_cover', $hotelsSmallCover);
            $request->file('hotels_large_cover')->storeAs('public/large_cover', $hotelsLargeCover);
        }

        //Store tour information to db using model
        $file = new Hotel;
        $file->hotels_title = $request->input('hotels_title');
        $file->hotels_description = $request->input('hotels_description');
        $file->hotels_address = $request->input('hotels_address');
        $file->category_id = $request->input('category_id');
        $file->hotels_per_cost = $request->input('hotels_per_cost');
        $file->hotels_small_cover = $hotelsSmallCover;
        $file->hotels_large_cover = $hotelsLargeCover;
        //dd($file);
        $file->save();

        return Redirect::to('/admin-panel/hotels-insert-form')->with('success', 'Successfully Inserted Hotels Information');
    }

    public function editHotelInfo($id)
    {
        $this->auth_checkAdmin();

        $datapass = Hotel::with('district')->find($id);
        $categorys = HotelCategory::all();
        $districts = District::all();
        $oneDis = $datapass->district_id;
        $oneDiss = District::find($oneDis);
        return view('Admin.forms.editHotelsInfo')
            ->with(compact('datapass', 'categorys', 'districts', 'oneDis', 'oneDiss'));
    }

    public function updateHotelInfo(request $request)
    {
        $this->auth_checkAdmin();

        $hotel_id = $request->input('hotel_id');
        //var_dump($tour_id);
        $hotel = Hotel::find($hotel_id);
        //var_dump($tour);
        $this->validate($request, [
            'hotels_title' => 'required',
            'hotels_description' => 'required',
            'hotels_address' => 'required',
            'hotel_category' => 'required',
            'district_id' => 'required',
        ]);

        if($request->hasFile('hotels_small_cover') || $request->hasFile('hotels_large_cover')){
            $hotelSmallCover = time().'-'.$request->file('hotels_small_cover')->getClientOriginalName();
            $hotelLargeCover = time().'-'.$request->file('hotels_large_cover')->getClientOriginalName();
            $oldSmallCover = $request->input('hotels_small_cover_old');
            $oldLargeCover = $request->input('hotels_large_cover_old');
            $request->file('hotels_small_cover')->storeAs('public/small_cover', $hotelSmallCover);
            $request->file('hotels_large_cover')->storeAs('public/large_cover', $hotelLargeCover);

            //delete old photo
            Storage::delete('public/small_cover/'.$oldSmallCover);
            Storage::delete('public/large_cover/'.$oldLargeCover);
        }else{
            $hotelSmallCover = $request->input('hotels_small_cover_old');
            $hotelLargeCover = $request->input('hotels_large_cover_old');
        }


        //update data into database
        $hotel->hotels_title = $request->input('hotels_title');
        $hotel->hotels_description = $request->input('hotels_description');
        $hotel->hotels_address = $request->input('hotels_address');
        $hotel->category_id = $request->input('hotel_category');
        $hotel->hotels_per_cost = $request->input('hotels_per_cost');
        $hotel->hotels_small_cover = $hotelSmallCover;
        $hotel->hotels_large_cover = $hotelLargeCover;
        $hotel->district_id = $request->input('district_id');
        $hotel->save();

        return Redirect::to('/admin-panel/edit-hotel-information/'.$hotel_id)->with('success', 'Successfully Updated');
        /*return response()->json([
           'data' => $hotel,
        ]);*/
    }

    public function showHotelData()
    {
        $this->auth_checkAdmin();
        /*$showHotelData = Hotel::with(['district'])->get()->sortBy('created_at');*/
        $showHotelData = Hotel::join('districts', 'hotels.district_id', '=', 'districts.id')
            ->join('hotel_category', 'hotels.category_id', '=', 'hotel_category.id')
            ->get();
        /*return response()->json([
           'data' => $showHotelData
        ]);*/
        //dd($showHotelData);
        return view('Admin.hotelstable')->with(compact('showHotelData'));
    }

    public function showHotelAdminData()
    {
        $this->auth_checkAdmin();
        return view('coming_soon');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * BOOKING REQUEST CHECKING ACTION
     */
    public function checkPendingBooking()
    {
        $this->auth_checkAdmin();
        $pending = TourBooking::all();
        return view('Admin.bookingrequest')
            ->with(compact('pending'));
    }

    public function approveBooking($id)
    {
        $appr = TourBooking::find($id);
        $appr->booking_status = 1;
        //dd($appr);
        $appr->save();
        return Redirect::to('/admin-panel/tour/booking-request');
    }

    public function rejectBooking($id)
    {
        $rej = TourBooking::find($id);
        $rej->delete();
        return Redirect::to('/admin-panel/tour/booking-request');
    }

}
