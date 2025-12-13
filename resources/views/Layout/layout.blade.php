<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="format-detection" content="telephone=no">

    <!-- ====== OG BASIC ====== -->
    <meta property="og:url" content="https://your-domain.com">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/social/facebook.png') }}">
    <meta name="msvalidate.01" content="FA52B9CB87821EF62B49E1C031073728">

    <!-- ====== CACHE HEADERS ====== -->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <meta http-equiv="Pragma" content="no-cache">

    <meta name="theme-color" content="#7a958f">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ====== TITLE ====== -->
    <title>1:1 In-Home Physical Therapy | Your Brand</title>

    <!-- ====== FAVICONS ====== -->
    <link rel="icon" href="{{ asset('assets/images/favicon_16.png') }}" sizes="16x16">
    <link rel="icon" href="{{ asset('assets/images/favicon_32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/images/favicon_128.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon_128.png') }}">

    <!-- ====== MAIN CSS ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

    <!-- Base & env styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/libs/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/envs/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/envs/border.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/envs/font-weight.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main-elements/nav.css') }}">

    <!-- Responsive breakpoints -->
    <link rel="stylesheet" href="{{ asset('assets/css/breakpoints/all.css') }}">


    {{-- <link rel="stylesheet" href="{{ asset('assets/js/libs/owl-carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/libs/owl-carousel/dist/assets/owl.theme.default.min.css') }}"> --}}

    <!-- Slider specific styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/main-elements/slider-elements.css') }}">
<!-- Owl Carousel CSS (BOHOT zaroori) -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- ✅ HERO IMAGES -->
    <link fetchpriority="high" rel="preload" href="{{ asset('assets/images/intro.webp') }}" as="image">
    <link fetchpriority="high" rel="preload" href="{{ asset('assets/images/hero-intro-mobile.webp') }}" as="image">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>

    <header id="main-nav" class="">
            <div class="wrapper-full mw-1300-px" id="main-header">
                <nav id="nav">

                                        <a class="menu-button no-decoration " role="button" aria-labelledby="menu">
                        <span class="line top"></span>
                        <span class="line middle"></span>
                        <span class="line bottom"></span>

                    </a>
                    <a href="/" class="w-150-px w-xs-150-px logo text-center flex-center d-xs-flex flex-xs-center" aria-label="Home" id="home-link">
                                                    <img alt="Rehabrion " class="w-100-px d-block" src="{{ asset("assets/images/logo/logo.png") }}" >
                                            </a>

                                            <a class="button-call-mobile cta-modal-mobile" href="tel:866-525-3175" role="button">
                            <img alt="Rehabrion " class="d-block mx-auto" height="22px" width="22px" src="{{ asset("assets/images/logo/logo.png") }}">
                        </a>

                    <span class="nav-centering"></span>


                    <ul class="">

                        <li><a href="{{ asset("/how-it-works") }}">How It Works</a></li>
                        {{-- <li><a href="/rates-and-insurance">Rates & Insurance</a></li> --}}
                        <li><a href="/conditions-we-treat" class="conditions-we-treat">What We Treat</a></li>
                        <li><a href="{{ asset('/about') }}">About Us</a></li>

                        {{-- <li><a href="{{ asset("/blogs") }}">Blog</a></li> --}}
                        <li><a href="{{ asset('/faqs') }}">FAQS</a></li>
                        <li><a href="{{ asset('/recovery-bundles') }}">Recovery Bundles</a></li>

                        <li class="dropdown-button">
                            <span class="dropdown flex-between flex-middle">
                                <span class="p-0">Treat Me Now</span>
                                <img alt="Chevron" class="chevron black" src="https://public-assets.getRehabrion .com/images/chevron-down-black.svg">
                                <img alt="Chevron" class="chevron white" src="https://public-assets.getRehabrion .com/images/chevron-down-white.svg">
                            </span>
                            <ul class="dropdown-content">
                                <li><a href="/own-your-career">Therapists</a></li>
                                <li><a href="/physicians">Physicians</a></li>
                                <li><a href="/health-plans">Health Plans</a></li>
                                <li><a href="/health-systems">Health Systems</a></li>
                                <li><a href="/employers">Employers</a></li>
                                <li><a href="/pt-clinics">PT Clinics</a></li>
                            </ul>
                        </li>

                        <li class="download-app">
                            <a role="button">
                                                                Download App
                            </a>
                        </li>
                    </ul>
                                            <a class="button-call cta-phone-desktop" href="tel:866-525-3175">
                            <img alt="phone" class="icon purple mr-10" src="https://public-assets.getRehabrion .com/images/call.svg">
                            <img alt="phone" class="icon white mr-10" src="https://public-assets.getRehabrion .com/images/call_white.svg">
                            866-525-3175
                        </a>

                </nav>
            </div>
        </header>



<!-- Floating Contact: END -->





@yield("Content")

{{-- Floating Contact Trigger + Panel --}}
<button
    id="rehabContactTab"
    type="button"
    class="rehab-contact-tab"
    aria-expanded="false"
    aria-controls="rehabContactPanel"
>
    <span class="rehab-contact-icon">✉</span>
    <span class="rehab-contact-text">Contact Us</span>
</button>

<div id="rehabContactOverlay" class="rehab-contact-overlay" hidden></div>

<aside
    id="rehabContactPanel"
    class="rehab-contact-panel"
    role="dialog"
    aria-modal="true"
    aria-labelledby="rehabContactTitle"
    aria-hidden="true"
>
    <header class="rehab-contact-header">
    <p class="rehab-contact-mini">
        PATIENT INTAKE FORM
    </p>
    <h3 id="rehabContactTitle">Patient Personal Information</h3>

    <button
        id="rehabContactClose"
        type="button"
        class="rehab-contact-close"
        aria-label="Close contact form"
    >
        ×
    </button>
</header>

<form method="POST" action="{{ route('Home.welcome.store') }}" class="rehab-contact-form">
    @csrf

    {{-- Full Name --}}
    <div class="rehab-field">
        <label for="full_name">Full Name*</label>
        <input id="full_name" name="full_name" type="text" required>
    </div>

    {{-- Date of Birth + Age (2 columns) --}}
    <div class="rehab-row">
        <div class="rehab-field">
            <label for="dob">Date of Birth*</label>
            <input id="dob" name="dob" type="date" required>
        </div>
        <div class="rehab-field">
            <label for="age">Age*</label>
            <input id="age" name="age" type="number" min="0" max="120" required>
        </div>
    </div>

    {{-- Gender --}}
    <div class="rehab-field">
        <label>Gender*</label>
        <div class="rehab-gender-group">
            <label class="rehab-radio">
                <input type="radio" name="gender" value="Male" required>
                <span>Male</span>
            </label>
            <label class="rehab-radio">
                <input type="radio" name="gender" value="Female">
                <span>Female</span>
            </label>
            <label class="rehab-radio">
                <input type="radio" name="gender" value="Other">
                <span>Other</span>
            </label>
        </div>
    </div>

    {{-- Contact Number --}}
    <div class="rehab-field">
        <label for="contact_number">Contact Number*</label>
        <input id="contact_number" name="contact_number" type="tel" required>
    </div>

    {{-- Email Address --}}
    <div class="rehab-field">
        <label for="email_address">Email Address*</label>
        <input id="email_address" name="email_address" type="email" required>
    </div>

    {{-- Home Address --}}
    <div class="rehab-field">
        <label for="home_address">Home Address*</label>
        <textarea id="home_address" name="home_address" rows="2" required></textarea>
    </div>

    {{-- Emergency Contact (2 columns) --}}
    <div class="rehab-row">
        <div class="rehab-field">
            <label for="emergency_name">Emergency Contact Name*</label>
            <input id="emergency_name" name="emergency_name" type="text" required>
        </div>
        <div class="rehab-field">
            <label for="emergency_phone">Emergency Contact Number*</label>
            <input id="emergency_phone" name="emergency_phone" type="tel" required>
        </div>
    </div>

    <button type="submit" class="rehab-submit-btn">
        Submit
    </button>
