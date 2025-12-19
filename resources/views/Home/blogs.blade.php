{{-- @extends("Layout.layout")
@section("Content")

<style>
    /* Custom CSS for Blog Cards */
    :root {
        --main-color: #283054;
        --secondary-color: #8b0000;
        --card-bg-color: #ffffff;
        --card-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        --card-hover-bg: #f9f9f9;
        --btn-hover-color: #d14747;
        --card-border-radius: 12px;
        --card-hover-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
        --image-height: 200px;
        --padding: 20px;
    }

    /* Blog Card Container */
    .blog-card-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    /* Blog Card Styling */
    .blog-card {
        background: var(--card-bg-color);
        box-shadow: var(--card-shadow);
        border-radius: var(--card-border-radius);
        overflow: hidden;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        height: 100%;
        margin-bottom: 20px; /* Added margin for spacing between cards */

    }

    .blog-card:hover {
        background-color: var(--card-hover-bg);
        box-shadow: var(--card-hover-shadow);
        transform: translateY(-5px);
    }

    /* Blog Card Image */
    .blog-card-img {
        width: 100%;
        height: var(--image-height);
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card-img:hover {
        transform: scale(1.05);
    }

    /* Blog Card Body */
    .blog-card-body {
        padding: var(--padding);
    }

    /* Blog Card Header */
    .blog-card-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
    }

    .blog-card-date {
        background-color: var(--secondary-color);
        color: white;
        padding: 4px 8px;
        font-size: 14px;
        border-radius: 4px;
    }

    /* Blog Card Title */
    .blog-card-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--main-color);
        margin-top: 10px;
        transition: color 0.3s ease;
    }

    .blog-card-title:hover {
        color: var(--secondary-color);
        text-decoration: underline;
    }

    /* Blog Card Text */
    .blog-card-text {
        color: var(--main-color);
        font-size: 14px;
        margin-top: 10px;
    }

    /* "Read More" Link */
    .blog-card-read-more {
        color: var(--secondary-color);
        font-weight: 500;
        margin-top: 15px;
        display: inline-block;
        transition: color 0.3s ease;
    }

    .blog-card-read-more:hover {
        color: var(--btn-hover-color);
    }

    /* Mobile Responsiveness */
    @media (max-width: 767px) {
        .blog-card-container {
            grid-template-columns: 1fr; /* Single column on small screens */
        }

        .blog-card-img {
            height: 180px;
        }

        .blog-card-title {
            font-size: 16px;
        }

        .blog-card-text {
            font-size: 12px;
        }

        .blog-card-read-more {
            font-size: 13px;
        }
    }
</style>
 <div>
                <h1 class="text-center">latest blogs</h1>
            </div>
<section class="blog-section pb-5">
    <div class="container">
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
</section>

@endsection --}}

