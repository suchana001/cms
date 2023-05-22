<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReportController extends Controller
{
    public function report()
    {
        return view('Backend.pages.report.list');
    }



    public function reportSearch(Request $request)
    {
//        $request->validate([
//            'from_date'    => 'required|date',
//            'to_date'      => 'required|date|after:from_date',
//        ]);

        $request->validate([
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);




       $from=$request->from_date;
       $to=$request->to_date;


//       $status=$request->status;

        $book=Booking::whereBetween('created_at', [$from, $to])->get();
        return view('Backend.pages.report.list',compact('book'));

    }

}
