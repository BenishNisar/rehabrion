@extends("Layout.layout")
@section("Content")

<header class="hero-section-seek d-flex align-items-center">
    <div class="container position-relative z-2">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-10 col-12">
                <div class="job-search-card animate-up">

                    <h1 class="card-title mb-3">
                        Find your <span class="text-pink">Job Portal</span> today.
                    </h1>
                    <p class="card-subtitle mb-4">
                        Our AI-powered platform matches you with the right companies, fast.
                    </p>
{{--
                    <form action="#" class="search-form-vertical">

                        <div class="form-group mb-3 position-relative">
                            <i class="fas fa-search field-icon"></i>
                            <input type="text" class="form-control form-control-lg ps-5" placeholder="Search for keywords">
                        </div>

                        <div class="form-group mb-3 position-relative">
                            <i class="fas fa-map-marker-alt field-icon"></i>
                            <input type="text" class="form-control form-control-lg ps-5" placeholder="Location">
                        </div>

                        <div class="form-group mb-4 position-relative">
                            <i class="fas fa-briefcase field-icon"></i>
                            <select class="form-select form-select-lg ps-5 cursor-pointer">
                                <option selected>All Sectors</option>
                                <option>Information Technology</option>
                                <option>Healthcare</option>
                                <option>Marketing & Sales</option>
                                <option>Engineering</option>
                            </select>
                            <i class="fas fa-chevron-down dropdown-icon"></i>
                        </div>

                        <button type="submit" class="btn btn-custom w-100 py-3 fw-bold fs-5 shadow-sm">
                            Search
                        </button>
                    </form> --}}

                    <form action="{{ route('Home.jobs') }}" method="GET" class="search-form-vertical">

    <div class="form-group mb-3 position-relative">
        <i class="fas fa-search field-icon"></i>
        <input type="text" name="q" class="form-control form-control-lg ps-5"
               placeholder="Search for keywords" value="{{ request('q') }}">
    </div>

    <div class="form-group mb-3 position-relative">
        <i class="fas fa-map-marker-alt field-icon"></i>
        <input type="text" name="location" class="form-control form-control-lg ps-5"
               placeholder="Location" value="{{ request('location') }}">
    </div>

    {{-- <div class="form-group mb-4 position-relative">
        <i class="fas fa-briefcase field-icon"></i>

        <select name="sector" class="form-select form-select-lg ps-5 cursor-pointer">
            <option value="">All Sectors</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Healthcare">Healthcare</option>
            <option value="Marketing & Sales">Marketing & Sales</option>
            <option value="Engineering">Engineering</option>
        </select>

        <i class="fas fa-chevron-down dropdown-icon"></i>
    </div> --}}

    <button type="submit" class="btn btn-custom w-100 py-3 fw-bold fs-5 shadow-sm">
        Search
    </button>
</form>

                    <div class="mt-4 pt-3 border-top">
                        <p class="mb-0 text-muted small">
                            <i class="fas fa-chart-line text-pink me-2"></i>
                            <span class="fw-bold text-dark">10,500+</span> jobs added today
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block"></div>
        </div>
    </div>
</header>
{{-- header finish --}}