@extends("Layout.layout")
@section("Content")

        <main class="blog-page">
        <section id="feautured-post" class="bg-base-100 py-40 py-sm-25 py-xs-25">
            <div class="wrapper">
                <!-- Trigger to change Phone style on Header -->
                <span class="trigger-header-phone"></span>
                <!-- .Trigger -->
                <h1
                    class="color-purple-800 font-weight-normal text-md-center text-xs-center text-sm-center d-flex flex-middle lh-11 mt-0">
                    <span class="logo-icon mr-10"></span>
                    The Rehabrion   Blog
                </h1>
                <article class="p-30 p-md-20 p-sm-15 p-xs-15 rounded-large shadow-center-3">
                    <a href="/blog/orthopedic-patient-leakage" class="c-pointer no-decoration">
                        <div class="row">
                            <div class="col-6 col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">

                                <img alt="Blog image" data-src="https://public-assets.getRehabrion .com/images/posts/8cf89096_5259_4edb_b519_1d694b71911f/20250522_130538_cover.png"
                                    class="lazy w-100 h-auto rounded-large d-block" width="327px" height="185px">

                            </div>
                            <div class="col-6 col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12 py-10">
                                <label class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded">FEATURED
                                    POST</label>
                                                                <time class="font-14 color-base-600 d-inline-block p-5">May 30, 2025</time>
                                <h2 class="mt-10 mb-15 font-weight-normal lh-12 color-purple-800 feautured-title">
                                    The $40 Billion Impact of Orthopedic Patient Leakage to Community Physical Therapy Clinics</h2>
                                <p class="color-base-900 card-text">Hospitals are losing up to $39.6 billion over three years due to orthopedic patients leaking out of system-referred PT. Learn how in-home therapy with Rehabrion  helps retain patients and protect surgical revenue. </p>
                                <span class="card-text">Read more</span>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </section>

        <section id="recent-posts" class="bg-base-100 py-40 py-sm-25 py-xs-25">
    <div class="wrapper">
        <h2
            class="color-purple-800 mt-0 mb-40 font-weight-normal border-3 border-top-0 border-bottom-0 border-right-0 pl-20 border-teal-600 d-flex flex-between flex-middle feautured-title">
            Recent Posts
            <a href="/blog/recent-posts" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazy ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
        </h2>
        <div class="row">
                            <article class="col-4 col-md-6 col-sm-12 col-xs-12 expand  mb-sm-20 mb-xs-20  ">
                    <a class="row no-decoration" href="/blog/poor-posture-upper-back-pain-relief">
                        <div class="col-12">
                            <div class="overflow-hidden h-200-px h-md-auto h-sm-auto h-xs-auto w-100 rounded bg-base-200 bg-base-sm-100 bg-base-xs-100">
                                <img alt="photo" class="w-100 lazy h-auto d-block" data-src="https://public-assets.getRehabrion .com/images/posts/51c95a58_6e17_4813_bd5d_95fb7a859020/20251126_121101_cover.webp"
                                    alt="Cover" width="350px" height="250px">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-15 px-20 p-xs-0 bg-base-200 bg-base-sm-100 bg-base-xs-100 py-sm-10 py-xs-10 px-sm-0">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Patients</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Dec 9, 2025</time>
                                <h4
                                    class="color-purple-800 font-weight-600 mt-15 lh-13 lh-xs-12 mb-0 mb-xs-0 mt-xs-10 card-title truncate-title-cards">
                                    How Poor Posture Leads to Upper Back Pain and How to Fix It</h4>
                                <p class="color-base-900  lh-12 lh-sm-13 lh-lg-13 mt-10 mb-15 d-xs-none truncate-text-cards">
                                    Poor posture doesn’t just make you look slouched, it can also lead to chronic upper back pain, stiffness, and fatigue. In this blog, Rehabrion ’s physical therapists explain how posture affects spinal health and share expert-backed techniques to restore comfort, strength, and confidence.
                                </p>

                                <span class="d-xs-none color-teal-600 card-text">Read more</span>
                            </div>
                        </div>
                    </a>
                </article>
                            <article class="col-4 col-md-6 col-sm-12 col-xs-12 expand  mb-sm-20 mb-xs-20  ">
                    <a class="row no-decoration" href="/blog/rotator-cuff-injuries-symptoms-treatment-recovery">
                        <div class="col-12">
                            <div class="overflow-hidden h-200-px h-md-auto h-sm-auto h-xs-auto w-100 rounded bg-base-200 bg-base-sm-100 bg-base-xs-100">
                                <img alt="photo" class="w-100 lazy h-auto d-block" data-src="https://public-assets.getRehabrion .com/images/posts/0742dcbc_8f23_4ad2_bd04_42a1b777a422/20251111_121141_cover.webp"
                                    alt="Cover" width="350px" height="250px">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-15 px-20 p-xs-0 bg-base-200 bg-base-sm-100 bg-base-xs-100 py-sm-10 py-xs-10 px-sm-0">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Patients</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Dec 5, 2025</time>
                                <h4
                                    class="color-purple-800 font-weight-600 mt-15 lh-13 lh-xs-12 mb-0 mb-xs-0 mt-xs-10 card-title truncate-title-cards">
                                    Rotator Cuff Injuries: Symptoms, Treatment, and Recovery</h4>
                                <p class="color-base-900  lh-12 lh-sm-13 lh-lg-13 mt-10 mb-15 d-xs-none truncate-text-cards">
                                    Rotator cuff injuries are among the most common causes of shoulder pain, especially for adults over 40 or those with active lifestyles. Understanding the symptoms, treatment options, and recovery process can help you get back to the activities you love, without pain or dysfunction.
                                </p>

                                <span class="d-xs-none color-teal-600 card-text">Read more</span>
                            </div>
                        </div>
                    </a>
                </article>
                            <article class="col-4 col-md-6 col-sm-12 col-xs-12 expand  d-md-none mb-sm-0 mb-xs-0 ">
                    <a class="row no-decoration" href="/blog/meet-your-Rehabrion -physical-therapists">
                        <div class="col-12">
                            <div class="overflow-hidden h-200-px h-md-auto h-sm-auto h-xs-auto w-100 rounded bg-base-200 bg-base-sm-100 bg-base-xs-100">
                                <img alt="photo" class="w-100 lazy h-auto d-block" data-src="https://public-assets.getRehabrion .com/images/posts/3d5edd23_6888_4bb4_b9a8_65cfbd08117f/20251121_071103_cover.webp"
                                    alt="Cover" width="350px" height="250px">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="py-15 px-20 p-xs-0 bg-base-200 bg-base-sm-100 bg-base-xs-100 py-sm-10 py-xs-10 px-sm-0">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Patients</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Dec 4, 2025</time>
                                <h4
                                    class="color-purple-800 font-weight-600 mt-15 lh-13 lh-xs-12 mb-0 mb-xs-0 mt-xs-10 card-title truncate-title-cards">
                                    Meet Your Rehabrion  Physical Therapists: The Experts Who Come to You</h4>
                                <p class="color-base-900  lh-12 lh-sm-13 lh-lg-13 mt-10 mb-15 d-xs-none truncate-text-cards">
                                    Rehabrion ’s physical therapists are more than experts. They are your partners in recovery. With advanced degrees, specialized training, years of hands-on experience, and a genuine passion for helping others, they bring top-quality care right to your home. Learn how Rehabrion ’s team ensures safe, consistent, and personalized therapy that empowers every patient to move better, feel stronger, and live confidently.
                                </p>

                                <span class="d-xs-none color-teal-600 card-text">Read more</span>
                            </div>
                        </div>
                    </a>
                </article>
                    </div>
    </div>
