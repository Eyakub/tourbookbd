<?php

namespace App\Http\Controllers;

use App\Http\Resources\TourResource;
use App\Tour;
use App\TourReview;
use App\TourWishlist;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class TourController extends Controller
{

    public function countValue($tours)
    {
        $count = Tour::all()->count();
        $closeToCount = Tour::where('tour_category', '=', 6)->count();
        $hikingCount = Tour::where('tour_category', '=', 8)->count();
        $natureCount = Tour::where('tour_category', '=', 7)->count();
        $waterfallCount = Tour::where('tour_category', '=', 9)->count();
        $historicCount = Tour::where('tour_category', '=', 3)->count();
        $museumCount = Tour::where('tour_category', '=', 2)->count();
        $churcesCount = Tour::where('tour_category', '=', 4)->count();
        $citysightseeing = Tour::where('tour_category', '=', 1)->count();
        $skyline = Tour::where('tour_category', '=', 5)->count();

        $tours_content = view('Tours.tour_contents')
            ->with(compact('tours'));

        return view('Tours.all_tour_list_in_grid')
            ->with(compact('tours_content', 'count', 'closeToCount', 'hikingCount',
                'natureCount', 'waterfallCount', 'historicCount', 'museumCount',
                'churcesCount', 'citysightseeing', 'skyline'));
    }

    public function allTour()
    {
        //$tours = Tour::with(['review'])->paginate(6);
        /*$tours = DB::table('tour')
            ->leftJoin('tour_review', 'tour.id', '=', 'tour_review.tour_id')
            ->leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.tour_category_name')
            ->select(array('tour.*', DB::raw('COUNT(tour_review.tourreview_desc)')))
            ->groupBy('tour_title')
            ->paginate(6);*/
        //dd($tours);

        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        /*return response()->json([
            'tours' => $tours
        ]);*/
        return $this->countValue($tours);
    }

    public function singleDetails($id)
    {
        //$tour = Tour::find($id);
//        $tour = Tour::with(['review . user'])->find($id);
        $tour = Tour::find($id);
        //$reviews =  $tour->review()->get();
        /*foreach ($reviews as $review){
            echo $review->id.'<br>';
        }
        die();*/
        //dd($comments->pluck('user_id')); //get specific value from collection
        return view('Tours.single_tour')
            ->with(compact('tour'));
    }

    public function closeToSea()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 6)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function skyline()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 5)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function historicPlaces()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 3)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function museum()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 2)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function citySightseeing()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 1)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);
        return $this->countValue($tours);
    }

    public function waterfall()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 9)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function natureWild()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 7)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function hikingCamping()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 8)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    public function churces()
    {
        $tours = Tour::leftJoin('tour_category', 'tour.tour_category', '=', 'tour_category.id')
            ->where('tour_category', '=', 4)
            ->select('tour.*', 'tour_category.tour_category_name', 'tour_category.tour_category_icon')
            ->paginate(6);

        return $this->countValue($tours);
    }

    /**
     * tour review
     */
    public function tourreview(request $request)
    {
        $user_id = Session::get('user_id');
        $tour_id = $request->input('tour_id');

        /*return response()->json([
           'data' => $request->all(),
        ]);*/

        $review = new TourReview();
        $review->tourreview_desc = $request->input('tourreview_desc');
        $review->tourreview_position = $request->input('tourreview_position');
        $review->tourreview_price = $request->input('tourreview_price');
        $review->tourreview_guide = $request->input('tourreview_guide');
        $review->tourreview_quality = $request->input('tourreview_quality');
        $review->tour_id = $tour_id;
        $review->user_id = $user_id;
        //dd($review);
        $review->save();
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
        $user_id = Session::get('user_id');

        $wishlist = new TourWishlist();
        $wishlist->tour_id = $tour_id;
        $wishlist->user_id = $user_id;
        //dd($wishlist);
        $wishlist->save();
        return Redirect::to('/tours/single-tour/'. $tour_id);
    }

    public function allToursAPI()
    {
        $tours = Tour::with('review')->paginate(6);
        return TourResource::collection($tours);
    }

}
