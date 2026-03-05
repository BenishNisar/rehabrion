@extends('Layout.layout')
@section('Content')

{{-- 1. Premium Glassmorphism Header --}}
<section class="sector-hero position-relative overflow-hidden">
    <div class="sector-bg-glow"></div>
    <div class="container py-lg-5 position-relative z-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#" class="text-pink">Sectors</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Accounting & Finance</li>
            </ol>
        </nav>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-3 fw-bold text-white mb-3 animate__animated animate__fadeInLeft">
                    Accounting & <br><span class="text-pink">Finance</span> Recruitment
                </h1>
                <p class="lead text-white-50 mb-5 animate__animated animate__fadeInUp">
                    Connecting elite financial talent with Australia's most prestigious private businesses and public sectors. We build legacies, not just balance sheets.
                </p>
                <div class="d-flex gap-3 animate__animated animate__fadeInUp animate__delay-1s">
                    <a href="#roles" class="btn btn-custom btn-lg rounded-pill px-5">View Roles</a>
                    <a href="#" class="btn btn-outline-light btn-lg rounded-pill px-5">Submit CV</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="floating-finance-card animate__animated animate__zoomIn">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=800" alt="Finance" class="img-fluid rounded-5 shadow-2xl">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. Modern Bento Grid (Roles & Specialties) --}}
<section id="roles" class="roles-grid-section py-5 bg-white">
    <div class="container py-lg-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark-blue display-5">Specialized <span class="text-pink">Expertise</span></h2>
            <p class="text-muted italic-role">From CFOs to Accounts Officers, we cover the entire financial spectrum.</p>
        </div>

        <div class="row g-4">
            {{-- Category: Executive --}}
            <div class="col-lg-4">
                <div class="bento-card p-4 rounded-5 h-100 shadow-sm border-0">
                    <div class="icon-header mb-4 bg-pink-light">
                        <i class="fas fa-crown text-pink"></i>
                    </div>
                    <h4 class="fw-bold text-dark-blue mb-3">Executive Level</h4>
                    <ul class="list-unstyled role-list">
                        <li><i class="fas fa-check-circle me-2 text-pink"></i> Chief Financial Officers</li>
                        <li><a href="#" class="role-pill">Finance Managers</a></li>
                        <li><a href="#" class="role-pill">Financial Controllers</a></li>
                    </ul>
                </div>
            </div>

            {{-- Category: Accounting --}}
            <div class="col-lg-8">
                <div class="bento-card-wide p-5 rounded-5 shadow-sm border-0 h-100 position-relative overflow-hidden">
                    <div class="position-relative z-2">
                        <h4 class="fw-bold text-dark-blue mb-4">Core Accounting & Finance</h4>
                        <div class="row g-3">
                            @php $roles = ['Accounts Payable', 'Bookkeepers', 'Business Analysts', 'Tax Accountants', 'Payroll Officers', 'Auditors', 'Credit Controllers', 'Graduates']; @endphp
                            @foreach($roles as $role)
                                <div class="col-md-4 col-6">
                                    <div class="role-tag-modern">{{ $role }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="glass-decoration"></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 3. High-Conversion CTA --}}
<section class="discipline-cta py-5">
    <div class="container">
        <div class="cta-inner rounded-5 p-5 text-center shadow-2xl position-relative">
            <h3 class="display-6 fw-bold text-white mb-4">Looking for your next Finance lead?</h3>
            <p class="text-white-50 mb-5 fs-5">Call our specialist team on <span class="text-white fw-bold">03 9535 9500</span> or let us call you.</p>
            <div class="d-flex justify-content-center gap-3">
                <button class="btn btn-custom btn-lg rounded-pill px-5">Request a Callback</button>
                <button class="btn btn-light btn-lg rounded-pill px-5">Submit a Vacancy</button>
            </div>
        </div>
    </div>
</section>

@endsection
