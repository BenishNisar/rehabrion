<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner; // << add this

use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    //
      public function index()
    {
        // id=2 banner (fallback to a default image if missing)
        $banner = InnerBanner::find(2);
        $bannerImage = $banner?->image ?? 'assets/images/home/administration.jpg';

        return view('Home.administration', compact('bannerImage'));
    }
}
