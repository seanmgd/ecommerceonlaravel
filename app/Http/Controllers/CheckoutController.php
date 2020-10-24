<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout() {
        return view('checkout.index');
    }

    public function success() {
        return view('checkout.success');
    }
}
