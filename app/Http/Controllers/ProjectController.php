<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects= ProjectResource::collection(Project::all());

        return inertia('Projects/Index',compact('projects'));
    }
    public function create2(){
        $projects= Project::all();
        return response()->json($projects);
    }

    public function create(){
        return inertia('Projects/Create');
    }
    public function store (StoreProjectRequest $request){
        Project::create($request->validated());
        return redirect()->route('projects.index')->with('message','Project created succefully');
    }

    //edit
    public function edit(Project $project){

        return inertia('Projects/Edit',compact('project'));
    }

    //update
    public function update(Project $project, StoreProjectRequest $request){
        $project->update($request->validated());
        return redirect()->route('projects.index')->with('message','Project updated succefully');

    }


    public function destroy (Project $project){
        $project->delete();
        return redirect()->route('projects.index')->with('message','Project deleted succefully');
    }



}
