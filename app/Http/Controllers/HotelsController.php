<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function allHotels()
    {
        $hotels = Hotel::where('hotels_category', 'Hotels')
            ->paginate(6);

        $hotelContent = view('Hotels.hotels_content')
            ->with('hotels', $hotels);

        return view('Hotels.all_hotels_grid')
            ->with('tours_content', $hotelContent);

    }

    public function allResorts()
    {
        $resorts = Hotel::where('hotels_category', 'Resorts')
            ->paginate(6);

        $resortContent = view('Hotels.resorts_content')
            ->with('resorts', $resorts);

        return view('Hotels.all_resorts_grid')
            ->with('resort_content', $resortContent);
    }

    public function singleDetails($id)
    {
        $hotel = Hotel::find($id);

        return view('Hotels.single_hotel_details')
            ->with('hotel', $hotel);
    }

}
