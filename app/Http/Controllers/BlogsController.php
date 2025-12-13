<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    //
    public function index(){
        $blogs = Blog::orderBy('id','desc')->get();

        return view("Home.blogs", compact('blogs'));

    }

    public function search(Request $request)
{
    $query = $request->input('q');

    $blogs = Blog::where('title', 'like', '%' . $query . '%')
                ->select('slug', 'title') // 🛠 changed id to slug
                ->limit(8)
                ->get();

    return response()->json($blogs);
}



// public function details($slug)
// {
//     $blog = Blog::where('slug', $slug)->firstOrFail();
//     $recent_posts = Blog::latest()->take(5)->get();
//     return view('Home.blogs_details', compact('blog', 'recent_posts'));
// }





}
