<?php

namespace App\Http\Controllers;

use App\Models\PatientMedicalHistory;
use Illuminate\Http\Request;

class PatientMedicalHistoryController extends Controller
{
    public function index()
    {
        return view('Home.submit-medical-history');
    }

    public function store(Request $request)
{
    $rules = [
        'patient_full_name' => 'required|string|max:255',
        'date_of_birth'     => 'required|date|before_or_equal:today',
        'age'               => 'required|integer|min:0|max:120',
        'gender'            => 'required|string',

        'contact_number'           => ['required', 'regex:/^(\+92|0)3\d{9}$/'],
        'emergency_contact_number' => ['required', 'regex:/^(\+92|0)3\d{9}$/'],
        'emergency_contact_name'   => 'required|string|max:255',

        'email_address'  => 'nullable|email:rfc|max:255',
        'home_address'   => 'nullable|string',
        'primary_complaint' => 'required|string',

        // arrays
        'pain_details_location'       => 'nullable|array',
        'pain_details_location.*'     => 'nullable|string',

        'pain_type'                   => 'nullable|array',
        'pain_type.*'                 => 'nullable|string',

        'pain_worse_during'           => 'nullable|array',
        'pain_worse_during.*'         => 'nullable|string',

        'pain_reduction'              => 'nullable|array',
        'pain_reduction.*'            => 'nullable|string',

        'past_medical_history'        => 'nullable|array',
        'past_medical_history.*'      => 'nullable|string',

        'injury_history'              => 'sometimes', // checkbox+textarea mix

        'allergies'                   => 'nullable|array',
        'allergies.*'                 => 'nullable|string',

        'post_surgical_medical_clearance'   => 'nullable|array',
        'post_surgical_medical_clearance.*' => 'nullable|string',

        'lifestyle_activity_level'    => 'nullable|array',
        'lifestyle_activity_level.*'  => 'nullable|string',

        'exercise_routine'            => 'nullable|array',
        'exercise_routine.*'          => 'nullable|string',

        'functional_limitations'      => 'nullable|array',
        'functional_limitations.*'    => 'nullable|string',

        'women_health_status'         => 'nullable|array',
        'women_health_status.*'       => 'nullable|string',

        'goals_from_therapy'          => 'nullable|array',
        'goals_from_therapy.*'        => 'nullable|string',

        'home_virtual_session_safety'   => 'nullable|array',
        'home_virtual_session_safety.*' => 'nullable|string',

        // simple
        'pain_level'       => 'required|integer|between:0,10',
        'surgical_history' => 'nullable|string',

        'medication_status' => 'nullable|in:yes,no',
        'medication_info'   => 'nullable|string',

        'declaration_agreement' => 'nullable|string',
        'patient_signature'     => 'nullable|string',
        'signature_date'        => 'nullable|date',

        'occupation'    => 'nullable|string',
        'problem_start' => 'nullable|string',
        'problem_cause' => 'nullable|string',

        'surgery_type'       => 'nullable|string',
        'surgery_year'       => 'nullable|string',
        'additional_surgery' => 'nullable|string',

        'other_goals' => 'nullable|string',
        'pregnant_status' => 'nullable|in:yes,no',
        'recent_delivery' => 'nullable|in:yes,no',
    ];

    $messages = [
        'contact_number.required' => 'Contact number is required.',
        'contact_number.regex' => 'Please enter a valid Pakistan mobile number (03XXXXXXXXX or +923XXXXXXXXX).',

        'emergency_contact_number.required' => 'Emergency contact number is required.',
        'emergency_contact_number.regex' => 'Please enter a valid Pakistan mobile number (03XXXXXXXXX or +923XXXXXXXXX).',

        'date_of_birth.before_or_equal' => 'Date of birth cannot be in the future.',
        'email_address.email' => 'Please enter a valid email address.',
    ];

    // ✅ only ONE validate call
    $validated = $request->validate($rules, $messages);

    // ✅ arrays -> string (DB TEXT)
    $arrayFields = [
        'pain_details_location','pain_type','pain_worse_during','pain_reduction',
        'past_medical_history','allergies','post_surgical_medical_clearance',
        'lifestyle_activity_level','exercise_routine','functional_limitations',
        'women_health_status','goals_from_therapy','home_virtual_session_safety',
    ];

    foreach ($arrayFields as $field) {
        $values = $request->input($field);

        if (is_array($values)) {
            $validated[$field] = implode(', ', array_filter($values));
        } else {
            $validated[$field] = $values ?: null;
        }
    }

    // injury_history special
    $injury = $request->input('injury_history', null);
    if (is_array($injury)) {
        $validated['injury_history'] = implode(', ', array_filter($injury));
    } else {
        $validated['injury_history'] = $injury ?: null;
    }

    // ✅ dd check (temporary)
    // dd($validated);

    PatientMedicalHistory::create($validated);

    return $request->expectsJson()
        ? response()->json(['status' => 'success', 'message' => 'Medical history form submitted successfully!'])
        : back()->with('success', 'Medical history form submitted successfully!');
}
}
