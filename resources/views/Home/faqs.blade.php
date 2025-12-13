@extends("Layout.layout")
@section("Content")

<!-- FAQs -->
<section id="faq" class="py-40 py-xs-25 py-sm-25 py-md-0 py-sm-0 py-xs-0 pb-md-40 pb-xs-40 pb-sm-40 d-flex flex-end d-sm-block d-xs-block d-md-block relative overflow-hidden">

    <div class="bg bg-pos-y-top bg-pos-x-25 lazy absolute left-0 top-0 right-0 m-auto d-xs-none d-md-none d-sm-none h-100 mnh-1100-px"
         data-src="https://public-assets.getluna.com/images/faq-bg.webp"></div>

    <img
        alt="Background"
        class="d-none d-sm-block d-xs-block d-md-block lazy w-100 relative h-auto"
        data-src="https://public-assets.getluna.com/images/faq-bg-mobile-2.webp"
        width="991px"
        height="660px">

    <div class="z-index-2 mw-1400-px mx-auto w-100 d-flex flex-end d-sm-block d-xs-block d-md-block">
        <div class="p-40 p-xs-0 p-sm-0 shadow-none-md shadow-none-sm shadow-none-xs mw-800-px mx-md-auto w-100-p shadow-center-3 bg-base-100">

            <span class="d-none text-center mb-10 mt-md-30 mt-sm-25 mt-xs-25 d-xs-block d-sm-block d-md-block">
                <img class="lazy" data-src="https://public-assets.getluna.com/images/line_title.svg" alt="Separator" width="45px" height="6px">
            </span>

            <h2 class="color-purple-800 font-weight-normal mt-0 px-xs-15 px-sm-15 text-xs-center text-sm-center text-md-center mb-sm-0 mb-xs-0 mb-md-0">
                Frequently Asked Questions (FAQs)
            </h2>

            <div class="accordion wrapper">

                {{-- 1 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom active">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            Do I need a doctor’s referral to book a session?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            No. You can directly book a physiotherapy consultation with Rehabrion.
                            If you already have medical reports or prescriptions, our therapist will review them during assessment.
                        </p>
                    </div>
                </article>

                {{-- 2 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            Do you provide home-care physiotherapy?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Yes. Home-care physiotherapy is one of our core services.
                            Our licensed physiotherapists visit you at your home and provide one-on-one treatment.
                        </p>
                    </div>
                </article>

                {{-- 3 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            Do you offer online or virtual consultations?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Yes. We offer online physiotherapy consultations and guided rehab sessions when in-person visits are not required or feasible.
                        </p>
                    </div>
                </article>

                {{-- 4 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            How long is a physiotherapy session?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Session duration depends on your condition, but typically ranges between 45 to 60 minutes to ensure effective and focused treatment.
                        </p>
                    </div>
                </article>

                {{-- 5 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            What conditions do you treat?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>We treat a wide range of conditions including:</p>
                        <ul class="pl-30">
                            <li>Musculoskeletal (MSK) pain</li>
                            <li>Back, neck, and joint pain</li>
                            <li>Post-surgical rehabilitation</li>
                            <li>Sports injuries</li>
                            <li>Mobility and posture issues</li>
                            <li>Chronic pain conditions</li>
                        </ul>
                    </div>
                </article>

                {{-- 6 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            How many sessions will I need?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Recovery time varies for each patient. After your initial consultation, your therapist will recommend a treatment plan and estimated number of sessions.
                        </p>
                    </div>
                </article>

                {{-- 7 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            Will the same therapist visit me every time?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Yes, whenever possible. We aim to maintain continuity of care by assigning the same therapist throughout your treatment.
                        </p>
                    </div>
                </article>

                {{-- 8 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            Is home physiotherapy safe?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Yes. Home physiotherapy is safe, effective, and widely recommended — especially for patients who prefer treatment in a comfortable and familiar environment.
                        </p>
                    </div>
                </article>

                {{-- 9 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            What should I prepare before a home session?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            Please ensure a clean space with enough room to move. Wear comfortable clothing.
                            If you have medical reports or imaging, keep them available.
                        </p>
                    </div>
                </article>

                {{-- 10 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            How do I book an appointment?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            You can book a session through our website or by contacting our team directly.
                            Our support team will guide you through the process.
                        </p>
                    </div>
                </article>

                {{-- 11 --}}
                <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom">
                    <a class="accordion-toogle relative c-pointer no-decoration" role="button">
                        <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                        <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">
                            What payment options do you accept?
                        </h3>
                    </a>
                    <div class="accordion-content pl-30">
                        <p>
                            We offer transparent self-pay options and customized rehabilitation packages.
                            All pricing is shared clearly before treatment begins.
                        </p>
                    </div>
                </article>

            </div>
        </div>
    </div>
</section>
<!-- End FAQs -->

@endsection
