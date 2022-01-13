<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time = date("Y-m-d H:i:s", strtotime('+5 hours +30 minutes'));
        $timestamp = strtotime($time);

        $day = date('D', $timestamp);
        $date = date("d-m-y", strtotime($time));

        
        $previous_date = date("d-m-y", strtotime('-1 day', strtotime($time)));
        $previous_day = date('D', strtotime('-1 day', strtotime($time)));

        $subjects = Product::where('user_id',Auth::user()->id)->distinct()->get();
        $tasks = Task::where('user_id',Auth::user()->id)->where('status',0)->where('task_date',$date)->get();
        $pre_tasks = Task::where('user_id',Auth::user()->id)->where('task_date',$previous_date)->get();

        return view('posts.todo',compact('day','date','previous_date','previous_day','subjects','tasks','pre_tasks'));
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
            'task_name' => 'required',
            'task_date' => 'required',
        ]);
    
        Task::create($request->all());
     
        return redirect()->route('todo.index')->with('success','task created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }

    
    public function updateStatus(Request $request)
    {
        //
        $task = Task::find($request->id);
        $task->status = 1;
        $task->save();
     
        return redirect()->route('todo.index')->with('success','task created successfully');
    }
}
