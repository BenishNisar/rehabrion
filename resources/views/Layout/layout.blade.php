<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rehabrion - Physical Therapy Delivered to You</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
</head>
<body>
  <!-- Free Delivery Banner -->
 <section id="free-delivery" class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <b><i class="fas fa-truck-fast me-2"></i> Rehab & Physical Care, delivered to you</b>
                </div>
            </div>
        </div>
    </section>


<!-- Header & Navigation -->
<header id="main-nav">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-lg-5 px-md-4 px-3">


            <!-- Logo -->
           <a class="navbar-brand me-auto  mx-lg-0" href="/">
  <img src="{{asset('assets/images/logo/logo.png')}}" class="img-fluid d-none d-lg-inline-block logo-desktop">
    <!-- Mobile logo -->
  <img
    src="{{asset('assets/images/logo/logo.png')}}"
    alt="Rehabrion"
    class="img-fluid d-inline-block d-lg-none logo-mobile"
  >
</a>

         <!-- Mobile Menu Button (Left Side) -->
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>



            <!-- Desktop Navigation -->
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/how-it-works') }}">
                            <i class="fas fa-play-circle me-1"></i> How It Works
                        </a>
                    </li>
   <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/what-we-treat') }}">
                            <i class="fas fa-play-circle me-1"></i> what we treat
                        </a>
                    </li>
                    <!-- What We Treat Dropdown -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="whatWeTreatDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-stethoscope me-1"></i> What We Treat
                        </a>
                        <ul class="dropdown-menu multi-level" aria-labelledby="whatWeTreatDropdown">
                            <!-- Musculoskeletal with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-bone me-2" style="color: #7a958f;"></i>
                                    Musculoskeletal (MSK)
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/neck-pain">Neck Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/upper-back-pain">Upper Back Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/lower-back-pain">Lower Back Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/shoulder-pain">Shoulder Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/elbow-pain">Elbow Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/hand-wrist-pain">Hand & Wrist Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/hip-pain">Hip Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/knee-pain">Knee Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/foot-ankle-pain">Foot & Ankle Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/muscle-strains">Muscle Strains & Ligament Injuries</a></li>
                                    <li><a class="dropdown-item" href="/conditions/joint-stiffness">Joint Stiffness & Arthritis</a></li>
                                    <li><a class="dropdown-item" href="/conditions/postural-pain">Postural & Work-Related Pain</a></li>
                                </ul>
                            </li>

                            <!-- Neurological with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-brain me-2" style="color: #7a958f;"></i>
                                    Neurological Conditions
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/stroke-rehab">Stroke Rehabilitation</a></li>
                                    <li><a class="dropdown-item" href="/conditions/paralysis">Paralysis & Weakness</a></li>
                                    <li><a class="dropdown-item" href="/conditions/nerve-injuries">Nerve Injuries</a></li>
                                    <li><a class="dropdown-item" href="/conditions/parkinsons">Parkinson's Disease</a></li>
                                    <li><a class="dropdown-item" href="/conditions/multiple-sclerosis">Multiple Sclerosis (MS)</a></li>
                                    <li><a class="dropdown-item" href="/conditions/balance-issues">Balance & Coordination Issues</a></li>
                                    <li><a class="dropdown-item" href="/conditions/gait-disorders">Gait Disorders</a></li>
                                    <li><a class="dropdown-item" href="/conditions/neurological-mobility">Neurological Mobility Limitations</a></li>
                                </ul>
                            </li>

                            <!-- Cranial & TMJ with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-head-side-brain me-2" style="color: #7a958f;"></i>
                                    Cranial, Facial & TMJ
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/tmj">Jaw Pain (TMJ Disorders)</a></li>
                                    <li><a class="dropdown-item" href="/conditions/facial-pain">Facial Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/headaches">Headaches</a></li>
                                    <li><a class="dropdown-item" href="/conditions/cervicogenic-headaches">Cervicogenic Headaches</a></li>
                                    <li><a class="dropdown-item" href="/conditions/tension-headaches">Tension-Type Headaches</a></li>
                                    <li><a class="dropdown-item" href="/conditions/migraines">Migraines</a></li>
                                    <li><a class="dropdown-item" href="/conditions/neck-cranial-pain">Neck-Related Cranial Pain</a></li>
                                </ul>
                            </li>

                            <!-- Vestibular & Balance with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-balance-scale me-2" style="color: #7a958f;"></i>
                                    Vestibular & Balance
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/vertigo">Vertigo</a></li>
                                    <li><a class="dropdown-item" href="/conditions/dizziness">Dizziness</a></li>
                                    <li><a class="dropdown-item" href="/conditions/balance-disorders">Balance Disorders</a></li>
                                    <li><a class="dropdown-item" href="/conditions/frequent-falls">Frequent Falls</a></li>
                                    <li><a class="dropdown-item" href="/conditions/motion-sensitivity">Motion Sensitivity</a></li>
                                    <li><a class="dropdown-item" href="/conditions/postural-instability">Postural Instability</a></li>
                                </ul>
                            </li>

                            <!-- Post-Surgical with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-procedures me-2" style="color: #7a958f;"></i>
                                    Post-Surgical Rehabilitation
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/joint-replacement">Joint Replacement Recovery</a></li>
                                    <li><a class="dropdown-item" href="/conditions/spine-surgery">Spine Surgery Rehabilitation</a></li>
                                    <li><a class="dropdown-item" href="/conditions/fracture-recovery">Fracture Recovery</a></li>
                                    <li><a class="dropdown-item" href="/conditions/orthopedic-surgery">Orthopedic Surgery Rehab</a></li>
                                    <li><a class="dropdown-item" href="/conditions/neuro-surgery-rehab">Neurological Surgery Rehab</a></li>
                                </ul>
                            </li>

                            <!-- Sports & Injury with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-running me-2" style="color: #7a958f;"></i>
                                    Sports & Injury Conditions
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/sports-injuries">Sports Injuries</a></li>
                                    <li><a class="dropdown-item" href="/conditions/muscle-tears">Muscle Tears</a></li>
                                    <li><a class="dropdown-item" href="/conditions/ligament-sprains">Ligament Sprains</a></li>
                                    <li><a class="dropdown-item" href="/conditions/tendon-injuries">Tendon Injuries</a></li>
                                    <li><a class="dropdown-item" href="/conditions/overuse-injuries">Overuse Injuries</a></li>
                                    <li><a class="dropdown-item" href="/conditions/return-to-activity">Return-to-Activity Rehab</a></li>
                                </ul>
                            </li>

                            <!-- Chronic Pain with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-user-injured me-2" style="color: #7a958f;"></i>
                                    Chronic Pain Conditions
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/chronic-back-pain">Chronic Back Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/chronic-neck-pain">Chronic Neck Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/chronic-joint-pain">Long-Term Joint Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/widespread-pain">Widespread Musculoskeletal Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/movement-related-pain">Movement-Related Pain</a></li>
                                </ul>
                            </li>

                            <!-- Geriatric with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-user-friends me-2" style="color: #7a958f;"></i>
                                    Geriatric Conditions
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/age-related-pain">Age-Related Joint Pain</a></li>
                                    <li><a class="dropdown-item" href="/conditions/reduced-mobility">Reduced Mobility</a></li>
                                    <li><a class="dropdown-item" href="/conditions/senior-balance">Balance Issues in Older Adults</a></li>
                                    <li><a class="dropdown-item" href="/conditions/fall-prevention">Fall Prevention Needs</a></li>
                                    <li><a class="dropdown-item" href="/conditions/post-fracture-rehab">Post-Fracture Rehab</a></li>
                                </ul>
                            </li>

                            <!-- Pelvic & Functional with Submenu -->
                            <li class="dropdown-submenu dropend">
                                <a class="dropdown-item dropdown-toggle" href="#">
                                    <i class="fas fa-user me-2" style="color: #7a958f;"></i>
                                    Pelvic & Functional
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/conditions/pelvic-floor">Pelvic Floor Dysfunction</a></li>
                                    <li><a class="dropdown-item" href="/conditions/core-weakness">Core Weakness</a></li>
                                    <li><a class="dropdown-item" href="/conditions/functional-limitations">Functional Movement Limitations</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item dropdown" data-bs-auto-close="outside">
    <a class="nav-link dropdown-toggle" href="#" id="whatWeTreatDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-stethoscope me-1"></i> Treat Me Now
    </a>

    <ul class="dropdown-menu multi-level" aria-labelledby="whatWeTreatDropdown">

        @foreach($treatCategories as $cat)
            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#">
                    <i class="fas fa-folder me-2" style="color: #7a958f;"></i>
                    {{ $cat->name }}
                </a>

                <ul class="dropdown-menu">
                    @forelse($cat->subcategories as $sub)
                        <li>
                            {{-- <a class="dropdown-item" href="{{ url('/conditions-we-treat/'.$sub->slug) }}">
                                {{ $sub->name }}
                            </a> --}}
                            <a class="dropdown-item" href="{{ route('Home.conditions.we.treat', $sub->slug) }}">
  {{ $sub->name }}
