<?php

namespace App\Http\Controllers;

use Paystack;
use Unicodeveloper\Paystack\Facades\Paystack as FacadesPaystack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class fund extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.fund');
    }
    public function redirectToGateway()
    {
        try {
            return Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = FacadesPaystack::getPaymentData();
        dd($paymentDetails);
        if ($paymentDetails['status'] == true) {
            // $rate = DB::table('currency_rates')->first();
            $newRate = ($paymentDetails['data']['amount'] / 100);
            DB::table('funds')
                ->insert([
                    'transaction_id' => $paymentDetails['data']['reference'],
                    'userId' => auth()->user()->userID,
                    'name' => auth()->user()->username,
                    'email' => $paymentDetails['data']['customer']['email'],
                    'amountng' => $paymentDetails[' data']['amount'],
                    'amount' => round($newRate, 2),
                    'status' => 'success',
                ]);
            return back()->with('toast_success', 'Transaction Successful !!');
        } else {
            return back()->with('toast_error', 'Failed transaction');
        }

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
