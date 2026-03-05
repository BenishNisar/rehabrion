@extends('Layout.layout')
@section('Content')

{{-- 1. Initial Banner Section --}}
<section class="about-banner-initial bg-dark-blue text-white text-center py-5 position-relative overflow-hidden" id="initialBanner">
    <div class="theme-overlay"></div>
    <div class="container py-lg-5 position-relative z-2">
        <div class="row justify-content-center align-items-center min-vh-50">
            <div class="col-lg-10">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold mb-3 animate__animated animate__fadeInDown">
                    <i class="fas fa-rocket me-2"></i>THE FUTURE OF RECRUITMENT
                </span>
                <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInUp">
                    Connecting <span class="text-pink">Australia</span> to the World
                </h1>
                <p class="lead text-white-50 animate__animated animate__fadeInUp animate__delay-1s mx-auto" style="max-width: 700px;">
                    We are more than a job portal; we are your career partners in the digital age.
                </p>
                <button id="exploreAbout" class="btn btn-custom btn-lg rounded-pill fw-bold mt-4 shadow-lg animate__animated animate__zoomIn animate__delay-2s">
                    Explore Our Story <i class="fas fa-arrow-down ms-2"></i>
                </button>
            </div>
        </div>
    </div>
</section>

{{-- 2. Advance Carousel Section (Modern 2026) --}}
<section id="aboutCarouselSection" class="about-carousel-section d-none position-relative">
    <div id="aboutCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-indicators d-none d-md-flex">
            <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-container">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=1200" class="d-block w-100 ken-burns" alt="Innovation" loading="lazy">
                </div>
                <div class="carousel-overlay d-flex align-items-center justify-content-center">
                    <div class="carousel-caption-content bg-white p-4 p-md-5 rounded-4 shadow-2xl text-center mx-3">
                        <h2 class="text-dark-blue fw-bold mb-2 mb-md-3 fs-3 fs-md-2">Innovation & Growth</h2>
                        <p class="text-muted mb-0 small-mobile">Building AI-integrated recruitment solutions for the modern workforce.</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="carousel-img-container">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200" class="d-block w-100 ken-burns" alt="Talent" loading="lazy">
                </div>
                <div class="carousel-overlay d-flex align-items-center justify-content-center">
                    <div class="carousel-caption-content bg-white p-4 p-md-5 rounded-4 shadow-2xl text-center mx-3">
                        <h2 class="text-dark-blue fw-bold mb-2 mb-md-3 fs-3 fs-md-2">Our Commitment</h2>
                        <p class="text-muted mb-0 small-mobile">Dedicated to transparency and building lasting professional relationships.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-carousel-nav">
            <button class="nav-btn prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="nav-btn next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>


