<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function hotels()
    {
        $hotel_content = view('Hotels.hotels_content');
        return view('Hotels.all_hotels_grid')
            ->with('hotel_content', $hotel_content);
    }

    public function resorts()
    {
        $resort_content = view('Hotels.resorts_content');
        return view('Hotels.all_resorts_grid')
            ->with('resort_content', $resort_content);
    }
}
