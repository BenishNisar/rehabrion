<?php

namespace App\Mail;

use App\Models\PatientMedicalHistory;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MedicalHistorySubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public PatientMedicalHistory $history;

    public function __construct(PatientMedicalHistory $history)
    {
        $this->history = $history;
    }

    public function build()
    {
        return $this
            ->subject('Medical History Form Submitted')
            ->markdown('emails.medical-history-submitted', [
                'history' => $this->history,
            ]);
    }
}
