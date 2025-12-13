<?php

namespace App\Http\Controllers;
use App\Models\InnerBanner; // ⬅️ add this

use App\Models\Download;
use App\Models\Category;

class DownloadsController extends Controller
{
    // App\Http\Controllers\DownloadsController.php

public function index()
    {
        $downloads  = Download::with('categories')
                        ->orderBy('year_label','desc')
                        ->orderBy('id','desc')
                        ->get();

        $years      = $downloads->pluck('year_label')->unique()->values();
        $byYear     = $downloads->groupBy('year_label');

        // id 2 ko exclude
        $categories = Category::where('id', '!=', 2)->orderBy('name')->get();

        // ⬅️ Inner banner (id=5). Change 5 if you want another record.
        $banner     = InnerBanner::find(5);
        $bannerImage = $banner?->image ?? 'assets/images/home/downloads.jpg'; // fallback

        return view('Home.downloads', compact('years','byYear','categories','bannerImage'));
    }

}
