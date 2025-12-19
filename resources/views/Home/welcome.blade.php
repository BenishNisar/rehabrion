@extends("Layout.layout")
@section("Content")


    <!-- Hero Section - UPDATED -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <div class="hero-badge floating-icon">
                            <i class="fas fa-badge-check"></i> Trusted by 50,000+ Patients
                        </div>

                        <h1 class="display-4 fw-bold mb-3">Rehab & Physical Care,
<br><span class="text-dark">Delivered to You</span></h1>

                        <p class="lead mb-4">Personalized rehabilitation and musculoskeletal care — wherever you are, whenever you need it.
</p>

                        <div class="hero-cta-buttons">
                            <a href="{{ asset('/submit-medical-history') }}" class="btn btn-hero-primary">
                                <i class="fas fa-calendar-check"></i> Book Consultation
                            </a>

                            <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information"
       target="_blank"
       rel="noopener" class="btn btn-hero-secondary">
                               <i class="fas fa-phone-volume "></i>
+971 50 565 3483
                            </a>
                        </div>

                        <div class="hero-stats">
                            <div class="stat-item">
                                <div class="stat-number">3,000+</div>
                                <div class="stat-label">Licensed Therapists</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">States Covered</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">98%</div>
                                <div class="stat-label">Patient Satisfaction</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">24/7</div>
                                <div class="stat-label">Support Available</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Vetted Therapists -->
    <section id="expert-vetted" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">Expert Physiotherapy & Rehabilitation Team</h2>
                    <p class="section-subtitle">
At Rehabrion, your recovery is guided by trained, experienced, and compassionate professionals who specialize in musculoskeletal (MSK) care and modern rehabilitation techniques.
                    </p>
                </div>
            </div>

            <!-- Therapists Carousel -->
            <div class="position-relative mt-4">
                <div class="owl-carousel owl-theme" id="therapists-carousel">
                    <!-- Therapist 1 -->
                    <div class="item">
                        <div class="therapist-card">
                            <div class="therapist-img-container">
                                <img src="https://prpphysio.com/wp-content/uploads/2022/10/PRP-Web-56-819x1024.webp" class="therapist-img" alt="Amanda F.">
                                <div class="therapist-badge">
                                    <i class="fas fa-award me-1"></i> Expert
                                </div>
                            </div>
                            <div class="therapist-info">
                                <h4 class="fw-bold">Amanda F.</h4>
                                <h6 class="text-secondary mb-3"><i class="fas fa-graduation-cap me-2"></i> Doctor of Physical Therapy</h6>
                                <p class="mb-2"><strong><i class="fas fa-star me-2"></i> Specializes in:</strong></p>
                                <p class="specialty-list">Geriatric, Orthopedics and Sport Medicine</p>
                            </div>
                        </div>
                    </div>

                    <!-- Therapist 2 -->
                    <div class="item">
                        <div class="therapist-card">
                            <div class="therapist-img-container">
                                <img src="https://public-assets.getluna.com/images/therapists/20230314_100348_joshua_arellano.webp" class="therapist-img" alt="Joshua A.">
                                <div class="therapist-badge">
                                    <i class="fas fa-award me-1"></i> Expert
                                </div>
                            </div>
                            <div class="therapist-info">
                                <h4 class="fw-bold">Joshua A.</h4>
                                <h6 class="text-secondary mb-3"><i class="fas fa-graduation-cap me-2"></i> Physical Therapist</h6>
                                <p class="mb-2"><strong><i class="fas fa-star me-2"></i> Specializes in:</strong></p>
                                <p class="specialty-list">Geriatrics, Orthopedics and Sports Medicine, Sports Injuries, ACL Rehab, Spinal Rehab</p>
                            </div>
                        </div>
                    </div>

                    <!-- Therapist 3 -->
                    <div class="item">
                        <div class="therapist-card">
                            <div class="therapist-img-container">
                                <img src="https://public-assets.getluna.com/images/therapists/20230314_100356_karen_khuu.webp" class="therapist-img" alt="Karen K.">
                                <div class="therapist-badge">
                                    <i class="fas fa-award me-1"></i> Expert
                                </div>
                            </div>
                            <div class="therapist-info">
                                <h4 class="fw-bold">Karen K.</h4>
                                <h6 class="text-secondary mb-3"><i class="fas fa-graduation-cap me-2"></i> Doctor of Physical Therapy</h6>
                                <p class="mb-2"><strong><i class="fas fa-star me-2"></i> Specializes in:</strong></p>
                                <p class="specialty-list">Orthopedics and Sports Medicine, Pelvic Floor</p>
                            </div>
                        </div>
                    </div>

                    <!-- Did You Know Card -->
                    <div class="item">
                        <div class="know-card">
                            <h3 class="fw-bold mb-3"><i class="fas fa-lightbulb me-2"></i> Did you know?</h3>
                            <p class="mb-4">100% of Rehabrion therapists are licensed board-certified physical therapists and on average have more than 10 years of experience.</p>
                            <a href="/appointment" class="btn"><i class="fas fa-calendar-check me-2"></i> Book Consultation</a>
                        </div>
                    </div>

                    <!-- Therapist 4 -->
                    <div class="item">
                        <div class="therapist-card">
                            <div class="therapist-img-container">
                                <img src="https://public-assets.getluna.com/images/therapists/20230314_100303_mika_toribara.webp" class="therapist-img" alt="Mika T.">
                                <div class="therapist-badge">
                                    <i class="fas fa-award me-1"></i> Expert
                                </div>
                            </div>
                            <div class="therapist-info">
                                <h4 class="fw-bold">Mika T.</h4>
                                <h6 class="text-secondary mb-3"><i class="fas fa-graduation-cap me-2"></i> Doctor of Physical Therapy</h6>
                                <p class="mb-2"><strong><i class="fas fa-star me-2"></i> Specializes in:</strong></p>
                                <p class="specialty-list">Sports Rehab, Movement Based Approach, Spinal Rehab, Health Coaching</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Navigation -->
                <div class="luna-carousel-nav prev d-none d-md-flex">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="luna-carousel-nav next d-none d-md-flex">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-center">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                  <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information"
       target="_blank"
       rel="noopener" class="btn btn-purple">
                           <i class="fas fa-phone-volume"></i>
