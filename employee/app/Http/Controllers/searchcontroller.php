<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use DB;
use  App\addproject;
use  App\User;


class searchcontroller extends Controller
{
    public function index()
    {
    return view('searchemp');
    }
    public function search(Request $request)
    {

        $search = $request->search;

        $data = DB::table('assign_project')
        ->join('users', 'users.id', '=', 'assign_project.user_id')
        ->join('project', 'project.prct_name', '=', 'assign_project.prctname')
        ->where('prctname','LIKE','%'.$search.'%')
        ->get();

        //$data = addproject::where('prctname','LIKE','%'.$search.'%')
        //->get();
    
        return view('searchemp', compact('data'));
        
    }

}
    





