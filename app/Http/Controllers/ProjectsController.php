<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $user = $request->user();
        $withManager = $request->query('with_manager');

        if($user->role == 'manager')
        {
            $projects = Project::findMyProjects($user, $withManager);
        } else if($user->role == 'admin')
        {

            $projects = Project::findAll($withManager);
        }


        return $projects;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        
        $attributes = $request->validate([
            'name' => 'required|unique:projects',
            'description' => 'required'

        ]);

        
        $project = new Project;
        $project->name = $attributes['name'];
        $project->description = $attributes['description'];
        $project->manager_id = $request->user()->id;

        try{

            $project->save();
            return response()->json($project, 200);
        } catch(Exception $err){
            return response()->json($err, $err->getStatusCode());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return $project;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function tasks(Project $project)
    {
        return $project->tasks;
    }

    public function storeTask(Request $request, Project $project)
    {

       $attributes = $request->validate([
        'description' => ['required']
       ]);
       return  $project->storeTask($request->user(), $attributes);
    }

    public function manager(Request $request, Project $project)
    {
        return $project->manager;
    }

    public function updateManager(Request $request, Project $project)
    {
        $attributes = $request->validate([
            'manager_id' => 'required'
        ]);

        $project->manager_id = $attributes['manager_id'];

        $project->save();

        return $project;
    }
}
