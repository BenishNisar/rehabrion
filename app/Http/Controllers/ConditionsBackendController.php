<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use App\Models\ConditionsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ConditionsBackendController extends Controller
{
    public function index()
    {
        $conditions = Condition::latest()->paginate(15);
        return view('dashboard.admin.conditions.index', compact('conditions'));
    }

    public function add()
    {
        $categories = ConditionsCategory::where('is_active', 1)
            ->with(['subcategories' => function ($q) {
                $q->where('is_active', 1)
                  ->orderBy('sort_order', 'asc')
                  ->orderBy('id', 'asc');
            }])
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('dashboard.admin.conditions.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);

        $data['slug'] = $data['slug'] ? Str::slug($data['slug']) : Str::slug($data['title']);

        $data['causes'] = $this->normalizeArrayInput($request, 'causes', 'causes_text');
        $data['symptoms'] = $this->normalizeArrayInput($request, 'symptoms', 'symptoms_text');
        $data['roadmap_steps'] = $this->normalizeArrayInput($request, 'roadmap_steps', 'roadmap_text');

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        Condition::create($data);

        return redirect()->route('Dashboard.admin.conditions.index')
            ->with('success', 'Condition created successfully.');
    }

    public function edit($id)
    {
        $condition = Condition::findOrFail($id);

        $categories = ConditionsCategory::where('is_active', 1)
            ->with(['subcategories' => function ($q) {
                $q->where('is_active', 1)
                  ->orderBy('sort_order', 'asc')
                  ->orderBy('id', 'asc');
            }])
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->get();

        return view('dashboard.admin.conditions.edit', compact('condition', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $condition = Condition::findOrFail($id);

        $data = $this->validateData($request, $id);

        $data['slug'] = $data['slug'] ? Str::slug($data['slug']) : Str::slug($data['title']);

        $data['causes'] = $this->normalizeArrayInput($request, 'causes', 'causes_text');
        $data['symptoms'] = $this->normalizeArrayInput($request, 'symptoms', 'symptoms_text');
        $data['roadmap_steps'] = $this->normalizeArrayInput($request, 'roadmap_steps', 'roadmap_text');

        $data['is_active'] = $request->has('is_active') ? 1 : 0;

        $condition->update($data);

        return redirect()->route('Dashboard.admin.conditions.index')
            ->with('success', 'Condition updated successfully.');
    }

    public function delete($id)
    {
        $condition = Condition::findOrFail($id);
        $condition->delete();

        return redirect()->route('Dashboard.admin.conditions.index')
            ->with('success', 'Condition deleted successfully.');
    }

    private function validateData(Request $request, $ignoreId = null): array
    {
        $uniqueRule = 'unique:conditions,slug';
        if ($ignoreId) {
            $uniqueRule .= ',' . $ignoreId;
        }

        return $request->validate([
            'condition_category_id' => ['required', 'integer', 'exists:condition_categories,id'],

            'condition_subcategory_id' => [
                'required',
                'integer',
                Rule::exists('condition_subcategories', 'id')
                    ->where(function ($q) use ($request) {
                        $q->where('condition_category_id', $request->input('condition_category_id'));
                    }),
            ],

            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', $uniqueRule],

            'badge_text' => ['nullable', 'string', 'max:255'],
            'hero_description' => ['nullable', 'string'],
            'hero_image_url' => ['nullable', 'string', 'max:500'],

            'estimated_sessions' => ['nullable', 'string', 'max:50'],
            'stat_one' => ['nullable', 'string', 'max:50'],
            'stat_two' => ['nullable', 'string', 'max:50'],
            'stat_three' => ['nullable', 'string', 'max:50'],

            'cta_heading' => ['nullable', 'string', 'max:255'],
            'cta_text' => ['nullable', 'string', 'max:500'],
            'cta_button_text' => ['nullable', 'string', 'max:100'],
            'cta_button_link' => ['nullable', 'string', 'max:255'],

            'causes' => ['nullable', 'array'],
            'causes.*' => ['nullable', 'string', 'max:255'],
            'symptoms' => ['nullable', 'array'],
            'symptoms.*' => ['nullable', 'string', 'max:255'],
            'roadmap_steps' => ['nullable', 'array'],
            'roadmap_steps.*' => ['nullable', 'string', 'max:255'],

            'causes_text' => ['nullable', 'string'],
            'symptoms_text' => ['nullable', 'string'],
            'roadmap_text' => ['nullable', 'string'],
        ]);
    }

    private function normalizeArrayInput(Request $request, string $arrayKey, string $textKey): array
    {
        $arr = $request->input($arrayKey);
        if (is_array($arr)) {
            $arr = array_map('trim', $arr);
            return array_values(array_filter($arr, fn ($v) => $v !== ''));
        }

        $text = $request->input($textKey);
        if (!$text) return [];

        $lines = preg_split("/\r\n|\n|\r/", $text);
        $lines = array_map('trim', $lines);
        return array_values(array_filter($lines, fn ($v) => $v !== ''));
    }
}
