<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function detailing() {
        return view('services.detailing');
    }

    public function fabrication() {
        return view('services.fabrication');
    }

    public function shipping() {
        return view('services.shipping');
    }

    public function erecting() {
        return view('services.erecting');
    }

    public function qualityControl() {
        return view('services.quality-control');
    }
}
