<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingAndPaymentController extends Controller
{
    public function carts()
    {
        return view('Tours.Cart.cart');
    }

    public function payments()
    {
        return view('Tours.Cart.payments');
    }

    public function confirmation()
    {
        return view('Tours.Cart.confirmation');
    }

    public function invoice()
    {
        return view('Tours.Cart.invoice');
    }
}
