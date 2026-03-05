@extends('Layout.layout')
@section('Content')

{{-- <section class="contact-hero bg-dark-blue position-relative overflow-hidden">
    <div class="glow-bg"></div>
    <div class="container py-5 text-center position-relative z-2">
        <h1 class="display-4 fw-bold text-white mb-3 mt-lg-5">Get In <span class="text-pink">Touch</span></h1>
        <p class="lead text-white-50 mx-auto" style="max-width: 650px;">
            Connecting talent with opportunity across Australia. Reach out today for a confidential discussion.
        </p>
    </div>
</section> --}}
<section class="about-banner-initial bg-dark-blue text-white text-center py-5 position-relative overflow-hidden" id="initialBanner">
    <div class="theme-overlay"></div>
    <div class="container py-lg-5 position-relative z-2">
        <div class="row justify-content-center align-items-center min-vh-50">
            <div class="col-lg-10">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold mb-3 animate__animated animate__fadeInDown">
<i class="fas fa-headset me-2"></i>CONTACT SUPPORT
                </span>
                <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">
                    Contact <span class="text-pink">Us</span>
                </h1>
                <p class="lead text-white-50 animate__animated animate__fadeInUp animate__delay-1s mx-auto" style="max-width: 700px;">
    Need help with hiring, applying, or partnerships? Send us a message and our team will get back to you within 24 hours.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="contact-main py-5 bg-light">
    <div class="container py-lg-5">
        <div class="row g-4 align-items-stretch">

            {{-- Left Side: Info Cards --}}
            <div class="col-lg-4">
                <div class="contact-sidebar h-100 d-flex flex-column">
                    <h3 class="fw-bold text-dark-blue mb-4">Our Offices</h3>

                    <div class="info-card-premium">
                        <div class="icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="text-wrap">
                            <h6>Notting Hill Office</h6>
                            <p>24/270 Ferntree Gully Road, Notting Hill, VIC 3168</p>
                        </div>
                    </div>

                    <div class="info-card-premium">
                        <div class="icon-wrap"><i class="fas fa-phone-alt flip-phone"></i></div>
                        <div class="text-wrap">
                            <h6>Call Us</h6>
                            <p>03 9535 9500</p>
                        </div>
                    </div>

                    <div class="info-card-premium">
                        <div class="icon-wrap"><i class="fas fa-envelope"></i></div>
                        <div class="text-wrap">
                            <h6>Email</h6>
                            <p>careers@jobportalpro.com.au</p>
                        </div>
                    </div>

           <div class="social-wrapper mt-auto pt-4">
    <p class="small fw-bold text-muted text-uppercase ls-2 mb-3">Connect With Us</p>
    <div class="d-flex gap-3">
        <a href="#" class="social-btn facebook" title="Follow us on Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-btn linkedin" title="Connect on LinkedIn">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="#" class="social-btn instagram" title="Follow us on Instagram">
            <i class="fab fa-instagram"></i>
        </a>
    </div>
</div>
                </div>
            </div>

            {{-- Right Side: Modern Form --}}
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h3 class="fw-bold text-dark-blue mb-4">Send a Message</h3>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="floating-input">
                                    <input type="text" class="form-control" placeholder="Full Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="floating-input">
                                    <input type="email" class="form-control" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating-input">
                                    <input type="tel" class="form-control" placeholder="Contact Number" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="floating-input">
                                    <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-premium-pink w-100 py-3 rounded-pill fw-bold">
                                    SEND MESSAGE <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.472145648587!2d145.14442657662586!3d-37.90772744005697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66ad8565a95ef%3A0xc660d2b7858c4cc0!2s24%2F270%20Ferntree%20Gully%20Rd%2C%20Notting%20Hill%20VIC%203168%2C%20Australia!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection
