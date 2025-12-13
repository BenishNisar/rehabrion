<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionsTreatController extends Controller
{
    //
    public function index()
    {
        return view('Home.conditions-we-treat');
    }
}