+971 50 565 3483
                        </a>
                        <span class="d-none d-md-inline">or</span>
                        <a href="{{ asset('/submit-medical-history') }}" class="btn btn-outline-purple">
                            <i class="fas fa-calendar-check"></i> Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">How It Works</h2>
                    <p class="section-subtitle">Three simple steps to get expert physical therapy delivered to your doorstep</p>
                </div>
            </div>

            <div class="row mt-5 row-equal-height">
                <!-- Step 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <div class="step-icon">
                            <i class="fas fa-user-check floating-icon"></i>
                        </div>
                        <h4 class="step-title">Get Matched With a Therapist</h4>
                        <p>We assess your condition, goals, and lifestyle before pairing you with the right rehab expert.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <div class="step-icon">
                            <i class="fas fa-home floating-icon"></i>
                        </div>
                        <h4 class="step-title">Sessions On Your Schedule</h4>
                        <p>Get therapy at home or online – no clinic stress, no waiting lines, no travel required.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <div class="step-icon">
                            <i class="fas fa-heartbeat floating-icon"></i>
                        </div>
                        <h4 class="step-title">Heal Faster With Expert Care</h4>
                        <p>Track progress, improve mobility, and reduce pain with consistent guided sessions.</p>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 text-center">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                        <a href="tel:+971 50 565 3483" class="btn btn-purple">
                           <i class="fas fa-phone-volume me-2"></i>
 Call +971 50 565 3483
                        </a>
                        <span class="d-none d-md-inline">or</span>
                        <a href="/appointment" class="btn btn-outline-purple">
                            <i class="fas fa-calendar-check"></i> Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials - LUNA STYLE -->
