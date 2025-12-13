<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecoveryController extends Controller
{
    //
    public function index()
    {
        return view('Home.recovery-bundles');
    }
}