</a>

                        </li>
                    @empty
                        <li>
                            <span class="dropdown-item text-muted">No items</span>
                        </li>
                    @endforelse
                </ul>
            </li>
        @endforeach

    </ul>
</li>

                    <!-- End What We Treat Dropdown -->

                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/about') }}">
                            <i class="fas fa-info-circle me-1"></i> About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/faqs') }}">
                            <i class="fas fa-question-circle me-1"></i> FAQS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('/recovery-bundles') }}">
                            <i class="fas fa-box-open me-1"></i> Recovery Bundles
                        </a>
                    </li>
                </ul>

                <!-- Desktop Call Button -->
            <!-- Desktop WhatsApp Button -->
<div class="d-none d-lg-flex align-items-center">
    <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information"
       target="_blank"
       rel="noopener"
       class="btn btn-call">
        <i class="fab fa-whatsapp me-2"></i>
        +971 50 565 3483
    </a>
</div>

            </div>

            <!-- Mobile Call Button -->
            {{-- <a href="tel:+971 50 565 3483" class="btn btn-call d-lg-none ms-3">
                <i class="fas fa-phone me-2"></i> Call
            </a> --}}
        </div>
    </nav>
<div class="container-fluid px-lg-5 px-md-4 px-3">

    <!-- Mobile Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header border-bottom" style="background-color: #f8fbfa;">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            {{-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <img class="d-inline-block d-lg-none logo-mobile" src="{{asset('assets/images/logo/logo.png')}}" alt="Rehabrion" >
            </h5> --}}
        </div>
        <div class="offcanvas-body p-0">
            <div class="accordion" id="mobileMenuAccordion">
                <!-- Main Menu Items -->
                <div class="list-group list-group-flush">
                    <a href="{{ asset('/how-it-works') }}" class="list-group-item list-group-item-action border-0 py-3">
                        <i class="fas fa-play-circle me-2" style="color: #7a958f;"></i> How It Works
                    </a>


