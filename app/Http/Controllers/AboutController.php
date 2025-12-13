<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner; // ⬅️ add this

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
       public function index()
    {
        // inner_banners: id = 7
        $banner = InnerBanner::find(7);

        // fallback if record/image missing
        $bannerImage = $banner?->image ?? 'assets/images/home/about.jpg';

        return view('Home.about', compact('bannerImage'));
    }
}
