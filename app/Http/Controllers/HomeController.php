<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Hotel;
use App\User;
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

        $topTourView = view('Tours.top_tours')
            ->with('topTour', $topTours);
        $topHotelView = view('Hotels.top_hotels')
            ->with('topHotel', $topHotels);

        return view('home')
            ->with('topTourContent', $topTourView)
            ->with('topHotelContent', $topHotelView);
    }


    public function user()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $blog = $user->blogs();

    }
}