{{-- <div class="accordion-item border-0">
  <h2 class="accordion-header" id="headingWhatWeTreat">
    <button class="accordion-button collapsed py-3" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseWhatWeTreat"
      aria-expanded="false"
      aria-controls="collapseWhatWeTreat">
      <i class="fas fa-stethoscope me-2" style="color:#7a958f;"></i> What We Treat
    </button>
  </h2>

  <div id="collapseWhatWeTreat" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
    <div class="accordion-body p-0">

      <div class="accordion" id="mobileTreatAccordion">

        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingMSK">
            <button class="accordion-button collapsed py-2" type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseMSK"
              aria-expanded="false"
              aria-controls="collapseMSK">
              <i class="fas fa-bone me-2" style="color:#7a958f;font-size:.9rem;"></i>
              Musculoskeletal (MSK)
            </button>
          </h2>
          <div id="collapseMSK" class="accordion-collapse collapse" data-bs-parent="#mobileTreatAccordion">
            <div class="accordion-body p-0">
              <div class="list-group list-group-flush">
                <a href="/conditions/neck-pain" class="list-group-item list-group-item-action py-2 ps-4">Neck Pain</a>
                <a href="/conditions/upper-back-pain" class="list-group-item list-group-item-action py-2 ps-4">Upper Back Pain</a>
                <a href="/conditions/lower-back-pain" class="list-group-item list-group-item-action py-2 ps-4">Lower Back Pain</a>
                <a href="/conditions/shoulder-pain" class="list-group-item list-group-item-action py-2 ps-4">Shoulder Pain</a>
                <a href="/conditions/elbow-pain" class="list-group-item list-group-item-action py-2 ps-4">Elbow Pain</a>
                <a href="/conditions/hand-wrist-pain" class="list-group-item list-group-item-action py-2 ps-4">Hand and Wrist Pain</a>
                <a href="/conditions/hip-pain" class="list-group-item list-group-item-action py-2 ps-4">Hip Pain</a>
                <a href="/conditions/knee-pain" class="list-group-item list-group-item-action py-2 ps-4">Knee Pain</a>
                <a href="/conditions/foot-ankle-pain" class="list-group-item list-group-item-action py-2 ps-4">Foot and Ankle Pain</a>
                <a href="/conditions/muscle-strains" class="list-group-item list-group-item-action py-2 ps-4">Muscle Strains</a>
                <a href="/conditions/joint-stiffness" class="list-group-item list-group-item-action py-2 ps-4">Joint Stiffness and Arthritis</a>
                <a href="/conditions/postural-pain" class="list-group-item list-group-item-action py-2 ps-4">Postural and Work Related Pain</a>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingNeuro">
            <button class="accordion-button collapsed py-2" type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseNeuro"
              aria-expanded="false"
              aria-controls="collapseNeuro">
              <i class="fas fa-brain me-2" style="color:#7a958f;font-size:.9rem;"></i>
              Neurological Conditions
            </button>
          </h2>
          <div id="collapseNeuro" class="accordion-collapse collapse" data-bs-parent="#mobileTreatAccordion">
            <div class="accordion-body p-0">
              <div class="list-group list-group-flush">
                <a href="/conditions/stroke-rehab" class="list-group-item list-group-item-action py-2 ps-4">Stroke Rehabilitation</a>
                <a href="/conditions/paralysis" class="list-group-item list-group-item-action py-2 ps-4">Paralysis and Weakness</a>
                <a href="/conditions/nerve-injuries" class="list-group-item list-group-item-action py-2 ps-4">Nerve Injuries</a>
                <a href="/conditions/parkinsons" class="list-group-item list-group-item-action py-2 ps-4">Parkinsons Disease</a>
                <a href="/conditions/multiple-sclerosis" class="list-group-item list-group-item-action py-2 ps-4">Multiple Sclerosis</a>
                <a href="/conditions/balance-issues" class="list-group-item list-group-item-action py-2 ps-4">Balance and Coordination</a>
                <a href="/conditions/gait-disorders" class="list-group-item list-group-item-action py-2 ps-4">Gait Disorders</a>
                <a href="/conditions/neurological-mobility" class="list-group-item list-group-item-action py-2 ps-4">Neurological Mobility</a>
              </div>
            </div>
          </div>
        </div>

        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="headingCranial">
            <button class="accordion-button collapsed py-2" type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapseCranial"
              aria-expanded="false"
              aria-controls="collapseCranial">
              <i class="fas fa-head-side-brain me-2" style="color:#7a958f;font-size:.9rem;"></i>
              Cranial and TMJ
            </button>
          </h2>
          <div id="collapseCranial" class="accordion-collapse collapse" data-bs-parent="#mobileTreatAccordion">
            <div class="accordion-body p-0">
              <div class="list-group list-group-flush">
                <a href="/conditions/tmj" class="list-group-item list-group-item-action py-2 ps-4">Jaw Pain TMJ</a>
                <a href="/conditions/facial-pain" class="list-group-item list-group-item-action py-2 ps-4">Facial Pain</a>
                <a href="/conditions/headaches" class="list-group-item list-group-item-action py-2 ps-4">Headaches</a>
                <a href="/conditions/cervicogenic-headaches" class="list-group-item list-group-item-action py-2 ps-4">Cervicogenic Headaches</a>
                <a href="/conditions/tension-headaches" class="list-group-item list-group-item-action py-2 ps-4">Tension Type Headaches</a>
                <a href="/conditions/migraines" class="list-group-item list-group-item-action py-2 ps-4">Migraines</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Repeat same pattern for Vestibular, Post Surgical, Sports, Chronic, Geriatric, Pelvic -->

      </div>

    </div>
  </div>
</div> --}}
<div class="accordion-item border-0">
  <h2 class="accordion-header" id="headingTreatMeNow">
    <button class="accordion-button collapsed py-3" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#collapseTreatMeNow"
      aria-expanded="false"
      aria-controls="collapseTreatMeNow">
      <i class="fas fa-stethoscope me-2" style="color:#7a958f;"></i> Treat Me Now
    </button>
  </h2>

  <div id="collapseTreatMeNow" class="accordion-collapse collapse" data-bs-parent="#mobileMenuAccordion">
    <div class="accordion-body p-0">

      <div class="accordion" id="mobileTreatDynamicAccordion">

        @foreach($treatCategories as $cat)
          @php
            $catId = 'cat_'.$cat->id;
          @endphp

          <div class="accordion-item border-0">
            <h2 class="accordion-header" id="heading{{ $catId }}">
              <button class="accordion-button collapsed py-2" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapse{{ $catId }}"
                aria-expanded="false"
                aria-controls="collapse{{ $catId }}">
                <i class="fas fa-folder me-2" style="color:#7a958f;font-size:.9rem;"></i>
                {{ $cat->name }}
              </button>
            </h2>

            <div id="collapse{{ $catId }}" class="accordion-collapse collapse" data-bs-parent="#mobileTreatDynamicAccordion">
              <div class="accordion-body p-0">
                <div class="list-group list-group-flush">

                  @forelse($cat->subcategories as $sub)
                    <a href="{{ route('Home.conditions.we.treat', $sub->slug) }}"
                       class="list-group-item list-group-item-action py-2 ps-4">
                      {{ $sub->name }}
                    </a>
                  @empty
                    <span class="list-group-item text-muted py-2 ps-4">No items</span>
                  @endforelse

                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </div>
