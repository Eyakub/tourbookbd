<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourBooking;
use App\Users;
use Barryvdh\DomPDF\Facade as PDF;

use Faker\Provider\DateTime;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        Session::put('bkash_transaction_id', $bkash_transaction_id);

        return redirect::to('/tours/bookings/carts/payments/')->with('submitbkash', 'Booking Pending');
    }

    public function pending()
    {
        $tour_id = Session::get('tour_id');
        $user_id = Session::get('user_id');
        $dateValue = strtotime(Session::get('tour_date'));

        $mon = date('m', $dateValue);
        $day = date('l', $dateValue);
        $date = date('d', $dateValue);
        $year = date('y', $dateValue);

        $tour_date = $year.'-'.$mon.'-'.$date;
        $tour_time = Session::get('tour_time');


        $booking_adult_no = Session::get('booking_adult_no');
        $booking_children_no = Session::get('booking_children_no');
        $showTotalAmountInput = Session::get('showTotalAmountInput');
        if(Session::has('bkash_transaction_id')){
            $bkash_transaction_id = Session::get('bkash_transaction_id');

            //save temporary data to booking table
            $book = new TourBooking();
            $book->booking_travel_date = $tour_date;
            $book->booking_travel_time = $tour_time;
            $book->booking_adult_no = $booking_adult_no;
            $book->booking_children_no = $booking_children_no;
            $book->booking_total_price = $showTotalAmountInput;
            $book->user_id = $user_id;
            $book->tour_id = $tour_id;
            $book->bkash_transaction_id = $bkash_transaction_id;
            //dd($book);
            $book->save();

            $tourName = Tour::find($tour_id);
            $userName = User::find($user_id);
            return view('Tours.Cart.confirmation')
                ->with(compact('tourName', 'userName', 'tour_date', 'tour_time'));
        }
        else{
            return redirect::to(url()->previous())->with('error', 'Bkash Transaction ID first');
        }
    }


    public function invoice(request $request)
    {
        if(Session::has('user_id')){
            $user_id = Session::get('user_id');
            $user = Users::find($user_id);
            $invoice_id = Session::get('invoice_id');
            $invoice = TourBooking::find($invoice_id);
            $tourtitle = DB::table('bookings')
                ->leftJoin('tour', 'tour.id', '=', 'bookings.tour_id')
                ->where('bookings.id', '=', $invoice_id)
                ->select('tour.tour_title')
                ->first();
            //dd($tourtitle);
            return view('Tours.Cart.bookinginvoice')
                ->with(compact('user', 'invoice', 'tourtitle'));
        }

        return redirect::to('/');
    }

    public function invoiceDetails(request $request)
    {
        $invoice_id = $request->input('invoice_id');
        Session::put('invoice_id', $invoice_id);
        //dd($invoice_id);
        return redirect::to('/tours/bookings/booking-details-invoice/');
    }

    public function generateInvoice()
    {
        if(Session::has('user_id')){
            $user_id = Session::get('user_id');
            $user = Users::find($user_id);
            $invoice_id = Session::get('invoice_id');
            $invoice = TourBooking::find($invoice_id);
            $tourtitle = DB::table('bookings')
                ->leftJoin('tour', 'tour.id', '=', 'bookings.tour_id')
                ->where('bookings.id', '=', $invoice_id)
                ->select('tour.tour_title')
                ->first();
            //dd($tourtitle);
            //loading the view to download as PDF
            $pdf = PDF::loadView('Tours.Cart.bookinginvoice', compact('user', 'invoice', 'tourtitle'));
            return $pdf->download('invoicee.pdf');
        }
        return redirect::to('/');
    }

    public function generateInvoicePDF()
    {
        return redirect::to('/generate-invoice-pdf/');
    }
}
