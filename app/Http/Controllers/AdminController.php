<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function insertTour(request $request){
        if($request->hasFile('small-cover') && $request->hasFile('large-cover')){
            $tourSmallCover = $request->file->getClientOriginalName();
            $tourLargeCover = $request->file->getClientOriginalName();
            $filesize = $request->file->getClientSize();
            $request->file->storeAs('public/small_cover', $filename);

            $file = new Tour;
            $file->name = $filename;
            $file->size = $filesize;
            $file->save();
        }
    }
}
