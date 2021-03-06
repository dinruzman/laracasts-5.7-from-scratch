<?php

namespace App\Http\Controllers;
use App\Project;
use File;
use Auth;
use illuminate\Filesystem\Filesystem;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){

        $projects = Project::where('owner_id', auth()->id())->get();
        //dd($projects);
        return view('/projects.index', compact('projects'));
    }

    public function create(){
        return view('/projects.create');
    }

    public function store(){
        request()->validate([
            'title'=>['required','min:3'],
            'description'=>['required','min:3']
        ]);

        Project::create([
            'owner_id' => Auth::id(),
            'title'=>request('title'),
            'description'=>request('description'),
        ]);

        return redirect('/projects');
    }

    public function edit(Project $project){
        return view('/projects.edit',compact('project'));
    }

    public function update(Project $project){
        $project->title = request('title');
        $project->description = request('description');

        $project->update();

        return redirect('/projects');
    }

    // public function show(Project $project){
    //     if($project->owner_id !== auth()->id()){
    //         abort(403);
    //     }

    //     return view('/projects.show',compact('project'));
    // }

    public function show(Filesystem $file){
        dd($file);
        // if($project->owner_id !== auth()->id()){
        //     abort(403);
        // }

        // return view('/projects.show',compact('project'));
    }


    public function destroy(Project $project){
        $project->delete();

        return redirect('/projects');
    }
}
