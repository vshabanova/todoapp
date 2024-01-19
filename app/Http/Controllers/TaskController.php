<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller{ 
 
    public function index()
    {
        $tasks = Task::all(); 
        return view('tasks', compact('tasks'));
    }
    public function sortTasks()
    {
        return Task::all()->sortBy(function($task) {
            // Sort by completed status (in ascending order), deadline (in ascending order), and created_at (in descending order)
            return [
                'completed' => $task->completed,
                'deadline' => $task->deadline ?? PHP_INT_MAX, // Tasks without deadline go to the end
                'created_at' => $task->created_at->timestamp,
            ];
        });
    }

    public function create()
    {
        return view('tasks-new');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'deadline'=>'nullable',
            'completed'=>'boolean'
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $task = Task::create($validatedData);
        
        return redirect('/tasks')->with('success', 'Task created successfully');
    }
   

    // Show the form for editing the specified task
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }


    //Update the specified task in the database
    public function update(Request $request, Task $task)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'deadline' => 'nullable',
            'completed' => 'boolean|nullable',
        ]);
        
        $task->update($validatedData);
        return redirect('/tasks')->with('success', 'Task updated successfully');
        
    }
    public function complete(Task $task)
    {
        $task->update(['completed' => !$task->completed]);

        return response()->json(['success' => true]);
    }

    // Remove the specified task from the database
    public function destroy(Task $task)
    {
        $task->delete();

        // Optionally, you can redirect the user to a different page
        return redirect('/tasks')->with('success', 'Task deleted successfully');
    }
    
}

