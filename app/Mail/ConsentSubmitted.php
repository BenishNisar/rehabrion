<?php

namespace App\Mail;

use App\Models\PatientConsent;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConsentSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public PatientConsent $consent;

    public function __construct(PatientConsent $consent)
    {
        $this->consent = $consent;
    }

    public function build()
    {
        return $this
            ->subject('Consent Form Submitted')
            ->markdown('emails.consent-submitted', [
                'consent' => $this->consent,
            ]);
    }
}
