<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientMedicalHistory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;
use PDF; // dompdf facade

class PatientMedicalHistoryBackendController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');

        $rows = PatientMedicalHistory::query()
            ->when($q, function($query) use ($q){
                $query->where('patient_full_name', 'like', "%{$q}%")
                      ->orWhere('contact_number', 'like', "%{$q}%")
                      ->orWhere('email_address', 'like', "%{$q}%");
            })
            ->orderByDesc('id')
            ->paginate(10);

        return view('Dashboard.admin.patient_history.index', compact('rows','q'));
    }

    public function view($id)
    {
        $row = PatientMedicalHistory::findOrFail($id);
        return view('Dashboard.admin.patient_history.view', compact('row'));
    }

    /* =========================
        EXPORT HELPERS
    ========================= */

    private function fmt($val): string
    {
        if (is_null($val) || $val === '') return '—';

        // If JSON array stored as string => join
        if (is_string($val)) {
            $decoded = json_decode($val, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $decoded = array_values(array_filter($decoded, fn($i)=> trim((string)$i) !== ''));
                return count($decoded) ? implode(' | ', $decoded) : '—';
            }
        }

        return (string)$val;
    }

    private function exportMap(PatientMedicalHistory $row): array
    {
        return [
            'id' => $row->id,
            'patient_full_name' => $row->patient_full_name,
            'date_of_birth' => $row->date_of_birth,
            'age' => $row->age,
            'gender' => $row->gender,
            'contact_number' => $row->contact_number,
            'email_address' => $row->email_address,
            'home_address' => $row->home_address,
            'emergency_contact_name' => $row->emergency_contact_name,
            'emergency_contact_number' => $row->emergency_contact_number,
            'primary_complaint' => $row->primary_complaint,
            'pain_details_location' => $row->pain_details_location,
            'pain_level' => $row->pain_level,
            'pain_type' => $row->pain_type,
            'pain_worse_during' => $row->pain_worse_during,
            'pain_reduction' => $row->pain_reduction,
            'past_medical_history' => $row->past_medical_history,
            'surgical_history' => $row->surgical_history,
            'surgery_type' => $row->surgery_type,
            'surgery_year' => $row->surgery_year,
            'additional_surgery' => $row->additional_surgery,
            'injury_history' => $row->injury_history,
            'medication_info' => $row->medication_info,
            'allergies' => $row->allergies,
            'post_surgical_medical_clearance' => $row->post_surgical_medical_clearance,
            'lifestyle_activity_level' => $row->lifestyle_activity_level,
            'exercise_routine' => $row->exercise_routine,
            'functional_limitations' => $row->functional_limitations,
            'women_health_status' => $row->women_health_status,
            'pregnant_status' => $row->pregnant_status,
            'recent_delivery' => $row->recent_delivery,
            'goals_from_therapy' => $row->goals_from_therapy,
            'home_virtual_session_safety' => $row->home_virtual_session_safety,
            'declaration_agreement' => $row->declaration_agreement,
            'patient_signature' => $row->patient_signature,
            'signature_date' => $row->signature_date,
            'occupation' => $row->occupation,
            'problem_start' => $row->problem_start,
            'problem_cause' => $row->problem_cause,
            'other_goals' => $row->other_goals,
            'medication_status' => $row->medication_status,
            'created_at' => optional($row->created_at)->toDateTimeString(),
            'updated_at' => optional($row->updated_at)->toDateTimeString(),
        ];
    }

    /* =========================
        PDF EXPORT
    ========================= */
    public function exportPdf($id)
    {
        $row = PatientMedicalHistory::findOrFail($id);

        $pdf = PDF::loadView('Dashboard.admin.patient_history.report_pdf', compact('row'))
            ->setPaper('a4', 'portrait');

        $name = 'patient_report_'.$row->id.'_'.now()->format('Y-m-d').'.pdf';
        return $pdf->download($name);
    }

    /* =========================
        CSV EXPORT
    ========================= */
    public function exportCsv($id)
    {
        $row = PatientMedicalHistory::findOrFail($id);
        $data = $this->exportMap($row);

        $filename = 'patient_report_'.$row->id.'_'.now()->format('Y-m-d').'.csv';

        return response()->streamDownload(function () use ($data) {
            // Excel-friendly BOM
            echo "\xEF\xBB\xBF";

            $out = fopen('php://output', 'w');
            fputcsv($out, ['Field', 'Value']);

            foreach ($data as $k => $v) {
                fputcsv($out, [Str::headline($k), $this->fmt($v)]);
            }

            fclose($out);
        }, $filename, [
            'Content-Type' => 'text/csv; charset=UTF-8',
        ]);
    }

    /* =========================
        WORD EXPORT (HTML DOC)
    ========================= */
    public function exportWord($id)
    {
        $row = PatientMedicalHistory::findOrFail($id);
        $data = $this->exportMap($row);

        $filename = 'patient_report_'.$row->id.'_'.now()->format('Y-m-d').'.doc';

        $rowsHtml = '';
        foreach ($data as $k => $v) {
            $rowsHtml .= '<tr>
                <td style="padding:8px;border:1px solid #ddd;font-weight:700;width:35%;">'.e(Str::headline($k)).'</td>
                <td style="padding:8px;border:1px solid #ddd;">'.e($this->fmt($v)).'</td>
            </tr>';
        }

        $html = '
        <html>
        <head><meta charset="utf-8"></head>
        <body style="font-family: Arial, sans-serif;">
          <h2 style="margin:0 0 6px;">Patient Medical History Report</h2>
          <div style="color:#555;margin-bottom:14px;">
            Patient: <strong>'.e($row->patient_full_name).'</strong> &nbsp; | &nbsp;
            Report ID: <strong>#'.e($row->id).'</strong> &nbsp; | &nbsp;
            Exported: <strong>'.e(now()->format('d M Y')).'</strong>
          </div>

          <table style="border-collapse:collapse;width:100%;font-size:13px;">
            '.$rowsHtml.'
          </table>

          <div style="margin-top:24px;display:flex;gap:20px;">
            <div style="flex:1;">
              <div style="color:#666;font-size:12px;margin-bottom:6px;">Patient / Guardian</div>
              <div style="border-top:1px solid #999;height:1px;"></div>
            </div>
            <div style="flex:1;">
              <div style="color:#666;font-size:12px;margin-bottom:6px;">Doctor / Therapist</div>
              <div style="border-top:1px solid #999;height:1px;"></div>
            </div>
          </div>
        </body>
        </html>';

        return response($html)
            ->header('Content-Type', 'application/msword')
            ->header('Content-Disposition', 'attachment; filename="'.$filename.'"');
    }
}
