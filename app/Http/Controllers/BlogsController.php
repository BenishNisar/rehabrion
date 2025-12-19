<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        // How it works page par sirf top 3 latest blogs
        $blogs = Blog::orderBy('id', 'desc')->limit(3)->get();

        return view("Home.blogs", compact('blogs'));
    }

    public function search(Request $request)
    {
        $query = $request->input('q');

        $blogs = Blog::where('title', 'like', '%' . $query . '%')
            ->select('slug', 'title')
            ->limit(8)
            ->get();

        return response()->json($blogs);
    }
}
