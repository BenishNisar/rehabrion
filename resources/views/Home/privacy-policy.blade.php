@extends("Layout.layout")
@section("Content")

<style>
  :root{
    --rp:#7a958f;        /* primary teal */
    --rp2:#bae0db;       /* soft mint */
    --ink:#0f172a;       /* deep text */
    --muted:#64748b;     /* muted text */
    --card:#ffffff;
    --line:#e2e8f0;
  }

  .pp-wrap{
    background: linear-gradient(180deg,#f6fffd 0%, #ffffff 40%, #ffffff 100%);
  }

  .pp-container{
    width:100%;
    max-width: 980px;
    margin:0 auto;
    padding:0 18px;
    position: relative;
    z-index:2;
  }

  .pp-hero{
    position: relative;
    padding: 64px 0;
    overflow:hidden;
    background:
      radial-gradient(800px 300px at 20% 0%, rgba(186,224,219,.55), transparent 60%),
      radial-gradient(700px 280px at 80% 10%, rgba(122,149,143,.35), transparent 55%),
      linear-gradient(135deg, rgba(186,224,219,.35), rgba(255,255,255,1));
    border-bottom: 1px solid rgba(226,232,240,.8);
  }

  .pp-hero:before{
    content:"";
    position:absolute; inset:-40px;
    background-image: radial-gradient(rgba(122,149,143,.22) 1px, transparent 1px);
    background-size: 18px 18px;
    opacity:.14;
    pointer-events:none;
  }

  .pp-title{
    font-size: 44px;
    line-height: 1.1;
    margin:0 0 10px;
    color: var(--ink);
    font-weight: 800;
    letter-spacing: -0.02em;
    text-align:center;
  }

  .pp-sub{
    text-align:center;
    color: var(--muted);
    margin:0;
    font-size: 15px;
  }

  .pp-main{
    padding: 34px 0 64px;
  }

  .pp-card{
    background: var(--card);
    border: 1px solid rgba(226,232,240,.95);
    border-radius: 18px;
    padding: 26px 22px;
    box-shadow: 0 10px 30px rgba(15,23,42,.06);
  }

  .pp-lead{
    color: #111827;
    /* font-size: 16px; */
    line-height: 1.75;
    margin: 0 0 14px;
  }

  .pp-muted{
    color: var(--muted);
    /* font-size: 15px; */
    line-height: 1.75;
    margin: 0 0 18px;
  }

  .pp-h2{
    margin: 26px 0 10px;
    font-size: 20px;
    font-weight: 800;
    color: #111827;
    display:flex;
    align-items:center;
    gap: 10px;
  }

  .pp-h2:before{
    content:"";
    width: 10px;
    height: 10px;
    border-radius: 999px;
    background: linear-gradient(135deg,#7a958f,#bae0db);
    box-shadow: 0 6px 16px rgba(122,149,143,.35);
  }

  .pp-h3{
    margin: 16px 0 8px;
    font-size: 16px;
    font-weight: 800;
    color: #7a958f;
  }

  .pp-divider{
    height:1px;
    background: linear-gradient(90deg, rgba(122,149,143,.35), rgba(226,232,240,1));
    border:0;
    margin: 18px 0 6px;
  }

  .pp-ul{
    margin: 0 0 14px;
    padding-left: 18px;
    color: #0f172a;
  }

  .pp-ul li{
    margin: 8px 0;
    line-height: 1.7;
    color:#111827;
  }

  .pp-contact{
    margin-top: 10px;
    padding: 16px;
    border-radius: 16px;
    border: 1px solid rgba(122,149,143,.35);
    background: linear-gradient(180deg, rgba(186,224,219,.45), rgba(255,255,255,1));
  }

  .pp-contact a{
    color: #7a958f;
    font-weight: 700;
    text-decoration: none;
  }

  .pp-contact a:hover{
    text-decoration: underline;
  }

  .pp-note{
    margin: 18px 0 0;
    padding: 14px;
    border-radius: 14px;
    border: 1px solid rgba(239,68,68,.25);
    background: rgba(239,68,68,.08);
    display:flex;
    gap: 10px;
    align-items:flex-start;
  }

  .pp-note strong{
    color:#b91c1c;
  }

  .pp-note p{
    margin:0;
    color:#7f1d1d;
    line-height: 1.7;
    font-size: 14px;
  }

  .pp-footer{
    margin-top: 18px;
    padding-top: 14px;
    border-top: 1px solid var(--line);
    color: var(--muted);
    font-size: 13px;
    line-height: 1.7;
  }

  @media(max-width:576px){
    .pp-title{ font-size: 34px; }
    .pp-hero{ padding: 46px 0; }
    .pp-card{ padding: 20px 16px; border-radius: 16px; }
  }
</style>

<div class="pp-wrap">

  <section class="pp-hero">
    <div class="pp-container">
      <h1 class="pp-title">Privacy Policy</h1>
      <p class="pp-sub">Last updated: {{ date('F d, Y') }}</p>
    </div>
  </section>

  <section class="pp-main">
    <div class="pp-container">

      <div class="pp-card">

        <p class="pp-lead">
          At <strong>Rehabrion</strong>, your privacy, dignity, and trust are at the center of everything we do.
          This Privacy Policy explains how we collect, use, store, and protect your information when you visit our website,
          contact us, or use our services in person, at home, or online.
        </p>

        <p class="pp-muted">
          By using our website or sharing your information with us, you agree to the practices described in this Privacy Policy.
          If you do not agree, please do not use this website or submit your personal information.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">1. Who We Are</h2>
        <p class="pp-muted">
          Rehabrion is a rehabilitation and physical health service provider focused on personalized, accessible,
          and professional musculoskeletal care. In this Policy, “we”, “our”, and “us” refer to Rehabrion,
          and “you” refers to our patients, website visitors, and other individuals who interact with us.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">2. Information We Collect</h2>
        <p class="pp-muted">We may collect the following types of information when you interact with Rehabrion:</p>

        <h3 class="pp-h3">2.1 Information You Provide Directly</h3>
        <ul class="pp-ul">
          <li>Full name, contact number, email address</li>
          <li>Home address or preferred location for sessions</li>
          <li>Age, gender, and basic demographic details (if shared)</li>
          <li>Medical or health related information you voluntarily provide, such as symptoms, injury history, pain level, or reports</li>
          <li>Booking or consultation details (preferred time, service type, therapist preference)</li>
          <li>Messages or questions submitted through our contact forms, email, or messaging apps</li>
        </ul>

        <h3 class="pp-h3">2.2 Information Collected Automatically</h3>
        <p class="pp-muted">When you visit our website, certain information may be collected automatically, such as:</p>
        <ul class="pp-ul">
          <li>IP address and approximate location</li>
          <li>Device type, browser type, and operating system</li>
          <li>Pages viewed, time spent on pages, and click or activity data</li>
          <li>Referring website or source of visit (search engine, social media link)</li>
        </ul>

        <h3 class="pp-h3">2.3 Information from Third Parties</h3>
        <p class="pp-muted">In some cases, we may receive information from:</p>
        <ul class="pp-ul">
          <li>Healthcare providers or referrers (with your consent)</li>
          <li>Payment providers or booking platforms</li>
          <li>Analytics or advertising partners (aggregated, non identifiable data)</li>
        </ul>

        <hr class="pp-divider">

        <h2 class="pp-h2">3. How We Use Your Information</h2>
        <p class="pp-muted">We use your information only for legitimate and respectful purposes, including:</p>
        <ul class="pp-ul">
          <li>To schedule, manage, and deliver rehab and physiotherapy services</li>
          <li>To assess your condition and design personalized treatment plans</li>
          <li>To respond to your questions, messages, or appointment requests</li>
          <li>To send important updates such as appointment confirmations or changes</li>
          <li>To improve our website, services, and patient experience</li>
          <li>To maintain clinical records as required by professional and legal standards</li>
          <li>To send educational content, service updates, or offers (only if you consent)</li>
          <li>To comply with legal, regulatory, or professional obligations</li>
        </ul>

        <hr class="pp-divider">

        <h2 class="pp-h2">4. Legal Basis for Processing (Where Applicable)</h2>
        <p class="pp-muted">Depending on your location, our processing of your personal data may be based on:</p>
        <ul class="pp-ul">
          <li>Your consent</li>
          <li>The need to perform a contract or provide requested services</li>
          <li>Our legitimate interests in running and improving our clinic and services</li>
          <li>Compliance with legal or regulatory obligations</li>
        </ul>

        <hr class="pp-divider">

        <h2 class="pp-h2">5. How We Share Your Information</h2>
        <p class="pp-muted">
          We do not sell your personal information. We may share your information only with:
        </p>
        <ul class="pp-ul">
          <li><strong>Rehabrion team members</strong> involved in your care (therapists, clinical and admin staff)</li>
          <li><strong>Healthcare providers</strong> only with your consent if coordination is required</li>
          <li><strong>Service providers</strong> such as hosting, IT support, email or SMS platforms, payment processors, or analytics services</li>
          <li><strong>Legal or regulatory authorities</strong> where required by law or to protect safety and rights</li>
        </ul>

        <hr class="pp-divider">

        <h2 class="pp-h2">6. Cookies and Tracking Technologies</h2>
        <p class="pp-muted">Our website may use cookies and similar technologies to:</p>
        <ul class="pp-ul">
          <li>Remember your preferences and improve browsing experience</li>
          <li>Measure website traffic and performance</li>
          <li>Understand which pages are most helpful to visitors</li>
        </ul>
        <p class="pp-muted">
          You can change your browser settings to block or delete cookies. Some parts of the website may not work correctly if cookies are disabled.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">7. How Long We Keep Your Information</h2>
        <p class="pp-muted">
          We keep your information only for as long as necessary to fulfil the purposes described in this Policy or as required by law,
          professional guidelines, or clinical record standards. When it is no longer needed, we securely delete or anonymize it.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">8. How We Protect Your Information</h2>
        <p class="pp-muted">
          We take reasonable technical and organizational measures to safeguard your information against loss, misuse, unauthorized access,
          disclosure, or alteration. No system can be guaranteed to be fully secure and you share information with us at your own risk.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">9. Children’s Privacy</h2>
        <p class="pp-muted">
          Our services may be provided to children or minors under the supervision and consent of a parent or legal guardian.
          We do not knowingly collect personal information directly from children without such consent.
          If you believe a child has provided us information without appropriate consent, please contact us so we can delete it where required.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">10. International Data Transfers</h2>
        <p class="pp-muted">
          Depending on your location and the location of our service providers, your information may be stored or processed in countries
          that may have different data protection laws than your own. We take steps to ensure that transfers comply with applicable requirements
          and that your data remains protected.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">11. Your Rights and Choices</h2>
        <p class="pp-muted">Subject to applicable law, you may have the right to:</p>
        <ul class="pp-ul">
          <li>Access the personal information we hold about you</li>
          <li>Request corrections or updates</li>
          <li>Request deletion in certain circumstances</li>
          <li>Object to or restrict certain types of processing</li>
          <li>Withdraw consent at any time where processing is based on consent</li>
          <li>Opt out of marketing communications</li>
        </ul>
        <p class="pp-muted">
          To exercise these rights, please contact us using the details provided in the “Contact Us” section below.
          We may need to verify your identity before responding.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">12. Third Party Websites and Services</h2>
        <p class="pp-muted">
          Our website may contain links to third party websites, apps, or services that are not controlled by Rehabrion.
          We are not responsible for the privacy practices of these third parties. Please review their privacy policies before providing any personal information.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">13. Changes to This Privacy Policy</h2>
        <p class="pp-muted">
          We may update this Privacy Policy from time to time to reflect changes in our practices, services, or legal requirements.
          When we update it, we will change the “Last updated” date at the top of this page. Please review this page periodically.
        </p>

        <hr class="pp-divider">

        <h2 class="pp-h2">14. How to Contact Us</h2>
        <p class="pp-muted">
          If you have questions, concerns, or requests regarding this Privacy Policy or how we handle your information, you can contact us at:
        </p>

        <div class="pp-contact">
          <p class="pp-lead" style="margin-bottom:10px;"><strong>Rehabrion</strong></p>
          <p class="pp-muted" style="margin-bottom:8px;">
            Email: <a href="mailto:info@rehabrion.com">info@rehabrion.com</a>
          </p>
          <p class="pp-muted" style="margin-bottom:8px;">
              <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information" target="_blank" rel="noopener" >
    Phone or WhatsApp:+971 50 565 3483
  </a>
          </p>
          <p class="pp-muted" style="margin-bottom:0;">
            Address: Add your clinic or office address here
          </p>
        </div>

        <div class="pp-note">
          <div style="font-size:18px; line-height:1;">⚠️</div>
          <div>
            <p>
              <strong>Important Note:</strong> This Privacy Policy is provided for general informational purposes and does not constitute legal advice.
              Please consult a qualified legal professional to ensure this policy meets all applicable laws and regulations for your region and practice.
            </p>
          </div>
        </div>

        <div class="pp-footer">
          If you want, I can match this page exactly with your site typography and spacing so it feels identical to other Rehabrion pages.
        </div>

      </div>

    </div>
  </section>

</div>

@endsection
