<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller{ 
 
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', ['tasks' => $tasks]);
    }


    public function create()
    {
        return redirect('tasks-new');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $task = Task::create($validatedData);
        return redirect('/tasks')->with('success', 'Task created successfully');
    }

    // // Show the specified task

    // // Show the form for editing the specified task
    // public function edit(Task $task)
    // {
    //     return view('tasks.edit', ['task' => $task]);
    // }

    // // Update the specified task in the database
    // public function update(Request $request, Task $task)
    // {
    //     // Validate the form data
    //     $validatedData = $request->validate([
    //         'title' => 'required|max:255',
    //         'description' => 'required',
    //         // Add any other validation rules you need
    //     ]);

    //     // Update the task using the validated data
    //     $task->update($validatedData);

    //     // Optionally, you can redirect the user to a different page
    //     return redirect('/tasks')->with('success', 'Task updated successfully');
    // }

    // // Remove the specified task from the database
    // public function destroy(Task $task)
    // {
    //     $task->delete();

    //     // Optionally, you can redirect the user to a different page
    //     return redirect('/tasks')->with('success', 'Task deleted successfully');
    // }
    // }
}

