<?php

namespace App\Http\Controllers\Admin;

use App\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YearsController extends Controller
{
    public function index(Year $years)
    {
        $years = $years->all();
        return view('admin.years.index', compact('years'));
    }

    public function create(Year $years)
    {
        // Grab the latest year from the db
        $year = $years->latest()->limit(1)->get()[0];
        // Convert from string to int and add 1
        $year = (int)$year->year + 1;
        return view('admin.years.create', compact('year'));
    }

    public function store()
    {
        return redirect()->route('admin-years');
    }

    public function edit(Year $year)
    {
        return view('admin.years.edit', compact('year'));
    }

    public function destroy()
    {
        return redirect()->route('admin-years');
    }
}
