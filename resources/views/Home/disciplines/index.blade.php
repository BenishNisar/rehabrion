@extends('Layout.layout')
@section('Content')

{{-- 1. Animated Hero Header --}}
<section class="disciplines-header py-5 bg-dark-blue position-relative overflow-hidden">
    <div class="glow-bg"></div>
    <div class="container py-lg-5 text-center position-relative z-2">
        <h1 class="display-4 fw-bold text-white mb-3 animate__animated animate__fadeInDown">
            Our <span class="text-pink">Specialist</span> Sectors
        </h1>
        <p class="lead text-white-50 mx-auto animate__animated animate__fadeInUp" style="max-width: 800px;">
            We are well above our weight: nimbly filling roles from junior to senior management across Australia’s most vital industries.
        </p>
    </div>
</section>

{{-- 2. Interactive Sector Grid --}}
<section class="sectors-grid py-5">
    <div class="container py-lg-4">
        <div class="row g-4">
            @php
                $sectors = [
                    ['title' => 'Accounting & Finance', 'img' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=600', 'desc' => 'From CFOs to Accounts Payable roles.'],
                    ['title' => 'Administration Support', 'img' => 'https://images.unsplash.com/photo-1497215728101-856f4ea42174?q=80&w=600', 'desc' => 'Powering your office with elite support.'],
                    ['title' => 'Engineering & Technical', 'img' => 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?q=80&w=600', 'desc' => 'Technical experts for modern infrastructure.'],
                    ['title' => 'Healthcare & Community', 'img' => 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=600', 'desc' => 'Caring for those who care for others.'],
                    ['title' => 'IT & Digital', 'img' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=600', 'desc' => 'Innovative talent for a digital world.'],
                    ['title' => 'Executive Search', 'img' => 'https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=600', 'desc' => 'Finding the leaders of tomorrow.'],
                ];
            @endphp

            @foreach($sectors as $sector)
            <div class="col-lg-4 col-md-6">
                <a href="{{ url('/disciplines/detail') }}" class="sector-card-link">
                    <div class="sector-card position-relative overflow-hidden rounded-5 shadow-sm">
                        <img src="{{ $sector['img'] }}" class="sector-img" alt="{{ $sector['title'] }}">
                        <div class="sector-overlay">
                            <div class="sector-content">
                                <h4 class="fw-bold mb-2">{{ $sector['title'] }}</h4>
                                <p class="small mb-3 text-white-50">{{ $sector['desc'] }}</p>
                                <span class="explore-btn">Explore Sector <i class="fas fa-arrow-right ms-2"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
