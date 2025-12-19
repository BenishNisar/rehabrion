@extends("Layout.layout")
@section("Content")
@php
  $blogs = $blogs ?? \App\Models\Blog::orderBy('id','desc')->limit(3)->get();
@endphp

<main class="how-it-works-page theme-rehab">

  <style>

    :root{
      --brand-primary:#bae0db;
      --brand-secondary:#7a958f;
      --brand-dark:#1f2d2a;
      --brand-soft:#f5fbfa;
    }

    .theme-rehab .brand-title{ color: var(--brand-dark); }
    .theme-rehab .brand-muted{ color: rgba(31,45,42,.75); }
    .theme-rehab .bg-soft{ background: var(--brand-soft); }
    .theme-rehab .shadow-soft{ box-shadow: 0 10px 30px rgba(31,45,42,.08); }
    .theme-rehab .card-soft{
      background:#fff;
      border:1px solid rgba(122,149,143,.20);
      border-radius:18px;
    }
    .theme-rehab .rounded-xxl{ border-radius:20px; }
    .theme-rehab .accent-line{
      width:70px;height:6px;border-radius:99px;
      background: linear-gradient(90deg, var(--brand-primary), var(--brand-secondary));
    }

    .theme-rehab .btn-brand{
      background: var(--brand-primary);
      border-color: var(--brand-primary);
      color: var(--brand-dark);
      font-weight: 600;
    }
    .theme-rehab .btn-brand:hover{
      background:#a9d7d1;
      border-color:#a9d7d1;
      color: var(--brand-dark);
    }
    .theme-rehab .btn-outline-brand{
      border-color: var(--brand-secondary);
      color: var(--brand-secondary);
      font-weight: 600;
    }
    .theme-rehab .btn-outline-brand:hover{
      background: var(--brand-secondary);
      border-color: var(--brand-secondary);
      color:#fff;
    }

    .theme-rehab .cta-strip{
      background: linear-gradient(90deg, var(--brand-secondary), var(--brand-primary));
      color:#0f1b18;
    }

    .theme-rehab .stat-ring{
      width: 160px;
      height: 160px;
      border-radius: 999px;
      display:flex;
      align-items:center;
      justify-content:center;
      margin: 0 auto;
      background:
        radial-gradient(closest-side, #fff 82%, transparent 83% 100%),
        conic-gradient(var(--brand-secondary) var(--p, 25%), rgba(122,149,143,.18) 0);
      border: 1px solid rgba(122,149,143,.20);
    }
    .theme-rehab .stat-ring .value{
      font-size: 34px;
      font-weight: 800;
      color: var(--brand-dark);
      line-height: 1;
    }

    .theme-rehab .nav-pills .nav-link{
      border:1px solid rgba(122,149,143,.35);
      color: var(--brand-secondary);
      background:#fff;
      border-radius:999px;
      font-weight:600;
      padding:.7rem 1.1rem;
      margin: .35rem;
    }
    .theme-rehab .nav-pills .nav-link.active{
      /* background: var(--brand-secondary); */
      border-color: var(--brand-secondary);
      color:#fff;
    }

    .theme-rehab .resource-img{
      width: 100%;
      height: 170px;
      object-fit: cover;
      border-radius: 14px;
      border: 1px solid rgba(122,149,143,.20);
    }

    .theme-rehab .overlay-banner{
      position: relative;
      border-radius: 22px;
      overflow: hidden;
      background-size: cover;
      background-position: center;
      min-height: 240px;
      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
    }
    .theme-rehab .overlay-banner:before{
      content:"";
      position:absolute; inset:0;
      background: linear-gradient(120deg, rgba(122,149,143,.88), rgba(186,224,219,.78));
    }
    .theme-rehab .overlay-banner .inner{
      position:relative;
      padding: 48px 18px;
      max-width: 900px;
    }

    .theme-rehab .logos-bar img{
      max-height: 52px;
      width: auto;
      opacity: .95;
      filter: saturate(.9);
    }

    .theme-rehab .modal-content{
      border-radius: 18px;
      border: 1px solid rgba(122,149,143,.20);
      box-shadow: 0 18px 60px rgba(31,45,42,.18);
    }

    @media (max-width: 575.98px){
      .theme-rehab .stat-ring{ width: 140px; height: 140px; }
      .theme-rehab .stat-ring .value{ font-size: 30px; }
    }
    .brand-muted{
        font-size:20px;
    }


    /* CTA STRIP styling keep professional and bold heading */
.cta-strip{
  background: linear-gradient(90deg, rgba(122,149,143,.95), rgba(186,224,219,.95));
  border-top: 1px solid rgba(255,255,255,.35);
  border-bottom: 1px solid rgba(0,0,0,.06);
}

.cta-strip__title{
  font-size: 40px;
  font-weight: 900;
  letter-spacing: .2px;
  color: #0f1b18;
  line-height: 1.1;
}

.cta-strip__sub{
  font-size: 18px;
  font-weight: 600;
    color: white;  margin-top: 4px;
}
.cta-strip .d-flex{
    align-items: center !important;
}

.cta-strip__text{
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.cta-strip .btn-outline-purple{
    margin-left: auto;
    white-space: nowrap;
    line-height: 1;
}

@media (max-width: 767.98px){
  .cta-strip__title{ font-size: 22px; }
}

  </style>

  <!-- HERO -->
  <section class="py-5 py-lg-5">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="pe-lg-4">
            <h1  class="display-4 fw-bold mb-3">We’re helping people get care and feel better at home...</h1>
            <p class="brand-muted mb-4">
              Our Clinical Method combines exceptional therapists, in home care delivery, and integrated care coordination to ensure that each and every patient reaches their recovery goals.
            </p>

            {{-- <div class="d-flex flex-wrap gap-2">
              <a class="btn btn-brand px-4 py-2" href="/appointment">Book Consultation</a>
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

  <!-- CTA STRIP -->
<!-- CTA STRIP -->
<section class="cta-strip py-3 d-none d-sm-block">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between text-center text-md-start gap-3">

      <!-- Professional banner heading -->
      <div class="cta-strip__text">
        <h3 class="cta-strip__title mb-0">
          Proudly serving patients across Pakistan
        </h3>
        <p class="cta-strip__sub mb-0">
          In home physiotherapy, flexible appointments, and trusted care coordination
        </p>
      </div>

      {{-- <a class="btn btn-light btn-outline-purple shadow-soft px-4 py-2 fw-semibold text-light"
         href="{{ asset('/submit-medical-history') }}" target="_blank">
        Book Consultation
      </a> --}}

                        <a href="{{ asset('/submit-medical-history') }}" class="btn btn-outline-purple" style="background-color:#7a958f !important;color:white!important">
                            <i class="fas fa-calendar-check me-2"></i> Book Consultation
                        </a>

    </div>
  </div>
</section>


  <!-- STATS RINGS -->
  <section class="py-5 bg-soft">
    <div class="container">
      <div class="text-center mb-4">
        <div class="accent-line mx-auto mb-3"></div>
        <h2 class="section-title">Clinic based care doesn’t work for most patients</h2>
        <p class="brand-muted mb-0">Sadly, no shows, cancellations, and drop outs are the norm in physical therapy.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <div class="stat-ring" style="--p:21%;">
              <div class="value">21%</div>
            </div>
            <p class="mt-3 mb-0">
              21% of patients who are prescribed physical therapy never start treatment.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <div class="stat-ring" style="--p:30%;">
              <div class="value">30%</div>
            </div>
            <p class="mt-3 mb-0">
              Only 30% of patients who start physical therapy finish their care plan the rest give up.
            </p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <div class="stat-ring" style="--p:42%;">
              <div class="value">42%</div>
            </div>
            <p class="mt-3 mb-0">
              42% of patients report being dissatisfied with their physical therapy options.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- How It Works -->

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
                        <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information" target="_blank" rel="noopener" class="btn btn-purple">
                           <i class="fas fa-phone-volume me-2"></i>
 Call +971 50 565 3483

                        </a>
                        <span class="d-none d-md-inline">or</span>
                        <a href="{{ '/submit-medical-history' }}" class="btn btn-outline-purple">
                            <i class="fas fa-calendar-check me-2"></i> Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- CLINICAL METHOD -->
  <section class="py-5 bg-soft" id="clinical-method">
    <div class="container">
      <div class="text-center mb-4">
        <div class="accent-line mx-auto mb-3"></div>
        <h2 class="section-title">The Rehabrion Clinical Method</h2>
        <p class="brand-muted mb-0" style="max-width: 900px; margin: 0 auto;">
          The Rehabrion Clinical Method is based on three key pillars designed to ensure that all patients experience the full healing potential of physical therapy.
        </p>
      </div>

      <!-- Desktop pills -->
      <ul class="nav nav-pills justify-content-center d-none d-md-flex mb-4" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-one" type="button" role="tab">
            1. Exceptional therapists
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-two" type="button" role="tab">
            2. In home care delivery
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-three" type="button" role="tab">
            3. Integrated care coordination
          </button>
        </li>
      </ul>

      <!-- Mobile select -->
      <div class="d-md-none mb-4">
        <select id="clinicalSelect" class="form-select">
          <option value="#tab-one" selected>1. Exceptional therapists</option>
          <option value="#tab-two">2. In home care delivery</option>
          <option value="#tab-three">3. Integrated care coordination</option>
        </select>
      </div>

      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="tab-content card-soft shadow-soft p-4">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel">
              <p class="mb-3">The Rehabrion Clinical Method starts with the wonderful group of physical therapists who we hand select for the platform:</p>
              <ul class="mb-0">
                <li class="mb-2">The average Rehabrion therapist has over 10 years of experience.</li>
                <li class="mb-2">All Rehabrion therapists have at least 3 years of experience.</li>
                <li class="mb-2">All Rehabrion therapists are vetted, licensed, and insured.</li>
                <li class="mb-2">Over 50% of Rehabrion therapists are doctorates of PT.</li>
                <li class="mb-2">Rehabrion therapists are trained in <a href="/conditions-we-treat" target="_blank">many different specialties</a>.</li>
                <li>Only therapists with the best patient feedback are on Rehabrion.</li>
              </ul>
            </div>

            <div class="tab-pane fade" id="tab-two" role="tabpanel">
              <p class="mb-3">The Rehabrion Clinical Method is based on a simple belief: patients recover best where they feel most comfortable at home.</p>
              <ul class="mb-0">
                <li class="mb-2">87% of physical therapy programs can be done at home.</li>
                <li class="mb-2">90% of patients choose in home convenience over a facility.</li>
                <li class="mb-2">Sessions are 45 to 55 minutes of one to one time with a licensed PT.</li>
                <li class="mb-2">Rehabrion care plans are tailored to each patient's environment.</li>
                <li class="mb-2">Rehabrion patients stay with the same PT for their entire journey.</li>
                <li>80% plus of Rehabrion patients meet their recovery goals.</li>
              </ul>
            </div>

            <div class="tab-pane fade" id="tab-three" role="tabpanel">
              <p class="mb-3">The Rehabrion Clinical Method leverages integrated care coordination, so you can:</p>
              <ul class="mb-0">
                <li class="mb-2">Personalize your care plan with notes from your doctor.</li>
                <li class="mb-2">Chat with your therapist anytime in between sessions.</li>
                <li class="mb-2">Access video exercise plans prescribed by your PT.</li>
                <li class="mb-2">Keep caregivers informed with automated updates.</li>
                <li class="mb-2">Issues are directly escalated to your doctor for visibility.</li>
                <li>We'll get a prescription from your doctor for you, if needed.</li>
              </ul>
            </div>
          </div>

          <div class="text-center mt-4 d-flex flex-wrap gap-2 ">
            <button class="btn btn-outline-brand px-4 py-2" data-bs-toggle="modal" data-bs-target="#modalPrescription">Prescription rules</button>
            {{-- <button class="btn btn-outline-brand px-4 py-2" data-bs-toggle="modal" data-bs-target="#modalBrands">Insurance partners</button> --}}
          </div>
        </div>

        <div class="col-lg-6 text-center">
          <img class="img-fluid w-100 rounded-xxl"
               src="{{ asset("assets/images/rehabrion/doctor.webp") }}"
               alt="Clinical methods"
               loading="lazy">
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT YOU BANNER -->
  <section class="py-5">
    <div class="container">
      <div class="overlay-banner shadow-soft"
           style="background-image:url('https://www.getRehabrion.com/images/how-it-works.jpg');">
        <div class="inner">
          <h2 class="text-white fw-semibold mb-0">Did you know...over 20,000 physicians actively refer to Rehabrion?</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- RESOURCES -->
  {{-- <section class="py-5 bg-soft" id="resources">
    <div class="container">
      <div class="text-center mb-4">
        <div class="accent-line mx-auto mb-3"></div>
        <h2 class="brand-title fw-normal mb-0">Research on the Rehabrion Clinical Method</h2>
      </div>

      <div class="row g-4">
        <div class="col-lg-4">
          <a href="/resources/exceptional-cms-medicare-provider" class="text-decoration-none text-dark">
            <div class="card-soft shadow-soft p-3 h-100">
              <img class="resource-img mb-3" src="https://public-assets.getRehabrion.com/images/resources/20240214_110237_299b0be1-ac7b-44ef-98cf-cbac7134224f_resource.webp" alt="Resource 1" loading="lazy">
              <h5 class="brand-title fw-semibold mb-2">Rehabrion’s Excellence in Outpatient Physical Therapy</h5>
              <p class="brand-muted mb-0">This article analyzes Rehabrion's recognition as an Exceptional Provider by CMS via MIPS for two consecutive years.</p>
              <div class="mt-3 fw-semibold" style="color:var(--brand-secondary);">Read more</div>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="/resources/pathways-whitepaper" class="text-decoration-none text-dark">
            <div class="card-soft shadow-soft p-3 h-100">
              <img class="resource-img mb-3" src="https://public-assets.getRehabrion.com/images/resources/20230828_150802_da5d3048-2bf0-480b-b6b8-815e1596fb68_resource.webp" alt="Resource 2" loading="lazy">
              <h5 class="brand-title fw-semibold mb-2">Improving Clinical Outcomes After Total Joint Replacement</h5>
              <p class="brand-muted mb-0">Rehabrion Pathways optimizes patient outcomes through coordinated postoperative care, including communication and transparency.</p>
              <div class="mt-3 fw-semibold" style="color:var(--brand-secondary);">Read more</div>
            </div>
          </a>
        </div>

        <div class="col-lg-4">
          <a href="/resources/analysis-of-patient-care-preferences-for-physical-therapy" class="text-decoration-none text-dark">
            <div class="card-soft shadow-soft p-3 h-100">
              <img class="resource-img mb-3" src="https://public-assets.getRehabrion.com/images/resources/20230725_150733_600024c0-9053-480a-a43d-e4e9d9855577_resource.webp" alt="Resource 3" loading="lazy">
              <h5 class="brand-title fw-semibold mb-2">Analysis of Patient Care Preferences for PT</h5>
              <p class="brand-muted mb-0">A survey of 1,000 patients rated their willingness to use physical therapy care models: in person at home, facility based, and virtual.</p>
              <div class="mt-3 fw-semibold" style="color:var(--brand-secondary);">Read more</div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section> --}}
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

  <!-- TABLE COMPARISON -->
  {{-- <section class="py-5">
    <div class="container">
      <div class="text-center mb-4">
        <div class="accent-line mx-auto mb-3"></div>
        <h2 class="brand-title fw-normal mb-2">Rehabrion vs. the Clinic</h2>
        <p class="brand-muted mb-0">Same price, better value. Recover faster, and more conveniently.</p>
      </div>

      <div class="text-center mt-4">
        <img class="img-fluid d-none d-md-inline-block"
             src="https://www.getluna.com/images/comparison.svg"
             alt="Comparison table"
             loading="lazy">
        <img class="img-fluid d-md-none"
             src="https://www.getluna.com/images/comparison.svg"
             alt="Comparison table mobile"
             loading="lazy">
      </div>

      <div class="text-center mt-4 d-flex flex-wrap gap-2 justify-content-center">
        <a class="btn btn-outline-brand px-4 py-2" href="tel:+971 50 565 3483">Call 866 525 3175</a>
        <a class="btn btn-brand px-4 py-2" href="/appointment">Book Consultation</a>
      </div>
    </div>
  </section> --}}

  <!-- ACCLAIM -->
  <section class="py-5 bg-soft" id="achieves">
    <div class="container">
      <div class="row align-items-center g-4">
        <div class="col-lg-6">
          <div class="pe-lg-4">
            <div class="accent-line mb-3"></div>
            <h2 class="section-title mb-3">Acclaim for the Rehabrion Clinical Method</h2>
            <p class="brand-muted mb-0">For three years in a row, Rehabrion has been awarded the highest possible performance score by Medicare.</p>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img class="img-fluid" style="max-width: 340px;"
               src="{{ asset("assets/images/prize.svg") }}"
               alt="Award"
               loading="lazy">
        </div>
      </div>
    </div>
  </section>


  <!-- WHY ON DEMAND -->
  {{-- <section class="py-5 bg-soft" id="why-on-demand">
    <div class="container">
      <div class="text-center mb-4">
        <div class="accent-line mx-auto mb-3"></div>
        <h2 class="brand-title fw-normal mb-2">Why in home PT is better</h2>
        <p class="brand-muted mb-0">More convenience means our patients actually complete their care plans.</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <img class="mb-3" src="https://public-assets.getRehabrion.com/images/icons/personalized.svg" width="92" height="92" alt="Personalized treatments" loading="lazy">
            <h5 class="brand-title fw-semibold mb-2">1:1 personalized treatments</h5>
            <p class="mb-0">45 to 55 minutes of in person care means faster recovery in fewer treatments.</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <img class="mb-3" src="https://public-assets.getRehabrion.com/images/icons/pt-equipment.svg" width="92" height="92" alt="Equipment comes to you" loading="lazy">
            <h5 class="brand-title fw-semibold mb-2">Equipment comes to you</h5>
            <p class="mb-0">Your PT will bring a treatment table and a mobile kit. 90% of cases don’t need heavy machines.</p>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card-soft shadow-soft p-4 h-100 text-center">
            <img class="mb-3" src="https://public-assets.getRehabrion.com/images/icons/safe.svg" width="92" height="92" alt="Convenient care" loading="lazy">
            <h5 class="brand-title fw-semibold mb-2">Convenient care</h5>
            <p class="mb-0">Skip the clinic. Get care that's covered by insurance. Safely delivered to you, on your schedule.</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-4 d-flex flex-wrap gap-2 justify-content-center">
        <a class="btn btn-outline-brand px-4 py-2" href="tel:+971 50 565 3483">Call 866 525 3175</a>
        <a class="btn btn-brand px-4 py-2" href="/appointment">Book Consultation</a>
      </div>
    </div>
  </section> --}}

  <!-- QUALITY AND SAFETY -->
<!-- QUALITY AND SAFETY -->
<section class="py-5 py-lg-6 quality-safety">
  <div class="container-fluid">
    <div class="qs-card shadow-lg overflow-hidden">
      <!-- Background image layer -->
      <div class="qs-bg" style="background-image:url('https://public-assets.getluna.com/images/quality-safety.webp');"></div>

      <!-- Gradient overlay layer -->
      <div class="qs-overlay"></div>

      <!-- Content -->
      <div class="qs-content">
        <div class="row g-4 justify-content-center align-items-center text-center">
          <div class="col-12 mb-1">
            <p class="qs-title mb-0">Quality and Safety Standards</p>
            <p class="qs-subtitle mb-0">Secure systems, privacy compliance, and international standards</p>
          </div>

          <div class="col-12">
            <div class="row g-3 justify-content-center align-items-center">
              <div class="col-4 col-md-3 col-lg-2">
                <div class="qs-logo-wrap">
                  <img class="qs-logo" src="https://www.getluna.com/images/secure_website.webp" alt="Secure website" loading="lazy">
                </div>
              </div>

              <div class="col-4 col-md-3 col-lg-2">
                <div class="qs-logo-wrap">
                  <img class="qs-logo" src="https://www.getluna.com/images/hipaa.webp" alt="HIPAA" loading="lazy">
                </div>
              </div>

              <div class="col-4 col-md-3 col-lg-2">
                <div class="qs-logo-wrap">
                  <img class="qs-logo" src="https://www.getluna.com/images/iso.webp" alt="ISO" loading="lazy">
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 mt-1">
            <div class="qs-badges d-flex flex-wrap justify-content-center gap-2">
              <span class="qs-badge">Secure Website</span>
              <span class="qs-badge">HIPAA Compliant</span>
              <span class="qs-badge">ISO Certified</span>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


  <!-- MODAL: PRESCRIPTION -->
  <div class="modal fade" id="modalPrescription" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title brand-title fw-semibold">Commercial insurance and self pay rules</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pt-2">
          <p class="mb-4">
            Direct Access rules allow patients to be seen without a prescription. In most states, a physician referral is not required for a physical therapist to treat a patient.
          </p>

          <h6 class="brand-title fw-semibold mb-2">Medicare rules</h6>
          <p class="mb-0">
            Medicare requires a signed plan of care for physical therapy. Your Rehabrion therapist will create a plan of care during your first visit, and the Rehabrion team will work with your doctor to get it approved. You will need a new plan of care established every 90 days or 10 visits whichever is sooner.
          </p>

          <div class="text-center mt-4 d-flex flex-wrap gap-2 justify-content-center">
            <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information" target="_blank" rel="noopener"  class="btn btn-outline-brand px-4 py-2" > Call +971 50 565 3483
</a>
            <a class="btn btn-brand px-4 py-2" href="{{ asset('submit-medical-history') }}">Book Consultation</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- MODAL: BRANDS -->
  <div class="modal fade" id="modalBrands" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 pb-0">
          <h5 class="modal-title brand-title fw-semibold">Insurance plans we accept</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body pt-2">
          <p class="brand-muted">
            We accept all major commercial insurance plans, including most PPOs, select HMOs, and Medicare. Rehabrion is covered by:
          </p>

          <div class="row g-3 align-items-center">
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/medicare/logo.svg" alt="Medicare" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/aetna/logo.svg" alt="Aetna" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/0fd0ed8d_f651_44ef_86da_dbdc64ac9b1e/logo.svg" alt="Anthem" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/6c86388e_4dd6_477d_9bc8_7d5689df5263/20240429_090415_logo.svg" alt="Cigna" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/unitedhealthcare/logo.svg" alt="United Healthcare" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/humana/logo.svg" alt="Humana" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/5ee10128_c651_4b76_80f9_3b8b9002f5fd/logo.svg" alt="MultiPlan" loading="lazy" style="max-height:60px;">
            </div>
            <div class="col-6 col-md-3 text-center">
              <img class="img-fluid" src="https://public-assets.getRehabrion.com/images/insurances/tricare/logo.svg" alt="Tricare" loading="lazy" style="max-height:60px;">
            </div>
          </div>

          <div class="text-center mt-4 d-flex flex-wrap gap-2 justify-content-center">
            <a class="btn btn-outline-brand px-4 py-2" href="tel:+971 50 565 3483">Call 866 525 3175</a>
            <a class="btn btn-brand px-4 py-2" href="/appointment">Book Consultation</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile select sync with tabs -->
  <script>
    (function(){
      var select = document.getElementById('clinicalSelect');
      if(!select) return;

      select.addEventListener('change', function(){
        var target = select.value;
        var triggerBtn = document.querySelector('[data-bs-target="'+target+'"]');
        if(triggerBtn) triggerBtn.click();
      });
    })();
  </script>

</main>

@endsection

