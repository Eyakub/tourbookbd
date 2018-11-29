<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Guide;
use App\Hotel;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$topTour = Tour::with(['review'])->paginate(6);
//        $topTour = DB::table('tour')
//            ->leftJoin('tour_review', 'tour.id', '=', 'tour_review.tour_id')
//            ->leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
//            ->select('tour.*', 'tour_review.tourreview_desc',
//                'tour_category.tour_category_name')
//            ->paginate(6);
        $topTour = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->select('tour.*', 'tour_category.tour_category_name')
            ->paginate(6);
        //dd($topTour);
        $allTour = Tour::all();
        $topHotels = Hotel::paginate(6);
        $totalUser = Users::all()->count();
        $totalTour = Tour::all()->count();

        $topTourContent = view('Tours.top_tours')
            ->with(compact('topTour', 'allTour', 'reviewCount'));
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
        $guides = Guide::all();
        return view('layouts.touristguide')
            ->with(compact('guides'));
    }

    public function guideProfilePublic($name)
    {
        $guidePublic = Guide::where('guide_username', '=', $name)->first();
        //dd($guidePublic);
        return view('layouts.touristPublicProfile')
            ->with(compact('guidePublic'));
    }

}
