@component('mail::message')
# Consent Form Received

Hi {{ $consent->patient_full_name }},

Your consent form has been submitted successfully.

@component('mail::panel')
**Patient Name:** {{ $consent->patient_full_name }}
**DOB:** {{ $consent->date_of_birth }}
**Contact:** {{ $consent->contact_number }}
**Emergency Contact:** {{ $consent->emergency_contact }}
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
