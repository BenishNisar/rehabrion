<?php

namespace App\Http\Controllers;

use App\Models\Discipline; // Farz karein aapka model 'Discipline' hai
use Illuminate\Http\Request;

class DisciplinesController extends Controller
{
    /**
     * Tamam Sectors/Disciplines ki list dikhane ke liye
     */
    public function index()
    {
        // Agar database se data laana hai:
        // $disciplines = Discipline::where('status', 1)->get();

        // Filhal index view return kar rahe hain
        return view('Home.disciplines.index');
    }

    /**
     * Kisi specific discipline (jaise Accounting & Finance) ko slug ke zariye dikhane ke liye
     */
    public function show($slug)
    {
        /* Logic:
           1. Database mein check karein ke is slug ka sector maujood hai ya nahi.
           2. Agar maujood hai toh uska data view ko pass karein.
        */

        // Example logic:
        // $discipline = Discipline::where('slug', $slug)->firstOrFail();

        // Filhal hum Accounting & Finance ka view dikha rahe hain jo aapne bheja hai
        return view('Home.disciplines.show', [
            'slug' => $slug
        ]);
    }
}
