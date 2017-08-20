<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return view("admin.projects.index");
    }

    public function create()
    {
        return view("admin.projects.create");
    }

    public function store()
    {
        return redirect("/admin/projects");
    }

    public function edit()
    {
        return view("admin.projects.edit");
    }

    public function destroy()
    {
        return redirect("/admin/projects");
    }
}