</section>

                                        <section class="bg-base-100 py-40 py-sm-25 py-xs-25">
    <div class="wrapper">
        <h2
            class="color-purple-800 mt-0 mb-40 font-weight-normal border-3 border-top-0 border-bottom-0 border-right-0 pl-20 border-teal-600 d-flex flex-between flex-middle feautured-title">
            Browse by topic
            <div id="browse-tabs">
                                    <div id="tab-balance-mobility"
                        class="tab-container  d-block ">
                        <a href="/blog/tag/balance-&amp;-mobility" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazyload ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
                    </div>
                                    <div id="tab-muscle-weakness"
                        class="tab-container  d-none ">
                        <a href="/blog/tag/muscle-weakness" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazyload ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
                    </div>
                                    <div id="tab-knee-pain"
                        class="tab-container  d-none ">
                        <a href="/blog/tag/knee-pain" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazyload ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
                    </div>
                                    <div id="tab-joint-replacements"
                        class="tab-container  d-none ">
                        <a href="/blog/tag/joint-replacements" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazyload ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
                    </div>
                                    <div id="tab-back-pain"
                        class="tab-container  d-none ">
                        <a href="/blog/tag/back-pain" class="body d-flex-inline flex-middle lazy card-text">View all <img class="lazyload ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px" height="18px"></a>
                    </div>
                            </div>
        </h2>
        <div class="row">
            <div class="col-12 d-flex flex-middle flex-between mb-40 d-lg-block overflow-lg-scroll text-lg-nowrap d-md-block overflow-md-scroll text-md-nowrap d-sm-block overflow-sm-scroll text-sm-nowrap d-xs-block overflow-xs-scroll text-xs-nowrap"
                data-containers="#browse-tabs">
                                                            <a data-target="#tab-balance-mobility"
                            data-activeClass="bg-purple-600 color-base-100" role="button"
                            data-defaultClass="bg-purple-000 color-base-900" data-toggle="tab-action"
                            data-containerActiveClass="d-block"
                            class=" rounded  d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-inline-block body-small no-decoration mr-10 py-15 px-25 c-pointer border-purple-600 border bg-purple-600 color-base-100 capitalize">Balance &amp; Mobility</a>
                                                                                <a data-target="#tab-muscle-weakness"
                            data-activeClass="bg-purple-600 color-base-100" role="button"
                            data-defaultClass="bg-purple-000 color-base-900" data-toggle="tab-action"
                            data-containerActiveClass="d-block"
                            class=" rounded  d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-inline-block body-small no-decoration mr-10 py-15 px-35 c-pointer border-purple-600 border bg-purple-000 color-base-900 capitalize">Muscle Weakness</a>
                                                                                <a data-target="#tab-knee-pain"
                            data-activeClass="bg-purple-600 color-base-100" role="button"
                            data-defaultClass="bg-purple-000 color-base-900" data-toggle="tab-action"
                            data-containerActiveClass="d-block"
                            class=" rounded  d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-inline-block body-small no-decoration mr-10 py-15 px-35 c-pointer border-purple-600 border bg-purple-000 color-base-900 capitalize">Knee Pain</a>
                                                                                <a data-target="#tab-joint-replacements"
                            data-activeClass="bg-purple-600 color-base-100" role="button"
                            data-defaultClass="bg-purple-000 color-base-900" data-toggle="tab-action"
                            data-containerActiveClass="d-block"
                            class=" rounded  d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-inline-block body-small no-decoration mr-10 py-15 px-35 c-pointer border-purple-600 border bg-purple-000 color-base-900 capitalize">Joint Replacements</a>
                                                                                <a data-target="#tab-back-pain"
                            data-activeClass="bg-purple-600 color-base-100" role="button"
                            data-defaultClass="bg-purple-000 color-base-900" data-toggle="tab-action"
                            data-containerActiveClass="d-block"
                            class=" rounded  d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-inline-block body-small no-decoration mr-10 py-15 px-35 c-pointer border-purple-600 border bg-purple-000 color-base-900 capitalize">Back Pain</a>
                                                </div>

            <div class="col-7 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div id="browse-tabs">
                                            <div id="tab-balance-mobility"
                            class="tab-container row  d-block ">
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/the-dangers-of-dizziness-signs-you-shouldnt-ignore">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/7251efc7_c578_4875_8c53_3161323dced4/20240809_140812_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Balance &amp; Mobility</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 13, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">The Dangers of Dizziness: Signs You Shouldn’t Ignore</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/what-you-need-to-know-about-balance-issues-in-older-adults">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/63ec75fb_ec4a_43d9_9c4a_7ceeb02818ef/20240815_090819_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Balance &amp; Mobility</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">What You Need to Know About Balance Issues in Older Adults</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/tango-your-way-to-a-longer-life-dance-as-movement-medicine">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/176d8c07_df2a_49ba_98fd_d33dd880005c/20240815_090843_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Balance &amp; Mobility</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">Tango Your Way to a Longer Life: Dance as Movement Medicine</h4>
                                        </div>
                                    </a>
                                </article>
                                                    </div>
                                            <div id="tab-muscle-weakness"
                            class="tab-container row  d-none ">
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/does-physical-therapy-hurt-understanding-and-managing-pain-after-pt">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/9530bf8e_81de_4d7d_bbf4_868b28f0c81b/20240626_140612_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Muscle Weakness</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jun 20, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">Does Physical Therapy Hurt? Understanding and Managing Pain After PT</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/what-equipment-do-physical-therapists-use">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/870df36b_7bfa_40d7_83d8_aaff71f1af11/20240626_140617_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Muscle Weakness</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jun 14, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">What Equipment Do Physical Therapists Use?</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/15-most-common-reasons-for-physical-therapy-who-can-benefit">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/533cd5b7_59ce_4cd7_a58a_81440cbf78d5/20240815_100818_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Muscle Weakness</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">15 Most Common Reasons for Physical Therapy + Who Can Benefit</h4>
                                        </div>
                                    </a>
                                </article>
                                                    </div>
                                            <div id="tab-knee-pain"
                            class="tab-container row  d-none ">
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/top-5-pickleball-injuries-and-tips-to-dodge-them">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/5120225f_4905_44fb_bca7_f2727209471f/20240626_140641_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Knee Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jun 13, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">Top 5 Pickleball Injuries and Tips to Dodge Them</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/how-to-keep-your-knees-healthy-in-the-garden">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/d5047c57_a94c_4ee3_b8f6_0855cbc0a0f8/20240816_140841_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Knee Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">How to Keep Your Knees Healthy in the Garden</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/how-pt-can-treat-weak-knees">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/b465857d_0bee_470e_bd7e_32156391e251/20240816_150839_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Knee Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">How PT Can Treat Weak Knees</h4>
                                        </div>
                                    </a>
                                </article>
                                                    </div>
                                            <div id="tab-joint-replacements"
                            class="tab-container row  d-none ">
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/how-soon-after-surgery-should-you-start-physical-therapy">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/24d30ccc_a303_46ec_a2de_9144ac9792c7/20240626_140626_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Joint Replacements</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jun 21, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">How Soon After Surgery Should You Start Physical Therapy?</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/how-pt-can-help-you-heal-after-total-knee-replacement">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/67a099b6_2b98_4c21_97fe_4232041e173f/20240815_110852_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Joint Replacements</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">How PT Can Help You Heal after Total Knee Replacement</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/considering-hip-and-knee-replacement-heres-what-you-should-know">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/7b43132d_7d3b_4cd4_81fb_91817d2539ad/20240815_130819_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Joint Replacements</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">Considering Hip and Knee Replacement? Here&#039;s What You Should Know!</h4>
                                        </div>
                                    </a>
                                </article>
                                                    </div>
                                            <div id="tab-back-pain"
                            class="tab-container row  d-none ">
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/what-happens-when-you-throw-your-back-out-what-to-do-after">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/09523ab1_4019_4839_b211_4aef24afa6f6/20240626_140649_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Back Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jun 25, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">What Happens When You Throw Your Back Out? + What To Do After</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/back-pain-from-standing">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/8a32dbdf_960b_44a9_bf6e_dff50211aeb3/20240731_130735_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Back Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Jul 31, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">How To Relieve Back Pain From Standing Too Long + Prevention Tips</h4>
                                        </div>
                                    </a>
                                </article>
                                                            <article class="col-12 mb-20 col-sm-12 col-xs-12">
                                    <a class="row no-decoration" href="/blog/the-best-upper-back-stretches-for-pain-relief-according-to-physical-therapists">
                                        <div class="col-5 col-lg-6 col-sm-12 col-xs-12">
                                            <div
                                                class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                                <img alt="cover" class="lazyload rounded w-100 d-block"
                                                    data-src="https://public-assets.getRehabrion .com/images/posts/2073b486_fec0_4d35_a7bd_c6e491a75f40/20240815_130855_cover.webp">
                                            </div>

                                        </div>
                                        <div class="col-7 col-lg-6 col-sm-12 col-xs-12 py-sm-10 py-xs-10">


                                            <label
                                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Back Pain</label>
                                            <time
                                                class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">The Best Upper Back Stretches for Pain Relief (According to Physical Therapists)</h4>
                                        </div>
                                    </a>
                                </article>
                                                    </div>
                                    </div>
            </div>

            <div class="d-none col-12 mt-0 mb-20 d-sm-block d-xs-block">
                <div id="browse-tabs">
                                            <div id="tab-balance-mobility"
                            class="tab-container  d-block ">
                            <span class="d-inline-block card-text font-weight-500">Related Conditions:</span>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-balance-disorders">
                                    balance disorders
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-fall-prevention">
                                    fall prevention
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-gait-analysis">
                                    gait analysis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-difficulty-with-gait">
                                    difficulty with gait
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-movement-analysis">
                                    movement analysis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-vestibular-rehab">
                                    vestibular rehab
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-als">
                                    amyotrophic lateral sclerosis (ALS)
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-cerebral-palsy">
                                    Cerebral palsy
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-multiple-sclerosis">
                                    multiple sclerosis (MS)
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-neurological-conditions">
                                    Neurologic therapy
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-stroke">
                                    stroke
                                                                    </a>
                                                    </div>
                                            <div id="tab-muscle-weakness"
                            class="tab-container  d-none ">
                            <span class="d-inline-block card-text font-weight-500">Related Conditions:</span>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-core-stabilization">
                                    core stabilization
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-core-strengthening">
                                    core strengthening
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-general-deconditioning">
                                    general deconditioning
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-muscle-weakness">
                                    muscle weakness
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-posture-training">
                                    posture training
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-strengthening">
                                    strengthening program
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-urinary-incontinence">
                                    urinary incontinence
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-pregnancy-and-postpartum-recovery">
                                    pregnancy &amp; postpartum care
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-womens-health-therapy">
                                    Women’s health therapy
                                                                    </a>
                                                    </div>
                                            <div id="tab-knee-pain"
                            class="tab-container  d-none ">
                            <span class="d-inline-block card-text font-weight-500">Related Conditions:</span>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-knee-pain">
                                    knee pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-meniscus-injuries">
                                    meniscus injuries
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-patellofemoral-syndrome">
                                    patellofemoral pain syndrome
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-acl-injury">
                                    ACL reconstruction
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-itb-syndrome">
                                    ITB syndrome
                                                                    </a>
                                                    </div>
                                            <div id="tab-joint-replacements"
                            class="tab-container  d-none ">
                            <span class="d-inline-block card-text font-weight-500">Related Conditions:</span>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-hip-replacement">
                                    hip replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-joint-replacement">
                                    joint replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-labral-repairs">
                                    labral repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-meniscal-repairs">
                                    meniscal repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-and-prehab-for-joint-replacement">
                                    prehab before joint replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-reverse-total-shoulder-arthroplasty">
                                    Reverse total shoulder arthroplasty
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-rotator-cuff-tears">
                                    rotator cuff repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-spinal-fusion">
                                    spinal fusion
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-spinal-procedures">
                                    spinal procedures
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-total-knee-replacement">
                                    total knee replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-rehab-post-fracture-fixation">
                                    rehab post fracture fixation
                                                                    </a>
                                                    </div>
                                            <div id="tab-back-pain"
                            class="tab-container  d-none ">
                            <span class="d-inline-block card-text font-weight-500">Related Conditions:</span>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-acute-whiplash">
                                    acute whiplash
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-ankylosing-spondylitis">
                                    ankylosing spondylitis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-bulging-disc">
                                    bulging discs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-degenerative-disc-disease">
                                    degenerative disc disease
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-herniated-disc">
                                    disc herniation
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-lower-back-pain">
                                    lower back pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-mid-back-pain">
                                    mid back pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-neck-injuries">
                                    neck injuries
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-neck-pain">
                                    neck pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-sciatica">
                                    sciatica
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-spinal-stenosis">
                                    spinal stenosis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-spondylosis">
                                    spondylosis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-thoracic-outlet-syndrome">
                                    thoracic outlet syndrome
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block card-text capitalize font-weight-500"
                                    href="/conditions/physical-therapy-for-upper-back-pain">
                                    upper back pain
                                                                    </a>
                                                    </div>
                                    </div>
            </div>

            <div class="col-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <div class="bg-purple-000 rounded text-center px-30 py-50">
                        <div class="circled d-inline-block bg-base-100 w-150-px h-150-px mb-10 text-center p-20">
                            <img src="" data-src="https://public-assets.getRehabrion .com/images/icons/at-home.svg"
                                class="w-100 d-inline-block lazy" />
                        </div>
                        <h3 class="color-purple-800 my-20 card-title">Personalized treatments &amp;  at-home care</h3>
                        <p class="card-text">Get in-home physical therapy delivered to you, on your schedule. Covered by Medicare and most major insurances.</p>
                        <a class="button button-white d-flex-inline flex-center flex-middle mw-250-px mt-20"
                            href="/appointment">Book Consultation</a>
                    </div>
                            </div>

            <div class="col-12 mt-15 d-sm-none d-xs-none">
                <div id="browse-tabs">
                                            <div id="tab-balance-mobility"
                            class="tab-container  d-block ">
                            <span class="d-inline-block body-small font-weight-700">Related Conditions:</span>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-balance-disorders">
                                    balance disorders
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-fall-prevention">
                                    fall prevention
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-gait-analysis">
                                    gait analysis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-difficulty-with-gait">
                                    difficulty with gait
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-movement-analysis">
                                    movement analysis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-vestibular-rehab">
                                    vestibular rehab
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-als">
                                    amyotrophic lateral sclerosis (ALS)
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-cerebral-palsy">
                                    Cerebral palsy
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-multiple-sclerosis">
                                    multiple sclerosis (MS)
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-neurological-conditions">
                                    Neurologic therapy
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-stroke">
                                    stroke
                                                                    </a>
                                                    </div>
                                            <div id="tab-muscle-weakness"
                            class="tab-container  d-none ">
                            <span class="d-inline-block body-small font-weight-700">Related Conditions:</span>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-core-stabilization">
                                    core stabilization
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-core-strengthening">
                                    core strengthening
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-general-deconditioning">
                                    general deconditioning
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-muscle-weakness">
                                    muscle weakness
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-posture-training">
                                    posture training
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-strengthening">
                                    strengthening program
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-urinary-incontinence">
                                    urinary incontinence
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-pregnancy-and-postpartum-recovery">
                                    pregnancy &amp; postpartum care
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-womens-health-therapy">
                                    Women’s health therapy
                                                                    </a>
                                                    </div>
                                            <div id="tab-knee-pain"
                            class="tab-container  d-none ">
                            <span class="d-inline-block body-small font-weight-700">Related Conditions:</span>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-knee-pain">
                                    knee pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-meniscus-injuries">
                                    meniscus injuries
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-patellofemoral-syndrome">
                                    patellofemoral pain syndrome
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-acl-injury">
                                    ACL reconstruction
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-itb-syndrome">
                                    ITB syndrome
                                                                    </a>
                                                    </div>
                                            <div id="tab-joint-replacements"
                            class="tab-container  d-none ">
                            <span class="d-inline-block body-small font-weight-700">Related Conditions:</span>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-hip-replacement">
                                    hip replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-joint-replacement">
                                    joint replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-labral-repairs">
                                    labral repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-meniscal-repairs">
                                    meniscal repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-and-prehab-for-joint-replacement">
                                    prehab before joint replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-reverse-total-shoulder-arthroplasty">
                                    Reverse total shoulder arthroplasty
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-rotator-cuff-tears">
                                    rotator cuff repairs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-spinal-fusion">
                                    spinal fusion
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-spinal-procedures">
                                    spinal procedures
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-total-knee-replacement">
                                    total knee replacement
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-rehab-post-fracture-fixation">
                                    rehab post fracture fixation
                                                                    </a>
                                                    </div>
                                            <div id="tab-back-pain"
                            class="tab-container  d-none ">
                            <span class="d-inline-block body-small font-weight-700">Related Conditions:</span>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-acute-whiplash">
                                    acute whiplash
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-ankylosing-spondylitis">
                                    ankylosing spondylitis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-bulging-disc">
                                    bulging discs
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-degenerative-disc-disease">
                                    degenerative disc disease
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-herniated-disc">
                                    disc herniation
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-lower-back-pain">
                                    lower back pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-mid-back-pain">
                                    mid back pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-neck-injuries">
                                    neck injuries
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-neck-pain">
                                    neck pain
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-sciatica">
                                    sciatica
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-spinal-stenosis">
                                    spinal stenosis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-spondylosis">
                                    spondylosis
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-thoracic-outlet-syndrome">
                                    thoracic outlet syndrome
                                                                            <span
                                            class="bullet-separator m-auto mr-5 ml-5 mt-10 bg-teal-600 d-inline-block"></span>
                                                                    </a>
                                                            <a class="d-inline-block body-small capitalize font-weight-700"
                                    href="/conditions/physical-therapy-for-upper-back-pain">
                                    upper back pain
                                                                    </a>
                                                    </div>
                                    </div>
            </div>
        </div>
    </div>
