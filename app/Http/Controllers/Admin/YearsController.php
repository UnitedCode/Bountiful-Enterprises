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
        // Grab the latest year from the db, convert to an int and add 1
        $year = intval($years->getNewest()->year) + 1;
        return view('admin.years.create', compact('year'));
    }

    public function store()
    {
        $this->validate(request(), [
            'year' => 'required',
            'image' => 'required',
            'file' => 'required'
        ]);

        $file = request()->file('file');
        if(!empty($file)) {
            $file->storeAs('years', request('image'), ['disk' => 'public']);
        }

        $year = new Year(request(['year', 'image']));
        $year->save();

        return redirect()->route('admin-years');
    }

    public function edit(Year $year)
    {
        return view('admin.years.edit', compact('year'));
    }

    public function update(Year $year)
    {
        $this->validate(request(), [
            'year' => 'required',
            'image' => 'required'
        ]);

        $file = request()->file('file');
        if(!empty($file)) {
            $file->storeAs('years', request('image'), ['disk' => 'public']);
        }

        $year->update(request(['year', 'image']));

        return redirect()->route('edit-year', ['year' => $year->id]);
    }

    public function destroy()
    {
        return redirect()->route('admin-years');
    }
}
