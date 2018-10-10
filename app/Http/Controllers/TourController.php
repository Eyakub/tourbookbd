<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function allTour(){
        $tours = Tour::get();

        $tourContent = view('Tours.tour_contents')
            ->with('tour', $tours);

//        return view('Tours.all_tour_list_in_grid')
//            ->with('tours_content', $tourContent);

        return view('Tours.all_tour_list_in_grid')
            ->with('content_of_tours', $tourContent);
    }
}