</section>
                                                        <section id="subscribe-section" class="bg-base-100 py-25">
  <div class="wrapper">
     <div class="row mx-0 bg-teal-600 rounded py-25">
       <div class="col-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex flex-middle">
         <h3 class="my-0 color-base-100 font-weight-normal mb-sm-15 mb-md-15 mb-xs-15">Subscribe for weekly wellness tips</h3>
       </div>
       <div class="col-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 d-flex flex-middle">
         <form method="get" id="subscribe-form" class="w-100">
           <input type="hidden" name="_token" value="aFvklqJZlJ5SqyBX3BfBbhzlYdRWgDjh5i1KxPsG" autocomplete="off">           <div class="input-group form-item">
             <div class="input-group-item">
               <input type="email" class="input-element w-100 number-input" id="email" name="email" required placeholder="Enter email to subscribe">
             </div>
             <div class="input-group-append mt-xs-10">
               <button class="button button-purple d-flex flex-middle flex-center" type="submit" id="susbcribe-button">
                 <img class="lazy d-xs-none" data-src="https://public-assets.getRehabrion .com/images/arrow-right_white.svg">
                 <span class="d-none d-xs-block">Subscribe</span>
               </button>
             </div>
           </div>
         </form>
       </div>
     </div>
  </div>
</section>                                                        <section id="recent-posts" class="bg-base-100 py-40 py-sm-25 py-xs-25">
    <div class="wrapper">
        <h2
            class="color-purple-800 mt-0 mb-40 font-weight-normal border-3 border-top-0 border-bottom-0 border-right-0 pl-20 border-teal-600 d-flex flex-between flex-middle feautured-title">
            For Therapists
            <a href="/blog/tag/therapists" class="body d-flex-inline flex-middle lazy card-text">View all
                <img class="lazy ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px"
                    height="18px"></a>
        </h2>

        <div class="row">
                        <div class="col-7 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/transform-your-life-with-a-better-work-life-balance-real-experiences-from-a-Rehabrion -pt">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/193830e4_53ff_43e8_a67b_b2cf40ff4d72/20240816_080847_cover.webp">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Therapists</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">Transform Your Life With a Better Work-Life Balance: Real Experiences from a Rehabrion  PT</h4>
                            </div>
                        </a>
                    </article>
                                                        <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/how-to-find-your-balance-as-a-working-pt-mom">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/a5fd233c_1469_41bc_86ed_b538478a8e86/20240815_150811_cover.webp">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Therapists</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">How to Find Your Balance as a Working PT Mom</h4>
                            </div>
                        </a>
                    </article>
                                                        <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/3-ways-Rehabrion -helps-physical-therapists-reimagine-their-career">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/ed98bbea_247b_4136_9327_7e1bb6e4c751/20240816_090807_cover.webp">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Therapists</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Aug 16, 2024</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">3 Ways Rehabrion  Helps Physical Therapists Reimagine Their Career</h4>
                            </div>
                        </a>
                    </article>
                            </div>
                            <div class="col-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="bg-purple-000 rounded text-center px-30 py-50">
                        <div class="circled d-inline-block bg-base-100 w-150-px h-150-px mb-10 text-center p-20">
                            <img src=""
                                data-src="https://public-assets.getRehabrion .com/images/icons/pt-equipment.svg"
                                class="w-100 d-inline-block lazy" />
                        </div>
                        <h4 class="color-purple-800 my-20 card-title">Learn about becoming a Rehabrion  therapist</h4>
                        <p class="card-text">Rehabrion ’s in-home outpatient practice offers independence, whether you’re looking for extra work or want to see patients full-time.</p>
                        <a class="button button-white d-flex-inline flex-center flex-middle mw-250-px mt-20 card-text"
                            href="/own-your-career">Get Started</a>
                    </div>
                </div>
                    </div>
