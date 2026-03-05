<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobPortal Pro - Find Your Dream Job</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset("assets/css/styles.css") }}">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top bg-white navbar-light shadow-sm" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ asset('/') }}">
            <span class="brand-text">Job<span class="text-pink">Portal</span>Pro</span>
        </a>

        <button class="navbar-toggler border-0 shadow-none p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            <div class="hamburger-box">
                <i class="fas fa-bars text-dark fs-2"></i> </div>
        </button>

        <div class="collapse navbar-collapse d-none d-lg-block">
            <ul class="navbar-nav mx-auto">
                {{-- <li class="nav-item"><a class="nav-link active" href="#">Home</a></li> --}}
             <li class="nav-item"><a class="nav-link" href="{{ asset("/about") }}">About Us</a></li>
            {{-- <li class="nav-item"><a class="nav-link" href="{{ asset("/disciplines") }}">Our Sectors</a></li> --}}
<li class="nav-item dropdown dropdown-mega">
  <a class="nav-link dropdown-toggle d-flex align-items-center" href="{{ route('Home.disciplines.index') }}" id="sectorsDropdown">
        Our Sectors <i class="fas fa-chevron-down ms-1 toggle-icon-mobile"></i>
    </a>
    <div class="dropdown-menu mega-menu-custom animate__animated animate__fadeIn">
        <div class="mega-menu-body">
            <div class="row g-0 w-100">
                <div class="col-lg-4 menu-col border-end-light">
                    <span class="menu-heading">Technology</span>
                    <a class="mega-item" href="{{ route('Home.disciplines.show', 'it-software') }}">
                        <div class="icon-circle-sm"><i class="fas fa-laptop-code"></i></div>
                        <div class="item-text"><b>IT & Software</b><small>Dev, Cloud & Cyber</small></div>
                    </a>
                    <a class="mega-item" href="#">
                        <div class="icon-circle-sm"><i class="fas fa-brain"></i></div>
                        <div class="item-text"><b>AI & Data</b><small>Machine Learning</small></div>
                    </a>
                </div>
                <div class="col-lg-4 menu-col border-end-light">
                    <span class="menu-heading">Healthcare</span>
                    <a class="mega-item" href="#">
                        <div class="icon-circle-sm"><i class="fas fa-user-md"></i></div>
                        <div class="item-text"><b>Medical</b><small>Doctors & Nursing</small></div>
                    </a>
                    <a class="mega-item" href="#">
                        <div class="icon-circle-sm"><i class="fas fa-microscope"></i></div>
                        <div class="item-text"><b>Research</b><small>Clinical Trials</small></div>
                    </a>
                </div>
                <div class="col-lg-4 menu-col">
                    <span class="menu-heading">Corporate</span>
                    <a class="mega-item" href="#">
                        <div class="icon-circle-sm"><i class="fas fa-chart-line"></i></div>
                        <div class="item-text"><b>Finance</b><small>Banking & Assets</small></div>
                    </a>
                    <a class="mega-item" href="#">
                        <div class="icon-circle-sm"><i class="fas fa-balance-scale"></i></div>
                        <div class="item-text"><b>Legal</b><small>Corporate Law</small></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</li>
             <li class="nav-item"><a class="nav-link" href="{{ asset("/jobs") }}">Vacancies</a></li>
               <li class="nav-item"><a class="nav-link" href="{{ asset("/blogs") }}">Insights</a></li>
{{-- <li class="nav-item"><a class="nav-link" href="#">Companies</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="{{ asset("/contact-us") }}">Contact Us</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <a href="{{ asset('/accountlogin') }}" class="btn btn-custom rounded-pill px-4">Login | Register</a>

                <div class="dropdown">
                    {{-- <a href="#" class="user-avatar-btn" data-bs-toggle="dropdown">
                        <span class="avatar-circle">AS</span>
                    </a> --}}
  <a href="#" class="user-avatar-btn" data-bs-toggle="dropdown">
    @if(Auth::check())
        <span class="avatar-name">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
    @else
        <span class="avatar-name">Guest</span>
    @endif
</a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-3 p-2 rounded-3">
                        {{-- <li><a class="dropdown-item" href="{{ asset('/profile') }}"><i class="fas fa-user me-2"></i> My Profile</a></li> --}}
                        <li><a class="dropdown-item" href="#"><i class="fas fa-bell me-2"></i> Notifications</a></li>
                        <li><hr class="dropdown-divider"></li>
                        {{-- <li><a class="dropdown-item text-danger" href="{{ route('auth.logout') }}">Logout</a></li> --}}
<form action="{{ route('auth.logout') }}" method="POST" style="display: inline;">
 @csrf
    <button type="submit" class="dropdown-item text-danger">
        Logout
    </button>
</form>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold">Job<span class="text-pink">Portal</span>Pro</h5>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">

        <div class="d-flex align-items-center mb-4 p-3 bg-light rounded">
            <div class="avatar-circle me-3">AS</div>
            <div>
                <h6 class="mb-0 fw-bold">Amit Sharma</h6>
                <small class="text-muted">Job Seeker</small>
            </div>
        </div>

        <ul class="navbar-nav flex-grow-1 pe-3">
            {{-- <li class="nav-item"><a class="nav-link py-3 fw-bold active" href="">Home</a></li> --}}
             <li class="nav-item"><a class="nav-link py-3 fw-bold" href="{{ asset("/about") }}">About Us</a></li>
<li class="nav-item">
    <a class="nav-link py-3 fw-bold d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse" href="#mobileSectorsCollapse" role="button" aria-expanded="false">
        Our Sectors <i class="fas fa-chevron-down toggle-icon-mobile"></i>
    </a>

    <div class="collapse" id="mobileSectorsCollapse">
        <div class="mobile-mega-content ps-3 pe-2 pb-3">

            <div class="mb-4">
                <span class="text-pink fw-bold small text-uppercase ls-1 d-block mb-2" style="font-size: 0.7rem;">Technology</span>
                <a class="nav-link py-2 d-flex align-items-center border-0" href="#">
                    <div class="icon-circle-sm me-2"><i class="fas fa-laptop-code"></i></div>
                    <span>IT & Software</span>
                </a>
                <a class="nav-link py-2 d-flex align-items-center border-0" href="#">
                    <div class="icon-circle-sm me-2"><i class="fas fa-microchip"></i></div>
                    <span>Digital Tech</span>
                </a>
            </div>

            <div class="mb-4">
                <span class="text-pink fw-bold small text-uppercase ls-1 d-block mb-2" style="font-size: 0.7rem;">Healthcare</span>
                <a class="nav-link py-2 d-flex align-items-center border-0" href="#">
                    <div class="icon-circle-sm me-2"><i class="fas fa-user-md"></i></div>
                    <span>Medical</span>
                </a>
            </div>

            <div class="mb-4">
                <span class="text-pink fw-bold small text-uppercase ls-1 d-block mb-2" style="font-size: 0.7rem;">Corporate</span>
                <a class="nav-link py-2 d-flex align-items-center border-0" href="#">
                    <div class="icon-circle-sm me-2"><i class="fas fa-chart-line"></i></div>
                    <span>Finance</span>
                </a>
            </div>

            {{-- <a href="{{ asset('/disciplines') }}" class="btn btn-pink-light w-100 rounded-pill py-2 mt-2 fw-bold small text-decoration-none text-center">
                View All Sectors <i class="fas fa-arrow-right ms-2"></i>
            </a> --}}
        </div>
    </div>
</li>
            <li class="nav-item"><a class="nav-link py-3 fw-bold" href="{{ asset("/jobs") }}">Vacancies</a></li>
             <li class="nav-item"><a class="nav-link py-3 fw-bold" href="{{ asset("/blogs") }}">Insights</a></li>

            <li class="nav-item"><a class="nav-link py-3 fw-bold" href="#">Companies</a></li>
            <li class="nav-item"><a class="nav-link py-3 fw-bold" href="#">Career Advice</a></li>

            <li class="nav-item"><hr class="dropdown-divider my-3"></li>

            <li class="nav-item"><a class="nav-link py-2" href="#"><i class="fas fa-user me-2 text-pink"></i> My Profile</a></li>
            <li class="nav-item"><a class="nav-link py-2" href="#"><i class="fas fa-bell me-2 text-pink"></i> Notifications</a></li>
            <li class="nav-item"><a class="nav-link py-2" href="#"><i class="fas fa-heart me-2 text-pink"></i> Saved Jobs</a></li>
        </ul>

        <div class="mt-auto pb-4">
            <a href="#" class="btn btn-custom w-100 rounded-pill py-3">Post a Job</a>
            <a href="#" class="btn btn-outline-danger w-100 rounded-pill py-3 mt-3">Logout</a>
        </div>
    </div>
</div>



@yield('Content')
<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <h2 class="cta-title text-white">Ready to hire? Post a job today!</h2>
                    <p class="cta-text text-white-50">Join 10,000+ companies finding the best talent.</p>
                </div>
                <div class="col-lg-5 col-md-12 text-lg-end">
                    <a href="#" class="btn btn-custom btn-lg rounded-pill px-5">Post a Job for Free</a>
                </div>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo mb-3">
                            <a href="#" class="text-decoration-none">
                                <span class="brand-text text-white fs-2 fw-bold">Job<span class="text-pink">Portal</span>Pro</span>
                            </a>
                        </div>
                        <div class="footer-text mb-4">
                            <p class="text-white-50">The #1 reliable job portal connecting top talent with best companies. Find your dream career or the perfect candidate today.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span class="text-white fw-bold">Follow us:</span>
                            <div class="social-links mt-2">
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in linkedin-bg"></i></a>
                                <a href="#"><i class="fab fa-instagram instagram-bg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-4 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Job Seekers</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Find Jobs</a></li>
                            <li><a href="#">Upload Resume</a></li>
                            <li><a href="#">Career Advice</a></li>
                            <li><a href="#">Salary Guide</a></li>
                            <li><a href="#">Company Reviews</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 col-md-4 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Employers</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Post a Job</a></li>
                            <li><a href="#">Search Resumes</a></li>
                            <li><a href="#">Hiring Advice</a></li>
                            <li><a href="#">Recruitment Products</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p class="text-white-50">Don’t miss out on the latest job offers & trends.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>

                        <div class="mt-4">
                            <p class="text-white-50 mb-2 small">Download our App</p>
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-light btn-sm rounded-pill"><i class="fab fa-apple me-1"></i> App Store</button>
                                <button class="btn btn-outline-light btn-sm rounded-pill"><i class="fab fa-google-play me-1"></i> Play Store</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 text-center text-lg-start">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2026, All Right Reserved <a href="#">JobPortalPro</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-end">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>
