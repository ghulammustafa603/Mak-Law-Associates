<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeAreasController extends Controller
{
    public function index()
    {
        return view('practice-areas');
    }
}
