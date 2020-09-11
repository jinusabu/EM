<?php

namespace App\Http\Controllers;
use App\leave;  
use Auth;
use DB;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('applyleave');

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    $user= Auth::user()->id; 
       $data = new leave;
       $data->user_id=Auth::user()->id;
       $data->reason = $request->reason;
       $data->start_date = $request->start_date;;
       $data->end_date = $request->end_date;
       $data->btw_date = $request->btw_date; 
       $data->save(); 
       return redirect('applyleave');

    }  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //  $leavedetails = DB::select('select * from leaves');
        // $leavedetails = leave::where('status', NULL)->get();
        // return view('empleave',['leavedetails'=>$leavedetails]);
        //return view('empleave',compact('leavedetails'));




        $leavedetails = DB::table('leaves')
        ->join('users', 'users.id', '=', 'leaves.user_id')
        ->where('status', NULL)->get();
        return view('empleave',compact('leavedetails'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->all();
       $data= leave::find($id);

       if ($request->status==1) { 
         $data->update(['status'=>1]);
         return redirect('empleave')->with(['success'=>'Leave Application Approved']);
       }
       $data->update(['status'=>0]);
       return redirect('empleave')->with(['success'=>'Leave Application Rejected']);

    }

   
 






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function history()
    {
        $leavedata =  DB::table('leaves')
        ->get();
        return view('leavehistory',compact ('leavedata'));
    }
}