</section>
                                                        <section id="recent-posts" class="bg-base-100 py-40 py-sm-25 py-xs-25">
    <div class="wrapper">
        <h2
            class="color-purple-800 mt-0 mb-40 font-weight-normal border-3 border-top-0 border-bottom-0 border-right-0 pl-20 border-teal-600 d-flex flex-between flex-middle feautured-title">
            For Partners
            <a href="/blog/tag/partners" class="body d-flex-inline flex-middle lazy card-text">View all
                <img class="lazy ml-5" data-src="https://www.getRehabrion .com/images/arrow-teal-ios-right.svg" width="18px"
                    height="18px"></a>
        </h2>

        <div class="row">
                            <div class="col-5 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <a class="row no-decoration mb-md-20 mb-sm-20 mb-xs-20" href="/blog/2025-forbes-announcement">
                                                <div class="col-12 col-md-6">
                            <img alt="" data-src="https://public-assets.getRehabrion .com/images/posts/d94c91d3_a853_4bfa_94ea_3e13f08624be/20250318_150356_cover.png"
                                class="lazy w-100 h-auto rounded d-block mb-15 mb-md-0 mb-sm-0 mb-xs-0" width="327px" height="185px">
                        </div>
                        <div class="col-12 col-md-6 py-sm-10 py-xs-10">
                            <label
                                class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Partners</label>
                            <time class="font-14 color-base-600 d-inline-block p-5">Apr 30, 2025</time>
                            <h4 class="color-purple-800 font-weight-600 my-15 card-title my-sm-10 my-xs-10">Forbes Ranks Rehabrion  #1 in MSK Care, #3 in Healthcare, and #61 Among Best Startup Employers in 2025</h4>
                            <p class="color-base-900 d-md-none d-xs-none d-sm-none">
                                Rehabrion  has been ranked #61 on Forbes’ 2025 Best Startup Employers list, rising from #111 in 2024 and securing the #1 spot in MSK care. With 1.2M+ in-home PT visits and major health system partnerships, Rehabrion  continues to redefine PT. Learn more about Rehabrion ’s rapid growth.
                            </p>

                            <span class="d-inline-block mt-15 d-xs-none d-md-none d-sm-none card-text">Read more</span>
                        </div>
                    </a>
                </div>
                        <div class="col-7 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/meet-john-seguin">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/753f5a5b_26ce_4630_b834_4827627f6d58/20250228_130237_cover.png">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Partners</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Mar 7, 2025</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">Meet John Seguin: Building Lasting Healthcare Partnerships at Rehabrion </h4>
                            </div>
                        </a>
                    </article>
                                                        <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/2024-in-review">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/5655b5ba_bdd7_48f9_86f8_a65216c4bb24/20250213_160215_cover.png">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Partners</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Feb 21, 2025</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">Rehabrion ’s 2024 Year in Review: Transforming In-Home Physical Therapy at Scale</h4>
                            </div>
                        </a>
                    </article>
                                                        <article  class="mb-20">
                        <a class="row no-decoration" href="/blog/2024-nps-announcement">
                            <div class="col-5 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div
                                    class="overflow-hidden w-100 h-150-px h-md-auto h-sm-auto h-xs-auto relative rounded">
                                    <img alt="blog-image" class="lazy rounded w-100 d-block"
                                        data-src="https://public-assets.getRehabrion .com/images/posts/ee1622d6_b8c4_4f83_8b55_f63120e1089d/20250131_110142_cover.png">

                                </div>
                            </div>
                            <div class="col-7 col-lg-6 col-sm-12 col-xs-12 col-md-6 py-sm-10 py-xs-10">
                                                                <label
                                    class="bg-purple-000 color-purple-700 d-inline-block font-12 p-5 rounded uppercase">Partners</label>
                                <time class="font-14 color-base-600 d-inline-block p-5">Jan 2, 2025</time>
                                <h4 class="color-purple-800 font-weight-600 my-15 my-sm-10 my-xs-10 card-title">Rehabrion  Reaches New Heights with 2024 NPS</h4>
                            </div>
                        </a>
                    </article>
                            </div>
                    </div>
