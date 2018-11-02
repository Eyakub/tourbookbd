<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function allTour()
    {
        $tours = Tour::paginate(6);

        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', 'Museum')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount'));
    }

    public function singleDetails($id)
    {
        $tour = Tour::find($id);

        return view('Tours.single_tour')
            ->with('tour', $tour);
    }


    public function closeToSea()
    {
        $tours = Tour::where('tour_category', 'Close To Sea')
            ->paginate(6);

        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', 'Museum')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount'));
    }

    public function waterfall()
    {
        $tours = Tour::where('tour_category', 'Waterfall')
            ->paginate(6);

        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', 'Museum')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount'));
    }

    public function natureWild()
    {
        $tours = Tour::where('tour_category', 'Nature & Wildlife')
            ->paginate(6);

        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', 'Museum')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount'));
    }

    public function hikingCamping()
    {
        $tours = Tour::where('tour_category', 'Hiking & Camping')
            ->paginate(6);

        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', 'Museum')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount'));
    }
}
