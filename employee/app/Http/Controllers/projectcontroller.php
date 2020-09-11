<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\project;
use users;
use App\addproject;
use App\assign_project;



class projectcontroller extends Controller
{
    
    public function getdata(Request $request)
    {
        $projects = new project;
        $projects->prct_name = $request->prct_name;
        $projects->Description = $request->Description;
        $projects->sub_date = $request->sub_date;
        $projects->save();
        return redirect('assignproject');  
       
    }

    public function show()
    {
        return view("assignproject");
        
        
    }

    public function adddata(Request $request)
    {

       // $data->user_id=Auth::user()->id;

        $addprojects = new addproject;
        $addprojects->user_id = $request->user_id;
        $addprojects->prctname = $request->prctname;
        $addprojects->psd = $request->psd;
        $addprojects->save();
        return redirect('addproject');
    }

    public function adddisplay()
    {
        return view('addproject');
    }


   // public function prctstatusview()
   // {
    //    $data = DB::table('assign_project')
    //    ->join('project', 'project.prct_name', '=', 'assign_project.prctname')
     //   ->join('users', 'users.id', '=', 'assign_project.user_id')
    //    ->select('assign_project.*', 'project.sub_date','project.Description', 'users.name')
     //   ->get();
     //   return view('prctstatus',compact('data'));
    //}
}
