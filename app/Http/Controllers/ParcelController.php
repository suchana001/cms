<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcel;

class ParcelController extends Controller
{
    public function type(){
        $typ = Parcel::all();
        return view('Backend.pages.parcel.list',compact('typ'));

    }
    public function from ()
    {
        $typ = Parcel::all();
        return view('Backend.pages.parcel.from',compact('typ'));

    }
    public function stores(Request $request)
    {
        $request->validate([
            'type'=>'required',
            'unit_price'=>'required|numeric|gt:1',

        ]);  
          // dd($request->all());
         Parcel::create ([
            //database column name => input field name
                'parcel_type'=>$request->type,
                'unit_price'=>$request->unit_price
         ]);
         return redirect()->route('parcel.type');
    }

    // PARCEL Delete
    public function deleteParcel($parcel_id){
        Parcel::find($parcel_id)->delete();
        return redirect()->back()->with('message','Parcel deleted successfully.');
    }


    public function viewParcel($parcel_id)
    {
      $parcel=Parcel::find($parcel_id);
      return view('Backend.pages.parcel.view',compact('parcel'));
    }
    public function edit($parcel_id)
    {
        $parcel=Parcel::find($parcel_id);
    // dd($parcel);
        return view('Backend.pages.parcel.edit',compact('parcel'));
    }
    public function update(Request $request,$parcel_id){
        $parcel=Parcel::find($parcel_id);

        $request->validate([
            'type'=>'required',
            'unit_price'=>'required|numeric|gt:1',

        ]); 

        $parcel->update ([
            //database column name => input field name
            'parcel_type'=> $request->type,
            'unit_price'=> $request->unit_price
         ]);
         return redirect()->route('parcel.type')->with('message','Update success.');
}
}