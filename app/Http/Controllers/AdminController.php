<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourCategory;
use App\User;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $dashboard = view('Admin.dashboard');
        return view('Admin.adminlayout')
            ->with('dashboard_content', $dashboard);
    }


    public function showTourForm(){
        $categorys = TourCategory::all();
        return view('Admin.forms.inserttour')
            ->with('categorys', $categorys);
    }

    public function insertTour(request $request){

        $this->validate($request, [
            'tour_title' => 'required',
            'tour_description' => 'required',
            'tour_address' => 'required',
            'tour_category' => 'required',
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
        $file->tour_small_cover = $tourSmallCover;
        $file->tour_large_cover = $tourLargeCover;
        $file->save();

        return Redirect::to('/tours-insert-form')->with('success', 'Successfully Inserted');
    }


    public function showData()
    {
        $showData = Tour::all()->sortBy('tour_title');
        return view('Admin.tourstable')
            ->with('showData', $showData);
    }

    public function editTourInfo($id)
    {
        $passData = Tour::find($id);
        $categorys = TourCategory::all();
        return view('Admin.forms.editTourInfo')
            ->with('datapass', $passData)
            ->with('categorys', $categorys);
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
        ]);

        if($request->hasFile('tour_small_cover') || $request->hasFile('tour_large_cover')){
            $tourSmallCover = time().'-'.$request->file('tour_small_cover')->getClientOriginalName();
            $tourLargeCover = time().'-'.$request->file('tour_large_cover')->getClientOriginalName();
            $oldsmallcover = $request->file('tour_small_old_photo');
            $oldlargecover = $request->file('tour_large_old_photo');
            $request->file('tour_small_cover')->storeAs('public/small_cover', $tourSmallCover);
            $request->file('tour_large_cover')->storeAs('public/large_cover', $tourLargeCover);

            //delete old photo
            Storage::delete('public/small_cover'.$oldsmallcover);
            Storage::delete('public/large_cover'.$oldlargecover);
        }else{
            $tourSmallCover = $request->file('tour_small_old_photo');
            $tourLargeCover = $request->file('tour_large_old_photo');
        }


        //update data into database
        $tour->tour_title = $request->input('tour_title');
        $tour->tour_description = $request->input('tour_description');
        $tour->tour_address = $request->input('tour_address');
        $tour->tour_category = $request->input('tour_category');
        $tour->tour_small_cover = $tourSmallCover;
        $tour->tour_large_cover = $tourLargeCover;
        $tour->save();

        return Redirect::to('/edit-tour-information/'.$tour_id)->with('success', 'Successfully Updated');

    }

    public function deleteTour($id)
    {
        $deleteTour = Tour::find($id);
        $deleteTour->delete();
        return Redirect::to('/all-tour-data/');

    }


    /**
     * User Panel
     */
    public function showUserData()
    {
        $showUserData = User::all();
        return view('Admin.userstable')
            ->with('showUserData', $showUserData);
    }

    public function deleteUser($id)
    {
        $deleteuser = User::find($id);
        $deleteuser->delete();
        return Redirect::to('/all-user-data/');
    }



    /**
     * Hotels Panel
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

        return Redirect::to('/hotels-insert-form')->with('success', 'Successfully Inserted Hotels Information');
    }

    public function showHotelData()
    {
        $showHotelData = Hotel::all();
        return view('Admin.hotelstable')
            ->with('showHotelData', $showHotelData);
    }
}
