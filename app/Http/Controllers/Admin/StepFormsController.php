<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StepFormsController extends Controller
{
    public function index()
    {
        return view('admin.stepforms.create');
    }
}