{{-- 3. Modern Leadership Section --}}
{{-- 3. High-End Leadership Section --}}
{{-- 3. Modern Leadership Section --}}
<section class="leadership-section py-5 bg-white overflow-hidden">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">

            {{-- Left Side: Stylish Image Wrapper --}}
            <div class="col-lg-5 position-relative">
                <div class="leader-image-frame animate__animated animate__fadeInLeft">
                    <div class="frame-border"></div>
                    <img src="https://i.pravatar.cc/600?img=68" alt="General Manager" class="img-fluid rounded-4 shadow-2xl main-leader-img">

                    {{-- Floating Experience Tag --}}
                    <div class="experience-tag bg-pink text-white p-3 rounded-4 shadow-lg animate__animated animate__bounceIn animate__delay-1s">
                        <span class="d-block h4 fw-bold mb-0">25+</span>
                        <small class="text-uppercase ls-1">Years Experience</small>
                    </div>
                </div>
            </div>

            {{-- Right Side: Professional Content --}}
            <div class="col-lg-7 ps-lg-5 animate__animated animate__fadeInRight">
                <div class="leadership-content">
                    <span class="text-pink fw-bold text-uppercase ls-2 small mb-2 d-block">Leadership Message</span>

                    {{-- Stylish Name Header --}}
                    <h2 class="display-5 fw-bold text-dark-blue mb-1">Adrian <span class="text-pink">Roberts</span></h2>
                    <h5 class="text-muted fw-medium mb-4 italic-role">General Manager - JobPortal Pro</h5>

                    <div class="content-divider mb-4"></div>

                    <p class="lead text-dark-blue fw-medium mb-4">
                        "Recruitment is not just about filling roles; it's about building legacies for businesses and candidates alike."
                    </p>

                    <p class="text-muted lh-lg mb-5">
                        Adrian brings over two decades of international recruitment expertise to Australia. His vision for 2026 is to blend human empathy with AI efficiency, ensuring that every connection made through JobPortal Pro is meaningful, transparent, and long-lasting. He believes that honesty and deep industry knowledge are the keys to a successful placement.
                    </p>

                    {{-- Contact/Social Links --}}
                    <div class="d-flex align-items-center gap-4">
                        <div class="signature-box">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Jon_Kirsch_Signature.png" alt="Signature" class="img-fluid signature-img">
                        </div>
                        <div class="social-links-minimal">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="leadership-section py-5 bg-white overflow-hidden">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">

            {{-- <div class="col-lg-5 position-relative">
                <div class="leader-image-frame animate__animated animate__fadeInLeft">
                    <div class="frame-border"></div>
                    <img src="https://i.pravatar.cc/600?img=68" alt="General Manager" class="img-fluid rounded-4 shadow-2xl main-leader-img">

                    <div class="experience-tag bg-pink text-white p-3 rounded-4 shadow-lg animate__animated animate__bounceIn animate__delay-1s">
                        <span class="d-block h4 fw-bold mb-0">25+</span>
                        <small class="text-uppercase ls-1">Years Experience</small>
                    </div>
                </div>
            </div> --}}

            {{-- Right Side: Professional Content --}}
            <div class="col-lg-7 ps-lg-5 animate__animated animate__fadeInRight">
                <div class="leadership-content">
                    <span class="text-pink fw-bold text-uppercase ls-2 small mb-2 d-block">Leadership Message</span>

                    {{-- Stylish Name Header --}}
                    <h2 class="display-5 fw-bold text-dark-blue mb-1">Adrian <span class="text-pink">Roberts</span></h2>
                    <h5 class="text-muted fw-medium mb-4 italic-role">General Manager - JobPortal Pro</h5>

                    <div class="content-divider mb-4"></div>

                    <p class="lead text-dark-blue fw-medium mb-4">
                        "Recruitment is not just about filling roles; it's about building legacies for businesses and candidates alike."
                    </p>

                    <p class="text-muted lh-lg mb-5">
                        Adrian brings over two decades of international recruitment expertise to Australia. His vision for 2026 is to blend human empathy with AI efficiency, ensuring that every connection made through JobPortal Pro is meaningful, transparent, and long-lasting. He believes that honesty and deep industry knowledge are the keys to a successful placement.
                    </p>

                    {{-- Contact/Social Links --}}
                    <div class="d-flex align-items-center gap-4">
                        <div class="signature-box">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Jon_Kirsch_Signature.png" alt="Signature" class="img-fluid signature-img">
                        </div>
                        <div class="social-links-minimal">
                            <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-lg-5 position-relative">
                <div class="leader-image-frame animate__animated animate__fadeInLeft">
                    <div class="frame-border"></div>
                    <img src="https://i.pravatar.cc/600?img=68" alt="General Manager" class="img-fluid rounded-4 shadow-2xl main-leader-img">

                    {{-- Floating Experience Tag --}}
                    <div class="experience-tag bg-pink text-white p-3 rounded-4 shadow-lg animate__animated animate__bounceIn animate__delay-1s">
                        <span class="d-block h4 fw-bold mb-0">25+</span>
                        <small class="text-uppercase ls-1">Years Experience</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- purpouses --}}
{{-- 4. Our Purpose & Values: 2026 High-End Edition --}}
<section class="purpose-section py-5 position-relative overflow-hidden bg-white">
    <div class="container py-lg-5">

        {{-- Section Header --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9 text-center">
                <h6 class="text-pink fw-bold ls-3 mb-2 animate__animated animate__fadeIn">OUR CORE IDENTITY</h6>
                <h2 class="display-5 fw-bold text-dark-blue mb-4">Our <span class="text-pink">Purpose & Values</span></h2>
                <div class="purpose-quote-box p-4 rounded-4 shadow-sm mb-4">
                    <p class="fst-italic text-dark-blue lead mb-0">
                        "We create connections to change businesses and candidates' lives through passion and exceptional service, always with honesty & integrity."
                    </p>
                </div>
                <p class="text-muted mx-auto" style="max-width: 800px;">
                    JobPortalPro recruitment doesn't simply fill vacancies. We believe we create connections and build relationships with the aim of changing businesses and lives for the better.
                </p>
            </div>
        </div>

        {{-- Advance Values Grid --}}
        <div class="row g-4 mt-2">
            @php
                $values = [
                    [
                        'title' => 'Respect',
                        'icon' => 'fa-hands-helping',
                        'desc' => 'We show respect to all people – our candidates and clients alike. We understand the importance of the "right fit" and working with you to achieve a successful outcome.'
                    ],
                    [
                        'title' => 'Experience',
                        'icon' => 'fa-award',
                        'desc' => 'We honour and pride ourselves on our experience. We continue to educate ourselves and seek out knowledge relevant to our industry, which in turn empowers our clients and candidates to make the right choices.'
                    ],
                    [
                        'title' => 'Partnership',
                        'icon' => 'fa-handshake',
                        'desc' => 'Our one and only model - We believe in partnerships to achieve the best outcomes. We work as an extension of our clients business to provide accurate and detailed information to ensure success for all parties.'
                    ],
                    [
                        'title' => 'Teamwork',
                        'icon' => 'fa-users-cog',
                        'desc' => 'We understand that there’s no "I" in team and we work together in an inclusive and open environment where collaboration and celebration are an everyday experience.'
                    ]
                ];
            @endphp

            @foreach($values as $v)
            <div class="col-lg-6 col-xl-3">
                <div class="value-card-advance h-100 p-4 shadow-sm border-0 rounded-4 position-relative overflow-hidden">
                    <div class="value-icon-bg"><i class="fas {{ $v['icon'] }}"></i></div>
                    <div class="position-relative z-2">
                        <div class="v-icon-main mb-4">
                            <i class="fas {{ $v['icon'] }}"></i>
                        </div>
                        <h4 class="fw-bold text-dark-blue mb-3">{{ $v['title'] }}</h4>
                        <p class="text-muted small lh-base mb-0">{{ $v['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{-- purposes --}}
{{-- 5. Join The Team: 2026 Ultra-Modern Edition --}}
<section class="join-team-section py-5 position-relative overflow-hidden">
    {{-- Decorative Background Glows --}}
    <div class="glow-element glow-1"></div>
    <div class="glow-element glow-2"></div>

    <div class="container py-lg-5 position-relative z-2">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="display-4 fw-bold text-dark-blue mb-4 animate__animated animate__fadeInUp">Join The <span class="text-pink">Team</span></h2>
                <p class="text-muted lead mb-0">Building relationships is at the heart of our culture. At JobPortalPro, we welcome discussion of current opportunities with experienced recruiters and dedicated professionals wanting to transition into recruiting.</p>
            </div>
        </div>

        <div class="row g-4 align-items-center">
            {{-- Left Side: Benefits Grid --}}
            <div class="col-lg-7">
                <div class="benefits-grid">
                    <div class="row g-3">
                        @php
                            $benefits = [
                                ['icon' => 'fa-user-tie', 'text' => 'Supportive & present management'],
                                ['icon' => 'fa-users', 'text' => 'A tight-knit, collaborative team'],
                                ['icon' => 'fa-heart', 'text' => 'Work-life balance is a core value'],
                                ['icon' => 'fa-graduation-cap', 'text' => 'Encouragement for further education'],
                                ['icon' => 'fa-gift', 'text' => 'Real rewards & team target days'],
                                ['icon' => 'fa-briefcase', 'text' => '25+ years of industry backing']
                            ];
                        @endphp

                        @foreach($benefits as $b)
                        <div class="col-md-6">
                            <div class="benefit-item d-flex align-items-center p-3 rounded-4 shadow-sm bg-white border-start border-pink border-4">
                                <div class="b-icon me-3 text-pink fs-5">
                                    <i class="fas {{ $b['icon'] }}"></i>
                                </div>
                                <span class="fw-medium text-dark-blue small">{{ $b['text'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right Side: High-Conversion CTA --}}
            <div class="col-lg-5">
                <div class="cta-glass-card p-5 rounded-5 shadow-2xl text-center position-relative overflow-hidden">
                    <div class="cta-inner-content position-relative z-2">
                        <h4 class="fw-bold text-dark-blue mb-3">Ready to Make an Impact?</h4>
                        <p class="text-muted mb-4 small">For a confidential discussion regarding your potential future with us, let's talk today.</p>

                        {{-- 2026 Pulse Button --}}
                        <a href="{{ url('/contact') }}" class="btn-pulse-pink">
                            Get In Touch <i class="fas fa-paper-plane ms-2"></i>
                        </a>

                        <div class="mt-4 pt-3 border-top">
                            <p class="fst-italic text-pink mb-0 small">"I enjoy working here, it's the perfect balance of hard work and fun." - Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
