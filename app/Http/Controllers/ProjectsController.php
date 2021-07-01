<?php

namespace App\Http\Controllers;

use App\Models\Projects;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    
    public function index()
    {
        $projects = Projects::all();

        return view('projects.index', ['projects' => $projects]);
    }

    
    public function edit(Projects $project)
    {
        return view('projects.edit', ['projects' => $project]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
        ]);

        Projects::create ([
            'title' => request('title'),
        ]);

        return redirect('/projects');

    }

    public function view(Projects $project)
    {
        return view('projects.view', ['projects' => $project]);
    }

    public function update(Projects $project)
    {

        request()->validate([
            'title' => 'required',
        ]);

        $project->update([
            'title' => request('title'),
        ]);

        return redirect('/projects');
    }

}