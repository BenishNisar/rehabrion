@extends("Layout.layout")
@section("meta_title", $blog->meta_title ?? $blog->title)
@section("meta_description", $blog->meta_description ?? Str::limit(strip_tags($blog->content), 160))

@section("Content")
<style>
    .modal-content img {
    transition: transform 0.3s ease;
}
.modal-content img:hover {
    transform: scale(1.02);
}

.blog-content-body > *:last-child {
    margin-bottom: 0 !important;
}

.blog-content-body h1,
.blog-content-body h2,
.blog-content-body h3,
.blog-content-body h4,
.blog-content-body h5,
.blog-content-body h6 {
    font-weight: bold !important;
    margin-top: 25px !important;
    margin-bottom: 10px !important;
    font-family: 'Poppins', sans-serif !important;
}



</style>

<!-- Image Zoom Modal -->
<div class="modal fade" id="zoomModal" tabindex="-1" aria-labelledby="zoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content bg-transparent border-0">
        <div class="modal-body p-0 text-center">
          <img src="{{ asset('assets/images/blog_two.jpg') }}" class="img-fluid rounded shadow" alt="Zoomed Image">
        </div>
      </div>
    </div>
  </div>

<section class="responsive-mt">
    <div class="container">

        <div class="row g-5">

            <!-- Blog Content -->
            <div class="col-lg-8">

                <!-- Blog Image -->
<!-- Blog Image with Zoom -->
<img src="{{ asset($blog->featured_image) }}"
     class="img-fluid rounded shadow mb-4 blog-zoom-trigger"
     alt="Blog Image"
     data-bs-toggle="modal"
     data-bs-target="#zoomModal">

                <!-- Blog Meta -->
                <div class="mb-3 d-flex align-items-center justify-content-between flex-wrap">
                    <div>
                        <h3 class="fw-bold mb-0" >{{ $blog->title }}</h3>
                        <small class="text-muted">By <b>{{ $blog->author }}</b> | {{ \Carbon\Carbon::parse($blog->date)->format('d M, Y') }}</small>

                    </div>
                </div>

                <!-- Blog Content -->
                {{-- {{ $blog->short_description }} --}}
                <!-- Wrap blog content inside a font-override class -->
<div class="blog-content-body" style="font-family: 'Poppins', sans-serif; color:#444;">

    {{-- <div>{!! nl2br($blog->content) !!}</div> --}}
    <div>{!! $blog->content !!}</div>

</div>

                {{-- <p class="text-muted">{!! nl2br($blog->content) !!}</p> --}}

                <!-- Share -->
                <!-- Share -->
<div class="mb-5 border-top pt-3">
    <h6>Share this article:</h6>

    @php
        $shareUrl = urlencode(url()->current());
        $shareText = urlencode($blog->title);
    @endphp

    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" class="btn btn-sm btn-outline-primary me-2">
        <i class="fa-brands fa-facebook-f"></i> Facebook
    </a>

    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareText }}" target="_blank" class="btn btn-sm btn-outline-info me-2">
        <i class="fa-brands fa-twitter"></i> Twitter
    </a>

    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareText }}" target="_blank" class="btn btn-sm btn-outline-danger me-2">
        <i class="fa-brands fa-linkedin-in"></i> LinkedIn
    </a>
</div>


            </div>

            <!-- Recent Posts -->
           <!-- Recent Posts -->
<div class="col-lg-4">
    <div class="mb-4">
        <h5 class="fw-bold" style="color:#8b0000;">Recent Posts</h5>

        @foreach($recent_posts as $recent)
        <a href="{{ route('Home.blogs_details', ['slug' => $recent->slug]) }}" class="list-group-item list-group-item-action rounded mb-3 shadow-sm d-flex align-items-center">
            <img src="{{ asset($recent->featured_image) }}" class="me-3 rounded" style="width: 70px; height: 70px; object-fit: cover;" alt="Recent Blog">
            <div>
                <small class="text-muted d-block">{{ \Carbon\Carbon::parse($recent->date)->format('d M, Y') }}</small>
                <b>{{ $recent->title }}</b>
            </div>
        </a>
    @endforeach


    </div>
</div>


        </div>

    </div>
</section>

@endsection
