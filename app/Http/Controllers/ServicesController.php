<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\InnerBanner; // 👈 add this

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
//    public function index()
//     {
//         // admin se jo services add hui hain, wahi dikhao
//         $services = Service::active()->ordered()->get();
//         return view('Home.services', compact('services'));
//     }

//     // Route-Model binding by slug: {service:slug}
//     public function show(Service $service)
//     {
//         abort_unless($service->is_active, 404);
//         return view('Home.service_show', compact('service'));
//     }


 public function index()
    {
        $services = Service::active()->ordered()->get();


        $banner = InnerBanner::find(9);

        return view('Home.services', compact('services','banner'));
    }


    // public function show(Service $service)
    // {
    //     abort_unless($service->is_active, 404);

    //     $banner = InnerBanner::find(9);

    //     return view('Home.service_show', compact('service','banner'));
    // }

     public function show(Service $service)
    {
        abort_unless($service->is_active, 404);

        // sidebar list
        $servicesMenu = Service::active()->ordered()->select('title','slug')->get();

        return view('Home.service_show', compact('service','servicesMenu'));
    }
}
