<?php

namespace App\Http\Controllers;

use  App\addproject;
use DB;
use Auth;
use Illuminate\Http\Request;

class empcontroller extends Controller
{
    public function getalldata()
    {
        //$empdatas = employee::all();
        $empdatas = DB::select('select * from users');
        return view('empview',['empdatas'=>$empdatas]);
        //return view('empview', compact('empdatas'));
    }


    public function show($id){
        $empdatas = DB::select('select * from users where id = ?',[$id]);
        return view('edit',['empdatas'=>$empdatas]);
    }


    public function updatefunction(Request $request,$id) {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $dept = $request->input('dep');
        $qualification = $request->input('qualification');
        $email = $request->input('email');
        $phone = $request->input('phone');
        
        DB::update('update users set name = ?, gender = ?, dob = ?, dep = ?,  qualification = ?, email = ?, phone = ? where id = ?',
        [$name,$gender,$dob,$dept,$qualification,$email,$phone,$id]);
        return redirect('empview');
    
        }

    public function deletefunction($id)   
    {
        DB::delete('Delete from users where id = ?' ,[$id]);
        return redirect('empview');
         
    } 


    public function empprofile(Request $request)
    {
        $user = Auth::user();
        return view('profile')->with(['user' => $user]);
        
    }

    public function emprctstatus()
    {
        $data =  DB::table('assign_project')
        ->join('project', 'project.prct_name', '=', 'assign_project.prctname')
        ->select('assign_project.*','project.Description')
        ->where('status', NULL)->get();
        return view('empstatus',compact ('data'));
    }

    public function update(Request $request, $user_id)
    {


        $sta= addproject::find($user_id);
     
       if ($request->status==1) { 
         $sta->update(['status'=>1]);
         return redirect('empstatus')->with(['success'=>'Project completed ']);
       }
      $sta->update(['status'=>0]);
      return redirect('empstatus')->with(['success'=>'Project is pending']);
    

    }
}
