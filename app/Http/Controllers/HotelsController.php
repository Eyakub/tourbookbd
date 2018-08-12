<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function hotels()
    {
        $hotels = view('Hotels.all_hotels_grid');
        return $hotels;
    }

    public function resorts()
    {
        $resorts = view('Hotels.all_resorts_grid');
        return $resorts;
    }
}