{{-- section about us --}}
<section class="about-section py-5 position-relative overflow-hidden">
    <div class="bg-blob-1"></div>

    <div class="container py-5 position-relative z-2">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="mosaic-grid">
                    <div class="mosaic-item item-1 animate-hover">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=500&q=80" alt="Team">
                    </div>
                    <div class="mosaic-item item-2 animate-hover">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=500&q=80" alt="Meeting">
                    </div>
                    <div class="mosaic-item item-3 animate-hover">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=500&q=80" alt="Office">
                    </div>
                    <div class="mosaic-item item-4 animate-hover">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=500&q=80" alt="Work">
                    </div>
                    <div class="mosaic-item item-5 animate-hover">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&q=80" alt="Professional">
                    </div>
                    <div class="mosaic-item item-6 animate-hover">
                        <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=500&q=80" alt="Group">
                    </div>
                </div>
            </div>

            <div class="col-lg-1 d-none d-lg-flex justify-content-center align-items-center position-relative">
                <h2 class="vertical-text">ABOUT US</h2>
            </div>

            <div class="col-lg-5">
                <div class="about-content ps-lg-4">
                    <span class="badge bg-pink-light text-pink mb-3 px-3 py-2 rounded-pill fw-bold">Who We Are</span>
                    <h2 class="fw-bold display-5 mb-4 text-dark-blue">
                        We build bridges between <span class="text-pink">Talent</span> and <span class="text-pink">Opportunity</span>.
                    </h2>
                    <p class="text-muted lead mb-4">
                        JobPortalPro is not just a job board; we are the advanced AI-driven ecosystem connecting the world's most ambitious professionals with future-forward companies.
                    </p>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <div class="p-3 border rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <i class="fas fa-users fs-2 text-pink me-3"></i>
                                <div>
                                    <h4 class="fw-bold mb-0">150k+</h4>
                                    <small class="text-muted">Daily Users</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-3 border rounded-4 bg-white shadow-sm d-flex align-items-center">
                                <i class="fas fa-briefcase fs-2 text-pink me-3"></i>
                                <div>
                                    <h4 class="fw-bold mb-0">50k+</h4>
                                    <small class="text-muted">Companies</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn btn-custom rounded-pill px-5 py-3 fw-bold">Learn More About Us <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- section about us --}}


{{-- logo --}}
<section class="sectors-stream py-5 position-relative overflow-hidden">
    <div class="stream-glow"></div>

    <div class="container text-center mb-5 position-relative z-2">
        <span class="badge bg-white text-pink shadow-sm px-3 py-2 rounded-pill fw-bold ls-1 mb-3">
            <i class="fas fa-bolt me-2"></i>TRENDING INDUSTRIES
        </span>
        <h2 class="display-5 fw-bold text-dark-blue">
            Opportunities across <span class="text-pink text-gradient">Global Sectors</span>
        </h2>
    </div>

    <div class="stream-wrapper">
        <div class="stream-fade-left"></div>
        <div class="stream-fade-right"></div>

        <div class="stream-track">

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                <div class="card-info">
                    <h5>Technology</h5>
                    <span>1,200+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="card-info">
                    <h5>Finance</h5>
                    <span>850+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="card-info">
                    <h5>Healthcare</h5>
                    <span>2,000+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-hard-hat"></i></div>
                <div class="card-info">
                    <h5>Construction</h5>
                    <span>500+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-bullhorn"></i></div>
                <div class="card-info">
                    <h5>Marketing</h5>
                    <span>340+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="card-info">
                    <h5>Education</h5>
                    <span>600+ Jobs</span>
                </div>
            </div>

             <div class="stream-card">
                <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                <div class="card-info">
                    <h5>Technology</h5>
                    <span>1,200+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-chart-pie"></i></div>
                <div class="card-info">
                    <h5>Finance</h5>
                    <span>850+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="card-info">
                    <h5>Healthcare</h5>
                    <span>2,000+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-hard-hat"></i></div>
                <div class="card-info">
                    <h5>Construction</h5>
                    <span>500+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-bullhorn"></i></div>
                <div class="card-info">
                    <h5>Marketing</h5>
                    <span>340+ Jobs</span>
                </div>
            </div>

            <div class="stream-card">
                <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                <div class="card-info">
                    <h5>Education</h5>
                    <span>600+ Jobs</span>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- logo --}}