</div>


                    <a href="{{ asset('/about') }}" class="list-group-item list-group-item-action border-0 py-3">
                        <i class="fas fa-info-circle me-2" style="color: #7a958f;"></i> About Us
                    </a>
                    <a href="{{ asset('/faqs') }}" class="list-group-item list-group-item-action border-0 py-3">
                        <i class="fas fa-question-circle me-2" style="color: #7a958f;"></i> FAQS
                    </a>
                    <a href="{{ asset('/recovery-bundles') }}" class="list-group-item list-group-item-action border-0 py-3">
                        <i class="fas fa-box-open me-2" style="color: #7a958f;"></i> Recovery Bundles
                    </a>
                </div>
            </div>

            <!-- Mobile Call CTA -->
            <div class="p-3 border-top" style="background-color: #f8fbfa;">
                <a href="{{ asset('/submit-medical-history') }}" class="btn btn-sm w-100 mb-2" style="background-color: #7a958f; color: white;">
                    <i class="fas fa-calendar-check me-2"></i> Book Appointment
                </a>
                <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information" target="_blank" rel="noopener" class="btn btn-sm w-100" style="background-color: #bae0db; color: #4a5a55;">
                   <i class="fas fa-phone-volume me-2"></i>
 Call +971 50 565 3483
                </a>
            </div>
        </div>
    </div>
