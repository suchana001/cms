<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Cargo;
use App\Models\Dispatch;
use Illuminate\Http\Request;

class BookingDispatchController extends Controller
{
    public function bookingDispatch($id){
        $typ= Cargo::all();
        $booking = Booking::find($id);
        return view('Backend.pages.booking.bookingDispatch',compact('typ','booking'));
    }

    public function detailsdispatch(Request $request,$id){
        $booking = Booking::find($id);
        // $cargo = Cargo::where('id',$request->cargo)->pluck('vehicle_capacity');
        // $oneCargoCapacity = $cargo[0];
        // $bookingInThisCargo = Dispatch::where('cargo_id',$request->cargo)->with('booking','cargo')->get();
        // // dd($bookingInThisCargo);
        $checkIfItIsOncargoOrnot = Dispatch::where('booking_id',$booking->id)
                                        ->first();
        $checkIfTheCargoLimitisOkay = Dispatch::where('cargo_id',$request->cargo)->count();
        
        // if($checkIfItIsOncargoOrnot == null && $checkIfTheCargoLimitisOkay < 5){
        if($checkIfTheCargoLimitisOkay < 5){
            Dispatch::create ([
                //database column name => input field name
                'booking_id'=>$booking->id ,
                'cargo_id'=>$request->cargo,
                
             ]);
             $booking->update([
                'status'=>'dispatched'
             ]);
             return redirect()->route('admin.booking')->with('success','Booking dispatched successfully');
        }
        else
        {
            return redirect()->route('admin.booking')->with('error','Cargo is full');
        }
        
        }

        public function details(){
            $dispatch = Dispatch::with('booking','cargo')->get();
            return view('Backend.pages.dispatch.list',compact('dispatch'));
        }

}
