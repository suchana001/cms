<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CustomerlistController extends Controller
{
    public function customerlist(Request $request){

        $list=User::where('role','customer')->get();

return view('Backend.pages.Customer.list', compact('list'));
    }
    public function deletecustomerlist($user_id){
        User::find($user_id)->delete();
        return redirect()->back()->with('message','contact deleted successfully.');
    }
}
