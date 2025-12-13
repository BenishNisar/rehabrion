<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categorys = Category::all();

    return view("Dashboard.admin.category.index", compact('categorys'));
    }

    public function add(){
        return view("Dashboard.admin.category.add");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',

        ]);

        $contact = Category::create([
            'name' => $request->name,

        ]);
        return redirect()->route('Dashboard.admin.category.index')->with('success', 'Blog updated successfully.');


    }


    public function edit($id)
    {
        $customer = Category::findOrFail($id);
        return view('Dashboard.admin.category.edit', compact('customer'));
    }


    public function update(Request $request, $id)
    {
        $blog = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',

        ]);



        $blog->update([
            'name' => $request->name,

        ]);

        return redirect()->route('Dashboard.admin.category.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy($id)
    {
        $categorys = Category::findOrFail($id);
$categorys->delete();

        return redirect()->route('Dashboard.admin.category.index')->with('success', 'Customer deleted successfully.');
    }

    public function view($id)
    {
        $category = Category::findOrFail($id);
        return view("Dashboard.admin.category.view", compact('category'));
    }


}
