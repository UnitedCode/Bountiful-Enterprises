<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return redirect()->route('store-project');
    }

    public function edit(Project $project, Year $years)
    {
        $years = $years->all();
        return view('admin.projects.edit', compact('project', 'years'));
    }

    public function destroy()
    {
        return redirect()->route('admin-projects');
    }
}
