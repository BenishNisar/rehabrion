<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use App\Models\ConditionSubcategory;

class ConditionsTreatController extends Controller
{
    public function index()
    {
        $firstSub = ConditionSubcategory::where('is_active', 1)
            ->orderBy('sort_order', 'asc')
            ->orderBy('id', 'asc')
            ->first();

        if (!$firstSub) {
            return view('Home.conditions-we-treat', [
                'subcategory' => null,
                'conditions' => collect(),
                'selectedCondition' => null,
            ]);
        }

        return redirect()->route('Home.conditions-we-treat', $firstSub->slug);
    }

    public function show(Request $request, $subcategorySlug)
    {
        $subcategory = ConditionSubcategory::where('slug', $subcategorySlug)
            ->where('is_active', 1)
            ->with('category')
            ->firstOrFail();

        $conditions = Condition::where('is_active', 1)
            ->where('condition_subcategory_id', $subcategory->id)
            ->orderBy('title', 'asc')
            ->get();

        $selectedSlug = $request->query('condition');

        $selectedCondition = null;

        if ($selectedSlug) {
            $selectedCondition = $conditions->firstWhere('slug', $selectedSlug);
        }

        if (!$selectedCondition) {
            $selectedCondition = $conditions->first();
        }

        return view('Home.conditions-we-treat', [
            'subcategory' => $subcategory,
            'conditions' => $conditions,
            'selectedCondition' => $selectedCondition,
        ]);
    }
}
