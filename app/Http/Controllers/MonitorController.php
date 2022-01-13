<?php

namespace App\Http\Controllers;

use App\Models\Monitor;
use Illuminate\Http\Request;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $time = date("Y-m-d H:i:s", strtotime('+5 hours +30 minutes'));
        $timestamp = strtotime($time);

        $day = date('D', $timestamp);
        $date = date("d-m-y", strtotime($time));

        
        if(Monitor::where('regular_date', $date )->count() == 0){
            $day_monitor = new Monitor();
            $day_monitor->regular_date = $date;
            $day_monitor->save();
        }else{
            $day_monitor = Monitor::where('regular_date', $date )->first();
        }

        
        $previous_date = date("d-m-y", strtotime('-1 day', strtotime($time)));
        $previous_day = date('D', strtotime('-1 day', strtotime($time)));

        if(Monitor::where('regular_date', $previous_date )->count() == 0){
            $previous_day_monitor = new Monitor();
            $previous_day_monitor->regular_date = $previous_date;
            $previous_day_monitor->save();
        }else{
            $previous_day_monitor = Monitor::where('regular_date', $previous_date )->first();
        }

        $date_before_previous = date("d-m-y", strtotime('-2 day', strtotime($time)));
        $day_before_previous = date('D', strtotime('-3 day', strtotime($time)));

        $day_before_previous_monitor = Monitor::where('regular_date', $previous_date )->first();


        return view('posts.monitor',compact('day','date','previous_date','previous_day','date_before_previous','day_before_previous','day_monitor','previous_day_monitor','day_before_previous_monitor'));
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
        //
        $request->validate([
            'regular_date' => 'required',
        ]);
        
        if(Monitor::where('regular_date', $request->get('regular_date'))->count() == 0){
            Monitor::create($request->all());
        }else{
            $monitor = Monitor::where('regular_date', $request->get('regular_date'))->first();
            $monitor->update($request->all());
        }
     
        return Response(['status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function show(Monitor $monitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Monitor $monitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monitor $monitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monitor  $monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monitor $monitor)
    {
        //
    }
}
