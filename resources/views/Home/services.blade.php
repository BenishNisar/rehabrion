@extends('Layout.layout')
@section('Content')



   <section class="section-dark text-light no-top no-bottom position-relative overflow-hidden z-1000">
                <div class="v-center">
                    <div class="swiper">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url({{asset('assets/images/slider/1.webp')}})">
                                <div class="sw-caption relative z-1000">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-6 offset-lg-6">
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle s2 mb-2">Mindthera</div>
                                                    <h1 class="slider-title mb-3">Begin Your <span class="d-block alt-font fw-500 id-color-2 fs-96 fs-xs-60">Inner Peace Journey</span></h1>
                                                    <div class="col-lg-8">
                                                        <p class="slider-teaser mb-3">Embark on a journey of self-discovery and emotional healing with our expert therapists.</p>
                                                    </div>
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main  mb10 mb-3 " href="services.html">Our Services</a>
                                                </div>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>

                                    </div>
                                </div>
                                <img src="{{asset('assets/images/misc/flowers-crop.webp')}}" class="w-30 absolute bottom-0 start-0 sw-anim" alt="">
                            </div>
                        </div>
                        <!-- Slides -->

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="swiper-inner" data-bgimage="url({{asset('assets/images/slider/2.webp')}})">
                                <div class="sw-caption relative z-1000">
                                    <div class="container">
                                        <div class="row gx-5 align-items-center">

                                            <div class="spacer-double"></div>

                                            <div class="col-lg-6 offset-lg-6">
                                                <div class="spacer-single"></div>
                                                <div class="sw-text-wrapper">
                                                    <div class="subtitle s2 mb-2">Mindthera</div>
                                                    <h1 class="slider-title mb-3">Begin Your <span class="d-block alt-font fw-500 id-color-2 fs-96 fs-xs-60">Inner Peace Journey</span></h1>
                                                    <div class="col-lg-8">
                                                        <p class="slider-teaser mb-3">Embark on a journey of self-discovery and emotional healing with our expert therapists.</p>
                                                    </div>
                                                    <div class="spacer-10"></div>
                                                    <a class="btn-main  mb10 mb-3" href="services.html">Our Services</a>
                                                </div>
                                            </div>

                                            <div class="spacer-single"></div>
                                        </div>

                                    </div>
                                </div>
                                <img src="{{asset('assets/images/misc/flowers-crop.webp')}}" class="w-30 absolute bottom-0 start-0 sw-anim" alt="">
                            </div>
                        </div>
                        <!-- Slides -->




                      </div>
                      <!-- If we need pagination -->
                      <div class="swiper-pagination"></div>

                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>

                      <!-- If we need scrollbar -->
                      <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </section>

  <!-- Inner Banner -->
  {{-- <div class="inner_banner" style="background: url({{ asset('') }}) no-repeat center; background-size: cover;">
    <div class="overlay">
      <div class="banner_tilte">
        <h2>Services</h2>
        <span class="s_color_bg"></span>
      </div>
    </div>
  </div> --}}




  <!-- Service Grid -->
{{-- services --}}
<section class="relative overflow-hidden pb60">
    <img src="{{ asset('assets/images/services/ribcage.png') }}" class="w-30 absolute top-0 start-0 sw-anim" alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="subtitle wow fadeInUp mb-3">Our Services</div>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    Therapist &amp; <span class="alt-font fw-500 fs-64 id-color-2">Treatments</span>
                </h2>
                <p class="lead mb-0 wow fadeInUp">
                At Rehabrion  , we provide comprehensive rehabilitation and musculoskeletal (MSK) care designed to help you recover faster, live pain-free, and move with confidence. Our services combine expert guidance, personalized treatment, and convenient delivery so you get the care you need, exactly when you need it.

                </p>
                <div class="spacer-single"></div>
                <div class="spacer-half"></div>
            </div>
        </div>

        <div class="row g-4">

            @forelse($services as $service)
                @php
                    $img   = $service->image
                        ? asset($service->image)
                        : asset('assets/images/services/placeholder.webp');

                    $title = $service->title ?? 'Service';

                    $desc  = $service->short_description
                        ?? (\Illuminate\Support\Str::limit(strip_tags($service->description ?? ''), 120))
                        ?? 'Learn more about this service.';
                @endphp

                <div class="col-lg-4 col-sm-6">
                    <div class="relative mb-3">
                        <a href="{{ route('Home.services.show', $service->slug) }}" class="d-block hover service-link">
                            <div class="relative overflow-hidden rounded-20px shadow-soft mb-2">
                                {{-- Decorative flower overlay --}}
                                <img src="{{ asset('assets/images/misc/flowers-crop-3-white.webp') }}"
                                     class="w-50 end-0 absolute hover-op-0" alt="">

                                {{-- Read more overlay --}}
                                <div class="absolute start-0 w-100 abs-middle fs-36 text-white text-center">
                                    <span class="btn-main hover-scale-in-2">Read More</span>
                                </div>

                                {{-- Dynamic service image --}}
                                <img
                                    src="{{ $img }}"
                                    alt="{{ $title }}"
                                    class="img-fluid hover-scale-1-2"
                                >
                            </div>

                            {{-- Dynamic title + description --}}
                            <h4>{{ $title }}</h4>
                            <p class="no-bottom text-dark">
                                {{ $desc }}
                            </p>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info mb-0">
                        No services available yet.
                    </div>
                </div>
            @endforelse

        </div>

        <div class="spacer-double"></div>
    </div>
</section>
{{-- services --}}


  {{-- <!-- Request Quote footer -->
  <div class="request_quote_footer s_color_bg">
    <div class="container clear_fix">
      <p class="float_left">ConsultPress over 20 years of experience we’ll ensure you always get the best guidance.</p>
      <a href="#" class="theme_button p_color_bg s_color float_right tran3s">Request Quote</a>
    </div>
  </div> --}}
<!-- Request Quote footer -->
<div class="request_quote_footer s_color_bg">
  <div class="container clear_fix">
    <p class="float_left">Aziz & Ismail Co. — Income, Sales & Tax advisors helping businesses stay compliant and grow.</p>
    <a href="{{ url("/contact") }}" class="theme_button p_color_bg s_color float_right tran3s">Contact Now</a>
  </div>
</div>



@endsection
