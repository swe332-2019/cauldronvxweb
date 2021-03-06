<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dailyreminderModel; 
use App\User;
use DB; 

class dailyReminderController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('daily_rem.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $dailyrem = new dailyreminderModel ; 
        $dailyrem->weekday = $request->input('weekday');
        $dailyrem->yourevent = $request -> input ('yourevent');
        $dailyrem->note = $request -> input('note');
        $dailyrem->user_id = auth()->user()->id;
        $dailyrem->save(); 

        return redirect('/daily_rem/show')->with('success', 'Your Data is saved');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
       

        $user_id = auth()->user()->id ; 
        $user = User::find($user_id); 
        return view('daily_rem.show')->with ('dailyrem' , $user->dailyrem) ;



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
        //
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
}
