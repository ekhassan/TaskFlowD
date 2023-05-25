<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('index', compact('tasks'));
    }
    // public function create()
    // {
    //  return view('create');   
    // }
    public function createtask(Request $request)
    {
        $tasks = new Task;
        $tasks->id = $request->id;
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->status = $request->status;
        $tasks->deadline = $request->deadline;
        $tasks->save();

        return redirect('/');
    }
    public function edit($id)
    {
        $tasks = Task::find($id);
        return view('update')->with(['tasks'=>$tasks]);
    }
    public function update(Request $request, $id)
    {
        $tasks = Task::find($id);
        $tasks->id = $request->id;
        $tasks->name = $request->name;
        $tasks->description = $request->description;
        $tasks->status = $request->status;
        $tasks->deadline = $request->deadline;
        $tasks->save();

        return redirect('/');
    }
    public function delete($id)
    {
        Task::destroy($id);
        return redirect('/')->with('status', 'Task '.$id.' deleted Successfully!');


    }
}