<!-- Testimonials -->
<!-- Testimonials -->
<section id="testimonials" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="divider"></div>
        <h2 class="section-title">
          Thousands of patients <i class="fas fa-heart text-danger mx-2"></i> Rehabrion
        </h2>
      </div>
    </div>

    <div class="testimonials-luna-container position-relative mt-5">

      <!-- Row 1 -->
      <div class="luna-carousel-row-1">
        <div class="owl-carousel owl-theme" id="testimonials-carousel-1">

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"I feel lucky I found a company called Rehabrion."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Anton S.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"I was able to setup an appointment within a few days. Other places I called could not get me in for another 2-3 weeks."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Anthony K.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"I can't imagine why I would ever go back to an actual PT office. Bottom line I love Rehabrion."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> T.C.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"Fantastic! It was so convenient having my daughter treated at home. My daughter loved her therapist!"</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Linda F.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"We feel blessed to have such a wonderful physical therapist. Thank you Rehabrion."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Darleen B.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Row 2 -->
      <div class="luna-carousel-row-2">
        <div class="owl-carousel owl-theme" id="testimonials-carousel-2">

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"This was my first visit with the therapist and I must say it was great. He was very professional and knowledgeable."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Evelina F.</p>
                <span class="luna-source" title="Yelp Review"><i class="fab fa-yelp"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"Personally, it seems like a no brainer to have a physical therapist come to my office."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Scott S.</p>
                <span class="luna-source" title="Yelp Review"><i class="fab fa-yelp"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"Amazing experience! I definitely recommend Rehabrion!"</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Carol L.</p>
                <span class="luna-source" title="Yelp Review"><i class="fab fa-yelp"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"I have been through PT twice and working with Rehabrion has been much better than dealing with an actual clinic."</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Tyler H.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="luna-testimonial-card">
              <p class="luna-testimonial-text">"All of the treatment time is devoted to me as a patient without distraction, bravo!"</p>
              <div class="luna-testimonial-footer">
                <p class="luna-testimonial-author"><span class="luna-avatar"></span> Robin M.</p>
                <span class="luna-source" title="Google Review"><i class="fab fa-google"></i></span>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Your existing nav buttons can stay if you use them -->
      <div class="luna-carousel-nav prev d-none d-md-flex"><i class="fas fa-chevron-left"></i></div>
      <div class="luna-carousel-nav next d-none d-md-flex"><i class="fas fa-chevron-right"></i></div>

    </div>
  </div>
</section>

