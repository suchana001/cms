<?php
namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Parcel;
use App\Models\Booking;
use App\Models\Branch;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function web(){
        $percelTypes = Parcel::all();
        $branch = Branch::all();
     
        if(auth()->user()){

            $list = Booking::where('user_id',auth()->user()->id)->get();
            return view('Frontend.pages.home',compact('list','percelTypes','branch'));
        }
        else{
            return view('Frontend.pages.home',compact('percelTypes','branch'));
        }
    }
    public function registration(Request $request)
    {

         $request->validate([
            'customer_name'=>'required',
           'customer_email'=>'required|unique:users,email',
           'customer_phone'=>'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
           'password'=>'customer_password',

         ]);
       User::create([
           'name'=>$request->customer_name,
           'email'=>$request->customer_email,
           'mobile'=>$request->customer_phone,
           'password'=> bcrypt($request->customer_password),
            'role'=>'customer'
        ]);
        notify()->success('registration successfull');


        return redirect()->back();
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
      notify()->success('Login success');
            return redirect()->back();
        }
        notify()->error('invalid password');
        return redirect()->back();
    }
    public function logout()
    {
        auth()->logout();
        notify()->success('logout success');
        return redirect()->back();
    }
    public function profile()
    {
        return view('Frontend.pages.profile');
    }

    public function updateProfile(Request $request){
            // dd($request->all());
       //validation
       $request->validate([
           'name'=>'required',
           'email'=>'required',
           'mobile'=>'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
    ]);

        $user=User::find(auth()->user()->id);
        $user->update([
            'name'=>$request->name,
           'email'=>$request->email,
           'mobile'=>$request->mobile,
           'password'=> bcrypt($request->password),
           
           
        ]);

        notify()->success('User profile updated.');
        return redirect()->route('webpage');
    }



}
