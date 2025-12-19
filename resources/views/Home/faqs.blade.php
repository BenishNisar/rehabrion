@extends("Layout.layout")
@section("Content")

<!-- FAQs -->
<section class="rb-faq py-5">
  <div class="container">
    <div class="text-center mb-4">
      <span class="rb-pill mb-2 d-inline-flex align-items-center gap-2">
        <i class="fa-solid fa-circle-question"></i> FAQs
      </span>
      <h2 class="fw-bold mb-2">Frequently Asked Questions</h2>
      <p class="text-muted mb-0 mx-auto rb-faq-sub">
        Quick answers about booking, sessions, home care, and treatment.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">
        <div class="rb-faq-card p-3 p-md-4">
          <div class="accordion rb-acc" id="faqAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header" id="h1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c1" aria-expanded="true" aria-controls="c1">
                  Do I need a doctor's referral to book a session?
                </button>
              </h2>
              <div id="c1" class="accordion-collapse collapse show" aria-labelledby="h1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  No. You can directly book a physiotherapy consultation with Rehabrion. If you already have medical reports or prescriptions, our therapist will review them during assessment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2" aria-expanded="false" aria-controls="c2">
                  Do you provide home-care physiotherapy?
                </button>
              </h2>
              <div id="c2" class="accordion-collapse collapse" aria-labelledby="h2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. Home-care physiotherapy is one of our core services. Our licensed physiotherapists visit you at your home and provide one-on-one treatment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3">
                  Do you offer online or virtual consultations?
                </button>
              </h2>
              <div id="c3" class="accordion-collapse collapse" aria-labelledby="h3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. We offer online physiotherapy consultations and guided rehab sessions when in-person visits are not required or feasible.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4" aria-expanded="false" aria-controls="c4">
                  How long is a physiotherapy session?
                </button>
              </h2>
              <div id="c4" class="accordion-collapse collapse" aria-labelledby="h4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Session duration depends on your condition, but typically ranges between 45 to 60 minutes to ensure effective and focused treatment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                  What conditions do you treat?
                </button>
              </h2>
              <div id="c5" class="accordion-collapse collapse" aria-labelledby="h5" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We treat MSK pain, back, neck and joint pain, post-surgical rehab, sports injuries, mobility and posture issues, and chronic pain conditions.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c6" aria-expanded="false" aria-controls="c6">
                  How many sessions will I need?
                </button>
              </h2>
              <div id="c6" class="accordion-collapse collapse" aria-labelledby="h6" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Recovery time varies. After your initial consultation, your therapist will recommend a treatment plan and an estimated number of sessions.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c7" aria-expanded="false" aria-controls="c7">
                  Will the same therapist visit me every time?
                </button>
              </h2>
              <div id="c7" class="accordion-collapse collapse" aria-labelledby="h7" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, whenever possible. We aim to maintain continuity of care by assigning the same therapist throughout your treatment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c8" aria-expanded="false" aria-controls="c8">
                  Is home physiotherapy safe?
                </button>
              </h2>
              <div id="c8" class="accordion-collapse collapse" aria-labelledby="h8" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes. Home physiotherapy is safe, effective, and widely recommended, especially for patients who prefer treatment in a comfortable environment.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="h9">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c9" aria-expanded="false" aria-controls="c9">
                  What should I prepare before a home session?
                </button>
              </h2>
              <div id="c9" class="accordion-collapse collapse" aria-labelledby="h9" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Keep a clean space with enough room to move, wear comfortable clothing, and keep any medical reports or imaging available.
                </div>
              </div>
            </div>

            <div class="accordion-item border-0">
              <h2 class="accordion-header" id="h10">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c10" aria-expanded="false" aria-controls="c10">
                  How do I book an appointment?
                </button>
              </h2>
              <div id="c10" class="accordion-collapse collapse" aria-labelledby="h10" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can book through our website or contact our team directly. Our support team will guide you through the process.
                </div>
              </div>
            </div>

          </div>

          <div class="rb-faq-cta mt-4 p-3 p-md-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div>
              <div class="fw-bold">Still have questions?</div>
              <div class="text-muted small">Talk to our team and get quick guidance.</div>
            </div>
            <div class="d-flex gap-2">
              <a href="tel:+971 50 565 3483" class="btn rb-btn px-3">Call Now</a>
              <a href="/appointment" class="btn rb-btn-outline px-3">Book Appointment</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- End FAQs -->

@endsection
