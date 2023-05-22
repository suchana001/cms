<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){

        // $request->validate([
        //     'name'=>'name',
        //     'email'=>'required|email',
        //     'message'=>'required',

        // ]);

Contact::create ([
    //database column name => input field name
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message,
        
 ]);
 notify()->success('Message Send Successfully');


        return redirect()->back();
    }


    public function see(){
        $contactdetails=Contact::all();
        return view('Backend.pages.contact.contactdetails',compact('contactdetails'));
    }

    public function deletecontact($contact_id){
        Contact::find($contact_id)->delete();
        return redirect()->back()->with('message','contact deleted successfully.');
    }
   
}
