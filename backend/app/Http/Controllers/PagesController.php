<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Year;


class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects(Year $years) {

        $years = $years->all();
        return view('projects', compact('years'));
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }
}
