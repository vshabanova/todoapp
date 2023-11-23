<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{ 
 public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'description' => 'required|max:255',
        ]);

        // Create a new task using the validated data
        $task = Task::create($validatedData);

        // Optionally, you can redirect the user to a different page
        return redirect('/tasks')->with('success', 'Task created successfully');
    }
}
