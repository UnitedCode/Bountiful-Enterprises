<?php

namespace App\Http\Controllers\Admin;

use App\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YearsController extends Controller
{
    public function index(Year $year)
    {
        $year = $year->all();
        return view("admin.years.index");
    }

    public function create()
    {
        return view("admin.years.create");
    }

    public function store()
    {
        return redirect("/admin/years");
    }

    public function edit()
    {
        return view("admin.years.edit");
    }

    public function destroy()
    {
        return redirect("/admin/years");
    }
}
