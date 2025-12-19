<?php

namespace App\Http\Controllers;

use App\Models\ConditionSubcategory;
use App\Models\ConditionsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConditionsSubcategoryBackendController extends Controller
{
    public function index()
    {
        $subcategories = ConditionSubcategory::with('category')
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('dashboard.admin.subcategories.index', compact('subcategories'));
    }

    public function add()
    {
        $categories = ConditionsCategory::where('is_active', 1)
            ->orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('dashboard.admin.subcategories.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'condition_category_id' => ['required','integer','exists:condition_categories,id'],
            'name' => ['required','string','max:800'],
            'slug' => ['nullable','string','max:800','unique:condition_subcategories,slug'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        ConditionSubcategory::create($data);

        return redirect()->route('Dashboard.admin.subcategories.index')
            ->with('success', 'Subcategory created successfully');
    }

    public function edit($id)
    {
        $subcategory = ConditionSubcategory::findOrFail($id);

        $categories = ConditionsCategory::where('is_active', 1)
            ->orderBy('sort_order', 'asc')
            ->orderBy('name', 'asc')
            ->get();

        return view('dashboard.admin.subcategories.edit', compact('subcategory','categories'));
    }

    public function update(Request $request, $id)
    {
        $subcategory = ConditionSubcategory::findOrFail($id);

        $data = $request->validate([
            'condition_category_id' => ['required','integer','exists:condition_categories,id'],
            'name' => ['required','string','max:800'],
            'slug' => ['nullable','string','max:800','unique:condition_subcategories,slug,'.$subcategory->id],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active' => ['nullable'],
        ]);

        $data['slug'] = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($data['name']);
        $data['sort_order'] = $data['sort_order'] ?? 0;
        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $subcategory->update($data);

        return redirect()->route('Dashboard.admin.subcategories.index')
            ->with('success', 'Subcategory updated successfully');
    }

    public function destroy($id)
    {
        $subcategory = ConditionSubcategory::findOrFail($id);
        $subcategory->delete();

        return redirect()->route('Dashboard.admin.subcategories.index')
            ->with('success', 'Subcategory deleted successfully');
    }
}
