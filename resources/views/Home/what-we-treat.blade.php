@extends("Layout.layout")
@section("Content")

<style>
#rehabrion-conditions-page{
  --primary:#7a958f;
  --primary-light:#bae0db;
  --primary-dark:#0f766e;
  --transition: all 0.28s ease;
}

/* Hero animation */
/* .conditions-hero{ animation: fadeInDown 0.9s ease-out; }
@keyframes fadeInDown{
  from{opacity:0; transform:translateY(-18px);}
  to{opacity:1; transform:translateY(0);}
} */

/* Tabs UI */
.conditions-tabs{
  border-radius: 18px;
}
.tabs-scroll{
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  padding-bottom: 2px;
}
.tabs-scroll::-webkit-scrollbar{ height: 6px; }
.tabs-scroll::-webkit-scrollbar-thumb{ background: rgba(0,0,0,0.12); border-radius: 999px; }

#conditionsTabs .btn{
  border-radius: 999px;
  transition: var(--transition);
  white-space: nowrap;
}
#conditionsTabs .btn:hover{
  transform: translateY(-1px);
}
#conditionsTabs .btn.active{
  background-color: var(--primary);
  border-color: var(--primary);
  color: #fff;
}

/* Cards */
.condition-card{
  transition: var(--transition);
  border-radius: 18px;
  overflow: hidden;
  transform: translateY(0);
}
.condition-card:hover{
  transform: translateY(-10px);
  box-shadow: 0 18px 55px rgba(0,0,0,0.16) !important;
}
.icon-wrapper{
  width: 60px;
  height: 60px;
  display:flex;
  align-items:center;
  justify-content:center;
}

/* List */
.condition-list li{
  transition: var(--transition);
  padding: 10px 10px;
  border-bottom: 1px solid rgba(0,0,0,0.06);
  border-radius: 12px;
}
.condition-list li:last-child{ border-bottom:none; }
.condition-list li:hover{
  background: rgba(13,148,136,0.06);
  transform: translateX(6px);
}
.condition-list i{ flex-shrink: 0; }

/* Appear animation when filtering */
@keyframes cardAppear{
  from{opacity:0; transform:translateY(14px);}
  to{opacity:1; transform:translateY(0);}
}
.fade-in{ animation: cardAppear 0.38s ease both; }


/* Mobile */
@media (max-width: 768px){
  .conditions-hero h1{ font-size: 2.4rem; }
  .icon-wrapper{ width: 52px; height: 52px; }
  .condition-list li{ padding: 10px 8px; }
}
</style>

