<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
    
    public function index()
    {
        // $cats=Branch::all();//select * from categories;
//        dd($cats);
$cats=Branch::paginate(5);
        return view('Backend.pages.branch.index',compact('cats'));
    }

    
    public function create()
    {
        $cats = Branch::all();
        return view('Backend.pages.branch.create',compact('cats'));
    }

    
    public function store(Request $request)
    {
         //        dd($request->all());

         $request->validate([
                'Brance_name'=>'required',
                'Branch_phone'=>'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
                'Brance_address'=>'required',
                'Branch_status'=>'required',
        ]);
         Branch::create ([
            //database column name => input field name
                'Brance_name'=>$request->Brance_name ,
                'Branch_phone'=>$request->Branch_phone,
                'Branch_address'=>$request->Brance_address,
                'Branch_status'=>$request->Branch_status,
         ]);
         return redirect()->route('branch.index');
    }
    public function deletebranch($branch_id){
        branch::find($branch_id)->delete();
        return redirect()->back()->with('message','branch deleted successfully.');
    }
    public function viewbranch($branch_id)
    {
      $branch=branch::find($branch_id);
      return view('Backend.pages.branch.view',compact('branch'));
    }
    public function edit($branch_id)
    {
        $branch=branch::find($branch_id);
        // dd($branch);
        return view('Backend.pages.branch.edit',compact('branch'));
    }
    public function update(Request $request,$branch_id){
         
        $request->validate([
            'Brance_name'=>'required',
            'Branch_phone'=>'required|regex:/^\\+?[1-9][0-9]{7,14}$/',
            'Brance_address'=>'required',
            'Branch_status'=>'required',
    ]);
        $branch=branch::find($branch_id);
        $branch->update ([
            //database column name => input field name
                'Brance_name'=>$request->Brance_name ,
                'Branch_phone'=>$request->Branch_phone,
                'Branch_address'=>$request->Brance_address,
                'Branch_status'=>$request->Branch_status,
         ]);
         return redirect()->route('branch.index')->with('message','Update success.');


    }


}
