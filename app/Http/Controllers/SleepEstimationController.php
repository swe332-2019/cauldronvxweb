<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SleepEstimation ; 
use DB; 


class SleepEstimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('sleep_estimation.index'); 
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
        $sleepestimation = new SleepEstimation ; 
        $sleepestimation->milestraveled = $request->input('milestraveled');
        $sleepestimation->workhours = $request -> input ('workhours');
        $sleepestimation->exercisehours = $request -> input('exercisehours');
        $sleepestimation->age = $request->input('age');
        $sleepestimation->calories = $request->input('calories');
       
       
        $sleepestimation->save(); 
        return redirect('/sleep_estimation/show')->with('success', 'Your Data is saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $sleepestimation = SleepEstimation::all()->toArray(); 

       
        return view('sleep_estimation.show' , compact('sleepestimation')) ; 


    
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