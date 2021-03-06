<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use App\Models\Product;
use App\Models\exam;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use Auth;

class RoutineController extends Controller
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

        
        $next_date = date("d-m-y", strtotime('+1 day', strtotime($time)));
        $next_day = date('D', strtotime('+1 day', strtotime($time)));
        

        $subjects = Product::where('user_id',Auth::user()->id)->distinct()->get(['id'])->pluck('id');
        $classes = Routine::Where('weekday', 'like', '%' . $day . '%')->whereIn('f_subject_id',$subjects)->with('subject')->orderby('slot')->get();
        $next_classes = Routine::Where('weekday', 'like', '%' . $next_day . '%')->whereIn('f_subject_id',$subjects)->with('subject')->orderby('slot')->get();
        $exams = exam::Where('exam_date', '>=',  $time )->whereIn('f_subject_id',$subjects)->with('subject')->orderby('exam_date')->get();
        return view('posts.routine',compact('classes','next_classes','day','date','next_date','next_day','exams'));
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
            'f_subject_id' => 'required',
            'weekday' => 'required',
            'slot' => 'required',
        ]);
    
        Routine::create($request->all());
     
        return Response(['status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function show(Routine $routine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function edit(Routine $routine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Routine $routine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function destroy( $routine)
    {
        //
        $routine =  Routine::find($routine);
        $routine->delete();
    
        return redirect()->back();
    }
}