</div>


</header>


<!-- JavaScript for Nested Dropdowns -->

    <!-- Header & Navigation -->
    {{-- <header id="main-nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{asset("assets/images/logo/logo.png")}}" alt="Rehabrion" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="tel:+971 50 565 3483" class="btn btn-call d-lg-none ms-auto me-3">
                    <i class="fas fa-phone me-2"></i> +971 50 565 3483
                </a>

                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/how-it-works') }}"><i class="fas fa-play-circle me-1"></i> How It Works</a>
                        </li>

                               <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user-md me-1"></i> What we Treat
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/own-your-career"><i class="fas fa-user-nurse me-2"></i> Musculoskeletal (MSK) Conditions

</a></li>
                                <li><a class="dropdown-item" href="/physicians"><i class="fas fa-user-md me-2"></i> Neurological Conditions

</a></li>
                                <li><a class="dropdown-item" href="/health-plans"><i class="fas fa-file-medical me-2"></i> Health Plans</a></li>
                                <li><a class="dropdown-item" href="/health-systems"><i class="fas fa-hospital me-2"></i> Health Systems</a></li>
                                <li><a class="dropdown-item" href="/employers"><i class="fas fa-briefcase me-2"></i> Employers</a></li>
                                <li><a class="dropdown-item" href="/pt-clinics"><i class="fas fa-clinic-medical me-2"></i> PT Clinics</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/about') }}"><i class="fas fa-info-circle me-1"></i> About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/faqs') }}"><i class="fas fa-question-circle me-1"></i> FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/recovery-bundles') }}"><i class="fas fa-box-open me-1"></i> Recovery Bundles</a>
                        </li>

                    </ul>

                    <div class="d-none d-lg-flex align-items-center">
                        <a href="tel:+971 50 565 3483" class="btn btn-call">
                           <i class="fas fa-phone-volume me-2"></i>
 +971 50 565 3483
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header> --}}




<!-- Vertical Contact Button -->
<a href="{{ asset('/submit-medical-history') }}" class="vertical-contact-btn" aria-label="Book Consultation">
  <span class="vc-icon">
    <i class="fa-solid fa-calendar-check"></i>
  </span>
  <span class="vc-text">Book Consultation</span>
</a>



@yield("Content")

 <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <img src="{{asset('assets/images/logo/logo.png')}}" alt="Rehabrion" class="img-fluid mb-3" style="max-width: 150px;">
                    <p class="mb-3">Rehab & Physical Care, delivered to you. Expert therapy at your doorstep.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-3">Quick Links</h5>
                    <div class="footer-links">
                        <a href="{{ asset('/how-it-works') }}"><i class="fas fa-chevron-right"></i> How It Works</a>
                        <a href="{{ asset('/conditions-we-treat') }}"><i class="fas fa-chevron-right"></i> What We Treat</a>
                        <a href="{{ asset('/about') }}"><i class="fas fa-chevron-right"></i> About Us</a>
                        <a href="{{ asset('/recovery-bundles') }}"><i class="fas fa-chevron-right"></i> Recovery Bundles</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">For Professionals</h5>
                    <div class="footer-links">
                         <a href="{{ asset("/privacy-policy") }}" class="text-white me-3"><i class="fas fa-chevron-right"></i> Privacy Policy</a>
                    <a href="/terms" class="text-white me-3"><i class="fas fa-chevron-right"></i> Terms of Service</a>
                      <a href="{{ asset('/faqs') }}"><i class="fas fa-chevron-right"></i> FAQS</a>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-3">Contact Us</h5>
