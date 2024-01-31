<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('Project.index', compact('projects'));
    }

    public function create()
    {
        return view('Project.create');
    }

    public function store(Request $request)
    {
        
        $project = new Project;
        $project->projectname = $request->projectname;
        $project->PICname = $request->PICname;
        $project->startDate = $request->startDate;
        $project->endDate = $request->endDate;
        $project->projectStatus = $request->projectStatus;
        $project->projectDescription = $request->projectDescription;
        $project->save();

        Project::create($request->all());
        return redirect()->route('Project.index')->withSuccess('New project record added successfully');
    }

    public function show(Project $project)
    {
        return view('Project.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('Project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect()->back()->withSuccess('Project record updated successfully');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('Project.index')->withSuccess('Project record deleted successfully');
    }
}
