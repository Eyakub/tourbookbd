<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Guide;
use App\GuideReview;
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
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);
        //dd($topTour);
        $allTour = Tour::all();
        $topHotels = Hotel::leftjoin('hotel_category', 'hotels.category_id', '=', 'hotel_category.id')
            ->select('hotels.*', 'hotel_category.hotel_category_name')
            ->paginate(6);
        $totalUser = Users::all()->count();
        $totalTour = Tour::all()->count();

        $topTourContent = view('Tours.top_tours')
            ->with(compact('topTour', 'allTour'));
        $topHotelContent = view('Hotels.top_hotels')
            ->with('topHotel', $topHotels);

        return view('home')
            ->with(compact('topTourContent', 'topHotelContent', 'totalUser', 'totalTour'));
    }


    public function user()
    {
        $user = Users::where('id', Auth::user()->id)->first();
        $blog = $user->blogs();
    }

    public function aboutus()
    {
        $totalUser = Users::all()->count();
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
        $guideReview = GuideReview::join('guides', 'guides.id', '=', 'guide_review.guide_id')
            ->join('users', 'guide_review.user_id', '=', 'users.id')
            ->where('guide_id', $guidePublic->id)
            ->select('guide_review.*', 'users.first_name', 'users.src_user')
            ->get();
        /*dd($guideReview);*/
        return view('layouts.touristPublicProfile')
            ->with(compact('guidePublic', 'guideReview'));
    }

}
