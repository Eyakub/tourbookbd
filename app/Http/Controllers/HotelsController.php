<?php

namespace App\Http\Controllers;

use App\District;
use App\Division;
use App\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function allHotels()
    {
        $hotels = Hotel::where('hotels_category', 'Hotels')
            ->paginate(6);
        $division = Division::all();

        $tours_content = view('Hotels.hotels_content')
            ->with(compact('hotels'));

        return view('Hotels.all_hotels_grid')
            ->with(compact('tours_content', 'division'));

    }

    public function allResorts()
    {
        $resorts = Hotel::where('hotels_category', 'Resorts')
            ->paginate(6);
        $division = Division::all();

        $resort_content = view('Hotels.resorts_content')
            ->with(compact('resorts'));

        return view('Hotels.all_resorts_grid')
            ->with(compact('resort_content', 'division'));
    }

    public function singleDetails($id)
    {
        $hotel = Hotel::find($id);

        return view('Hotels.single_hotel_details')
            ->with('hotel', $hotel);
    }

    public function restaurants()
    {
        return view('coming_soon');
    }

}