{{-- featured jobs --}}
<section class="featured-jobs py-5 bg-white position-relative">
    <div class="container py-4">

        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold ls-1 mb-2">
                    <i class="fas fa-star me-2"></i>TOP OPPORTUNITIES
                </span>
                <h2 class="display-5 fw-bold text-dark-blue">
                    Latest <span class="text-pink">Featured Jobs</span>
                </h2>
                <p class="text-muted lead mb-0">Hand-picked jobs from top companies.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold">View All Jobs <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100">
                    <div class="card-top">
                        <div class="d-flex align-items-center gap-3">
                            <div class="company-logo">
                                <i class="fab fa-google text-primary fs-3"></i>
                            </div>
                            <div>
                                <h5 class="job-title mb-1">Senior UI/UX Designer</h5>
                                <p class="company-name mb-0">Google Inc. <i class="fas fa-check-circle text-primary small"></i></p>
                            </div>
                        </div>
                        <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                    </div>

                    <div class="card-body px-0 pt-3">
                        <div class="job-tags">
                            <span><i class="fas fa-map-marker-alt"></i> NY, USA</span>
                            <span><i class="fas fa-wallet"></i> $150k</span>
                            <span class="badge-tag tag-urgent"><i class="fas fa-bolt me-1"></i>Urgent</span>
                        </div>
                    </div>

                    <div class="card-footer-custom">
                        <div class="posted-time">
                            <i class="far fa-clock me-1"></i> 2 hours ago
                        </div>
                        <a href="#" class="btn btn-apply">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100 highlight-border">
                    <div class="card-top">
                        <div class="d-flex align-items-center gap-3">
                            <div class="company-logo">
                                <i class="fab fa-spotify text-success fs-3"></i>
                            </div>
                            <div>
                                <h5 class="job-title mb-1">Product Manager</h5>
                                <p class="company-name mb-0">Spotify <i class="fas fa-check-circle text-primary small"></i></p>
                            </div>
                        </div>
                        <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                    </div>

                    <div class="card-body px-0 pt-3">
                        <div class="job-tags">
                            <span><i class="fas fa-clock"></i> Contract</span>
                            <span><i class="fas fa-wallet"></i> $110k</span>
                            <span class="badge-tag tag-remote"><i class="fas fa-wifi me-1"></i>Remote</span>
                        </div>
                    </div>

                    <div class="card-footer-custom">
                        <div class="posted-time">
                            <i class="far fa-clock me-1"></i> 5 hours ago
                        </div>
                        <a href="#" class="btn btn-apply">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100">
                    <div class="card-top">
                        <div class="d-flex align-items-center gap-3">
                            <div class="company-logo">
                                <i class="fab fa-amazon text-warning fs-3"></i>
                            </div>
                            <div>
                                <h5 class="job-title mb-1">Software Engineer</h5>
                                <p class="company-name mb-0">Amazon <i class="fas fa-check-circle text-primary small"></i></p>
                            </div>
                        </div>
                        <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                    </div>

                    <div class="card-body px-0 pt-3">
                        <div class="job-tags">
                            <span><i class="fas fa-map-marker-alt"></i> Seattle</span>
                            <span><i class="fas fa-clock"></i> Full Time</span>
                            <span><i class="fas fa-wallet"></i> $180k</span>
                        </div>
                    </div>

                    <div class="card-footer-custom">
                        <div class="posted-time">
                            <i class="far fa-clock me-1"></i> 1 day ago
                        </div>
                        <a href="#" class="btn btn-apply">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100">
                    <div class="card-top">
                        <div class="d-flex align-items-center gap-3">
                            <div class="company-logo">
                                <i class="fab fa-apple text-dark fs-3"></i>
                            </div>
                            <div>
                                <h5 class="job-title mb-1">iOS Developer</h5>
                                <p class="company-name mb-0">Apple <i class="fas fa-check-circle text-primary small"></i></p>
                            </div>
                        </div>
                        <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                    </div>

                    <div class="card-body px-0 pt-3">
                        <div class="job-tags">
                            <span><i class="fas fa-map-marker-alt"></i> California</span>
                            <span><i class="fas fa-clock"></i> Full Time</span>
                            <span><i class="fas fa-wallet"></i> $130k+</span>
                        </div>
                    </div>

                    <div class="card-footer-custom">
                        <div class="posted-time">
                            <i class="far fa-clock me-1"></i> 2 days ago
                        </div>
                        <a href="#" class="btn btn-apply">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100">
                    <div class="card-top">
                        <div class="d-flex align-items-center gap-3">
                            <div class="company-logo">
                                <i class="fab fa-figma text-danger fs-3"></i>
                            </div>
                            <div>
                                <h5 class="job-title mb-1">Brand Designer</h5>
                                <p class="company-name mb-0">Figma <i class="fas fa-check-circle text-primary small"></i></p>
                            </div>
                        </div>
                        <button class="bookmark-btn"><i class="far fa-bookmark"></i></button>
                    </div>

                    <div class="card-body px-0 pt-3">
                        <div class="job-tags">
                            <span><i class="fas fa-clock"></i> Part Time</span>
                            <span><i class="fas fa-wallet"></i> $60/hr</span>
                            <span class="badge-tag tag-hot"><i class="fas fa-fire me-1"></i>Hot</span>
                        </div>
                    </div>

                    <div class="card-footer-custom">
                        <div class="posted-time">
                            <i class="far fa-clock me-1"></i> 3 days ago
                        </div>
                        <a href="#" class="btn btn-apply">Apply Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="job-card h-100 bg-dark-blue text-white border-0 position-relative overflow-hidden d-flex flex-column justify-content-center align-items-center text-center">
                    <div class="position-relative z-2">
                        <div class="icon-box mb-3 bg-white text-pink rounded-circle mx-auto shadow-sm" style="width: 60px; height: 60px; display:grid; place-items:center; font-size:1.5rem;">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3 class="fw-bold mb-2">Hiring?</h3>
                        <p class="text-white-50 mb-4">Post a job and find top talent in minutes.</p>
                        <a href="#" class="btn btn-custom w-100 rounded-pill fw-bold">Post a Job</a>
                    </div>
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-blob-2" style="opacity: 0.1;"></div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- featured jobs --}}

