<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function allTour(){
        $tours = Tour::paginate(6);

        $tourContent = view('Tours.tour_contents')
            ->with('tours', $tours);

        return view('Tours.all_tour_list_in_grid')
            ->with('tours_content', $tourContent);

    }

    public function singleDetails($id){
        $tour = Tour::find($id);

        return view('Tours.single_tour')
            ->with('tour', $tour);
    }

    public function allTours(){
        return view('Tours.single_tour');
    }

    public function closeToSea()
    {

        $datas = Tour::where('tour_category', 'Close To Sea')
            ->paginate(6);

        $tourContent = view('Tours.tour_contents')
            ->with('tours', $datas);

        return view('Tours.all_tour_list_in_grid')
            ->with('tours_content', $tourContent);
    }
}