<p>
  <i class="fab fa-whatsapp me-2"></i>
  <a href="https://wa.me/971505653483?text=Hi%20I%20need%20more%20information" target="_blank" rel="noopener" class="text-white">
    +971 50 565 3483
  </a>
</p>
                    <p class="mb-3"><i class="fas fa-envelope me-2"></i> <a href="mailto:info@rehabrion.com" class="text-white">info@rehabrion.com</a></p>
                    {{-- <div class="mt-3">
                        <a href="#" class="btn btn-outline-light me-2 mb-2">
                            <i class="fab fa-apple me-2"></i> App Store
                        </a>
                        <a href="#" class="btn btn-outline-light mb-2">
                            <i class="fab fa-google-play me-2"></i> Google Play
                        </a>
                    </div> --}}
                </div>
            </div>

            <div class="row mt-4 pt-4 border-top">
                <div class="col-md-12">
                    <p class="mb-0 text-center">© 2023 Rehabrion. All rights reserved.</p>
                </div>
                {{-- <div class="col-md-6 text-md-end">
                    <a href="{{ asset("/privacy-policy") }}" class="text-white me-3">Privacy Policy</a>
                    <a href="/terms" class="text-white me-3">Terms of Service</a>
                </div> --}}
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- contact --}}
<script>
$(function () {

  function clearErrors(){
    $('[data-error]').text('');
    $('#contactForm .form-control').removeClass('is-invalid');
  }

 function showCenterPopup(title, msg, isError){
  $('#thankYouTitle').text(title || (isError ? 'Error' : 'Thank you'));
  $('#thankYouMsg').text(msg || '');

  var iconBox = $('#thankYouModal .modal-body > div').first();
  var icon = $('#thankYouModal i.fas');

  if(isError){
    iconBox.css({ background:'rgba(220,53,69,0.12)', color:'#dc3545' });
    icon.removeClass('fa-check').addClass('fa-triangle-exclamation');
  } else {
    iconBox.css({ background:'rgba(13,148,136,0.12)', color:'#0d9488' });
    icon.removeClass('fa-triangle-exclamation').addClass('fa-check');
  }

  var modalEl = document.getElementById('thankYouModal');
  var modal = bootstrap.Modal.getOrCreateInstance(modalEl, {
    backdrop: 'static',
    keyboard: true
  });

  modal.show();

  // ✅ AUTO CLOSE after 2.8 seconds
  setTimeout(function(){
    modal.hide();
  }, 2800);
}


  $('#contactForm').on('submit', function(e){
    e.preventDefault();
    clearErrors();

    var $form = $(this);
    var url = $form.attr('action');
    var btn = $('#contactSubmitBtn');
    var btnHtml = btn.html();

    btn.prop('disabled', true).html('<span class="spinner-border spinner-border-sm me-2"></span> Sending...');

    $.ajax({
      url: url,
      type: 'POST',
      data: $form.serialize(),
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      success: function(res){
        if(res && res.ok){
          showCenterPopup('Thank you', res.message || 'Your message has been submitted successfully.', false);
          $form[0].reset();
          clearErrors();
        } else {
          showCenterPopup('Error', 'Something went wrong. Please try again.', true);
        }
      },
      error: function(xhr){
        if(xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors){
          var errors = xhr.responseJSON.errors;

          Object.keys(errors).forEach(function(key){
            $('[data-error="'+key+'"]').text(errors[key][0]);
            $('#'+key).addClass('is-invalid');
          });

          showCenterPopup('Fix required', 'Please correct the highlighted fields.', true);
        } else {
          showCenterPopup('Server error', 'Server error. Please try again.', true);
        }
      },
      complete: function(){
        btn.prop('disabled', false).html(btnHtml);
      }
    });
  });

});
</script>


    <script>
        $(document).ready(function(){
            // Initialize therapists carousel with better settings
            $("#therapists-carousel").owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        margin: 15
                    },
                    576: {
                        items: 1,
                        margin: 20
                    },
                    768: {
                        items: 2,
                        margin: 20
                    },
                    992: {
                        items: 3,
                        margin: 25
                    },
                    1200: {
                        items: 3,
                        margin: 30
                    }
                }
            });

            // Initialize Luna style testimonials carousels
            $("#testimonials-carousel-1").owlCarousel({
                loop: true,
                margin: 25,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        margin: 15
                    },
                    576: {
                        items: 1,
                        margin: 15
                    },
                    768: {
                        items: 2,
                        margin: 15
                    },
                    992: {
                        items: 3,
                        margin: 20
                    },
                    1200: {
                        items: 4,
                        margin: 25
                    }
                }
            });

            $("#testimonials-carousel-2").owlCarousel({
                loop: true,
                margin: 25,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        margin: 15
                    },
                    576: {
                        items: 1,
                        margin: 15
                    },
                    768: {
                        items: 2,
                        margin: 15
                    },
                    992: {
                        items: 3,
                        margin: 20
                    },
                    1200: {
                        items: 4,
                        margin: 25
                    }
                },
                startPosition: 1 // Start at second item for staggered effect
            });

            // Custom carousel navigation for all carousels
            $(".luna-carousel-nav.next").click(function(){
                $(this).parent().find(".owl-carousel").each(function() {
                    $(this).trigger('next.owl.carousel');
                });
            });

            $(".luna-carousel-nav.prev").click(function(){
                $(this).parent().find(".owl-carousel").each(function() {
                    $(this).trigger('prev.owl.carousel');
                });
            });

            // Make all cards in a row equal height
            function equalizeCardHeights() {
                $('.row-equal-height').each(function() {
                    var maxHeight = 0;
                    $(this).find('.step-card, .why-grid-card').each(function() {
                        $(this).css('min-height', '');
                        var height = $(this).outerHeight();
                        if (height > maxHeight) {
                            maxHeight = height;
                        }
                    });
                    $(this).find('.step-card, .why-grid-card').css('min-height', maxHeight + 'px');
                });
            }

            // Equalize Luna testimonial card heights
            function equalizeLunaTestimonialCards() {
                var maxHeight = 0;
                $('.luna-testimonial-card').each(function() {
                    $(this).css('min-height', '');
                    var height = $(this).outerHeight();
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });
                $('.luna-testimonial-card').css('min-height', maxHeight + 'px');
            }

            // Call on load and resize
            $(window).on('load resize', function() {
                equalizeCardHeights();
                equalizeLunaTestimonialCards();
            });

            // Equalize therapist card heights in carousel
            function equalizeTherapistCards() {
                var maxHeight = 0;
                $('#therapists-carousel .therapist-card, #therapists-carousel .know-card').each(function() {
                    $(this).css('min-height', '');
                    var height = $(this).outerHeight();
                    if (height > maxHeight) {
                        maxHeight = height;
                    }
                });
                $('#therapists-carousel .therapist-card, #therapists-carousel .know-card').css('min-height', maxHeight + 'px');
            }

            // Initialize equal heights after carousel is loaded
            setTimeout(function() {
                equalizeTherapistCards();
                equalizeLunaTestimonialCards();
            }, 500);

            // Re-equalize on carousel change
            $('#therapists-carousel').on('changed.owl.carousel', function(event) {
                setTimeout(equalizeTherapistCards, 100);
            });

            // Mobile menu close on click
            $('.navbar-nav>li>a').on('click', function(){
                $('.navbar-collapse').collapse('hide');
            });

            // Add smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                }
            });
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle nested dropdowns on hover (desktop)
        const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

        dropdownSubmenus.forEach(submenu => {
            const dropdownToggle = submenu.querySelector('.dropdown-toggle');

            // Desktop hover behavior
            if (window.innerWidth > 768) {
                submenu.addEventListener('mouseenter', function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    dropdownMenu.classList.add('show');
                });

                submenu.addEventListener('mouseleave', function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    dropdownMenu.classList.remove('show');
                });
            }

            // Mobile click behavior
            if (window.innerWidth <= 768) {
                dropdownToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();

                    const parent = this.parentElement;
                    const dropdownMenu = this.nextElementSibling;

                    // Close other open submenus
                    document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(menu => {
                        if (menu !== dropdownMenu) {
                            menu.classList.remove('show');
                        }
                    });

                    // Toggle current submenu
                    dropdownMenu.classList.toggle('show');
                });
            }
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.dropdown-submenu')) {
                document.querySelectorAll('.dropdown-submenu .dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
            }
        });

        // Mobile accordion auto-close
        const accordionButtons = document.querySelectorAll('.accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const collapseElement = this.getAttribute('data-bs-target');

                if (collapseElement) {
                    // Close other accordions at same level
                    const parentAccordion = this.closest('.accordion');
                    if (parentAccordion) {
                        const openItems = parentAccordion.querySelectorAll('.accordion-collapse.show');
                        openItems.forEach(item => {
                            if (item.id !== collapseElement.substring(1)) {
                                const bsCollapse = bootstrap.Collapse.getInstance(item);
                                if (bsCollapse) {
                                    bsCollapse.hide();
                                }
                            }
                        });
                    }
                }
            });
        });
    });

    // Handle window resize
    window.addEventListener('resize', function() {
        const dropdownSubmenus = document.querySelectorAll('.dropdown-submenu');

        if (window.innerWidth <= 768) {
            // Mobile: remove hover behavior
            dropdownSubmenus.forEach(submenu => {
                submenu.onmouseenter = null;
                submenu.onmouseleave = null;
            });
        } else {
            // Desktop: add hover behavior
            dropdownSubmenus.forEach(submenu => {
                submenu.onmouseenter = function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    dropdownMenu.classList.add('show');
                };

                submenu.onmouseleave = function() {
                    const dropdownMenu = this.querySelector('.dropdown-menu');
                    dropdownMenu.classList.remove('show');
                };
            });
        }
    });
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
  if (window.matchMedia('(min-width: 992px)').matches) {

    const submenus = document.querySelectorAll('.dropdown-submenu');
    const hideTimers = new Map();

    function openSubmenu(li) {
      const menu = li.querySelector(':scope > .dropdown-menu');
      if (!menu) return;

      li.classList.add('show');
      menu.classList.add('show');

      const parentDropdown = li.closest('.dropdown');
      if (parentDropdown) {
        parentDropdown.classList.add('show');
        const parentMenu = parentDropdown.querySelector(':scope > .dropdown-menu');
        if (parentMenu) parentMenu.classList.add('show');
      }
    }

    function closeSubmenu(li) {
      const menu = li.querySelector(':scope > .dropdown-menu');
      if (!menu) return;

      li.classList.remove('show');
      menu.classList.remove('show');
    }

    function scheduleClose(li) {
      clearTimeout(hideTimers.get(li));
      hideTimers.set(li, setTimeout(function () {
        closeSubmenu(li);
      }, 180));
    }

    function cancelClose(li) {
      clearTimeout(hideTimers.get(li));
    }

    submenus.forEach(function (li) {
      const menu = li.querySelector(':scope > .dropdown-menu');

      li.addEventListener('mouseenter', function () {
        cancelClose(li);
        openSubmenu(li);
      });

      li.addEventListener('mouseleave', function () {
        scheduleClose(li);
      });

      if (menu) {
        menu.addEventListener('mouseenter', function () {
          cancelClose(li);
          openSubmenu(li);
        });

        menu.addEventListener('mouseleave', function () {
          scheduleClose(li);
        });
      }
    });

    document.addEventListener('click', function (e) {
      if (!e.target.closest('.dropdown')) {
        submenus.forEach(function (li) { closeSubmenu(li); });
      }
    });
  }
});
</script>

{{-- what we treat --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
  const tabButtons = document.querySelectorAll('#conditionsTabs .btn');
  const cols = document.querySelectorAll('.condition-col');

  function applyFilter(filterValue){
    cols.forEach(col => {
      const category = col.getAttribute('data-category');
      const show = (filterValue === 'all') || (category === filterValue);

      if(show){
        col.classList.remove('d-none');
        col.classList.remove('fade-in');
        void col.offsetWidth;
        col.classList.add('fade-in');
      } else {
        col.classList.add('d-none');
      }
    });
  }

  tabButtons.forEach(btn => {
    btn.addEventListener('click', function(){
      tabButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      applyFilter(this.getAttribute('data-filter'));
    });
  });

  applyFilter('all');
});
</script>


<script>
document.addEventListener('click', function(e){
  const link = e.target.closest('.vertical-contact-btn[href^="#"]');
  if(!link) return;

  const target = document.querySelector(link.getAttribute('href'));
  if(!target) return;

  e.preventDefault();

  const header = document.getElementById('header');
  const offset = header ? header.offsetHeight : 0;

  const top = target.getBoundingClientRect().top + window.pageYOffset - offset;
  window.scrollTo({ top: top, behavior: 'smooth' });
});
</script>

</body>
</html>
