<?php

namespace App\Http\Controllers;

use App\Models\Parcel;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book (Request $request)
    {
        // dd($request->percel_type);
        $parcelprice = Parcel::where('id',$request->percel_type)->pluck('unit_price');
        // dd($parcelprice[0]);

       booking::create([
           'user_id'=>auth()->user()->id,
           'sender_name'=>$request->sender_name,
           'sender_email'=>$request->sender_email, 
           'sender_mobile'=>$request->sender_mobile,
           'sender_branch'=>$request->sender_branch,
           'sender_address'=>$request->sender_address,
           'sender_city'=>$request->sender_city,
           'enter_amount'=>$parcelprice[0] * $request->quantity,
           'receiver_name'=>$request->receiver_name,
           'receiver_email'=>$request->receiver_email, 
           'receiver_mobile'=>$request->receiver_mobile,
           'receiver_branch'=>$request->receiver_branch,
           'receiver_address'=>$request->receiver_address,
           'receiver_city'=>$request->receiver_city,
           'percel_type'=>$request->percel_type,
           'quantity'=>$request->quantity,     
        ]);
        notify()->success('Booking successfull');


        return redirect()->back();
    } 
    public function bookinglist(){
        $bookingList = Booking::orderBy('id','desc')->get();
        return view('Backend.pages.booking.list',compact('bookingList'));
    }

    public function deletebooking($booking_id){
        $booking = booking::find($booking_id);
        $booking->dispatchs()->delete();

        $booking->delete();
        return redirect()->back()->with('message','booking deleted successfully.');
    }
    public function viewbooking($booking_id)
    {
      $booking=booking::find($booking_id);
      return view('Backend.pages.booking.view',compact('booking'));
    }



    public function edit($booking_id){
        $deliver=Booking::find($booking_id);
        
        $deliver->update([
             'status'=>'delivered'
        ]);
        return back();

    }
    // public function edit($booking_id)
    // {
    //     $booking=booking::find($booking_id);
    //     // dd($branch);
    //     return view('Backend.pages.booking.edit',compact('booking'));
    // }
    // public function update(Request $request,$booking_id){
    //     $booking=booking::find($booking_id);
    //     $booking->update ([
    //         //database column name => input field name
    //         'sender_name'=>$request->sender_name,
    //         'sender_email'=>$request->sender_email, 
    //         'sender_mobile'=>$request->sender_mobile,
    //         'sender_branch'=>$request->sender_branch,
    //         'sender_address'=>$request->sender_address,
    //         'sender_city'=>$request->sender_city,
    //         'enter_amount'=>$request->enter_amount,
    //         'receiver_name'=>$request->receiver_name,
    //         'receiver_email'=>$request->receiver_email, 
    //         'receiver_mobile'=>$request->receiver_mobile,
    //         'receiver_branch'=>$request->receiver_branch,
    //         'receiver_address'=>$request->receiver_address,
    //         'receiver_city'=>$request->receiver_city,
    //         'percel_type'=>$request->percel_type,
    //        'quantity'=>$request->quantity,
    //      ]);
    //      return redirect()->route('booking.index')->with('message','Update success.');


    // }
     

    

}
