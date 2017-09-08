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

    public function create()
    {
        return view('admin.years.create');
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
