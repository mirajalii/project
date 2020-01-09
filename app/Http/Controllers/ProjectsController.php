<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        
        $projects = Project::all();
        
        // return $projects;

        return view('projects.index',compact('projects'));
    }

    public function create()
    {

       return view('projects.create');

    }
    
    public function show($id)
    {
        $project = Project::findOrfail($id);

        return view('projects.show',compact('project'));
    }

    public function edit($id)
    {
        
        $project = Project::findOrfail($id);

        return view('projects.edit',compact('project'));
    }

    public function update($id)
    {

        $project = Project::findOrfail($id);

        $project->title = request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function destroy($id)
    {

        Project::findOrfail($id)->delete();
        return redirect('/projects');

    }

    public function store()
    {
        $project = new Project();

        $project->title = request('title');

        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }
}
