@extends('Layout.layout')
@section('Content')


@php
  $blogs = $blogs ?? \App\Models\Blog::orderBy('id','desc')->limit(3)->get();
@endphp


    <!-- Hero Section - UPDATED -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <div class="hero-badge floating-icon">
                            <i class="fas fa-badge-check"></i> Trusted by 50,000+ Patients
                        </div>

                        <h1 class="display-4 fw-bold mb-3">Join one of the <span class="accent-text">fastest-growing</span> health-tech companies today!</h1>

                        <p class="lead mb-4">Expert care at home. Recover faster with personalized treatment from licensed physical therapists.</p>

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
    <!-- Hero Section -->
    {{-- <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <h1 class="hero-title mb-4">Join one of the <span class="accent-text">fastest-growing</span> health-tech companies today!</h1>
                        <a class="btn btn-hero" href="https://jobs.lever.co/Rehabrion physicaltherapy" target="_blank" rel="noreferrer noopener">
                            <i class="fas fa-briefcase me-2"></i> See all open positions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

  <!-- HERO -->
  <section class="py-5 py-lg-5">
    <div class="container">
           <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">About Rehabrion</h2>
                </div>
            </div>
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="pe-lg-4">
            <h1  class="display-4 fw-bold mb-3">Rehabrion was born from a simple belief:
</h1>
            <p class="brand-muted mb-4">
                Everyone deserves access to effective, personalized rehab and physical-health care — wherever they are and whenever they need it.
            We exist to remove barriers in rehabilitation and restore dignity to healing.

            </p>

            {{-- <div class="d-flex flex-wrap gap-2">
              <a class="btn btn-brand px-4 py-2" href="/appointment">Check availability</a>
              <a class="btn btn-outline-brand px-4 py-2" href="/conditions-we-treat" target="_blank">Conditions we treat</a>
            </div> --}}
          </div>
        </div>

        <div class="col-lg-6">
          <img
            src="{{ asset("assets/images/rehabrion/help.webp") }}"
            class="img-fluid w-100 rounded-xxl shadow-soft"
            alt="In home physiotherapy"
            loading="lazy"
          />
        </div>
      </div>
    </div>
  </section>
    <!-- About Us Section -->
    <section id="about-us">
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">About Rehabrion</h2>
                </div>
            </div> --}}

            <div class="row justify-content-center mt-4">
                <div class="col-lg-8">
                    <div class="about-content">
                        <h3>OUR MISSION</h3>
                        <p>
                            At Rehabrion, we believe your mobility and comfort matter more than anything. We're dedicated to transforming musculoskeletal (MSK) care and rehabilitation — making it accessible, flexible, and deeply human.
                        </p>

                        <h3>Our goal is simple:</h3>
                        <p>Help you move beyond pain, regain strength, and live fully — with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work For Us -->
    <section id="how-it-works">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">Why work for Rehabrion</h2>
                </div>
            </div>

            <div class="row mt-5 row-equal-height">
                <!-- Feature 1 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://public-assets.getluna.com/images/icons/payment.svg" alt="Personalized Therapy">
                        </div>
                        <h4 class="feature-title">Personalized Physical Therapy & Rehab Plans</h4>
                        <p class="feature-description">Every body is different. We design tailor-made recovery plans for injury rehab, chronic pain, post-surgery care, and preventive therapy.</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://public-assets.getluna.com/images/icons/schedule.svg" alt="Convenient Care">
                        </div>
                        <h4 class="feature-title">Convenient & Accessible Care</h4>
                        <p class="feature-description">Healing comes to your home — or online when needed. No waiting rooms, no travel stress.</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://public-assets.getluna.com/images/icons/engaged-patients.svg" alt="Expert Rehab">
                        </div>
                        <h4 class="feature-title">Expert-Led Rehabilitation</h4>
                        <p class="feature-description">Your care is guided only by trained and experienced professionals.</p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <img src="https://public-assets.getluna.com/images/icons/schedule.svg" alt="Holistic Recovery">
                        </div>
                        <h4 class="feature-title">Holistic & Sustainable Recovery</h4>
                        <p class="feature-description">We focus on long-term strength, posture, movement, and injury prevention.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    {{-- <section id="gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="gallery-title">
                        Picture yourself at Rehabrion
                        <i class="fas fa-heart text-danger"></i>
                    </h2>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Large Image -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-1.webp" class="gallery-img" alt="Rehabrion Team 1">
                </div>

                <!-- Two Small Images -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-2.webp" class="gallery-img" alt="Rehabrion Team 2">
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-3.webp" class="gallery-img" alt="Rehabrion Team 3">
                </div>

                <!-- Left Column with Two Images -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-4.webp" class="gallery-img mb-4" alt="Rehabrion Team 4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-5.webp" class="gallery-img" alt="Rehabrion Team 5">
                </div>

                <!-- Middle Tall Image -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-6.webp" class="gallery-img" alt="Rehabrion Team 6" style="height: 100%; object-fit: cover;">
                </div>

                <!-- Right Large Image -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <img src="https://public-assets.getluna.com/images/Rehabrion-photo-7.webp" class="gallery-img" alt="Rehabrion Team 7">
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Why Rehabrion Is Different -->
    <section id="why-different">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="difference-card">
                        <h2 class="section-title text-center mb-4">WHY REHABRION IS DIFFERENT?</h2>

                        <p class="text-center mb-4">
                            Rehabrion is built around <strong>you</strong> — your life, your goals, and your long-term mobility.
                        </p>

                        <ul class="difference-list">
                            <li><strong>You at the center</strong></li>
                            <li><strong>Flexible & lifestyle-friendly care</strong></li>
                            <li><strong>Human touch + professional excellence</strong></li>
                            <li><strong>Transparent, ethical treatment</strong></li>
                            <li><strong>No unnecessary procedures</strong></li>
                        </ul>

                        <div class="contact-info mt-5">
                            <p class="body-small">
                                or email us at
                                <a href="mailto:info@Rehabrion.com?subject=Contact">info@Rehabrion.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Contact Address -->
                    <div class="text-center mt-5">
                        <p class="h5 mb-3">Corporate Headquarters</p>
                        <p>
                            <i class="fas fa-map-marker-alt me-2"></i>
House No. 123, Street 45, Sector G 11
Islamabad, Pakistan                        </p>
                        <p>
                            {{-- <i class="fas fa-phone me-2"></i> --}}
                            {{-- <a href="tel:(866) 525-3175">(866) 525-3175</a> --}}

                            <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information"
       target="_blank"
       rel="noopener" class="btn btn-hero-secondary">
                               <i class="fas fa-phone-volume "></i>
+971 50 565 3483
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Vision Section -->
    <section id="our-vision">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="vision-card">
                        <h2 class="section-title text-center mb-4">OUR VISION</h2>

                        <p class="text-center mb-4">
                            We imagine a world where rehab and musculoskeletal health are not luxuries,
                            but a basic right for every person.
                        </p>

                        <p class="text-center mb-4">
                            With Rehabrion, recovery becomes:
                        </p>

                        <ul class="difference-list ">
                            <li><strong>Personal</strong> – shaped around your body and your goals.</li>
                            <li><strong>Proactive</strong> – focusing on prevention, not just pain relief.</li>
                            <li><strong>Accessible</strong> – support at home or online, when you need it.</li>
                            <li><strong>Empowering</strong> – helping you understand, move, and live with confidence.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="final-cta">
        <div class="container">
            <div class="journey-cta-inner">
                <div class="journey-cta-left">
                    <div class="journey-pill">FINAL STEP</div>
                    <h2 class="journey-heading">Join Us on the Journey</h2>

                    <p class="journey-text">
                        If you're ready to reclaim your movement, strength, and a pain-free life — we're here.
                    </p>

                    <p class="journey-text">
                        From your first consultation to full recovery and beyond — Rehabrion stands beside you.
                    </p>

                    <ul class="journey-list">
                        <li>Because for us — it's not just therapy.</li>
                        <li>It's transformation.</li>
                    </ul>

                    <a href="{{ asset('/submit-medical-history') }}" class="journey-btn">
                        <i class="fas fa-calendar-check me-2"></i> Book your first consultation
                    </a>
                </div>

                <div class="journey-cta-right">
                    <div class="journey-highlight-card">
                        <h3>Ready to begin?</h3>
                        <p>
                            Tell us about your pain, goals, and daily routine — we'll help you build
                            a rehab plan that fits your life.
                        </p>

                        <div class="journey-contact">
                            <strong>Call us or WhatsApp:</strong><br>
                            <span>+92 XXX XXXXXXX</span>
                        </div>

                        <div class="journey-contact">
                            <strong>Or Email:</strong><br>
                            <a href="mailto:info@Rehabrion.com">info@Rehabrion.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Blogs Section -->
    {{-- <section id="related-blogs">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="divider"></div>
                    <h2 class="section-title">Related articles</h2>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Blog 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <div class="blog-img-container">
                            <img src="https://public-assets.getluna.com/images/posts/c3e4a5cc_2f98_41c4_a39b_8c5feb346bf7/20250425_140401_cover.png" class="blog-img" alt="Scaling Success">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center mb-3">
                                <span class="blog-category">Employees</span>
                                <span class="blog-date">Apr 30, 2025</span>
                            </div>
                            <h4 class="blog-title">Scaling Success: How Rehabrion Builds Careers Like a Well-Planned Supply Chain</h4>
                            <p class="blog-excerpt">Rehabrion doesn't just scale headcount—it scales careers. Learn how a structured promotion system, intentional leadership development, and employee-led initiatives shape career growth across the organization.</p>
                            <a href="/blog/scaling-success-career-growth-at-Rehabrion" class="blog-link">Read more →</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <div class="blog-img-container">
                            <img src="https://public-assets.getluna.com/images/posts/d94c91d3_a853_4bfa_94ea_3e13f08624be/20250318_150356_cover.png" class="blog-img" alt="Forbes Ranking">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center mb-3">
                                <span class="blog-category">Employees</span>
                                <span class="blog-date">Apr 28, 2025</span>
                            </div>
                            <h4 class="blog-title">Forbes Ranks Rehabrion #1 in MSK Care, #3 in Healthcare, and #61 Among Best Startup Employers in 2025</h4>
                            <p class="blog-excerpt">Rehabrion has been ranked #61 on Forbes' 2025 Best Startup Employers list, rising from #111 in 2024 and securing the #1 spot in MSK care.</p>
                            <a href="/blog/2025-forbes-announcement" class="blog-link">Read more →</a>
                        </div>
                    </div>
                </div>

                <!-- Blog 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blog-card">
                        <div class="blog-img-container">
                            <img src="https://public-assets.getluna.com/images/posts/753f5a5b_26ce_4630_b834_4827627f6d58/20250228_130237_cover.png" class="blog-img" alt="Meet John Seguin">
                        </div>
                        <div class="blog-content">
                            <div class="d-flex align-items-center mb-3">
                                <span class="blog-category">Partners</span>
                                <span class="blog-date">Mar 7, 2025</span>
                            </div>
                            <h4 class="blog-title">Meet John Seguin: Building Lasting Healthcare Partnerships at Rehabrion</h4>
                            <p class="blog-excerpt">John Seguin, VP of Health System Partnerships at Rehabrion, shares insights on his career, what drew him to Rehabrion, and his vision for building lasting health system collaborations.</p>
                            <a href="/blog/meet-john-seguin" class="blog-link">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <a href="/blog" class="btn btn-all-articles">
                        <i class="fas fa-newspaper me-2"></i> See All Related Articles
                    </a>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Related Blogs Section -->
<section id="related-blogs">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="divider"></div>
        <h2 class="section-title">Related articles</h2>
      </div>
    </div>

    <div class="row mt-4">
      @forelse($blogs as $item)
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="blog-card h-100">
            <div class="blog-img-container">
              <img src="{{ asset($item->featured_image) }}"
                   class="blog-img"
                   alt="{{ $item->title }}">
            </div>

            <div class="blog-content">
              <div class="d-flex align-items-center mb-3">
                <span class="blog-category">Articles</span>
                <span class="blog-date">
                  {{ \Carbon\Carbon::parse($item->date)->format('M d, Y') }}
                </span>
              </div>

              <h4 class="blog-title">{{ $item->title }}</h4>

              <p class="blog-excerpt">
                {{ \Illuminate\Support\Str::limit(strip_tags($item->short_description), 150) }}
              </p>

              <a href="{{ route('Home.blogs_details', $item->slug) }}" class="blog-link">
                Read more →
              </a>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p>No articles found.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>


@endsection

