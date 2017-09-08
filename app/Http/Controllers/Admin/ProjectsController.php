<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index(Year $years)
    {
        $years = $years->all();
        return view('admin.projects.index', compact('years'));
    }

    public function create(Year $years)
    {
        $years = $years->all();
        return view('admin.projects.create', compact('years'));
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'weight' => 'required|numeric',
            'year_id' => 'required|integer'
        ]);

        $project = new Project(request(['name', 'city', 'state', 'weight', 'year_id']));
        // Cache year
        $year = $project->year()->get()[0];
        // Add projects weight
        $year->weight += $project->weight;

        // Save the project and its year
        $project->save();
        $year->save();

        return redirect()->route('admin-projects');
    }

    public function edit(Project $project, Year $years)
    {
        $years = $years->all();
        return view('admin.projects.edit', compact('project', 'years'));
    }

    public function update(Project $project)
    {
        $this->validate(request(), [
            'name' => 'required',
            'city' => 'required',
            'state' => 'required',
            'weight' => 'required|numeric',
            'year_id' => 'required|integer'
        ]);

        // Cache year
        $year = $project->year()->get()[0];
        // Calculate the weight without the project
        $weightWithoutProject = $year->weight - $project->weight;

        // update the project
        $project->update(request(['name', 'city', 'state', 'weight', 'year_id']));
        // Add up the new weight
        $year->weight = $weightWithoutProject + $project->weight;
        // save the year
        $year->save();

        return redirect()->route('edit-project', ['project' => $project->id]);
    }

    public function destroy(Project $project)
    {
        if(Auth::check()) {
            // Cache the year
            $year = $project->year()->get()[0];
            /// Subtract the projects weight from the total
            $year->weight -= $project->weight;

            // delete the project and update the year
            $project->delete();
            $year->save();
        }

        return redirect()->route('admin-projects');
    }
}
