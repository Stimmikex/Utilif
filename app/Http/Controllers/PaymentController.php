<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;

class PaymentController extends Controller
{
    public function store(Request $request){
        $stripe = Stripe::make('sk_test_O5*****************************', '2020-03-02'); // used Stripe secret key, not Publishable key
        $charge = $stripe->charges()->create([
            'amount'   => 200,
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'receipt_email' => "admin@email.com",
        ]);

        return "Payment Created";
    }
}