</section>

        <section id="explore" class="bg-base-100 py-40 py-sm-25 py-xs-25 mb-20">
  <div class="wrapper">
    <h2 class="color-purple-800 mt-0 mb-40 font-weight-normal border-3 border-top-0 border-bottom-0 border-right-0 pl-20 border-teal-600">Explore</h2>

    <div class="row">
      <div class="col-4 col-md-6 col-sm-6 col-xs-12">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/faq">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">Help & FAQ</h3>
          <p class="mb-0 card-text">Access our Help and Frequently Asked Questions page for getting support at your fingertips.</p>
        </a>
      </div>
      <div class="col-4 col-md-6 col-sm-6 mt-sm-25 col-xs-12 mt-xs-25">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/insurance-faq">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">Insurance & Benefits</h3>
          <p class="mb-0 card-text">Learn more about your coverage and get to know all your benefits.</p>
        </a>
      </div>
      <div class="col-4 col-md-6 mt-md-15 col-sm-6 mt-sm-25 col-xs-12 mt-xs-25">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/in-home-physical-therapy">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">In-Home Physical Therapy</h3>
          <p class="mb-0 card-text">Get specialists at home, improve your physical health without leaving your house.</p>
        </a>
      </div>
      <div class="col-4 mt-15 col-md-6 mt-md-15 col-sm-6 mt-sm-25 col-xs-12 mt-xs-25">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/locations">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">Locations</h3>
          <p class="mb-0 card-text">See a list of all states and cities we serve in U.S.</p>
        </a>
      </div>
      <div class="col-4 mt-15 col-md-6 col-sm-6 mt-sm-25 col-xs-12 mt-xs-25">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/conditions-we-treat">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">Conditions We Treat</h3>
          <p class="mb-0 card-text">Know all the conditions we treat, we have specialists for every PT condition.</p>
        </a>
      </div>
      <div class="col-4 mt-15 col-md-6 col-sm-6 mt-sm-25 col-xs-12 mt-xs-25">
        <a class="no-decoration color-base-900 shadow-bottom-3 d-block p-20 rounded h-100" href="/newsroom">
          <h3 class="color-purple-800 mt-0 mb-10 card-title">Newsroom</h3>
          <p class="mb-0 card-text">Access recent press coverage and articles about Rehabrion .</p>
        </a>
      </div>
    </div>
  </div>
