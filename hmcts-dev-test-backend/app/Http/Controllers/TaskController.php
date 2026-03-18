<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Response;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Task::paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        return Task::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->fill($request->validated())->save();

        return $task->refresh();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        if($task->delete()) {
            return response(null, Response::HTTP_NO_CONTENT);
        }

        return response(null, Response::HTTP_CONFLICT);
    }
}
