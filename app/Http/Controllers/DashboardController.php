<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard(){
         $totalBooking=Booking::all()->count();
         $totalSuccessfullTransaction = Booking::where('payment_status','paid')->sum('enter_amount');
        return view('Backend.pages.dashboard', compact('totalBooking','totalSuccessfullTransaction'));
    }
}
