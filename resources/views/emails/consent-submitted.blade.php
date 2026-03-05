<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="margin:0;padding:0;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f4f6fb;padding:24px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="width:600px;max-width:92vw;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 10px 30px rgba(16,24,40,0.12);">
          <tr>
            <td style="background:#283054;padding:18px 22px;color:#ffffff;">
              <div style="font-size:18px;font-weight:700;letter-spacing:0.2px;">Rehabrion Physiotherapist</div>
              <div style="font-size:13px;opacity:0.9;margin-top:4px;">Consent Form Confirmation</div>
            </td>
          </tr>

          <tr>
            <td style="padding:22px;">
              <div style="font-size:20px;font-weight:700;color:#101828;">Consent Form Received</div>
              <div style="margin-top:10px;font-size:14px;line-height:22px;color:#475467;">
                Dear <strong style="color:#101828;">{{ $consent->patient_full_name }}</strong>,<br>
                Thank you for submitting your consent form. We have received it successfully.
              </div>

              <div style="margin-top:18px;border:1px solid #e4e7ec;border-radius:12px;overflow:hidden;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                  <tr>
                    <td style="padding:12px 14px;background:#f8fafc;color:#344054;font-size:12px;font-weight:700;">Patient Details</td>
                  </tr>
                  <tr>
                    <td style="padding:14px;">
                      <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px;color:#101828;">
                        <tr>
                          <td style="padding:8px 0;color:#667085;width:170px;">Patient Name</td>
                          <td style="padding:8px 0;font-weight:600;">{{ $consent->patient_full_name }}</td>
                        </tr>
                        <tr>
                          <td style="padding:8px 0;color:#667085;">Date of Birth</td>
                          <td style="padding:8px 0;font-weight:600;">{{ $consent->date_of_birth }}</td>
                        </tr>
                        <tr>
                          <td style="padding:8px 0;color:#667085;">Contact Number</td>
                          <td style="padding:8px 0;font-weight:600;">{{ $consent->contact_number }}</td>
                        </tr>
                        <tr>
                          <td style="padding:8px 0;color:#667085;">Emergency Contact</td>
                          <td style="padding:8px 0;font-weight:600;">{{ $consent->emergency_contact }}</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </div>

              <div style="margin-top:18px;font-size:13px;line-height:20px;color:#475467;">
                If you need to update any details, please reply to this email.
              </div>

              <div style="margin-top:18px;">
                <a href="{{ config('https://rehabrion.com.pk/') }}" style="display:inline-block;background:#283054;color:#ffffff;text-decoration:none;padding:12px 16px;border-radius:10px;font-size:14px;font-weight:700;">
                  Visit Rehabrion Website
                </a>
              </div>
            </td>
          </tr>

          <tr>
            <td style="padding:16px 22px;background:#f8fafc;border-top:1px solid #e4e7ec;color:#667085;font-size:12px;line-height:18px;">
              This is an automated message from Rehabrion Physiotherapist website.
            </td>
          </tr>
        </table>

        <div style="margin-top:14px;color:#98a2b3;font-size:12px;">
          © {{ date('Y') }} Rehabrion Physiotherapist. All rights reserved.
        </div>
      </td>
    </tr>
  </table>
</body>
</html>
