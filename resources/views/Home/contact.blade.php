@extends("Layout.layout")
@section("Content")
<style>
    #rehabrion-contact-page .toast{
  background: transparent;
}
#rehabrion-contact-page .rehToastInner{
  display:flex;
  align-items:flex-start;
  gap:12px;
  background:#ffffff;
  border-radius:16px;
  padding:14px 14px;
  box-shadow:0 18px 40px rgba(0,0,0,0.12);
  border:1px solid rgba(13,148,136,0.18);
  position:relative;
  min-width:320px;
}
#rehabrion-contact-page .rehToastInner:after{
  content:"";
  position:absolute;
  top:14px;
  right:18px;
  width:0;
  height:0;
  border-left:10px solid #ffffff;
  border-top:10px solid transparent;
  border-bottom:10px solid transparent;
  transform: translateX(10px);
  filter: drop-shadow(0 4px 6px rgba(0,0,0,0.08));
}
#rehabrion-contact-page .rehToastIcon{
  width:38px;
  height:38px;
  border-radius:12px;
  display:flex;
  align-items:center;
  justify-content:center;
  background: rgba(13,148,136,0.12);
  color: #0d9488;
  flex:0 0 auto;
}
#rehabrion-contact-page .rehToastTitle{
  font-weight:800;
  color:#0b1220;
  line-height:1.2;
  margin-bottom:2px;
}
#rehabrion-contact-page .rehToastMsg{
  color:#5b6776;
  line-height:1.35;
  font-size:14px;
}
#rehabrion-contact-page .rehToastClose{
  margin-left:auto;
  background:transparent;
  border:0;
  padding:2px 4px;
  color:#6b7280;
  cursor:pointer;
}
#rehabrion-contact-page .rehToastDanger{
  border-color: rgba(220,53,69,0.20);
}
#rehabrion-contact-page .rehToastDanger .rehToastIcon{
  background: rgba(220,53,69,0.12);
  color:#dc3545;
}
#rehabrion-contact-page .rehToastAnim{
  width:72px;
  height:72px;
  flex:0 0 auto;
  display:flex;
  align-items:center;
  justify-content:center;
}

</style>
<div class="contact-page" id="rehabrion-contact-page">
    <!-- Hero Section -->

