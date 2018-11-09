<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Hotel;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topTours = Tour::paginate(6);
        $topHotels = Hotel::paginate(6);
        $totalUser = Users::all()->count();
        $totalTour = Tour::all()->count();

        $topTourContent = view('Tours.top_tours')
            ->with('topTour', $topTours);
        $topHotelContent = view('Hotels.top_hotels')
            ->with('topHotel', $topHotels);

        return view('home')
            ->with(compact('topTourContent', 'topHotelContent', 'totalUser', 'totalTour'));
    }


    public function user()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $blog = $user->blogs();
    }

    public function aboutus()
    {
        $totalUser = User::all()->count();
        $totalTour = Tour::all()->count();

        return view('layouts.about')
            ->with(compact('totalTour', 'totalUser'));
    }

    public function faq()
    {
        return view('layouts.faq');
    }

    public function touristGuide()
    {
        return view('layouts.touristguide');
    }
}
