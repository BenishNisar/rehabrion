<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class BlogsDetailsController extends Controller
{
    //

    // public function show($id)
    // {
    //     $blog = Blog::findOrFail($id);
    //     $recent_posts = Blog::where('id', '!=', $id)->orderBy('id', 'desc')->limit(5)->get();
    //     return view('Home.blogs_details', compact('blog', 'recent_posts'));
    // }
    public function show($slug)
{
    $blog = Blog::where('slug', $slug)->firstOrFail();
    $recent_posts = Blog::orderBy('date', 'desc')->limit(5)->get();

    return view("Home.blogs_details", compact('blog', 'recent_posts'));
}
}
