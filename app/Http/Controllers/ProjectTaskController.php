<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    //public function update(Task $task){
    //     // if ( request()->has('completed')){
    //     //     $task->complete();
    //     // } 
    //     // else{
    //     //     $task->incomplete();
    //     // }

    //     // request() -> has('completed') ? $task->complete() : $task->incomplete();
    //     // $task->complete(request()->has('completed'));
        
    //     // $task->update([
    //     //     'completed' => request()->has('completed')
    //     // ]); 

    //     $method = request()->has('completed') ? 'complete' : 'incomplete';
 
    //     $task-> $method();
    //     return back();
    // }

    public function store(Project $project){
        $attributes = request()->validate(['description' => 'required']);
        $project->addTask($attributes);

        // $project->addTask(request('description'));

        // Task::create([
        //     'project_id' => $project->id,
        //     'description' =>request('description')
        // ]);
        return back();
    }
}
