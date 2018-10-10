<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index(){
        $dashboard = view('Admin.dashboard');
        return view('Admin.adminlayout')
            ->with('dashboard_content', $dashboard);
    }

    public function toursPanel(){
        $tourstable = view('Admin.tourstable');
        return view('Admin.adminlayout')
            ->with('tourstable', $tourstable);
    }

    public function showTourForm(){
        return view('Admin.forms.inserttour');
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

        return Redirect::to('/tour-insert-form')->with('success', 'Successfully Inserted');
    }
}