</form>

</aside>



    <footer class="main-footer d-block">
    <section id="general-info" class="pt-50 pt-md-20 pt-sm-20 pt-xs-20 pb-10 pb-xs-0 bg-purple-600">
        <div class="wrapper d-md-none d-sm-none d-xs-none">
            <div class="row">
                <div class=" col-3 ">
                                            <a href="/" class="logo" aria-label="Home">
                            <img alt="Rehabrion " class="w-150-px w-md-100-px lazy"
                                data-src="{{ asset("assets/images/logo/logo.png") }}" >
                        </a>
                        <span class="d-block font-12 color-base-100 mb-30 mb-md-20 text-md-nowrap">
                            Physical therapy, delivered.<sup>®</sup>
                        </span>
                                                                <span class="d-block body-small color-base-100">
                                                            Call: 866-525-3175
                                                    </span>

                                                                                        <span class="d-block body-small color-base-100 mt-5">
                            Fax Rx: 628-246-8418
                        </span>
                                                                <div class="d-flex flex-start flex-sm-start mt-10">
                            <a class="w-100-px p-10 mr-10 mt-0 d-flex flex-center flex-middle relative"
                                href="https://apps.apple.com/us/app/Rehabrion -physical-therapy/id1434554640" target="_blank"
                                rel="noreferrer noopener" aria-label="App Store">
                                <div class="absolute w-100 h-100 left-0 top-0 bg-purple-200 opacity-4 rounded"></div>
                                <img class="lazy w-100 z-index-2 h-auto"
                                    data-src="https://public-assets.getRehabrion .com/images/apple-footer.svg" alt="App store"
                                    width="120px" height="33px">
                            </a>
                            <a class="w-100-px p-10 mt-0 d-flex flex-center flex-middle relative"
                                href="https://play.google.com/store/apps/details?id=com.getRehabrion .patient" target="_blank"
                                aria-label="Google Play Store" rel="noreferrer noopener">
                                <div class="absolute w-100 h-100 left-0 top-0 bg-purple-200 opacity-4 rounded"></div>
                                <img class="lazy w-100 z-index-2 h-auto"
                                    data-src="https://public-assets.getRehabrion .com/images/play-store-footer-alt.webp"
                                    alt="Play store" width="120px" height="28px">
                            </a>
                        </div>
                                    </div>
                <div class="col-9">
                    <div class="row">
                        <div class="col-3">
                            <h5 class="header color-base-100 uppercase mb-15 mt-0 text-nowrap">Services</h5>
                            <a href="{{ asset('/conditions-we-treat') }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Conditions
                                We Treat</a>
                            <a href="/locations"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Where We
                                Serve</a>
                            <a href="/faq"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Patient
                                FAQ</a>
                            <a href="/insurance-faq"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Insurance
                                FAQ</a>
                            <a href="/in-home-physical-therapy"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">In-Home
                                PT</a>
                            <a href="/physical-therapy-near-me" class="body-small color-base-100 d-block text-nowrap">PT
                                Near Me</a>
                        </div>
                        <div class="col-3">
                            <h5 class="header color-base-100 uppercase mb-15 mt-0 text-nowrap">Company</h5>
                            <a href="{{ asset('/about') }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">About Us /
                                Careers</a>
                            <a href="/empowerment-pledge"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Empowerment
                                Pledge</a>
                            <a href="/newsroom"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Newsroom</a>
                            <a href="{{ asset("/blogs") }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate"
                                rel="noreferrer noopener">Blog</a>
                            <a href="/resources"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Resources</a>
                            <a href="{{ asset('/contact') }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Contact
                                Us</a>


                        </div>
                        <div class="col-3">
                            <h5 class="header color-base-100 uppercase mb-15 mt-0 text-nowrap">Partners</h5>
                            <a href="/own-your-career"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">For
                                Therapists</a>
                            <a href="/physicians"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">For
                                Physicians</a>
                            <a href="/health-plans"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">For
                                Health Plans</a>
                            <a href="/health-systems"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">For
                                Health Systems</a>
                            <a href="/employers"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">For
                                Employers</a>
                            <a href="/pt-clinics" class="body-small color-base-100 d-block text-nowrap">For PT
                                Clinics</a>
                        </div>
                        <div class="col-3">
                            <h5 class="header color-base-100 uppercase mb-15 mt-0 text-nowrap">Legal & Practices</h5>
                            <a class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate c-pointer"
                                role="button" data-acsb-custom-trigger="true">Accessibility Options</a>
                            <a href="/terms-of-use"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Terms of
                                Use</a>
                            <a href="{{ asset("/privacy-policy") }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Notice
                                of Privacy Practices</a>
                            <a href="{{ asset("/privacy-policy") }}"
                                class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate">Privacy
                                Policy</a>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper d-none d-md-block d-sm-block d-xs-block">
            <div class="mb-20 pb-20 border-bottom border-purple-400">
                <div class="row">
                                            <div class="col-6 col-xs-5">
                            <a href="/" class="logo" aria-label="Home">
                                <img alt="Rehabrion " class="w-100-px lazy"
                                    data-src="https://public-assets.getRehabrion .com/images/logo_light.svg" width="150px"
                                    height="43px">
                            </a>
                            <span class="d-block font-12 color-base-100 text-md-nowrap">
                                Physical therapy, delivered.<sup>®</sup>
                            </span>
                        </div>

                    <div class=" col-6 col-xs-7 text-right ">
                        <span class="d-block body-x-small color-base-100 mt-10">
                                                                                                Call: 866-525-3175
                                                                                                                        <br>
                                Fax Rx: 628-246-8418
                                                    </span>
                                            </div>
                </div>
            </div>

            <div class="accordion">
                <article class="accordion-item mb-20 border-bottom border-purple-400 active">
                    <a class="accordion-toogle no-decoration relative c-pointer" role="button">
                        <span class="accordion-icon-mini mr-10"></span>
                        <h5 class="header pl-25 color-base-100 uppercase mb-0 mt-0 text-nowrap">Services</h3>
                    </a>
                    <div class="accordion-content pl-25 mt-15">
                        <a href="/conditions-we-treat"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Conditions
                            We
                            Treat</a>
                        <a href="/locations"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Where
                            We
                            Serve</a>
                        <a href="/faq"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Patient
                            FAQ</a>
                        <a href="/insurance-faq"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Insurance
                            FAQ</a>
                        <a href="/in-home-physical-therapy"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">In-Home
                            PT</a>
                        <a href="/physical-therapy-near-me"
                            class="body-small color-base-100 mb-20 d-block text-nowrap lh-sm-2 lh-xs-2">PT Near Me</a>
                    </div>
                </article>

                <article class="accordion-item mb-20 border-bottom border-purple-400">
                    <a class="accordion-toogle no-decoration relative c-pointer" role="button">
                        <span class="accordion-icon-mini mr-10"></span>
                        <h5 class="header pl-25 color-base-100 uppercase mb-0 mt-0 text-nowrap">Company</h3>
                    </a>
                    <div class="accordion-content pl-25 mt-15">
                        <a href="/career"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">About
                            Us /
                            Careers</a>
                        <a href="/empowerment-pledge"
                            class="body-small color-base-100 mb-5 d-block text-nowrap lh-sm-2 lh-xs-2">Empowerment
                            Pledge</a>
                        <a href="/newsroom"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Newsroom</a>
                        <a href="/blog" class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate"
                            rel="noreferrer noopener">Blog</a>
                        <a href="/resources"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Resources</a>
                        <a href="/contact-us"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Contact
                            Us</a>


                    </div>
                </article>

                <article class="accordion-item mb-20 border-bottom border-purple-400">
                    <a class="accordion-toogle no-decoration relative c-pointer" role="button">
                        <span class="accordion-icon-mini mr-10"></span>
                        <h5 class="header pl-25 color-base-100 uppercase mb-0 mt-0 text-nowrap">Partners</h3>
                    </a>
                    <div class="accordion-content pl-25 mt-15">
                        <a href="/own-your-career"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">For
                            Therapists</a>
                        <a href="/physicians"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">For
                            Physicians</a>
                        <a href="/health-plans"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">For
                            Health
                            Plans</a>
                        <a href="/health-systems"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">For
                            Health
                            Systems</a>
                        <a href="/employers"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">For
                            Employers</a>
                        <a href="/pt-clinics"
                            class="body-small color-base-100 mb-20 d-block text-nowrap lh-sm-2 lh-xs-2">For PT
                            Clinics</a>
                    </div>
                </article>

                <article class="accordion-item border-bottom border-purple-400 ">
                    <a class="accordion-toogle no-decoration relative c-pointer" role="button">
                        <span class="accordion-icon-mini mr-10"></span>
                        <h5 class="header pl-25 color-base-100 uppercase mb-0 mt-0 text-nowrap">Legal & Practices</h3>
                    </a>
                    <div class="accordion-content pl-25 mt-15">
                        <a class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate c-pointer lh-sm-2 lh-xs-2"
                            role="button" data-acsb-custom-trigger="true">Accessibility Options</a>
                        <a href="/terms-of-use"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Terms
                            of
                            Use</a>
                        <a href="/privacy-policy"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Notice
                            of Privacy
                            Practices</a>
                        <a href="/privacy-policy-web"
                            class="body-small color-base-100 mb-5 d-block text-nowrap text-lg-truncate lh-sm-2 lh-xs-2">Privacy
                            Policy</a>


                    </div>
                </article>
            </div>

        </div>
        </div>
    </section>

    <section id="locations-info" class="pb-30 py-md-20 py-sm-20 py-xs-20 bg-purple-600">

                    <div class="wrapper d-none d-xs-block d-sm-block d-md-block">
                <div class="d-flex flex-evenly flex-sm-start">
                    <a class="w-150-px p-10 px-sm-15 ml-sm-0 mb-20 mx-10 mt-0 d-flex flex-center flex-middle relative"
                        href="https://apps.apple.com/us/app/Rehabrion -physical-therapy/id1434554640" target="_blank"
                        rel="noreferrer noopener" aria-label="App Store">
                        <div class="absolute w-100 h-100 left-0 top-0 bg-purple-200 opacity-4 rounded"></div>
                        <img class="lazy w-100 z-index-2 h-auto"
                            data-src="https://public-assets.getRehabrion .com/images/apple-footer.svg" alt="App store"
                            width="120px" height="33px">
                    </a>
                    <a class="w-150-px p-10 px-sm-15 mb-20 mx-10 mt-0 d-flex flex-center flex-middle relative"
                        href="https://play.google.com/store/apps/details?id=com.getRehabrion .patient" target="_blank"
                        aria-label="Google Play Store" rel="noreferrer noopener">
                        <div class="absolute w-100 h-100 left-0 top-0 bg-purple-200 opacity-4 rounded"></div>
                        <img class="lazy w-100 z-index-2 h-auto"
                            data-src="https://public-assets.getRehabrion .com/images/play-store-footer-alt.webp" alt="Play store"
                            width="120px" height="28px">
                    </a>
                </div>
            </div>

        <div class="wrapper">
                    </div>
    </section>

    <section id="sitemap-info" class="bg-purple-800 py-10">
        <div class="wrapper">
            <div class="row flex-md-column-reverse flex-sm-column-reverse flex-xs-column-reverse">
                <div class="col-8 col-md-12 col-sm-12 col-xs-12 d-flex flex-middle d-xs-block">
                    <span
                        class="color-purple-400 font-weight-300 body-small mr-15 d-inline-block d-xs-block mb-xs-5 ">©
                        2025 Rehabrion <sup class="body-x-small">®</sup></span>
                    <span class="color-base-100 font-weight-300 body-small mr-10 d-inline-block d-xs-block mb-xs-5"><a
                            href="/sitemap" class="color-purple-400">Site Map</a></span>

                    <span class="color-base-100 font-weight-300 body-small mr-10 d-inline-block d-xs-block mb-xs-5"><a
                            class="color-purple-400 c-pointer" role="button" onclick='revisitCkyConsent()'>Cookie
                            Settings</a></span>

                    <span class="color-base-100 font-weight-300 body-small d-inline-block d-xs-block mb-xs-5">
                        <a role="button" data-toggle="toogle" data-target="#directories-info"
                            class="color-purple-400 c-pointer d-flex flex-middle toogle-trigger">Directories <img
                                class="lazy chevron"
                                data-src="https://public-assets.getRehabrion .com/images/chevron-purple-400.svg" width="25px"
                                height="25px"></a>
                    </span>
                </div>

                <div
                    class="col-4 col-md-12 col-sm-12 col-xs-12 d-flex flex-middle flex-md-wrap flex-xs-wrap flex-md-start flex-xs-start flex-sm-start flex-end mb-md-10 mb-sm-10 mb-xs-10">
                    <span class="mb-0 color-base-100 body-small d-inline-block mr-10">Follow us on:</span>
                    <a href="http://facebook.com/getRehabrion care" aria-label="Facebook"
                        class="mr-10 d-flex flex-middle flex-center" target="_blank" rel="noreferrer noopener">
                        <img class="icon mw-20-px mh-20-px lazy" alt="Facebook"
                            data-src="https://public-assets.getRehabrion .com/images/facebook.svg" width="20px" height="20px">
                    </a>
                    <a href="https://www.linkedin.com/company/getRehabrion /" aria-label="Linkedin"
                        class="mr-10 d-flex flex-middle flex-center" target="_blank" rel="noreferrer noopener">
                        <img class="icon mw-20-px mh-20-px lazy" alt="Linkedin"
                            data-src="https://public-assets.getRehabrion .com/images/social_linkedin.svg" width="20px"
                            height="20px">
                    </a>
                    <a href="https://instagram.com/getRehabrion care/" aria-label="Instagram"
                        class="mr-10 d-flex flex-middle flex-center" target="_blank" rel="noreferrer noopener">
                        <img class="icon mw-20-px mh-20-px lazy" alt="Instagram"
                            data-src="https://public-assets.getRehabrion .com/images/instagram.svg" width="20px" height="20px">
                    </a>
                    <a href="http://twitter.com/getRehabrion care" aria-label="Twitter"
                        class="mr-10 d-flex flex-middle flex-center" target="_blank" rel="noreferrer noopener">
                        <img class="icon mw-20-px mh-20-px lazy" alt="Twitter"
                            data-src="https://public-assets.getRehabrion .com/images/twitter.svg" width="20px" height="20px">
                    </a>
                    <a href="https://www.glassdoor.com/Overview/Working-at-Rehabrion -Care-EI_IE2140990.11,20.htm"
                        aria-label="Glassdoor" class="d-flex flex-middle flex-center" target="_blank"
                        rel="noreferrer noopener">
                        <img class="icon mw-20-px mh-20-px lazy" alt="Glassdoor"
                            data-src="https://public-assets.getRehabrion .com/images/social-glassdoor.svg" width="20px"
                            height="20px">
                    </a>
                </div>
            </div>
        </div>
    </section>
{{--
    <section id="directories-info" class="bg-purple-900 toogle-section">
        <div class="wrapper py-30">

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Physician Directory Profiles</h4>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=1">
                            1
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=2">
                            2
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=3">
                            3
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=4">
                            4
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=5">
                            5
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=6">
                            6
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=7">
                            7
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=8">
                            8
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=9">
                            9
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=10">
                            10
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=11">
                            11
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=12">
                            12
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=13">
                            13
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=14">
                            14
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=15">
                            15
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=16">
                            16
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=17">
                            17
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=18">
                            18
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=19">
                            19
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=20">
                            20
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=21">
                            21
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=22">
                            22
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=23">
                            23
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=24">
                            24
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=25">
                            25
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=26">
                            26
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=27">
                            27
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=28">
                            28
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=29">
                            29
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=30">
                            30
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=31">
                            31
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=32">
                            32
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=33">
                            33
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=34">
                            34
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=35">
                            35
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=36">
                            36
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=37">
                            37
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=38">
                            38
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=39">
                            39
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=40">
                            40
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=41">
                            41
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=42">
                            42
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=43">
                            43
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=44">
                            44
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=45">
                            45
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=46">
                            46
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=47">
                            47
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=48">
                            48
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=49">
                            49
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=50">
                            50
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=51">
                            51
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=52">
                            52
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=53">
                            53
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=54">
                            54
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=55">
                            55
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=56">
                            56
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=57">
                            57
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=58">
                            58
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=59">
                            59
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=60">
                            60
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=61">
                            61
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=62">
                            62
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=63">
                            63
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=64">
                            64
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=65">
                            65
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=66">
                            66
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=67">
                            67
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=68">
                            68
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=69">
                            69
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=70">
                            70
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=71">
                            71
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=72">
                            72
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=73">
                            73
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=74">
                            74
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=75">
                            75
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=76">
                            76
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=77">
                            77
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=78">
                            78
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=79">
                            79
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=80">
                            80
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=81">
                            81
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=82">
                            82
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=83">
                            83
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=84">
                            84
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=85">
                            85
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=86">
                            86
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=87">
                            87
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=88">
                            88
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=89">
                            89
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=90">
                            90
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=91">
                            91
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=92">
                            92
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=93">
                            93
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=94">
                            94
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=95">
                            95
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=96">
                            96
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=97">
                            97
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=98">
                            98
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=99">
                            99
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=100">
                            100
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=101">
                            101
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=102">
                            102
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=103">
                            103
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=104">
                            104
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=105">
                            105
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=106">
                            106
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=107">
                            107
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=108">
                            108
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=109">
                            109
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=110">
                            110
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=111">
                            111
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=112">
                            112
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=113">
                            113
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=114">
                            114
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=115">
                            115
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=116">
                            116
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=117">
                            117
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=118">
                            118
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=119">
                            119
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=120">
                            120
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=121">
                            121
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=122">
                            122
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=123">
                            123
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=124">
                            124
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=125">
                            125
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=126">
                            126
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=127">
                            127
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=128">
                            128
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=129">
                            129
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=130">
                            130
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=131">
                            131
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=132">
                            132
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=133">
                            133
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=134">
                            134
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=135">
                            135
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=136">
                            136
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=137">
                            137
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=138">
                            138
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=139">
                            139
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=140">
                            140
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=141">
                            141
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=142">
                            142
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=143">
                            143
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=144">
                            144
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=145">
                            145
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=146">
                            146
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=147">
                            147
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=148">
                            148
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=149">
                            149
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=150">
                            150
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=151">
                            151
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=152">
                            152
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=153">
                            153
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=154">
                            154
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=155">
                            155
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=156">
                            156
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=157">
                            157
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=158">
                            158
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=159">
                            159
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=160">
                            160
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=161">
                            161
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=162">
                            162
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=163">
                            163
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=164">
                            164
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=165">
                            165
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=166">
                            166
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=167">
                            167
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=168">
                            168
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=169">
                            169
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=170">
                            170
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=171">
                            171
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=172">
                            172
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=173">
                            173
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=174">
                            174
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=175">
                            175
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=176">
                            176
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=177">
                            177
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=178">
                            178
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=179">
                            179
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=180">
                            180
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=181">
                            181
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=182">
                            182
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=183">
                            183
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=184">
                            184
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=185">
                            185
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=186">
                            186
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=187">
                            187
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=188">
                            188
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=189">
                            189
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=190">
                            190
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=191">
                            191
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=192">
                            192
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=193">
                            193
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=194">
                            194
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=195">
                            195
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=196">
                            196
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=197">
                            197
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=198">
                            198
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=199">
                            199
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=200">
                            200
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=201">
                            201
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=202">
                            202
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=203">
                            203
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=204">
                            204
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=205">
                            205
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=206">
                            206
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=207">
                            207
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=208">
                            208
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=209">
                            209
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=210">
                            210
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=211">
                            211
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=212">
                            212
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=213">
                            213
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=214">
                            214
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=215">
                            215
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=216">
                            216
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=217">
                            217
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=218">
                            218
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=219">
                            219
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=220">
                            220
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=221">
                            221
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=222">
                            222
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=223">
                            223
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=224">
                            224
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=225">
                            225
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=226">
                            226
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=227">
                            227
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=228">
                            228
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=229">
                            229
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=230">
                            230
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=231">
                            231
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=232">
                            232
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=233">
                            233
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=234">
                            234
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=235">
                            235
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=236">
                            236
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=237">
                            237
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=238">
                            238
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=239">
                            239
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=240">
                            240
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=241">
                            241
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=242">
                            242
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=243">
                            243
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=244">
                            244
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=245">
                            245
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=246">
                            246
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=247">
                            247
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=248">
                            248
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=249">
                            249
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=250">
                            250
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=251">
                            251
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=252">
                            252
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=253">
                            253
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=254">
                            254
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=255">
                            255
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=256">
                            256
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=257">
                            257
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=258">
                            258
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/physicians-directory/profiles?page=259">
                            259
                        </a>
                    </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Clinic Directory Profiles</h4>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=1">
                            1
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=2">
                            2
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=3">
                            3
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=4">
                            4
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=5">
                            5
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=6">
                            6
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=7">
                            7
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=8">
                            8
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=9">
                            9
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=10">
                            10
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=11">
                            11
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/clinics-directory/profiles?page=12">
                            12
                        </a>
                    </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Conditions by Region Index</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/annapolis-potomac-conditions-treated-by-location">
                            1
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/arlington-alexandria-conditions-treated-by-location">
                            2
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/atlanta-conditions-treated-by-location">
                            3
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/austin-conditions-treated-by-location">
                            4
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/bakersfield-conditions-treated-by-location">
                            5
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/baltimore-conditions-treated-by-location">
                            6
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/bay-area-conditions-treated-by-location">
                            7
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/boston-conditions-treated-by-location">
                            8
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/charlotte-conditions-treated-by-location">
                            9
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/chicago-conditions-treated-by-location">
                            10
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/cincinnati-conditions-treated-by-location">
                            11
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/cleveland-conditions-treated-by-location">
                            12
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/colorado-springs-conditions-treated-by-location">
                            13
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/columbus-conditions-treated-by-location">
                            14
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/dallas-fort-worth-conditions-treated-by-location">
                            15
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/denver-conditions-treated-by-location">
                            16
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/detroit-conditions-treated-by-location">
                            17
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/fort-myers-conditions-treated-by-location">
                            18
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/fresno-conditions-treated-by-location">
                            19
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/grand-rapids-conditions-treated-by-location">
                            20
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/greensboro-conditions-treated-by-location">
                            21
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/hampton-roads-conditions-treated-by-location">
                            22
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/hartford-conditions-treated-by-location">
                            23
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/houston-conditions-treated-by-location">
                            24
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/indianapolis-conditions-treated-by-location">
                            25
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/jacksonville-conditions-treated-by-location">
                            26
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/las-vegas-conditions-treated-by-location">
                            27
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/los-angeles-inland-empire-conditions-treated-by-location">
                            28
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/milwaukee-conditions-treated-by-location">
                            29
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/minneapolis-conditions-treated-by-location">
                            30
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/nashville-conditions-treated-by-location">
                            31
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/new-york-city-conditions-treated-by-location">
                            32
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/oklahoma-city-conditions-treated-by-location">
                            33
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/orange-county-conditions-treated-by-location">
                            34
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/orlando-conditions-treated-by-location">
                            35
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/philadelphia-conditions-treated-by-location">
                            36
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/phoenix-conditions-treated-by-location">
                            37
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/pittsburgh-conditions-treated-by-location">
                            38
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/portland-conditions-treated-by-location">
                            39
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/raleigh-durham-conditions-treated-by-location">
                            40
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/reno-conditions-treated-by-location">
                            41
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/richmond-conditions-treated-by-location">
                            42
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/sacramento-conditions-treated-by-location">
                            43
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/salt-lake-city-conditions-treated-by-location">
                            44
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/san-antonio-conditions-treated-by-location">
                            45
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/san-diego-conditions-treated-by-location">
                            46
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/seattle-tacoma-conditions-treated-by-location">
                            47
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/south-florida-conditions-treated-by-location">
                            48
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/spokane-conditions-treated-by-location">
                            49
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/st-louis-conditions-treated-by-location">
                            50
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/delaware-conditions-treated-by-location">
                            51
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tampa-conditions-treated-by-location">
                            52
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tucson-conditions-treated-by-location">
                            53
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tulsa-conditions-treated-by-location">
                            54
                        </a>
                    </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/washington-dc-conditions-treated-by-location">
                            55
                        </a>
                    </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Conditions Index</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-acl-injury">
                            ACL reconstruction
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-acute-whiplash">
                            acute whiplash
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-adhesive-capsulitis">
                            adhesive capsulitis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-als">
                            amyotrophic lateral sclerosis (ALS)
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-ankle-injuries">
                            ankle injuries
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-ankylosing-spondylitis">
                            ankylosing spondylitis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-arthritis">
                            arthritis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-arthroscopic-procedures">
                            arthroscopic procedures
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-balance-disorders">
                            balance disorders
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-bone-fractures">
                            bone fractures
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-bulging-disc">
                            bulging discs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-bursitis">
                            bursitis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-carpal-tunnel">
                            carpal tunnel syndrome
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-cerebral-palsy">
                            Cerebral palsy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-core-stabilization">
                            core stabilization
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-core-strengthening">
                            core strengthening
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-crps">
                            CRPS
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-degenerative-disc-disease">
                            degenerative disc disease
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-degenerative-joint-disease">
                            degenerative joint disease
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-de-quervains">
                            de Quervain’s
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-diastasis-recti">
                            diastasis recti
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-difficulty-with-gait">
                            difficulty with gait
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-herniated-disc">
                            disc herniation
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-dislocated-shoulder">
                            dislocated shoulder
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-fall-prevention">
                            fall prevention
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-femoroacetabular-impingement">
                            femoroacetabular impingement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-fibromyalgia">
                            fibromyalgia
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-foot-injuries">
                            foot injuries
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-gait-analysis">
                            gait analysis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-general-deconditioning">
                            general deconditioning
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-golf-elbow">
                            golfer’s elbow
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-headaches">
                            headaches
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-heel-pain">
                            heel pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-heel-spurs">
                            heel spurs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-hip-pain">
                            hip pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-hip-replacement">
                            hip replacement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-itb-syndrome">
                            ITB syndrome
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-joint-replacement">
                            joint replacement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-knee-pain">
                            knee pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-labral-repairs">
                            labral repairs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-labral-tears">
                            labral tears
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-ligament-injuries">
                            ligament injuries
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-lower-back-pain">
                            lower back pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-meniscal-repairs">
                            meniscal repairs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-meniscus-injuries">
                            meniscus injuries
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-mid-back-pain">
                            mid back pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-movement-analysis">
                            movement analysis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-multiple-sclerosis">
                            multiple sclerosis (MS)
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-muscle-weakness">
                            muscle weakness
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-neck-injuries">
                            neck injuries
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-neck-pain">
                            neck pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-neurological-conditions">
                            Neurologic therapy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-osteoarthritis">
                            osteoarthritis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-osteoporosis">
                            osteoporosis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-patellofemoral-syndrome">
                            patellofemoral pain syndrome
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-pelvic-floor-dysfunction">
                            pelvic floor therapy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-piriformis-syndrome">
                            piriformis syndrome
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-plantar-fasciitis">
                            plantar fasciitis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-posture-training">
                            posture training
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-pregnancy-and-postpartum-recovery">
                            pregnancy &amp; postpartum care
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-and-prehab-for-joint-replacement">
                            prehab before joint replacement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-rehab-post-fracture-fixation">
                            rehab post fracture fixation
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-returning-to-golf">
                            return to golf
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-returning-to-the-gym">
                            return to gym
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-returning-to-running">
                            return to running
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-returning-to-throwing">
                            return to throwing
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-reverse-total-shoulder-arthroplasty">
                            Reverse total shoulder arthroplasty
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-rotator-cuff-impingement">
                            rotator cuff impingement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-rotator-cuff-tears">
                            rotator cuff repairs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-sciatica">
                            sciatica
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-shin-splints">
                            shin splints
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-spinal-fusion">
                            spinal fusion
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-spinal-procedures">
                            spinal procedures
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-spinal-stenosis">
                            spinal stenosis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-spondylosis">
                            spondylosis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-strengthening">
                            strengthening program
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-stroke">
                            stroke
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-tendonitis">
                            tendonitis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-tennis-elbow">
                            tennis elbow
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-thoracic-outlet-syndrome">
                            thoracic outlet syndrome
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-total-knee-replacement">
                            total knee replacement
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-upper-back-pain">
                            upper back pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-urinary-incontinence">
                            urinary incontinence
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-vestibular-rehab">
                            vestibular rehab
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block capitalize"
                            href="/conditions/physical-therapy-for-womens-health-therapy">
                            Women’s health therapy
                        </a>
                                            </div>
                            </div>


            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Locations Index</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/annapolis-potomac-physical-therapy">
                            Annapolis/Potomac
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/arlington-alexandria-physical-therapy">
                            Arlington/Alexandria
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/atlanta-physical-therapy">
                            Atlanta
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/austin-physical-therapy">
                            Austin
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/bakersfield-physical-therapy">
                            Bakersfield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/baltimore-physical-therapy">
                            Baltimore
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/bay-area-physical-therapy">
                            Bay Area
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/boston-physical-therapy">
                            Boston
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/charlotte-physical-therapy">
                            Charlotte
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/chicago-physical-therapy">
                            Chicago
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/cincinnati-physical-therapy">
                            Cincinnati
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/cleveland-physical-therapy">
                            Cleveland
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/colorado-springs-physical-therapy">
                            Colorado Springs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/columbus-physical-therapy">
                            Columbus
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/dallas-fort-worth-physical-therapy">
                            Dallas/Fort Worth
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/denver-physical-therapy">
                            Denver
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/detroit-physical-therapy">
                            Detroit
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/fort-myers-physical-therapy">
                            Fort Myers
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/fresno-physical-therapy">
                            Fresno
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/grand-rapids-physical-therapy">
                            Grand Rapids
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/greensboro-physical-therapy">
                            Greensboro
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/hampton-roads-physical-therapy">
                            Hampton Roads
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/hartford-physical-therapy">
                            Hartford
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/houston-physical-therapy">
                            Houston
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/indianapolis-physical-therapy">
                            Indianapolis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/jacksonville-physical-therapy">
                            Jacksonville
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/las-vegas-physical-therapy">
                            Las Vegas
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/los-angeles-inland-empire-physical-therapy">
                            Los Angeles/Inland Empire
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/milwaukee-physical-therapy">
                            Milwaukee
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/minneapolis-physical-therapy">
                            Minneapolis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/nashville-physical-therapy">
                            Nashville
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/new-york-city-physical-therapy">
                            New York City
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/oklahoma-city-physical-therapy">
                            Oklahoma City
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/orange-county-physical-therapy">
                            Orange County
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/orlando-physical-therapy">
                            Orlando
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/philadelphia-physical-therapy">
                            Philadelphia
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/phoenix-physical-therapy">
                            Phoenix
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/pittsburgh-physical-therapy">
                            Pittsburgh
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/portland-physical-therapy">
                            Portland
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/raleigh-durham-physical-therapy">
                            Raleigh/Durham
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/reno-physical-therapy">
                            Reno
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/richmond-physical-therapy">
                            Richmond
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/sacramento-physical-therapy">
                            Sacramento
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/salt-lake-city-physical-therapy">
                            Salt Lake City
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/san-antonio-physical-therapy">
                            San Antonio
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/san-diego-physical-therapy">
                            San Diego
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/seattle-tacoma-physical-therapy">
                            Seattle/Tacoma
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/south-florida-physical-therapy">
                            South Florida
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/spokane-physical-therapy">
                            Spokane
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/st-louis-physical-therapy">
                            St. Louis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/delaware-physical-therapy">
                            Sussex County
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tampa-physical-therapy">
                            Tampa
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tucson-physical-therapy">
                            Tucson
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/tulsa-physical-therapy">
                            Tulsa
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/washington-dc-physical-therapy">
                            Washington D.C.
                        </a>
                                            </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Insurances Index</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-aetna-patients">
                            Aetna
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-ambetter-patients">
                            Ambetter
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-anthem-blue-cross-patients">
                            Anthem Blue Cross
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-anthem-blue-cross-blue-shield-patients">
                            Anthem Blue Cross Blue Shield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-banner-health-patients">
                            Banner Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-arizona-patients">
                            Blue Cross Blue Shield of Arizona
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-florida-patients">
                            Blue Cross Blue Shield of Florida
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-georgia-patients">
                            Blue Cross Blue Shield of Georgia
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-illinois-patients">
                            Blue Cross Blue Shield of Illinois
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-indiana-patients">
                            Blue Cross Blue Shield of Indiana
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-kansas-patients">
                            Blue Cross Blue Shield of Kansas
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-massachusetts-patients">
                            Blue Cross Blue Shield of Massachusetts
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-michigan-patients">
                            Blue Cross Blue Shield of Michigan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-minnesota-patients">
                            Blue Cross Blue Shield of Minnesota
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-north-carolina-patients">
                            Blue Cross Blue Shield of North Carolina
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-oklahoma-patients">
                            Blue Cross Blue Shield of Oklahoma
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-bluecross-blueshield-of-tennessee-patients">
                            BlueCross BlueShield of Tennessee
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-cross-blue-shield-of-texas-patients">
                            Blue Cross Blue Shield of Texas
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-kc-patients">
                            Blue KC
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-blue-shield-of-california-patients">
                            Blue Shield of California
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-boston-medical-center-health-plan-patients">
                            Boston Medical Center Health Plan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-bridgespan-health-patients">
                            BridgeSpan Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-capital-bluecross-patients">
                            Capital BlueCross
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-carefirst-bluecross-blueshield-patients">
                            CareFirst BlueCross BlueShield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-caresource-patients">
                            CareSource
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-champva-patients">
                            CHAMPVA
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-cigna-patients">
                            Cigna
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-clear-spring-health-patients">
                            Clear Spring Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-communitycare-patients">
                            CommunityCare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-connecticare-emblemhealth-patients">
                            ConnectiCare/EmblemHealth
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-coordinated-care-patients">
                            Coordinated Care
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-coventry-healthcare-patients">
                            Coventry Healthcare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-denver-health-medical-plan-patients">
                            Denver Health Medical Plan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-emblemhealth-patients">
                            EmblemHealth
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-empire-bluecross-blueshield-patients">
                            Empire BlueCross BlueShield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-excellus-bluecross-blueshield-patients">
                            Excellus BlueCross BlueShield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-first-health-patients">
                            First Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-geha-patients">
                            GEHA
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-geisinger-patients">
                            Geisinger
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-harvard-pilgrim-health-care-patients">
                            Harvard Pilgrim Health Care
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-health-net-patients">
                            Health Net
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-healthpartners-patients">
                            HealthPartners
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-healthsmart-patients">
                            HealthSmart
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-highmark-blue-cross-blue-shield-patients">
                            Highmark Blue Cross Blue Shield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-highmark-blue-cross-blue-shield-delaware-patients">
                            Highmark Blue Cross Blue Shield Delaware
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-highmark-blue-cross-blue-shield-of-western-new-york-patients">
                            Highmark Blue Cross Blue Shield of Western New York
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-humana-patients">
                            Humana
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-ihc-patients">
                            IHC
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-independence-blue-cross-patients">
                            Independence Blue Cross
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-iu-health-plans-patients">
                            IU Health Plans
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-kaiser-patients">
                            Kaiser Permanente
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-la-care-patients">
                            LA Care
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-medica-patients">
                            Medica
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-medicaid-patients">
                            Medicaid
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-medical-mutual-of-ohio-patients">
                            Medical Mutual of Ohio
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-medicare-patients">
                            Medicare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-medicare-advantage-patients">
                            Medicare Advantage
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-molina-healthcare-patients">
                            Molina Healthcare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-multiplan-patients">
                            MultiPlan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-optum-patients">
                            Optum Healthcare Partners Medical Group
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-oxford-health-plans-patients">
                            Oxford Health Plans
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-premera-blue-cross-patients">
                            Premera Blue Cross
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-providence-health-plan-patients">
                            Providence Health Plan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-regence-blue-cross-blue-shield-patients">
                            Regence Blue Cross Blue Shield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-regence-blue-shield-patients">
                            Regence BlueShield
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-renown-health-plan-patients">
                            Renown Health Plan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-rocky-mountain-health-plans-patients">
                            Rocky Mountain Health Plans
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-scripps-health-patients">
                            Scripps Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-selecthealth-patients">
                            SelectHealth
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-tricare-patients">
                            Tricare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-tufts-health-plan-patients">
                            Tufts Health Plan
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-united-healthcare-patients">
                            United Healthcare
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/insurances/physical-therapy-for-workers-comp-patients">
                            Workers’ Comp
                        </a>
                                            </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Blog - Recent Posts</h4>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=1">
                            1
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=2">
                            2
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=3">
                            3
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=4">
                            4
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=5">
                            5
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=6">
                            6
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=7">
                            7
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=8">
                            8
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=9">
                            9
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=10">
                            10
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=11">
                            11
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=12">
                            12
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=13">
                            13
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=14">
                            14
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=15">
                            15
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=16">
                            16
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=17">
                            17
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=18">
                            18
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=19">
                            19
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=20">
                            20
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=21">
                            21
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=22">
                            22
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=23">
                            23
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=24">
                            24
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=25">
                            25
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=26">
                            26
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=27">
                            27
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=28">
                            28
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=29">
                            29
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=30">
                            30
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=31">
                            31
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=32">
                            32
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=33">
                            33
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=34">
                            34
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=35">
                            35
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=36">
                            36
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=37">
                            37
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=38">
                            38
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=39">
                            39
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=40">
                            40
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=41">
                            41
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=42">
                            42
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=43">
                            43
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=44">
                            44
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=45">
                            45
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=46">
                            46
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=47">
                            47
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=48">
                            48
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=49">
                            49
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=50">
                            50
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=51">
                            51
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=52">
                            52
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=53">
                            53
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=54">
                            54
                        </a>
                    </div>
                                    <div class="d-inline-block">
                        <a class="body-small font-weight-100 color-base-100 mr-10"
                            href="/blog/recent-posts?page=55">
                            55
                        </a>
                    </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Blog - Tags</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/autonomy">
                            Autonomy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/back-pain">
                            Back Pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/balance-&amp;-mobility">
                            Balance &amp; Mobility
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/career-development">
                            Career Development
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/earning-potential">
                            Earning Potential
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/employees">
                            Employees
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/flexibility">
                            Flexibility
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/foot">
                            Foot
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/health-plans">
                            Health Plans
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/health-systems">
                            Health Systems
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/health-trends">
                            Health Trends
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/hip-health">
                            Hip health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/independence">
                            Independence
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/in-home-physical-therapy">
                            In-Home Physical Therapy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/injury">
                            Injury
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/injury-prevention">
                            Injury prevention
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/injury-recovery">
                            Injury Recovery
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/insider">
                            Insider
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/internal-promotion">
                            Internal Promotion
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/joint-replacements">
                            Joint Replacements
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/knee-health">
                            Knee health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/knee-pain">
                            Knee Pain
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/Rehabrion -culture">
                            Rehabrion  Culture
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/Rehabrion -pts">
                            Rehabrion  PTs
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/Rehabrion -therapists">
                            Rehabrion  Therapists
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/muscle-weakness">
                            Muscle Weakness
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/news">
                            News
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/osteoarthritis">
                            Osteoarthritis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/partners">
                            Partners
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/patients">
                            Patients
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/pelvic-health">
                            Pelvic health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/people-ops">
                            People Ops
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/physical-therapy">
                            Physical Therapy
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/physical-therapy-careers">
                            Physical Therapy Careers
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/physicians">
                            Physicians
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/posture">
                            Posture
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/product">
                            Product
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/senior-health">
                            Senior Health
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/sports">
                            Sports
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/startup-growth">
                            Startup Growth
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/therapist">
                            Therapist
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/therapists">
                            Therapists
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/tips">
                            Tips
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/tag/treatments">
                            Treatments
                        </a>
                                            </div>
                            </div>

            <div class="d-block">
                <h4 class="color-base-100 font-weight-normal my-15">Blog - Authors</h4>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/alexander-sah">
                            Alexander Sah
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/alex-bendersky">
                            Alex Bendersky
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/alysha-dennis">
                            Alysha Dennis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/amber-mauro">
                            Amber Mauro
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/amy-huang">
                            Amy Huang
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/ashley-aliberti">
                            Ashley Aliberti
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/ben-wobker">
                            Ben Wobker
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/christina-rama">
                            Christina Rama
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/cliff-wolosiansky">
                            Cliff Wolosiansky
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/dana-strauss">
                            Dana Strauss
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/eli-lamberson">
                            Eli Lamberson
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/emilie-kundert">
                            Emilie Kundert
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/emma-shapiro">
                            Emma Shapiro
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/jennifer-cloer">
                            Jennifer Cloer
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/joe-valdez">
                            Joe Valdez
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/john-seguin">
                            John Seguin
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/ken-charleston">
                            Ken Charleston
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/khanh-pham">
                            Khanh Pham
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/lily-beltran">
                            Lily Beltran
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/Rehabrion ">
                            Rehabrion
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/matt-cadile">
                            Matt Cadile
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/matt-gervais">
                            Matt Gervais
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/melissa-erlandson">
                            Melissa Erlandson
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/michelle-marmol">
                            Michelle Marmol
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/missy-lunn">
                            Missy Lunn
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/mohamed-khalil">
                            Mohamed Khalil
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/palak-shah">
                            Palak Shah
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/rachelle-nguyen">
                            Rachelle Nguyen
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/ricky-yu">
                            Ricky Yu
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/ryan-lewis">
                            Ryan Lewis
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/samuel-koo">
                            Samuel Koo
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/shay-costa">
                            Shay Costa
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/sheri-smith">
                            Sheri Smith
                        </a>
                                                    <span class="bullet-separator m-auto mr-5 ml-10 bg-teal-600 d-inline-block"></span>
                                            </div>
                                    <div class="d-flex-inline flex-middle">
                        <a class="body-small font-weight-100 color-base-100 mr-5 d-inline-block"
                            href="/blog/authors/terry-hanisko">
                            Terry Hanisko
                        </a>
                                            </div>
                            </div>
        </div>
    </section> --}}

		<!-- Modal -->
{{-- <section class="modal-container p-15 mw-700-px" id="modalCallText" >
    <div class="modal-body ">
        <a role="button" class="modal-close close c-pointer z-index-1 overflow-hidden">
            <img alt="close" class="lazyload w-100" data-src="https://public-assets.getRehabrion .com/images/close-button.svg" width="20px" height="18px"/>
        </a>
        <h3 class="d-flex flex-middle flex-center color-purple-800 mb-30 mt-10 font-weight-normal"><span class="icon mr-5"><img alt="phone" class="lazyload mw-20-px mh-20-px" data-src="https://public-assets.getRehabrion .com/images/contact_phone.svg" height="20px" width="20px"></span> Call/Text Us</h3>
            <a class="button cta-phone-mobile d-flex flex-middle flex-center button-purple mb-10" href="tel:866-525-3175">Call Us 866-525-3175</a>
                            <a class="button cta-message-mobile d-flex flex-middle flex-center button-purple mb-30" href="sms:916-963-9219;?&body=Hello!%20I’d%20like%20to%20book%20an%20in%20home%20physical%20therapy%20appointment.">Text Us 916-963-9219</a>
    </div>
</section>
<a class="overlay-modal" id="overlay-modalCallText" role="button" aria-label="overlay"></a>

		<a class="
					button
					button-appointment
					flex-middle
					flex-center
					z-index-3
					px-25
					py-15
					active
					fixed
					rounded-0
					w-100
					left-0
					bottom-0
					d-none
					d-xs-flex
					d-sm-flex
					active
					hide
					bg-teal-600
					color-base-100
					mnh-55-px
					border-0
					"
	href="tel:866-525-3175"
	data-toggle="scrollspy"
	role="button"
	data-hide="#why-on-demand"
	data-top-hide="true"
	>
	Call 866-525-3175
</a> --}}