{{-- testimonials --}}
<section class="reviews-section py-5 position-relative bg-light overflow-hidden">
    <div class="container py-4">
        <div class="row align-items-center">

            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="review-sticky-content pe-lg-5">
                    <span class="badge bg-white text-pink shadow-sm px-3 py-2 rounded-pill fw-bold ls-1 mb-3">
                        <i class="fas fa-heart me-2"></i>WALL OF LOVE
                    </span>
                    <h2 class="display-5 fw-bold text-dark-blue mb-3">
                        Trusted by <span class="text-pink">10,000+</span> Users
                    </h2>
                    <p class="text-muted lead mb-4">
                        See what job seekers and employers are saying about their success stories.
                    </p>

                    <div class="rating-box bg-white p-4 rounded-4 shadow-sm border border-light">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" width="80" alt="Google">
                                <span class="fw-bold text-dark small ms-2">Reviews</span>
                            </div>
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded fw-bold">Excellent</span>
                        </div>
                        <div class="d-flex align-items-end gap-3">
                            <h1 class="mb-0 fw-bold text-dark-blue display-3">4.9</h1>
                            <div class="mb-2">
                                <div class="mb-1 text-warning fs-5">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="mb-0 text-muted small">Based on 2,500+ global reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="reviews-wrapper-mask">
                    <div class="row g-4 reviews-grid">

                        <div class="col-md-4 col-12">
                            <div class="marquee-vertical marquee-up">
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=1" alt="User"><div><h5>Sarah Jenkins</h5><small>Hired at Google</small></div></div>
                                    <p>"I applied on Monday and got hired by Friday. Best portal ever!"</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=3" alt="User"><div><h5>Mike Ross</h5><small>Employer</small></div></div>
                                    <p>"Found the perfect developer in 24 hours. The AI matching is real."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>

                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=1" alt="User"><div><h5>Sarah Jenkins</h5><small>Hired at Google</small></div></div>
                                    <p>"I applied on Monday and got hired by Friday. Best portal ever!"</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=3" alt="User"><div><h5>Mike Ross</h5><small>Employer</small></div></div>
                                    <p>"Found the perfect developer in 24 hours. The AI matching is real."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 d-none d-md-block">
                            <div class="marquee-vertical marquee-down">
                                <div class="review-card highlight-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=8" alt="User"><div><h5>David Kim</h5><small>CTO, TechFlow</small></div></div>
                                    <p>"This platform saved us thousands in recruitment fees. Brilliant."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=9" alt="User"><div><h5>Anna Belle</h5><small>Hired at Amazon</small></div></div>
                                    <p>"Resume builder feature is a game changer. Got noticed instantly."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>

                                <div class="review-card highlight-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=8" alt="User"><div><h5>David Kim</h5><small>CTO, TechFlow</small></div></div>
                                    <p>"This platform saved us thousands in recruitment fees. Brilliant."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=9" alt="User"><div><h5>Anna Belle</h5><small>Hired at Amazon</small></div></div>
                                    <p>"Resume builder feature is a game changer. Got noticed instantly."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 d-none d-lg-block">
                            <div class="marquee-vertical marquee-up">
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=15" alt="User"><div><h5>Lucas M.</h5><small>Designer</small></div></div>
                                    <p>"Finally a job portal that focuses on UI/UX roles specifically."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=20" alt="User"><div><h5>Jessica</h5><small>HR Manager</small></div></div>
                                    <p>"Quality of candidates is far superior to LinkedIn. Great work."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>

                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=15" alt="User"><div><h5>Lucas M.</h5><small>Designer</small></div></div>
                                    <p>"Finally a job portal that focuses on UI/UX roles specifically."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                                <div class="review-card">
                                    <div class="review-header"><img src="https://i.pravatar.cc/150?img=20" alt="User"><div><h5>Jessica</h5><small>HR Manager</small></div></div>
                                    <p>"Quality of candidates is far superior to LinkedIn. Great work."</p>
                                    <div class="stars-mini"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- testimonials --}}
{{--blogs  --}}
<section class="blog-section py-5 position-relative bg-white">
    <div class="container py-4">

        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold ls-1 mb-2">
                    <i class="fas fa-newspaper me-2"></i>LATEST NEWS
                </span>
                <h2 class="display-5 fw-bold text-dark-blue">
                    Career <span class="text-pink">Insights & Tips</span>
                </h2>
                <p class="text-muted lead mb-0">Stay ahead with the latest trends in recruitment.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold">Read All Articles <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <article class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=600&q=80" alt="Blog 1">
                        <span class="category-tag">Career Advice</span>
                        <div class="date-badge">
                            <span class="fw-bold d-block fs-4">24</span>
                            <small class="text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="meta-info mb-2">
                            <span><i class="far fa-clock me-1"></i> 5 min read</span>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">How to Ace Your Job Interview in 2026: Top AI Tools to Use</a>
                        </h4>
                        <p class="blog-excerpt">Discover the new AI-driven interview techniques and how to prepare...</p>

                        <div class="blog-footer">
                            <div class="author">
                                <img src="https://i.pravatar.cc/150?img=60" alt="Author">
                                <div>
                                    <h6 class="mb-0">Sarah J.</h6>
                                    <small>HR Specialist</small>
                                </div>
                            </div>
                            <a href="#" class="read-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80" alt="Blog 2">
                        <span class="category-tag tag-blue">Remote Work</span>
                        <div class="date-badge">
                            <span class="fw-bold d-block fs-4">22</span>
                            <small class="text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="meta-info mb-2">
                            <span><i class="far fa-clock me-1"></i> 3 min read</span>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">The Future of Remote Work: What Companies Expect</a>
                        </h4>
                        <p class="blog-excerpt">Remote work is evolving. Learn about the hybrid models dominating the market...</p>

                        <div class="blog-footer">
                            <div class="author">
                                <img src="https://i.pravatar.cc/150?img=32" alt="Author">
                                <div>
                                    <h6 class="mb-0">David Ross</h6>
                                    <small>Tech Recruiter</small>
                                </div>
                            </div>
                            <a href="#" class="read-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4 col-md-6">
                <article class="blog-card h-100">
                    <div class="blog-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=600&q=80" alt="Blog 3">
                        <span class="category-tag tag-purple">Resume Tips</span>
                        <div class="date-badge">
                            <span class="fw-bold d-block fs-4">18</span>
                            <small class="text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="meta-info mb-2">
                            <span><i class="far fa-clock me-1"></i> 7 min read</span>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">10 Resume Mistakes That Are Costing You the Job</a>
                        </h4>
                        <p class="blog-excerpt">Avoid these common pitfalls to ensure your resume stands out in the ATS...</p>

                        <div class="blog-footer">
                            <div class="author">
                                <img src="https://i.pravatar.cc/150?img=11" alt="Author">
                                <div>
                                    <h6 class="mb-0">Emma W.</h6>
                                    <small>Career Coach</small>
                                </div>
                            </div>
                            <a href="#" class="read-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>
</section>
{{-- blogs --}}
@endsection
