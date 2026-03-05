@extends("Layout.layout")
@section("Content")




{{--
<section class="blog-section pb-5">
    <div class="container">
          <h1 class="text-center blogs-title mt-3">latest blogs</h1>

        <div class="blog-card-container">

            <!-- Blog Card Loop -->
            @foreach($blogs as $blog)
            <div class="blog-card">
                <img src="{{ asset($blog->featured_image) }}" alt="Blog Image" class="blog-card-img">
                <div class="blog-card-body">
                    <div class="blog-card-header">
                        <span class="blog-card-date">{{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</span>
                        <small class="text-muted">By {{ $blog->author }}</small>
                    </div>
                    <h5 class="blog-card-title">
                        <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="blog-card-link">
                            {{ $blog->title }}
                        </a>
                    </h5>
                    <p class="blog-card-text">{{ Str::limit($blog->short_description, 100) }}</p>
                    <a href="{{ route('Home.blogs_details', ['slug' => $blog->slug]) }}" class="blog-card-read-more">Read More →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

<section class="blog-header bg-white pt-5 pb-4">
    <div class="container pt-lg-5"> <div class="row">
            <div class="col-lg-8">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold mb-3">
                    <i class="fas fa-newspaper me-2"></i>LATEST INSIGHTS
                </span>
                <h1 class="fw-bold display-5 text-dark-blue mb-3">Career <span class="text-pink">Insights & Tips</span></h1>
                <p class="lead text-muted mb-0">Stay ahead with the latest recruitment trends in Australia.</p>
            </div>
        </div>
    </div>
</section>
{{--blogs  --}}
<section class="blog-section py-5 position-relative bg-white" >
    <div class="container py-4">

        {{-- <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <span class="badge bg-pink-light text-pink px-3 py-2 rounded-pill fw-bold ls-1">
                    <i class="fas fa-newspaper me-2"></i>LATEST NEWS
                </span>
                <h2 class="display-5 fw-bold text-dark-blue">
                    Career <span class="text-pink">Insights & Tips</span>
                </h2>
                <p class="text-muted lead mb-0">Stay ahead with the latest trends in recruitment.</p>
            </div>
            {{-- <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <a href="#" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold">Read All Articles <i class="fas fa-arrow-right ms-2"></i></a>
            </div> --}}
        {{-- </div> --}}

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