<div class="conditions-page" id="rehabrion-conditions-page">

  <!-- Hero Section -->



    <!-- Hero Section - UPDATED -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <div class="hero-badge floating-icon">
                            <i class="fas fa-badge-check"></i>  Comprehensive Care
                        </div>

                        <h1 class="display-4 fw-bold mb-3">Conditions We Treat</h1>

                        <p class="lead mb-4">
                                        Expert physiotherapy for a wide range of musculoskeletal, neurological, and rehabilitation conditions. Professional care delivered to your home.

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
  {{-- <section class="conditions-hero py-5 py-lg-6 position-relative overflow-hidden"
           style="background: linear-gradient(135deg, rgba(186,224,219,0.15) 0%, rgba(122,149,143,0.08) 100%);">
    <div class="container position-relative z-2">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8 text-center">
          <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-4 py-2 mb-3 d-inline-flex align-items-center">
            <i class="fas fa-heartbeat me-2"></i> Comprehensive Care
          </span>
          <h1 class="display-4 fw-bold mb-4 text-dark">Conditions We Treat</h1>
          <p class="lead text-muted mb-0">
            Expert physiotherapy for a wide range of musculoskeletal, neurological, and rehabilitation conditions. Professional care delivered to your home.
          </p>
        </div>
      </div>
    </div>

    <div class="position-absolute top-0 end-0" style="width: 300px; height: 300px; background: radial-gradient(circle, rgba(186,224,219,0.3) 0%, transparent 70%);"></div>
    <div class="position-absolute bottom-0 start-0" style="width: 200px; height: 200px; background: radial-gradient(circle, rgba(122,149,143,0.2) 0%, transparent 70%);"></div>
  </section> --}}

  <!-- Main Content -->
  <section class="py-5 py-lg-6">
    <div class="container">

      <!-- Intro -->
      <div class="row justify-content-center mb-4">
        <div class="col-lg-12 col-xl-12 text-center">
          <div class="card border-0 shadow-sm bg-light">
            <div class="card-body p-4 p-lg-5">
              <div class="d-flex align-items-center justify-content-center mb-3">
                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                  <i class="fas fa-stethoscope fa-2x text-primary"></i>
                </div>
                <h2 class="h3 fw-bold mb-0 text-dark">Expert Treatment for Multiple Conditions</h2>
              </div>
              <p class="text-muted mb-0">
                Our licensed physiotherapists provide evidence based treatment for various conditions.
                Each treatment plan is personalized to your specific needs and recovery goals.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Tabs on Top -->
      <div class="row justify-content-center mb-4">
        <div class="col-lg-12 col-xl-12">
          <div class="conditions-tabs card border-0 shadow-sm">
            <div class="card-body p-3 p-lg-4">
              <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
                <h3 class="h5 fw-bold mb-0 text-dark">Browse by Category</h3>
                {{-- <span class="small text-muted">Tap a tab to filter conditions</span> --}}
              </div>

              <div class="tabs-scroll">
                <div class="nav nav-pills gap-2" id="conditionsTabs" role="tablist">
                  <button class="btn btn-sm btn-outline-primary active" type="button" data-filter="all">
                    <i class="fas fa-layer-group me-2"></i> All
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="musculoskeletal">
                    <i class="fas fa-bone me-2"></i> Musculoskeletal
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="neurological">
                    <i class="fas fa-brain me-2"></i> Neurological
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="cranial">
                    <i class="fas fa-head-side-virus me-2"></i> Cranial and TMJ
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="vestibular">
                    <i class="fas fa-balance-scale me-2"></i> Vestibular
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="surgical">
                    <i class="fas fa-hospital-user me-2"></i> Post Surgical
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="sports">
                    <i class="fas fa-running me-2"></i> Sports
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="chronic">
                    <i class="fas fa-user-injured me-2"></i> Chronic Pain
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="geriatric">
                    <i class="fas fa-user-friends me-2"></i> Geriatric
                  </button>

                  <button class="btn btn-sm btn-outline-primary" type="button" data-filter="pelvic">
                    <i class="fas fa-user-md me-2"></i> Pelvic
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Conditions Grid -->
      <div class="row g-4" id="conditionsGrid">

        <!-- Musculoskeletal -->
        <div class="col-lg-6 condition-col" data-category="musculoskeletal">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header bg-primary text-white py-4 px-4 border-0">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-bone fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Musculoskeletal (MSK) Conditions</h3>
                  <p class="mb-0 opacity-75">Pain and disorders affecting bones, muscles, and joints</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Neck Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Upper Back Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Lower Back Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Shoulder Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Elbow Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Hand & Wrist Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Hip Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Knee Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Foot & Ankle Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Muscle Strains & Ligament Injuries</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Joint Stiffness & Arthritis</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle text-primary mt-1 me-3"></i><span>Postural & Work Related Pain</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Neurological -->
        <div class="col-lg-6 condition-col" data-category="neurological">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#2c3e50; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-brain fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Neurological Conditions</h3>
                  <p class="mb-0 opacity-75">Disorders affecting the nervous system and movement</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Stroke Rehabilitation</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Paralysis & Weakness</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Nerve Injuries</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Parkinson's Disease</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Multiple Sclerosis (MS)</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Balance & Coordination Issues</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Gait Disorders</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#2c3e50;"></i><span>Neurological Mobility Limitations</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Cranial -->
        <div class="col-lg-6 condition-col" data-category="cranial">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#8e44ad; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-head-side-virus fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Cranial, Facial & TMJ Conditions</h3>
                  <p class="mb-0 opacity-75">Head, jaw, and facial pain disorders</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Jaw Pain (TMJ Disorders)</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Facial Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Headaches</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Cervicogenic Headaches</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Tension Type Headaches</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Migraines</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#8e44ad;"></i><span>Neck Related Cranial Pain</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Vestibular -->
        <div class="col-lg-6 condition-col" data-category="vestibular">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#16a085; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-balance-scale fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Vestibular & Balance Conditions</h3>
                  <p class="mb-0 opacity-75">Dizziness, vertigo, and balance disorders</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Vertigo</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Dizziness</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Balance Disorders</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Frequent Falls</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Motion Sensitivity</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#16a085;"></i><span>Postural Instability</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Surgical -->
        <div class="col-lg-6 condition-col" data-category="surgical">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#e74c3c; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-hospital-user fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Post Surgical Rehabilitation</h3>
                  <p class="mb-0 opacity-75">Recovery after surgical procedures</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#e74c3c;"></i><span>Joint Replacement Recovery</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#e74c3c;"></i><span>Spine Surgery Rehabilitation</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#e74c3c;"></i><span>Fracture Recovery</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#e74c3c;"></i><span>Orthopedic Surgery Rehab</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#e74c3c;"></i><span>Neurological Surgery Rehab</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Sports -->
        <div class="col-lg-6 condition-col" data-category="sports">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#f39c12; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-running fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Sports & Injury Conditions</h3>
                  <p class="mb-0 opacity-75">Athletic injuries and recovery</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Sports Injuries</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Muscle Tears</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Ligament Sprains</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Tendon Injuries</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Overuse Injuries</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#f39c12;"></i><span>Return to Activity Rehab</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Chronic -->
        <div class="col-lg-6 condition-col" data-category="chronic">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#34495e; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-user-injured fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Chronic Pain Conditions</h3>
                  <p class="mb-0 opacity-75">Long term pain management and treatment</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#34495e;"></i><span>Chronic Back Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#34495e;"></i><span>Chronic Neck Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#34495e;"></i><span>Long Term Joint Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#34495e;"></i><span>Widespread Musculoskeletal Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#34495e;"></i><span>Movement Related Pain</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Geriatric -->
        <div class="col-lg-6 condition-col" data-category="geriatric">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#95a5a6; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-user-friends fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Geriatric Conditions</h3>
                  <p class="mb-0 opacity-75">Age related conditions and care</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#95a5a6;"></i><span>Age Related Joint Pain</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#95a5a6;"></i><span>Reduced Mobility</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#95a5a6;"></i><span>Balance Issues in Older Adults</span></li>

                                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#95a5a6;"></i><span>Post Fracture Rehab</span></li>

                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#95a5a6;"></i><span>Fall Prevention Needs</span></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Pelvic -->
        <div class="col-lg-6 condition-col" data-category="pelvic">
          <div class="condition-card card border-0 shadow-lg h-100">
            <div class="card-header py-4 px-4 border-0" style="background-color:#9b59b6; color:#fff;">
              <div class="d-flex align-items-center">
                <div class="icon-wrapper bg-white bg-opacity-20 rounded-circle p-3 me-3">
                  <i class="fas fa-user-md fa-2x"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold mb-1">Pelvic & Functional Conditions</h3>
                  <p class="mb-0 opacity-75">Pelvic floor and core related issues</p>
                </div>
              </div>
            </div>

            <div class="card-body p-4">
              <ul class="condition-list list-unstyled mb-0">
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#9b59b6;"></i><span>Pelvic Floor Dysfunction</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#9b59b6;"></i><span>Core Weakness</span></li>
                <li class="d-flex align-items-start"><i class="fas fa-check-circle mt-1 me-3" style="color:#9b59b6;"></i><span>Functional Movement Limitations</span></li>
              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- CTA Section -->
  {{-- <section class="py-5 py-lg-6 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">
          <div class="card border-0 shadow-lg overflow-hidden"
               style="background: linear-gradient(135deg, rgba(186,224,219,1) 0%, rgba(122,149,143,1) 100%);">
            <div class="row g-0 align-items-center">
              <div class="col-lg-8 p-4 p-lg-5">
                <h2 class="display-5 fw-bold text-white mb-3">Not Sure Where to Start?</h2>
                <p class="lead text-white mb-4">Our expert physiotherapists can assess your condition and create a personalized treatment plan.</p>

                <div class="d-flex flex-wrap gap-3">
                  <a href="/booking" class="btn btn-light btn-lg px-4 py-3">
                    <i class="fas fa-calendar-check me-2"></i> Book a Consultation
                  </a>
                  <a href="tel:8665253175" class="btn btn-outline-light btn-lg px-4 py-3">
                    <i class="fas fa-phone-alt me-2"></i> Call for Advice
                  </a>
                </div>
              </div>
              <div class="col-lg-4 d-none d-lg-block text-center p-4">
                <div class="bg-white bg-opacity-20 rounded-circle d-inline-flex p-4">
                  <i class="fas fa-comment-medical fa-4x text-white"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}


</div>




@endsection
