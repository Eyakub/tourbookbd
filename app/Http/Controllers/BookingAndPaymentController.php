<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BookingAndPaymentController extends Controller
{
    public function carts(request $request)
    {
        $tour_id = Session::get('tour_id');
        $tour_date = Session::get('tour_date');
        $tour_time = Session::get('tour_time');
        $booking_adult_no = Session::get('booking_adult_no');
        $booking_children_no = Session::get('booking_children_no');
        $showAdultPriceInput = Session::get('showAdultPriceInput');
        $showChildrensPriceInput = Session::get('showChildrensPriceInput');
        $showTotalAmountInput = Session::get('showTotalAmountInput');
        $showAdultsTotalCost = Session::get('showAdultsTotalCost');
        $showChildrensTotalCost = Session::get('showChildrensTotalCost');
        $tourInfo = Tour::find($tour_id);
        //dd($tour_id);
        return view('Tours.Cart.cart')
            ->with(compact('tour_date', 'tour_time', 'booking_adult_no', 'booking_children_no',
                'showAdultPriceInput', 'showChildrensPriceInput', 'showTotalAmountInput', 'tourInfo',
                'showAdultsTotalCost', 'showChildrensTotalCost'));
        //dd($request->session()->all() );
    }

    public function cartsCost(request $request)
    {
        Session::put('tour_id', $request->input('tour_id'));
        Session::put('tour_date', $request->input('tour_date'));
        Session::put('tour_time', $request->input('tour_time'));
        Session::put('booking_adult_no', $request->input('booking_adult_no'));
        Session::put('booking_children_no', $request->input('booking_children_no'));
        Session::put('showAdultPriceInput', $request->input('showAdultPriceInput'));
        Session::put('showChildrensPriceInput', $request->input('showChildrensPriceInput'));
        Session::put('showTotalAmountInput', $request->input('showTotalAmountInput'));
        Session::put('showChildrensTotalCost', $request->input('showChildrensTotalCost'));
        Session::put('showAdultsTotalCost', $request->input('showAdultsTotalCost'));
        return redirect::to('/tours/bookings/carts');
    }


    public function payments()
    {
        $tour_id = Session::get('tour_id');
        $booking_adult_no = Session::get('booking_adult_no');
        $booking_children_no = Session::get('booking_children_no');
        $showTotalAmountInput = Session::get('showTotalAmountInput');

        return view('Tours.Cart.payments')
            ->with(compact('booking_adult_no', 'booking_children_no', 'showTotalAmountInput'));
    }

    public function pendingPayments(request $request)
    {
        $user_id = Session::get('user_id');
        $bkash_transaction_id = $request->input('bkash_transaction_id');

        return redirect::to('/tours/bookings/carts/payments/')->with('submitbkash', 'Booking Pending');
    }

    public function pending()
    {
        $tour_id = Session::get('tour_id');
        $user_id = Session::get('user_id');
        $tour_date = Session::get('tour_date');
        $tour_time = Session::get('tour_time');

        $tourName = Tour::find($tour_id);
        $userName = User::find($user_id);
        return view('Tours.Cart.confirmation')
            ->with(compact('tourName', 'userName', 'tour_date', 'tour_time'));
    }


    public function invoice()
    {
        return view('Tours.Cart.invoice');
    }
}
