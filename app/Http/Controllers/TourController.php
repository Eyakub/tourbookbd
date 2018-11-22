<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourReview;
use App\TourWishlist;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TourController extends Controller
{

    public function countValue($tours)
    {
        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', '=', 'Close To Sea')->count();
        $hikingCount = Tour::where('tour_category', '=', 'Hiking & Camping')->count();
        $natureCount = Tour::where('tour_category', '=', 'Nature & Wildlife')->count();
        $waterfallCount = Tour::where('tour_category', '=', 'Waterfall')->count();
        $historicCount = Tour::where('tour_category', '=', 'Historic Places')->count();
        $museumCount = Tour::where('tour_category', '=', 'Museum')->count();
        $churcesCount = Tour::where('tour_category', '=', 'Churces')->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount', 'natureCount', 'waterfallCount', 'historicCount', 'museumCount', 'churcesCount'));
    }

    public function allTour()
    {
        $tours = Tour::paginate(6);

        return $this->countValue($tours);
    }

    public function singleDetails($id)
    {
        //$tour = Tour::find($id);
        $tour = Tour::with(['review.user'])->find($id);

        //dd($comments->pluck('user_id')); //get specific value from collection
        return view('Tours.single_tour')
            ->with(compact('tour'));
    }

    public function closeToSea()
    {
        $tours = Tour::where('tour_category', 'Close To Sea')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function waterfall()
    {
        $tours = Tour::where('tour_category', 'Waterfall')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function natureWild()
    {
        $tours = Tour::where('tour_category', 'Nature & Wildlife')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function hikingCamping()
    {
        $tours = Tour::where('tour_category', 'Hiking & Camping')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function churces()
    {
        $tours = Tour::where('tour_category', 'Churces')
            ->paginate(6);

        return $this->countValue($tours);
    }

    /**
     * tour review
     */
    public function tourreview(request $request)
    {
        $user_id = Session::get('id');
        $tour_id = $request->input('tour_id');

        $review = new TourReview();
        $review->tourreview_desc = $request->input('tourreview_desc');
        $review->tourreview_position = $request->input('tourreview_position');
        $review->tourreview_price = $request->input('tourreview_price');
        $review->tourreview_guide = $request->input('tourreview_guide');
        $review->tourreview_quality = $request->input('tourreview_quality');
        $review->tour_id = $tour_id;
        $review->user_id = $user_id;
        $review->save();
        dd($request->all());
        return redirect::to('/tours/single-tour/'.$tour_id);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @wishlist for USER of TOUR
     */
    public function addToWishlist(request $request)
    {
        $tour_id = $request->input('tour_id');
        $user_id = Session::get('id');

        $wishlist = new TourWishlist();
        $wishlist->tour_id = $tour_id;
        $wishlist->user_id = $user_id;
        //dd($wishlist);
        $wishlist->save();
        return Redirect::to('/tours/single-tour/' . $tour_id);
    }

}
