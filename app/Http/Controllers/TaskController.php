<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $message = $tasks->isEmpty() ? "No tasks available." : "List of tasks:";
        return view('tasks.index', compact('tasks', 'message'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Task::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('tasks.index')->with('success', 'Task added successfully.');
    }

    public function show($id)
    {
        $task = Task::find($id);

        if ($task) {
            return view('tasks.show', compact('task'));
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not found.');
        }
    }
}
