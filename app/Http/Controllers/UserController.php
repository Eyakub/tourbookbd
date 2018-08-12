<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function Userlogin()
    {
        $login = view('Users.login');
        return $login;
    }

    public function UserRegistration()
    {
        $reg = view('Users.registering');
        return $reg;
    }

    public function allTour()
    {
        $all_tour_list = view('Users.all_tour_list_in_grid');
        return $all_tour_list;
    }

    public function popularTour()
    {
        $popular_tour = view('');
        return $popular_tour;
    }

    public function closeToSea()
    {
        $close_to_sea = view('');
        return $close_to_sea;
    }

    public function hillTracking()
    {
        $hill_tracking = view('');
        return $hill_tracking;
    }

    public function waterfalls()
    {
        $waterfalls = view('');
        return $waterfalls;
    }

    public function comingSoon()
    {
        $coming_soon = view('coming_soon');
        return $coming_soon;
    }
}