</footer>


</body>


    {{-- scripts yaha rakhna --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
{{-- ✅ Lazy Load --}}
<script src="{{ asset('assets/js/libs/jquery.lazy/jquery.lazy.min.js') }}" defer></script>

{{-- ✅ jQuery Validation --}}
<script src="{{ asset('assets/js/libs/jquery.validate.min.js') }}" defer></script>

{{-- ✅ Input Mask --}}
<script src="{{ asset('assets/js/libs/jquery.mask.min.js') }}" defer></script>

{{-- ✅ COMPONENTS --}}
<script src="{{ asset('assets/js/components/tabs.js') }}" defer></script>
<script src="{{ asset('assets/js/components/faq.section.js') }}" defer></script>
<script src="{{ asset('assets/js/components/modal.js') }}" defer></script>
<script src="{{ asset('assets/js/components/scrollspy.js') }}" defer></script>
<script src="{{ asset('assets/js/components/phoneMask.js') }}" defer></script>
<script src="{{ asset('assets/js/components/toogle.js') }}" defer></script>
 <script src="{{ asset('assets/js/components/slides.components.js') }}" defer></script>
<script src="{{ asset('assets/js/components/principal.brands.slide.js') }}" defer></script>
<script src="{{ asset('assets/js/components/script.lazyload.js') }}" defer></script>

{{-- ✅ MAIN PAGE SCRIPTS --}}
<script src="{{ asset('assets/js/main.js') }}" defer></script>
<script src="{{ asset('assets/js/pages/home.js') }}" defer></script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const tab     = document.getElementById('rehabContactTab');
    const panel   = document.getElementById('rehabContactPanel');
    const overlay = document.getElementById('rehabContactOverlay');
    const closeBtn = document.getElementById('rehabContactClose');

    function openPanel() {
        panel.classList.add('is-open');
        overlay.hidden = false;
        overlay.classList.add('show');
        tab.setAttribute('aria-expanded', 'true');
        panel.setAttribute('aria-hidden', 'false');
    }

    function closePanel() {
        panel.classList.remove('is-open');
        overlay.classList.remove('show');
        setTimeout(() => { overlay.hidden = true; }, 200);
        tab.setAttribute('aria-expanded', 'false');
        panel.setAttribute('aria-hidden', 'true');
    }

    tab.addEventListener('click', function () {
        if (panel.classList.contains('is-open')) {
            closePanel();
        } else {
            openPanel();
        }
    });

    closeBtn.addEventListener('click', closePanel);
    overlay.addEventListener('click', closePanel);

    window.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closePanel();
        }
    });
});
</script>

</html>

