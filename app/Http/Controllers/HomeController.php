<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $top_tours_content = view('Tours.top_tours');
        $top_hotels_content = view('Hotels.top_hotels');
        $other_popular_tour_content = view('Tours.other_popular_tour');

        return view('home')
            ->with('top_tours', $top_tours_content)
            ->with('top_hotels', $top_hotels_content)
            ->with('popular_tours', $other_popular_tour_content);
    }
}
