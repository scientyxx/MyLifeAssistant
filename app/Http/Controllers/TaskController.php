<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoretaskRequest;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
{
    $tasks = Task::all();
    return view('task', compact('tasks'));
}


    public function store(StoretaskRequest $request)
    {
        $task = new Task;
        $task->task_name = $request->input('task_name');
        $task->status = false;
        $task->save();

        return redirect()->back();
    }

    // Metode lainnya ...
}