<!-- Exclusive Provider -->
<section id="exclusive-provider">
  <div class="container ep-inner">
    <div class="row align-items-center g-4">
      <div class="col-lg-6 col-md-12 ep-left">
        <img src="{{ asset('assets/images/logo/logo.png') }}"
             alt="Rehabrion Provider"
             class="img-fluid mb-3 ep-logo">

        <h3 class="ep-title text-white">Trusted Care. Professional Standards</h3>

        <p class="ep-text">
          Rehabrion follows strict ethical and professional rehabilitation standards. Our methods are built for safety,
          comfort, and real recovery outcomes.
        </p>

        <div class="d-flex gap-2 justify-content-lg-start justify-content-center flex-wrap">
          <a href="{{ asset('/submit-medical-history') }}" class="btn btn-hero-primary">
            <i class="fas fa-calendar-check"></i> Book Consultation
          </a>
        </div>
      </div>

      <div class="col-lg-6 col-md-12">
        <div class="ep-card">
          <h4>
            Why Choose Rehabrion
          </h4>

          <ul class="list-unstyled mb-0 ep-list">
            <li>
              <i class="fas fa-check"></i>
              <div>
                <strong>Evidence based:</strong> Our treatments follow clinically proven methods supported by modern medical research.
              </div>
            </li>

            <li>
              <i class="fas fa-check"></i>
              <div>
                <strong>Medically guided:</strong> Each therapy plan is supervised by qualified professionals and delivered safely at your home.
              </div>
            </li>

            <li>
              <i class="fas fa-check"></i>
              <div>
                <strong>Patient first focused:</strong> We prioritize comfort care and recovery with consistently high patient satisfaction.
              </div>
            </li>

            <li class="mb-0">
              <i class="fas fa-check"></i>
              <div>
                <strong>Outcome driven:</strong> Our approach is focused on measurable recovery results with support from major health coverage plans.
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>
    <!-- Exclusive Provider -->


    <!-- FAQ -->
    {{-- <section id="faq" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="divider"></div>
                    <h2 class="section-title text-center">Frequently Asked Questions</h2>
                    <p class="section-subtitle text-center">Get answers to common questions about our home physical therapy services</p>

                    <div class="accordion mt-4" id="faqAccordion">
                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <i class="fas fa-map-marker-alt me-3"></i> Where are Rehabrion therapists seeing patients?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Rehabrion therapists provide care in homes across 50+ states. You can book directly with Rehabrion. <a href="#" class="text-primary fw-bold">See our service areas.</a>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <i class="fas fa-home me-3"></i> Do you offer home visits?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! At-home physiotherapy is one of our core services. Our licensed therapists come directly to your home, office, or wherever is most convenient for you.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <i class="fas fa-laptop-medical me-3"></i> Do you provide online sessions?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely! Virtual rehab sessions are available for those who prefer telehealth. <a href="#" class="text-primary fw-bold">Read more about prescriptions.</a>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <i class="fas fa-clock me-3"></i> How long will recovery take?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Every case is different. Your therapist will guide you clearly through a personalized recovery plan. <a href="/how-it-works" class="text-primary fw-bold">See our clinic comparison chart.</a>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <i class="fas fa-user-md me-3"></i> Can I see the same physical therapist every session?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We strive to have a single therapist work with each patient for their entire course of care. In very rare cases, your scheduling priorities may require adjustments, but you'll always know who is seeing you for your appointment in advance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<!-- FAQ -->
{{-- <section id="faq" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="divider"></div>
                <h2 class="section-title text-center">Frequently Asked Questions</h2>
                <p class="section-subtitle text-center">
                    Get answers to common questions about our home physical therapy services
                </p>

                <div class="accordion mt-4" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true">
                                <i class="fas fa-map-marker-alt me-3"></i>
                                Where are Rehabrion therapists seeing patients?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Rehabrion therapists provide care in homes across 50+ states.
                                You can book directly with Rehabrion.
                                <a href="#" class="text-primary fw-bold">See our service areas.</a>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse2">
                                <i class="fas fa-home me-3"></i>
                                Do you offer home visits?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! At home physiotherapy is one of our core services.
                                Our licensed therapists come directly to your home, office,
                                or wherever is most convenient for you.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse3">
                                <i class="fas fa-laptop-medical me-3"></i>
                                Do you provide online sessions?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Absolutely! Virtual rehab sessions are available for those
                                who prefer telehealth.
                                <a href="#" class="text-primary fw-bold">
                                    Read more about prescriptions.
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq4">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse4">
                                <i class="fas fa-clock me-3"></i>
                                How long will recovery take?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Every case is different. Your therapist will guide you
                                clearly through a personalized recovery plan.
                                <a href="/how-it-works" class="text-primary fw-bold">
                                    See our clinic comparison chart.
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq5">
                            <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse5">
                                <i class="fas fa-user-md me-3"></i>
                                Can I see the same physical therapist every session?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We strive to have one therapist for your entire course of care.
                                In rare cases, scheduling priorities may require changes,
                                but you will always know in advance.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section> --}}
<!-- FAQs -->
<section class="rb-faq py-5" id="faq">
  <div class="container">

    <div class="text-center mb-4">
      <span class="rb-pill mb-2 d-inline-flex align-items-center gap-2">
        <i class="fa-solid fa-circle-question"></i> FAQs
      </span>

      <h2 class="fw-bold mb-2">Frequently Asked Questions</h2>

      <p class="text-muted mb-0 mx-auto rb-faq-sub">
        Get answers to common questions about our home physical therapy services
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-lg-9">

        <div class="rb-faq-card p-3 p-md-4">
          <div class="accordion rb-acc" id="faqAccordion">

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#f1">
                  <i class="fas fa-map-marker-alt me-3"></i>
                  Do I need a referral to start therapy?
                </button>
              </h2>
              <div id="f1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  You can book directly with Rehabrion.
                  <a href="{{ asset('/submit-medical-history') }}" class="fw-bold" style="color:var(--s)">Book Now</a>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f2">
                  <i class="fas fa-home me-3"></i>
                  Do you offer home visits?
                </button>
              </h2>
              <div id="f2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  Yes, at home physiotherapy is one of our core services.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f3">
                  <i class="fas fa-laptop-medical me-3"></i>
                  Do you provide online sessions?
                </button>
              </h2>
              <div id="f3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                 Virtual rehab sessions are available.
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f4">
                  <i class="fas fa-clock me-3"></i>
                  How long will recovery take?
                </button>
              </h2>
              <div id="f4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
Every case is different. Your therapist will guide you clearly.
                </div>
              </div>
            </div>

            {{-- <div class="accordion-item border-0">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f5">
                  <i class="fas fa-user-md me-3"></i>
                  Can I see the same therapist every session?
                </button>
              </h2>
              <div id="f5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  We aim to assign one therapist for continuity of care whenever possible.
                </div>
              </div>
            </div> --}}

          </div>

          <!-- CTA -->
          {{-- <div class="rb-faq-cta mt-4 p-3 p-md-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
            <div class="text-center text-md-start">
              <div class="fw-bold">Still have questions?</div>
              <div class="text-muted small">Talk to our team and get quick guidance.</div>
            </div>
            <div class="d-flex gap-2 flex-wrap justify-content-center">
              <a href="tel:+971505653483" class="btn rb-btn">Call Now</a>
              <a href="/appointment" class="btn rb-btn-outline">Book Appointment</a>
            </div>
          </div> --}}

        </div>

      </div>
    </div>

  </div>
</section>

<!-- End FAQs -->

    <!-- Why In-Home Physiotherapy -->
    <section id="why-in-home" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">Why In-Home Physiotherapy Is Better</h2>
                    <p class="section-subtitle">Why Rehabrion's care model works better for your recovery and lifestyle</p>
                </div>
            </div>

            <div class="row mt-4 row-equal-height">
                <!-- Reason 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-user-check why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">Personalized One-on-One Care</h4>
                        <p>Every session is dedicated entirely to you for focused treatment and faster, more effective recovery.</p>
                    </div>
                </div>

                <!-- Reason 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-home why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">No Travel Stress</h4>
                        <p>No traffic, no parking, no waiting rooms. Your physiotherapist comes directly to your home.</p>
                    </div>
                </div>

                <!-- Reason 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-clock why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">Flexible Scheduling</h4>
                        <p>Book sessions at times that easily fit your routine and daily lifestyle.</p>
                    </div>
                </div>

                <!-- Reason 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-heartbeat why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">Faster recovery in familiar environment</h4>
                        <p>Healing in a familiar environment increases comfort, confidence, and speeds up progress.</p>
                    </div>
                </div>

                <!-- Reason 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-user-md why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">Consistent Therapist Support</h4>
                        <p>You work with the same therapist throughout your treatment for better tracking and continuity of care.</p>
                    </div>
                </div>

                <!-- Reason 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="why-grid-card">
                        <div class="why-icon-wrapper">
                            <i class="fas fa-clipboard-check why-icon floating-icon"></i>
                        </div>
                        <h4 class="fw-bold mt-3">Better Adherence to Rehab Plans</h4>
                        <p>Home-based care improves consistency and helps you complete your rehab program successfully.</p>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            <div class="row justify-content-center mt-5">
                <div class="col-lg-8 text-center">
                    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-3">
                        <a href="{{ asset('/submit-medical-history') }}" class="btn btn-purple">
                            <i class="fas fa-calendar-check me-2"></i> Book Consultation
                        </a>
                        <span class="d-none d-md-inline">or</span>
                        <a href="tel:+971 50 565 3483" class="btn btn-outline-purple">
                           <i class="fas fa-phone-volume me-2"></i>
 Call +971 50 565 3483
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
