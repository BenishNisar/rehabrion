@extends("Layout.layout")
@section("Content")


    {{-- Page Hero / Breadcrumb style section --}}
    <section class="bg-purple-000 py-50 py-sm-40 py-xs-30">
        <div class="wrapper px-sm-30 px-xs-30">
            <h1 class="mt-0 color-purple-700 mb-10 text-center font-weight-normal">
                Privacy Policy
            </h1>
            <p class="mb-0 text-center body-small">
                Last updated: {{ date('F d, Y') }}
            </p>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-40 py-sm-30 py-xs-25">
        <div class="wrapper px-sm-30 px-xs-20 mw-900-px mx-auto">

            <p class="mb-20">
                At <strong>Rehabrion  </strong>, your privacy, dignity, and trust are at the center of everything
                we do. This Privacy Policy explains how we collect, use, store, and protect your information
                when you visit our website, contact us, or use our services (in-person, at home, or online).
            </p>

            <p class="mb-30">
                By using our website or sharing your information with us, you agree to the practices described
                in this Privacy Policy. If you do not agree, please do not use this website or submit your
                personal information.
            </p>

            {{-- 1. Who we are --}}
            <h2 class="color-purple-700 mt-0 mb-10">1. Who We Are</h2>
            <p class="mb-20">
                Rehabrion   is a rehabilitation and physical-health service provider focused on personalized,
                accessible, and professional musculoskeletal (MSK) care.
                In this Policy, terms like “<strong>we</strong>”, “<strong>our</strong>”, and “<strong>us</strong>”
                refer to Rehabrion  , and “<strong>you</strong>” refers to our patients, website visitors,
                and other individuals who interact with us.
            </p>

            {{-- 2. Information we collect --}}
            <h2 class="color-purple-700 mt-30 mb-10">2. Information We Collect</h2>
            <p class="mb-10">
                We may collect the following types of information when you interact with Rehabrion  :
            </p>

            <h3 class="color-purple-700 mt-20 mb-5">2.1 Information You Provide Directly</h3>
            <ul class="mb-15 pl-20">
                <li>Full name, contact number, email address</li>
                <li>Home address or preferred location for sessions</li>
                <li>Age, gender, and basic demographic details (if shared)</li>
                <li>Medical/health-related information that you voluntarily provide,
                    such as symptoms, history of injury, pain level, or reports</li>
                <li>Booking or consultation details (preferred time, service type, therapist preference)</li>
                <li>Messages or questions submitted through our contact forms, email, or messaging apps</li>
            </ul>

            <h3 class="color-purple-700 mt-15 mb-5">2.2 Information Collected Automatically</h3>
            <p class="mb-10">
                When you visit our website, certain information may be collected automatically, such as:
            </p>
            <ul class="mb-15 pl-20">
                <li>IP address and approximate location</li>
                <li>Device type, browser type, and operating system</li>
                <li>Pages viewed, time spent on pages, and click/activity data</li>
                <li>Referring website or source of visit (e.g., search engine, social media link)</li>
            </ul>

            <h3 class="color-purple-700 mt-15 mb-5">2.3 Information from Third Parties</h3>
            <p class="mb-20">
                In some cases, we may receive information from:
            </p>
            <ul class="mb-20 pl-20">
                <li>Healthcare providers or referrers (with your consent)</li>
                <li>Payment providers or booking platforms</li>
                <li>Analytics or advertising partners (aggregated, non-identifiable data)</li>
            </ul>

            {{-- 3. How we use your information --}}
            <h2 class="color-purple-700 mt-30 mb-10">3. How We Use Your Information</h2>
            <p class="mb-10">
                We use your information only for legitimate and respectful purposes, including:
            </p>
            <ul class="mb-20 pl-20">
                <li>To schedule, manage, and deliver rehab and physiotherapy services</li>
                <li>To assess your condition and design personalized treatment plans</li>
                <li>To respond to your questions, messages, or appointment requests</li>
                <li>To send important updates such as appointment confirmations or changes</li>
                <li>To improve our website, services, and patient experience</li>
                <li>To maintain clinical records as required by professional and legal standards</li>
                <li>To send educational content, service updates, or offers (only if you consent)</li>
                <li>To comply with legal, regulatory, or professional obligations</li>
            </ul>

            {{-- 4. Legal basis (optional but professional) --}}
            <h2 class="color-purple-700 mt-30 mb-10">4. Legal Basis for Processing (Where Applicable)</h2>
            <p class="mb-20">
                Depending on your location, our processing of your personal data may be based on:
            </p>
            <ul class="mb-20 pl-20">
                <li>Your consent</li>
                <li>The need to perform a contract or provide requested services</li>
                <li>Our legitimate interests in running and improving our clinic and services</li>
                <li>Compliance with legal or regulatory obligations</li>
            </ul>

            {{-- 5. Sharing --}}
            <h2 class="color-purple-700 mt-30 mb-10">5. How We Share Your Information</h2>
            <p class="mb-10">
                We do <strong>not</strong> sell your personal information. We may share your information only with:
            </p>
            <ul class="mb-20 pl-20">
                <li>
                    <strong>Rehabrion   team members</strong> – physiotherapists, clinical staff,
                    and administrative staff who are involved in your care.
                </li>
                <li>
                    <strong>Healthcare providers</strong> – only with your consent, if we need to coordinate
                    with your doctor, specialist, or hospital.
                </li>
                <li>
                    <strong>Service providers</strong> – such as IT support, hosting providers,
                    email or SMS platforms, payment processors, or analytics services.
                    These providers are required to protect your information and use it only for our instructions.
                </li>
                <li>
                    <strong>Legal or regulatory authorities</strong> – where required by law, court order,
                    or to protect our rights, safety, or the safety of others.
                </li>
            </ul>

            {{-- 6. Cookies --}}
            <h2 class="color-purple-700 mt-30 mb-10">6. Cookies and Tracking Technologies</h2>
            <p class="mb-10">
                Our website may use cookies and similar technologies to:
            </p>
            <ul class="mb-20 pl-20">
                <li>Remember your preferences and improve your browsing experience</li>
                <li>Measure website traffic and performance</li>
                <li>Understand which content or pages are most helpful to visitors</li>
            </ul>
            <p class="mb-20">
                You can change your browser settings to block or delete cookies. However, some parts of the
                website may not work correctly if cookies are disabled.
            </p>

            {{-- 7. Retention --}}
            <h2 class="color-purple-700 mt-30 mb-10">7. How Long We Keep Your Information</h2>
            <p class="mb-20">
                We keep your information only for as long as necessary to fulfil the purposes described in this
                Policy or as required by law, professional guidelines, or clinical record standards. When your
                information is no longer needed, we will securely delete or anonymize it.
            </p>

            {{-- 8. Security --}}
            <h2 class="color-purple-700 mt-30 mb-10">8. How We Protect Your Information</h2>
            <p class="mb-20">
                We take reasonable technical and organizational measures to safeguard your information against
                loss, misuse, unauthorized access, disclosure, or alteration. While we work hard to protect your
                data, no system can be guaranteed to be 100% secure, and you share information with us at your own risk.
            </p>

            {{-- 9. Children --}}
            <h2 class="color-purple-700 mt-30 mb-10">9. Children’s Privacy</h2>
            <p class="mb-20">
                Our services may be provided to children or minors under the supervision and consent of a parent
                or legal guardian. We do not knowingly collect personal information directly from children without
                such consent. If you believe a child has provided us information without appropriate consent,
                please contact us so we can delete it where required.
            </p>

            {{-- 10. International transfers --}}
            <h2 class="color-purple-700 mt-30 mb-10">10. International Data Transfers</h2>
            <p class="mb-20">
                Depending on your location and the location of our service providers, your information may be
                stored or processed in countries that may have different data protection laws than your own.
                We take steps to ensure that any such transfers comply with applicable legal requirements and
                that your data remains protected.
            </p>

            {{-- 11. Your rights --}}
            <h2 class="color-purple-700 mt-30 mb-10">11. Your Rights and Choices</h2>
            <p class="mb-10">
                Subject to applicable law, you may have the right to:
            </p>
            <ul class="mb-20 pl-20">
                <li>Access the personal information we hold about you</li>
                <li>Request corrections or updates to your information</li>
                <li>Request deletion of your information in certain circumstances</li>
                <li>Object to or restrict certain types of processing</li>
                <li>Withdraw consent at any time (where processing is based on consent)</li>
                <li>Opt out of marketing communications</li>
            </ul>
            <p class="mb-20">
                To exercise these rights, please contact us using the details provided in the
                <strong>“Contact Us”</strong> section below. We may need to verify your identity before responding.
            </p>

            {{-- 12. Third-party links --}}
            <h2 class="color-purple-700 mt-30 mb-10">12. Third-Party Websites and Services</h2>
            <p class="mb-20">
                Our website may contain links to third-party websites, apps, or services that are not controlled
                by Rehabrion  . We are not responsible for the privacy practices of these third parties. We recommend
                that you review their privacy policies before providing any personal information.
            </p>

            {{-- 13. Changes --}}
            <h2 class="color-purple-700 mt-30 mb-10">13. Changes to This Privacy Policy</h2>
            <p class="mb-20">
                We may update this Privacy Policy from time to time to reflect changes in our practices, services,
                or legal requirements. When we update it, we will change the “Last updated” date at the top of
                this page. We encourage you to review this page regularly to stay informed about how we protect
                your information.
            </p>

            {{-- 14. Contact --}}
            <h2 class="color-purple-700 mt-30 mb-10">14. How to Contact Us</h2>
            <p class="mb-10">
                If you have any questions, concerns, or requests regarding this Privacy Policy or how we
                handle your information, you can contact us at:
            </p>

            <p class="mb-5"><strong>Rehabrion  </strong></p>
            <p class="mb-5">
                Email:
                <a href="mailto:info@Rehabrion  .com">info@Rehabrion  .com</a>
            </p>
            <p class="mb-5">
                Phone / WhatsApp: +92 XXX XXXXXXX
            </p>
            <p class="mb-0">
                Address: [Add your clinic or office address here]
            </p>

            <hr class="w-85 w-md-100 w-sm-100 w-xs-100 border-base-300 mt-30">

            <p class="body-small color-base-700 mt-10 mb-0">
                This Privacy Policy is provided for general informational purposes and does not constitute legal advice.
                Please consult a qualified legal professional to ensure this Policy meets all applicable laws
                and regulations for your region and practice.
            </p>

        </div>
    </section>


@endsection
