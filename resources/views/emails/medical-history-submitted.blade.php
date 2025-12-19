@php
  $formatDate = function ($d) {
    try {
      return $d ? \Carbon\Carbon::parse($d)->format('d M Y') : 'Not provided';
    } catch (\Exception $e) {
      return $d ?: 'Not provided';
    }
  };

  $joined = function ($val) {
    if (is_array($val)) {
      $val = array_values(array_filter($val, fn($x) => $x !== null && trim((string)$x) !== ''));
      return count($val) ? implode(', ', $val) : 'None';
    }
    if (is_string($val)) {
      $v = trim($val);
      return $v !== '' ? $v : 'None';
    }
    return $val ?? 'None';
  };

  $text = function ($val) {
    if (is_array($val)) {
      $val = array_values(array_filter($val, fn($x) => $x !== null && trim((string)$x) !== ''));
      return count($val) ? implode(', ', $val) : 'Not provided';
    }
    $v = is_string($val) ? trim($val) : $val;
    return ($v !== null && $v !== '') ? $v : 'Not provided';
  };

  $genderNice = function ($g) {
    $g = is_string($g) ? strtolower(trim($g)) : $g;
    if ($g === 'male') return 'Male';
    if ($g === 'female') return 'Female';
    if ($g === 'other') return 'Other';
    return $g ?: 'Not provided';
  };

  $yesNo = function ($v) {
    $v = is_string($v) ? strtolower(trim($v)) : $v;
    if ($v === 'yes' || $v === 1 || $v === true) return 'Yes';
    if ($v === 'no' || $v === 0 || $v === false) return 'No';
    return $v ?: 'Not provided';
  };
@endphp

@component('mail::message')
{{-- Header --}}
<div style="text-align:center; padding: 6px 0 2px;">
  <div style="font-size: 18px; font-weight: 800; letter-spacing: .5px;">
    REHABRION
  </div>
  <div style="font-size: 12px; color: #6b7280; margin-top: 2px;">
    Patient Medical History Submission
  </div>
</div>

@component('mail::panel')
<div style="font-size: 14px;">
  <div style="font-weight: 800; font-size: 16px; margin-bottom: 6px;">
    New Medical History Received
  </div>
  <div style="color:#6b7280;">
    Submitted on: <strong>{{ \Carbon\Carbon::parse($history->created_at)->format('d M Y, h:i A') }}</strong>
    <span style="display:inline-block; margin: 0 6px;">•</span>
    Record ID: <strong>#{{ $history->id }}</strong>
  </div>
</div>
@endcomponent

{{-- Quick Summary --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Patient Summary</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Full Name</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->patient_full_name) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Date of Birth</td>
    <td style="padding: 6px 0;"><strong>{{ $formatDate($history->date_of_birth) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Age</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->age) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Gender</td>
    <td style="padding: 6px 0;"><strong>{{ $genderNice($history->gender) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Contact</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->contact_number) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Email</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->email_address) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Personal Information --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Personal Information</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Home Address</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->home_address) }}</strong></td>
  </tr>

  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Emergency Contact</td>
    <td style="padding: 6px 0;">
      <strong>{{ $text($history->emergency_contact_name) }}</strong>
      <div style="color:#6b7280; font-size: 12px; margin-top: 2px;">
        {{ $text($history->emergency_contact_number) }}
      </div>
    </td>
  </tr>

  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Occupation</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->occupation) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Primary Complaint --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Primary Complaint</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Complaint</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->primary_complaint) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Problem Start</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->problem_start) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Problem Cause</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->problem_cause) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Pain Level</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->pain_level) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Pain Details --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Pain Details</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Locations</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->pain_details_location) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Pain Type</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->pain_type) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Worse During</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->pain_worse_during) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Pain Reduced By</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->pain_reduction) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Medical History --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Medical History</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Past Medical History</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->past_medical_history) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Injury History</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->injury_history) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Allergies</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->allergies) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Surgery --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Surgical History</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Had Surgery</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->surgical_history) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Surgery Type</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->surgery_type) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Surgery Year</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->surgery_year) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Additional Surgeries</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->additional_surgery) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Medication and Clearance --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Medication and Clearance</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Currently Taking Medication</td>
    <td style="padding: 6px 0;"><strong>{{ $yesNo($history->medication_status) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Medication Details</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->medication_info) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Doctor Advised Physio</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->post_surgical_medical_clearance) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Lifestyle and Goals --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Lifestyle and Goals</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Activity Level</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->lifestyle_activity_level) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Exercise Routine</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->exercise_routine) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Functional Limitations</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->functional_limitations) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Goals From Therapy</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->goals_from_therapy) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Other Goals</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->other_goals) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Women Health --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Women’s Health</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Pregnant</td>
    <td style="padding: 6px 0;"><strong>{{ $yesNo($history->pregnant_status) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Recent Delivery</td>
    <td style="padding: 6px 0;"><strong>{{ $yesNo($history->recent_delivery) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Women Health Status</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->women_health_status) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Safety --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Home and Virtual Safety</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Safety Confirmations</td>
    <td style="padding: 6px 0;"><strong>{{ $joined($history->home_virtual_session_safety) }}</strong></td>
  </tr>
</table>
@endcomponent

{{-- Section: Declaration and Signature --}}
@component('mail::panel')
<div style="font-weight:800; margin-bottom: 10px;">Declaration and Signature</div>

<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-size: 14px;">
  <tr>
    <td style="padding: 6px 0; width: 34%; color:#6b7280;">Declaration Name</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->declaration_agreement) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Signature</td>
    <td style="padding: 6px 0;"><strong>{{ $text($history->patient_signature) }}</strong></td>
  </tr>
  <tr>
    <td style="padding: 6px 0; color:#6b7280;">Signature Date</td>
    <td style="padding: 6px 0;"><strong>{{ $formatDate($history->signature_date) }}</strong></td>
  </tr>
</table>
@endcomponent

@component('mail::button', ['url' => config('app.url')])
Open Website
@endcomponent

<div style="text-align:center; color:#6b7280; font-size: 12px; margin-top: 14px;">
  This email contains confidential patient information intended for clinical review only.
</div>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
