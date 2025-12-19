<?php

namespace App\Http\Controllers;
use App\Models\ConditionsCategory;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ConditionsCategoriesController extends Controller
{
    //
    public function index()
    {
        $categorys = ConditionsCategory::orderBy('sort_order', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view("Dashboard.admin.conditions-categories.index", compact('categorys'));
    }

    public function add()
    {
        return view("Dashboard.admin.conditions-categories.add");
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:conditions_categories,slug'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        ConditionsCategory::create($data);

        return redirect()->route('Dashboard.admin.conditions-categories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $customer = ConditionsCategory::findOrFail($id);
        return view('Dashboard.admin.conditions-categories.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = ConditionsCategory::findOrFail($id);

        $data = $request->validate([
            'name' => ['required','string','max:255'],
            'slug' => ['nullable','string','max:255','unique:conditions_categories,slug,'.$customer->id],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $customer->update($data);

        return redirect()->route('Dashboard.admin.conditions-categories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = ConditionsCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('Dashboard.admin.conditions-categories.index')
            ->with('success', 'Category deleted successfully.');
    }

    public function view($id)
    {
        $category = ConditionsCategory::findOrFail($id);
        return view("Dashboard.admin.conditions-categories.view", compact('category'));
    }
}
