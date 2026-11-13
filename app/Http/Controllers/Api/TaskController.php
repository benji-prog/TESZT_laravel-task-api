<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::latest()->get(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:low,medium,high',
        ]);

        // Létrehozzuk a feladatot a validált adatokkal
        $task = Task::create($validated);
        
        return response()->json($task, 201);
    }


    public function update(Request $request, Task $task)
    {
        // Ez a metódus kezeli a státuszváltást (kész / folyamatban)
        $task->update($request->only(['is_completed']));
        return response()->json($task, 200);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted'], 200);
    }
}