<!-- Hero Section - UPDATED -->
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-content">
                        <div class="hero-badge floating-icon">
                            <i class="fas fa-badge-check"></i>Get in Touch
                        </div>

                        <h1 class="display-4 fw-bold mb-3">Contact Rehabrion</h1>

                        <p class="lead mb-4">Professional rehabilitation care delivered to your home. We're here to help you start your recovery journey.
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
    <!-- Hero Section -->


    <!-- Contact Information & Form -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row g-5">
                <!-- Contact Information -->
                {{-- <div class="col-lg-6">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4 p-lg-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h4 fw-bold mb-1">Corporate Headquarters</h3>
                                    <p class="text-muted mb-0">Serving patients across the United States</p>
                                </div>
                            </div>

                            <div class="contact-info mb-5">
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-map-marker-alt text-primary mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Address</h6>
                                        <p class="text-muted mb-0">PO Box 290609<br>Nashville, TN 37229</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-phone-alt text-primary mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Phone</h6>
                                        <a href="tel:8665253175" class="text-decoration-none text-dark">(866) 525-3175</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <i class="fas fa-fax text-primary mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Fax</h6>
                                        <a href="tel:6282468418" class="text-decoration-none text-dark">(628) 246-8418</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <i class="fas fa-envelope text-primary mt-1 me-3"></i>
                                    <div>
                                        <h6 class="fw-bold mb-1">Email</h6>
                                        <a href="mailto:contact@rehabrion.com" class="text-decoration-none text-primary">contact@rehabrion.com</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Operating Hours Accordion -->
                            <div class="accordion" id="hoursAccordion">
                                <!-- Scheduling Hours -->
                                <div class="accordion-item border-0 mb-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed bg-light rounded-3 px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#schedulingHours">
                                            <i class="fas fa-calendar-check text-primary me-3"></i>
                                            <span class="fw-bold">Concierge / Scheduling Hours</span>
                                        </button>
                                    </h2>
                                    <div id="schedulingHours" class="accordion-collapse collapse" data-bs-parent="#hoursAccordion">
                                        <div class="accordion-body px-4 py-4">
                                            <div class="row">
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <h6 class="text-primary fw-bold mb-3">Mon - Fri</h6>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">PST</span>
                                                        <span class="text-muted">6 am - 6 pm</span>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">MST</span>
                                                        <span class="text-muted">7 am - 7 pm</span>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">CST</span>
                                                        <span class="text-muted">8 am - 8 pm</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">EST</span>
                                                        <span class="text-muted">9 am - 9 pm</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <h6 class="text-primary fw-bold mb-3">Sat - Sun</h6>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">PST</span>
                                                        <span class="text-muted">8 am - 4:30 pm</span>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">MST</span>
                                                        <span class="text-muted">9 am - 5:30 pm</span>
                                                    </div>
                                                    <div class="d-flex mb-2">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">CST</span>
                                                        <span class="text-muted">10 am - 6:30 pm</span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">EST</span>
                                                        <span class="text-muted">11 am - 7:30 pm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Billing Hours -->
                                <div class="accordion-item border-0">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed bg-light rounded-3 px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#billingHours">
                                            <i class="fas fa-file-invoice-dollar text-primary me-3"></i>
                                            <span class="fw-bold">Concierge / Billing Hours</span>
                                        </button>
                                    </h2>
                                    <div id="billingHours" class="accordion-collapse collapse" data-bs-parent="#hoursAccordion">
                                        <div class="accordion-body px-4 py-4">
                                            <h6 class="text-primary fw-bold mb-3">Mon - Fri</h6>
                                            <div class="d-flex mb-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary me-2">PST</span>
                                                <span class="text-muted">8 am - 5 pm</span>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary me-2">MST</span>
                                                <span class="text-muted">9 am - 6 pm</span>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <span class="badge bg-primary bg-opacity-10 text-primary me-2">CST</span>
                                                <span class="text-muted">9:30 am - 6:30 pm</span>
                                            </div>
                                            <div class="d-flex">
                                                <span class="badge bg-primary bg-opacity-10 text-primary me-2">EST</span>
                                                <span class="text-muted">11 am - 8 pm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
<div class="col-lg-6">
    <div class="card border-0 shadow-lg h-100">
        <div class="card-body p-4 p-lg-5">
            <div class="d-flex align-items-center mb-4">
                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                    <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                </div>
                <div>
                    <h3 class="h4 fw-bold mb-1">Karachi, Pakistan</h3>
                    <p class="text-muted mb-0">Home based rehabilitation services in Karachi</p>
                </div>
            </div>

            <div class="contact-info-list mb-4">
                <div class="contact-row">
                    <div class="contact-ico">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="contact-txt">
                        <div class="contact-label">Address</div>
                        <div class="contact-val text-muted">
                            Rehabrion, Karachi, Pakistan
                            <br>
                            Add your full clinic address here
                        </div>
                    </div>
                </div>

                <div class="contact-row">
                    <div class="contact-ico">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-txt">
                        <div class="contact-label">Phone</div>
                        <a href="tel:+923000000000" class="contact-link">+92 300 0000000</a>
                    </div>
                </div>

                <div class="contact-row">
                    <div class="contact-ico">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="contact-txt">
                        <div class="contact-label">WhatsApp</div>
                        <a href="https://wa.me/923000000000" target="_blank" class="contact-link">Chat on WhatsApp</a>
                    </div>
                </div>

                <div class="contact-row">
                    <div class="contact-ico">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-txt">
                        <div class="contact-label">Email</div>
                        <a href="mailto:contact@rehabrion.com" class="contact-link">contact@rehabrion.com</a>
                    </div>
                </div>
            </div>

            <div class="accordion" id="hoursAccordion">
                <div class="accordion-item border-0 mb-3">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-light rounded-3 px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#clinicHours">
                            <i class="fas fa-clock text-primary me-3"></i>
                            <span class="fw-bold">Clinic Hours</span>
                        </button>
                    </h2>
                    <div id="clinicHours" class="accordion-collapse collapse" data-bs-parent="#hoursAccordion">
                        <div class="accordion-body px-4 py-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold">Mon to Sat</span>
                                <span class="text-muted">10:00 am to 08:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Sunday</span>
                                <span class="text-muted">Closed</span>
                            </div>
                            <div class="small text-muted mt-3">All timings are Pakistan Standard Time</div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed bg-light rounded-3 px-4 py-3" type="button" data-bs-toggle="collapse" data-bs-target="#supportHours">
                            <i class="fas fa-headset text-primary me-3"></i>
                            <span class="fw-bold">Support Hours</span>
                        </button>
                    </h2>
                    <div id="supportHours" class="accordion-collapse collapse" data-bs-parent="#hoursAccordion">
                        <div class="accordion-body px-4 py-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold">Mon to Sat</span>
                                <span class="text-muted">11:00 am to 07:00 pm</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-semibold">Sunday</span>
                                <span class="text-muted">Closed</span>
                            </div>
                            <div class="small text-muted mt-3">WhatsApp replies are faster during support hours</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

                <!-- Contact Form -->
                <div class="col-lg-6" id="contact-form">
                    <div class="card border-0 shadow-lg h-100">
                        <div class="card-body p-4 p-lg-5">
                            <h3 class="h2 fw-bold mb-4 text-dark">Send Us a Message</h3>
                            <p class="text-muted mb-4">
                                Please note: Appointment cancellations can only be made by phone
                                <a href="tel:8665253175" class="text-primary text-decoration-none">(866) 525-3175</a>
                                or via the <a href="/apps" class="text-primary text-decoration-none">Rehabrion app</a>.
                            </p>

                            {{-- <form method="POST" action="#">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-2 border-light rounded-3" id="firstName" name="first_name" placeholder="John" required>
                                            <label for="firstName" class="text-muted">
                                                <i class="fas fa-user me-2"></i> First Name*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-2 border-light rounded-3" id="lastName" name="last_name" placeholder="Doe" required>
                                            <label for="lastName" class="text-muted">
                                                <i class="fas fa-user me-2"></i> Last Name*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-2 border-light rounded-3" id="email" name="email" placeholder="name@example.com" required>
                                            <label for="email" class="text-muted">
                                                <i class="fas fa-envelope me-2"></i> Email Address*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control border-2 border-light rounded-3" id="phone" name="phone" placeholder="(123) 456-7890" required>
                                            <label for="phone" class="text-muted">
                                                <i class="fas fa-phone-alt me-2"></i> Phone Number*
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-2 border-light rounded-3" id="message" name="message" placeholder="Your message" style="height: 150px"></textarea>
                                            <label for="message" class="text-muted">
                                                <i class="fas fa-comment-dots me-2"></i> Message
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg w-100 py-3 shadow-sm">
                                            <i class="fas fa-paper-plane me-2"></i> Send Message
                                        </button>
                                    </div>
                                </div>
                            </form> --}}

                    <form id="contactForm" method="POST" action="{{ route('Home.contact.store') }}">
  @csrf

  <div  class="alert d-none" role="alert"></div>

  <div class="row g-3">
    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control border-2 border-light rounded-3" id="name" name="name" placeholder="Your name">
        <label for="name" class="text-muted"><i class="fas fa-user me-2"></i> Full Name</label>
      </div>
      <div class="text-danger small mt-1" data-error="name"></div>
    </div>

    <div class="col-12">
      <div class="form-floating">
        <input type="email" class="form-control border-2 border-light rounded-3" id="email" name="email" placeholder="name@example.com">
        <label for="email" class="text-muted"><i class="fas fa-envelope me-2"></i> Email Address</label>
      </div>
      <div class="text-danger small mt-1" data-error="email"></div>
    </div>

    <div class="col-12">
      <div class="form-floating">
        <input type="text" class="form-control border-2 border-light rounded-3" id="country" name="country" placeholder="Pakistan">
        <label for="country" class="text-muted"><i class="fas fa-flag me-2"></i> Country</label>
      </div>
      <div class="text-danger small mt-1" data-error="country"></div>
    </div>

    <div class="col-12">
      <div class="form-floating">
        <input type="tel" class="form-control border-2 border-light rounded-3" id="phone" name="phone" placeholder="+92 3xx xxxxxxx">
        <label for="phone" class="text-muted"><i class="fas fa-phone-alt me-2"></i> Phone Number</label>
      </div>
      <div class="text-danger small mt-1" data-error="phone"></div>
    </div>

    <div class="col-12">
      <div class="form-floating">
        <textarea class="form-control border-2 border-light rounded-3" id="message" name="message" placeholder="Your message" style="height:150px"></textarea>
        <label for="message" class="text-muted"><i class="fas fa-comment-dots me-2"></i> Message</label>
      </div>
      <div class="text-danger small mt-1" data-error="message"></div>
    </div>

    <div class="col-12">
      <button id="contactSubmitBtn" type="submit" class="btn btn-primary btn-lg w-100 py-3 shadow-sm">
        <i class="fas fa-paper-plane me-2"></i> Send Message
      </button>
    </div>
  </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:99999;">
  <div id="rehToast" class="toast border-0" role="alert" aria-live="assertive" aria-atomic="true"
    data-success-lottie="{{ asset('assets/lottie/balloon-pop.json') }}"
    data-error-lottie="{{ asset('assets/lottie/error.json') }}">
    <div class="rehToastInner">
      <div class="rehToastAnim" id="rehToastAnim"></div>
      <div class="rehToastText">
        <div class="rehToastTitle" id="rehToastTitle">Success</div>
        <div class="rehToastMsg" id="rehToastMsg">Done</div>
      </div>
      <button type="button" class="rehToastClose" data-bs-dismiss="toast" aria-label="Close">
        <i class="fas fa-xmark"></i>
      </button>
    </div>
  </div>
</div>




    <!-- Service Areas -->
    {{-- <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="d-inline-block mb-3">
                    <i class="fas fa-map-marked-alt fa-3x text-primary"></i>
                </span>
                <h2 class="display-5 fw-bold mb-3 text-dark">Where We Serve</h2>
                <p class="lead text-muted mb-0">Providing home-based rehabilitation services across the United States</p>
            </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm overflow-hidden">
                        <div class="card-body p-0">
                            <!-- Interactive Map Placeholder -->
                            <div class="position-relative" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); min-height: 400px;">
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <i class="fas fa-map fa-5x text-primary opacity-25 mb-3"></i>
                                    <h4 class="text-muted">Interactive Service Map</h4>
                                    <p class="text-muted">Visual representation of our service areas</p>
                                </div>

                                <!-- Map markers (simulated) -->
                                <div class="position-absolute" style="top: 30%; left: 20%;">
                                    <div class="map-marker bg-primary text-white rounded-circle p-2 shadow">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                </div>
                                <div class="position-absolute" style="top: 40%; left: 50%;">
                                    <div class="map-marker bg-primary text-white rounded-circle p-2 shadow">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                </div>
                                <div class="position-absolute" style="top: 60%; left: 30%;">
                                    <div class="map-marker bg-primary text-white rounded-circle p-2 shadow">
                                        <i class="fas fa-map-pin"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="fw-bold mb-4">Service Area Selector</h4>
                            <div class="mb-4">
                                <label for="stateSelect" class="form-label fw-bold text-muted">Select Your State</label>
                                <select class="form-select form-select-lg border-2 border-light rounded-3 py-3" id="stateSelect">
                                    <option selected disabled>Choose a state...</option>
                                    <option value="al">Alabama</option>
                                    <option value="ak">Alaska</option>
                                    <option value="az">Arizona</option>
                                    <option value="ar">Arkansas</option>
                                    <option value="ca">California</option>
                                    <option value="co">Colorado</option>
                                    <option value="ct">Connecticut</option>
                                    <option value="de">Delaware</option>
                                    <option value="fl">Florida</option>
                                    <option value="ga">Georgia</option>
                                    <option value="hi">Hawaii</option>
                                    <option value="id">Idaho</option>
                                    <option value="il">Illinois</option>
                                    <option value="in">Indiana</option>
                                    <option value="ia">Iowa</option>
                                    <option value="ks">Kansas</option>
                                    <option value="ky">Kentucky</option>
                                    <option value="la">Louisiana</option>
                                    <option value="me">Maine</option>
                                    <option value="md">Maryland</option>
                                    <option value="ma">Massachusetts</option>
                                    <option value="mi">Michigan</option>
                                    <option value="mn">Minnesota</option>
                                    <option value="ms">Mississippi</option>
                                    <option value="mo">Missouri</option>
                                    <option value="mt">Montana</option>
                                    <option value="ne">Nebraska</option>
                                    <option value="nv">Nevada</option>
                                    <option value="nh">New Hampshire</option>
                                    <option value="nj">New Jersey</option>
                                    <option value="nm">New Mexico</option>
                                    <option value="ny">New York</option>
                                    <option value="nc">North Carolina</option>
                                    <option value="nd">North Dakota</option>
                                    <option value="oh">Ohio</option>
                                    <option value="ok">Oklahoma</option>
                                    <option value="or">Oregon</option>
                                    <option value="pa">Pennsylvania</option>
                                    <option value="ri">Rhode Island</option>
                                    <option value="sc">South Carolina</option>
                                    <option value="sd">South Dakota</option>
                                    <option value="tn">Tennessee</option>
                                    <option value="tx">Texas</option>
                                    <option value="ut">Utah</option>
                                    <option value="vt">Vermont</option>
                                    <option value="va">Virginia</option>
                                    <option value="wa">Washington</option>
                                    <option value="wv">West Virginia</option>
                                    <option value="wi">Wisconsin</option>
                                    <option value="wy">Wyoming</option>
                                </select>
                            </div>

                            <div id="stateInfo" class="d-none">
                                <div class="alert alert-primary bg-primary bg-opacity-10 border-primary border-opacity-25">
                                    <h5 class="alert-heading">Service Available!</h5>
                                    <p class="mb-2">We provide home-based rehabilitation services in your selected state.</p>
                                    <a href="/booking" class="btn btn-primary btn-sm">Book Appointment</a>
                                </div>
                            </div>

                            <div class="text-center mt-4 pt-3 border-top">
                                <a href="/locations" class="btn btn-outline-primary btn-lg px-4">
                                    <i class="fas fa-list me-2"></i> View Full Service Area List
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
<section class="py-5 py-lg-6 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <span class="d-inline-block mb-3">
                <i class="fas fa-location-crosshairs fa-3x text-primary"></i>
            </span>
            <h2 class="display-5 fw-bold mb-3 text-dark">Where We Serve</h2>
            <p class="lead text-muted mb-0">Currently available in Karachi only</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h4 class="fw-bold mb-3">Service Areas in Karachi</h4>
                        <p class="text-muted mb-4">We provide home based rehabilitation in the following areas. If your area is not listed, still message us and we will confirm availability.</p>

                        <div class="areas-wrap">
                            <span class="area-chip">DHA</span>
                            <span class="area-chip">Clifton</span>
                            <span class="area-chip">PECHS</span>
                            <span class="area-chip">Gulshan e Iqbal</span>
                            <span class="area-chip">Johar</span>
                            <span class="area-chip">North Nazimabad</span>
                            <span class="area-chip">Nazimabad</span>
                            <span class="area-chip">Bahadurabad</span>
                            <span class="area-chip">KDA</span>
                            <span class="area-chip">Saddar</span>
                        </div>

                        <div class="mt-4 p-3 rounded-3 bg-primary bg-opacity-10">
                            <div class="d-flex align-items-start">
                                <i class="fas fa-circle-info text-primary mt-1 me-2"></i>
                                <div class="text-muted">
                                    Travel charges may apply for far locations. Final confirmation is shared on WhatsApp after you submit the form.
                                </div>
                            </div>
                        </div>

                        <div class="mt-4 d-flex flex-wrap gap-2">
                            <a href="#contact-form" class="btn btn-primary btn-lg px-4">
                                <i class="fas fa-paper-plane me-2"></i> Send Message
                            </a>
                            <a href="https://wa.me/923000000000" target="_blank" class="btn btn-outline-primary btn-lg px-4">
                                <i class="fab fa-whatsapp me-2"></i> WhatsApp
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Quick Contact CTA -->
    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="card border-0 shadow-lg overflow-hidden" style="background: linear-gradient(135deg, #bae0db 0%, #7a958f 100%);">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-8 p-4 p-lg-5">
                        <h2 class="display-5 fw-bold text-white mb-3">Ready to Start Your Recovery?</h2>
                        <p class="lead text-white mb-4">Contact us today for a free consultation and personalized recovery plan.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="{{ asset('submit-medical-history') }}" class="btn btn-light btn-lg px-4 py-3">
                            <i class="fas fa-calendar-check me-2"></i> Book Consultation
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="text-center p-4">
                            <div class="bg-white bg-opacity-20 rounded-circle d-inline-flex p-4">
                                <i class="fas fa-headset fa-4x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg" style="border-radius:18px;">
      <div class="modal-body text-center p-4 p-lg-5">

        <div class="mx-auto mb-3 d-flex align-items-center justify-content-center"
             style="width:72px;height:72px;border-radius:18px;background:rgba(13,148,136,0.12);color:#0d9488;">
          <i class="fas fa-check" style="font-size:30px;"></i>
        </div>

        <h5 class="fw-bold mb-2" id="thankYouTitle" style="color:#0b1220;">Thank you</h5>
        <p class="mb-0" id="thankYouMsg" style="color:#5b6776;">
          Your message has been submitted successfully.
        </p>

        <button type="button" class="btn btn-primary btn-lg mt-4 px-4" data-bs-dismiss="modal">
          Okay
        </button>

      </div>
    </div>
  </div>
</div>



<!-- JavaScript for Interactive Features -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // State selector functionality
    const stateSelect = document.getElementById('stateSelect');
    const stateInfo = document.getElementById('stateInfo');

    if (stateSelect) {
        stateSelect.addEventListener('change', function() {
            if (this.value) {
                stateInfo.classList.remove('d-none');

                // Simulate loading state
                const alertContent = stateInfo.querySelector('.alert');
                const originalContent = alertContent.innerHTML;
                alertContent.innerHTML = `
                    <div class="text-center py-2">
                        <div class="spinner-border spinner-border-sm text-primary me-2"></div>
                        Loading service information...
                    </div>
                `;

                // Simulate API call
                setTimeout(() => {
                    alertContent.innerHTML = originalContent;
                }, 500);
            } else {
                stateInfo.classList.add('d-none');
            }
        });
    }

    // Form submission animation


    // Map marker interaction
    const mapMarkers = document.querySelectorAll('.map-marker');
    mapMarkers.forEach(marker => {
        marker.addEventListener('click', function() {
            const stateSelect = document.getElementById('stateSelect');
            stateSelect.value = 'ca'; // Example: California
            stateSelect.dispatchEvent(new Event('change'));
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            if (this.getAttribute('href') !== '#') {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});
</script>



@endsection
