<?php

namespace App\Http\Controllers;

use App\District;
use App\Guide;
use App\Tour;
use App\TourCategory;
use App\User;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $dashboard = view('Admin.dashboard');
        return view('Admin.adminlayout')
            ->with('dashboard_content', $dashboard);
    }


    /**
     * @return Tour
     */
    public function showTourForm(){
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
        $showData = Tour::all()->sortBy('tour_title');
        return view('Admin.tourstable')
            ->with('showData', $showData);
    }

    public function editTourInfo($id)
    {
        $datapass = Tour::find($id);
        $categorys = TourCategory::all();
        $districts = District::all();
        $oneDis = $datapass->district_id;
        $oneDiss = District::find($oneDis);
        return view('Admin.forms.editTourInfo')
            ->with(compact('datapass', 'categorys', 'districts', 'oneDis', 'oneDiss'));

    }

    public function updateTourInfo(request $request)
    {
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
        $guides = Guide::all();
        return view('Admin.guidestable')
            ->with(compact('guides'));
    }

    public function editGuideInfo($id)
    {
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
        $showUserData = User::all();
        return view('Admin.userstable')
            ->with('showUserData', $showUserData);
    }

    public function showUserProfile()
    {
        $showUserData = User::all();
        return view('Admin.usersprofileview')
            ->with('showUserProfile', $showUserData);
    }

    public function deleteUser($id)
    {
        $deleteuser = User::find($id);
        $deleteuser->delete();
        return Redirect::to('/admin-panel/all-user-data/');
    }



    /**
     * @Hotels Panel
     */
    public function showHotelForm()
    {
        return view('Admin.forms.inserthotelsResorts');
    }

    public function insertHotel(request $request){

        $this->validate($request, [
            'hotels_title' => 'required',
            'hotels_description' => 'required',
            'hotels_address' => 'required',
            'hotels_category' => 'required',
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
        $file->hotels_category = $request->input('hotels_category');
        $file->hotels_small_cover = $hotelsSmallCover;
        $file->hotels_large_cover = $hotelsLargeCover;
        $file->save();

        return Redirect::to('/admin-panel/hotels-insert-form')->with('success', 'Successfully Inserted Hotels Information');
    }

    public function showHotelData()
    {
        $showHotelData = Hotel::all();
        return view('Admin.hotelstable')
            ->with('showHotelData', $showHotelData);
    }

    public function showHotelAdminData()
    {
        return view('coming_soon');
    }

}