</section>
        <section id="stay-connected" class="bg-purple-000 py-40 py-sm-25 py-xs-25">
  <div class="wrapper">
    <form id="subscribe">
      <h1 class="mt-0 color-purple-800 mb-10 text-center">Stay Connected</h1>
      <p class="text-center card-text">Subscribe for fierce articles in your inbox.</p>
      <input type="hidden" name="_token" value="aFvklqJZlJ5SqyBX3BfBbhzlYdRWgDjh5i1KxPsG" autocomplete="off">      <div class="input-group form-item mw-400-px mx-auto">
        <div class="input-group-item">
            <input type="email" class="input-element w-100 number-input" id="email_2" name="email_2"
                required placeholder="Email address">
        </div>
        <div class="input-group-append mt-xs-10">
            <button class="button button-purple cta-check-availability" type="submit" id="sign-up-button">Sign Up</button>
        </div>
      </div>
    </form>
  </div>
</section>
        <!-- ModalMap -->
        <!-- Modal-Maps -->
<section class="modal-container p-15 mw-900-px" id="modal-map" >
    <div class="modal-body ">
        <a role="button" class="modal-close close c-pointer z-index-1 overflow-hidden">
            <img alt="close" class="lazyload w-100" data-src="https://public-assets.getRehabrion .com/images/close-button.svg" width="20px" height="18px"/>
        </a>
        <span class="d-block text-center">
        <img class="lazyload" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
    </span>
    <h2 class="color-purple-800 mt-0 text-center font-weight-normal">Where we serve</h2>



        <div class="row flex-center" id="map-container">
  <div class="col-7 col-sm-12 col-xs-12 c-pointer">
    <div id="regions_div"></div>
  </div>
  <div class="col-12 d-xxl-none d-xl-none d-lg-none d-md-none">
    <div class="form-item align-left mb-20">
      <select name="states-map" id="states-map"  class="input-element mt-5">
        <option value="" disabled selected>Select a state</option>
      </select>
    </div>
  </div>
  <div class="col-5 col-sm-12 col-xs-12 d-none" id="regions-content">
  </div>
  <div class="col-12 d-flex flex-center flex-middle mt-30 d-sm-block d-xs-block shadow-center-sm-3 shadow-center-xs-3 p-sm-20 p-xs-20 text-xs-center text-sm-center">
    <img alt="Rehabrion  Logo" class="modal-logo mw-70-px d-sm-block d-xs-block m-sm-auto m-xs-auto mr-10 h-auto" src="https://public-assets.getRehabrion .com/images/logo.svg" width="70px" height="20px">
    <p class="mb-0 mt-5 color-purple-600 d-sm-block d-xs-block pl-10 p-sm-0 p-xs-0 border-left border-sm-0 border-xs-0 body-small"><a href="/locations">See our full service area list</a></p>
  </div>
</div>
    </div>
</section>


    </main>

@endsection
