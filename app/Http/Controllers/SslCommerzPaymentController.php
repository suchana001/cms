<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Parcel;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SslCommerzPaymentController extends Controller
{



    public function index(Request $request)
    {
        //  dd($request->all());
        $parcelprice = Parcel::where('id', $request->percel_type)->pluck('unit_price');
        // dd($parcelprice);
        // dd($parcelprice[0]);
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $parcelprice[0] * $request->quantity; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->sender_name;
        $post_data['cus_email'] = $request->sender_email;
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = auth()->user()->id;
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.

        $parcelprice = Parcel::where('id', $request->percel_type)->pluck('unit_price');
        // dd($parcelprice);
        $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_mobile' => 'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
            'sender_branch' => 'required',
            'sender_address' => 'required',
            'sender_city' => 'required',
            'quantity' => 'required|numeric|gt:0|lt:5',
            'receiver_name' => 'required',
            'receiver_email' => 'required',
            'receiver_mobile' => 'required',
            'receiver_branch' => 'required',
            'receiver_address' => 'required',
            'receiver_city' => 'required',
        ]);
        booking::create([
            'user_id' => auth()->user()->id,
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_mobile' => $request->sender_mobile,
            'sender_branch' => $request->sender_branch,
            'sender_address' => $request->sender_address,
            'sender_city' => $request->sender_city,
            'enter_amount' => $parcelprice[0] * $request->quantity,
            'receiver_name' => $request->receiver_name,
            'receiver_email' => $request->receiver_email,
            'receiver_mobile' => $request->receiver_mobile,
            'receiver_branch' => $request->receiver_branch,
            'receiver_address' => $request->receiver_address,
            'receiver_city' => $request->receiver_city,
            'percel_type' => $request->percel_type,
            'quantity' => $request->quantity,
            'tran_id' => $post_data['tran_id'],
        ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }



    public function success(Request $request)
    {
        // dd(auth()->user());
        $user = User::find($request['value_a']);
        Auth::login($user, true);
        // notify()->success('Transaction is successfull');

        // return redirect()->route('webpage');

        // echo "Transaction is Successful";
        // $tran_id = $request->input('tran_id');
        // $amount = $request->input('amount');
        // $currency = $request->input('currency');
        // $sslc = new SslCommerzNotification();
        #Check order status in order tabel against the transaction id or order id.
        // dd($request->all());
        $tran_id = $request->input('tran_id');
        $booking = Booking::where('tran_id', $tran_id)->first();
        $booking->update([
            'status' => 'paid',
            'payment_status' => 'paid'
        ]);
        notify()->success('success', 'payment done successfully');
        return back();
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $booking = Booking::where('tran_id', $tran_id)->first();
        $booking->update([
            'status' => 'failed',
            'payment_status' => 'failed'
        ]);
        notify()->success('Transaction is failed');

        return redirect()->route('webpage');
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $booking = Booking::where('tran_id', $tran_id)->first();
        $booking->update([
            'status' => 'failed',
            'payment_status' => 'failed'
        ]);

        notify()->success('Transaction is cancelled');

        return redirect()->route('webpage');
    }
}
