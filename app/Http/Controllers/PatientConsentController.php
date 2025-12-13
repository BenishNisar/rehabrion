<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientConsent;

class PatientConsentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_full_name' => 'required|string|max:255',
            'date_of_birth'     => 'required|date',
            'contact_number'    => 'required|string|max:15',
            'email_address'     => 'nullable|email|max:255',
            'emergency_contact' => 'required|string|max:255',

            // all consents (checkboxes)
            'consent_to_assessment'                  => 'required|boolean',
            'understanding_of_benefits_and_risks'    => 'required|boolean',
            'medical_history_disclosure'             => 'required|boolean',
            'home_virtual_session_responsibility'    => 'required|boolean',
            'tele_rehabilitation_consent'            => 'required|boolean',
            'data_privacy'                           => 'required|boolean',
            'payment_policy_acknowledgment'          => 'required|boolean',
            'voluntary_participation'                => 'required|boolean',
            'liability_waiver'                       => 'required|boolean',
            'guardian_consent'                       => 'nullable|boolean',
            'final_agreement_statement'              => 'required|boolean',

            'patient_signature' => 'required|string|max:255',
            'signature_date'    => 'required|date',
        ]);

        PatientConsent::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Consent form submitted successfully',
        ]);
    }
}
