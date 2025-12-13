@extends("Layout.layout")
@section("Content")

	<main class="front-page index relative">

  <section id="free-delivery" class="color-purple-600 fw-ligther bg-purple-100 text-center py-10">
  <div class="wrapper">
    <b>
   Rehab & Physical Care, delivered to you</b>
  </div>
</section>
		<!-- Intro  -->
			<section id="hero" class="relative overflow-hidden overlay-50 mnh-xs-400-px">
				<span class="trigger-header-phone"></span>
				<div class="wrapper py-90 py-md-60 py-sm-60 py-xs-50">
					<div class="row flex-sm-center flex-xs-center">
						<div
							class="col-5 offset-xxl-1 col-xl-6 col-lg-6 col-md-7 col-sm-12 col-xs-12  text-sm-center text-xs-center">
							<h1 class="mt-0 mb-35 font-weight-normal">Physical therapy,<br><span>delivered to you</span></h1>
							<h3 class="color-base-100 my-0 px-20 d-sm-none d-xs-none font-weight-400">
								Call <a class="color-base-100"
									href="tel:866-525-3175">866-525-3175</a>
							</h3>
							<label
								class="line-label font-20 d-block relative mw-300-px mb-10 m-sm-0-auto m-xs-0-auto d-sm-none d-xs-none">
								or
							</label>

							<form method="get" id="check_zip" action="/appointment" class="bg-purple-600 py-30 px-20 py-sm-25 py-xs-25 px-sm-15 px-xs-15 rounded">
								<input type="hidden" name="_token" value="JEmFJr1hCHgmJeVWZYQNtL7TFb5eUtBc922MQk1z" autocomplete="off">								<div class="input-group form-item">
									<div class="input-group-item">
										<input type="number" pattern="[0-9]*" class="input-element w-100 number-input" id="zipCode" name="zipCode"
											required placeholder="Enter Zip Code" maxlength="5"
											oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">

										<input type="hidden" id="utm_campaign" name="utm_campaign" value="" />
										<input type="hidden" id="utm_source" name="utm_source" value=""/>
										<input type="hidden" id="utm_medium" name="utm_medium" value=""/>
										<input type="hidden" id="utm_term" name="utm_term" value=""/>
										<input type="hidden" id="utm_content" name="utm_content" value=""/>
									</div>
									<div class="input-group-append mt-xs-10">
							<a href="{{ asset("/submit-medical-history") }}">
    <button class="button button-teal cta-check-availability" type="button">
        Check Availability
    </button>
</a>

                                </div>
								</div>
								<div class="form-item mt-15 lh-1 d-flex flex-middle">
<a href="/verify-email" class="underline color-base-100 lh-1">
    Continue as a returning patient
</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="bg-hero d-sm-none d-xs-none" style="background-image: url(https://public-assets.getluna.com/images/intro.webp)"></div>
				<div class="bg-hero d-none d-sm-block d-xs-block bg-pos-sm-x-25 bg-pos-xs-x-50" style="background-image: url(https://public-assets.getluna.com/images/hero-intro-mobile.webp)"></div>
			</section>
		<!-- End Intro  -->


						<!-- Expert Vetted -->
<section id="expert-vetter" class="py-40 py-xs-25 py-sm-25">
    <div class="wrapper-full">
                    <span class="d-block text-center mb-10 " >
                <img class="lazy" data-src="https://public-assets.getluna.com/images/line_title.svg" alt="Separator" width="45px" height="6px">
            </span>
            <h2 class=" color-purple-800 mt-0 text-center font-weight-normal ">Expert physical therapists</h2>

                    <p class="mt-0 text-center mb-40">Over 3,000 licensed outpatient therapists are ready to come to you.</p>

        <!-- Posts -->
            <div class="mw-1150-px m-auto mb-40 relative">
                <div class="experts-slide owl-carousel owl-theme">


                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100332_amanda_van_frank.webp" alt="Amanda Van Frank" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Amanda F.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Doctor of Physical Therapy</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            Geriatric, Orthopedics and Sport Medicine
                                                                    </p>

                            </div>
                        </article>




                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100348_joshua_arellano.webp" alt="Joshua Arellano" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Joshua A.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Physical Therapist</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            Geriatrics, Orthopedics and Sports Medicine, Sports Injuries, ACL Rehab, Spinal Rehab
                                                                    </p>

                            </div>
                        </article>




                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100356_karen_khuu.webp" alt="Karen Khuu" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Karen K.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Doctor of Physical Therapy</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            Orthopedics and Sports Medicine, Pelvic Floor
                                                                    </p>

                            </div>
                        </article>



                                    <!--Get Care with Luna-->
                                        <article class="mw-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 bg-teal-600 mb-10">
                                            <div class="h-100 w-100 py-60 px-40 py-xs-45 px-xs-25 flex-center d-flex flex-middle flex-wrap flex-evenly">
                                                <h3 class="color-base-100 font-weight-normal text-center m-0">Did you know?</h3>
                                                <p class="color-base-100 text-center m-0">100% of Rehabriontherapists are licensed board-certified physical therapists and on average have more than 10 years of experience.</p>
                                                <a class="button button-base d-flex flex-middle flex-center" href="/appointment"><span class="color-teal-600"> Check Availability </span></a>
                                            </div>
                                        </article>
                                    <!-- .Get Care with Rehabrion-->



                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100303_mika_toribara.webp" alt="Mika Toribara" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Mika T.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Doctor of Physical Therapy</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            Sports Rehab, Movement Based Approach, Spinal Rehab, Health Coaching
                                                                    </p>

                            </div>
                        </article>




                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100309_paul_nguyen.webp" alt="Paul Nguyen" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Paul N.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Physical Therapist</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            Manual Therapy, Spine Care, Post Operative Rehab
                                                                    </p>

                            </div>
                        </article>




                        <article class="mw-350-px w-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 mb-10">
                            <div class="overflow-hidden h-200-px h-xs-150-px w-100">
                                <div class="aspect-ratio">
                                    <img alt="photo" class="w-100 owl-lazy" data-src="https://public-assets.getluna.com/images/therapists/20230314_100340_elaine_huddon.webp" alt="Elaine Huddon" width="350px" height="250px">
                                </div>
                            </div>
                            <div class="py-15 px-20 py-xs-10">
                                                                <h4 class="color-purple-800 mb-0 mt-0 font-weight-normal">Elaine H.</h4>
                                                                    <h5 class="mt-0 font-weight-normal mb-10">Doctor of Physical Therapy</h5>



                                <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13">
                                    <strong class="d-block">Specializes in:</strong>
                                                                            McKenzie Method of Spine Care, Post Operative Rehab
                                                                    </p>

                            </div>
                        </article>


                                                                                                                        <!--Get Care with Luna-->
                                        <article class="mw-350-px mw-xs-300-px h-400-px mh-xs-350-px w-100-p d-inline-block shadow-center-3 mx-15 bg-teal-600 mb-10">
                                            <div class="h-100 w-100 py-60 px-40 py-xs-45 px-xs-25 flex-center d-flex flex-middle flex-wrap flex-evenly">
                                                <h3 class="color-base-100 font-weight-normal text-center m-0">Did you know?</h3>
                                                <p class="color-base-100 text-center m-0">Rehabriontherapists are experienced. The average Rehabriontherapist has treated patients for more than 20,500 hours in their career.</p>
                                                <a class="button button-base d-flex flex-middle flex-center" href="/appointment"><span class="color-teal-600"> Check Availability </span></a>
                                            </div>
                                        </article>
                                    <!-- .Get Care with Rehabrion-->

                                                                                        </div>

                <a class="
                                            arrow prev d-flex absolute left-0 top-0 bottom-0 m-auto flex-center flex-middle c-pointer d-xs-none
                    "
                    role="button">
                    <img alt="arrow" class="w-50 lazy" data-src="https://public-assets.getluna.com/images/right_arrow.svg" width="20px" height="20px">
                </a>
                <a class="
                                            arrow next d-flex absolute right-0 top-0 bottom-0 m-auto flex-center flex-middle c-pointer d-xs-none"
                                        role="button">
                    <img alt="arrow" class="w-50 lazy" data-src="https://public-assets.getluna.com/images/right_arrow.svg" width="20px" height="20px">
                </a>
            </div>
        <!-- .Posts -->

                    <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="d-none"
                href="tel:866-525-3175">
        Call 866-525-3175
    </a>

            <a
                            class="button cta-modal-mobile d-xxl-none d-xl-none d-lg-none d-md-flex-inline d-sm-flex-inline d-xs-flex button-purple d-flex-inline flex-middle flex-center mb-xs-20 "
                        href="tel:866-525-3175"
            role="button">
            Call 866-525-3175
        </a>

    <span
                    class="d-none d-md-inline d-sm-inline mx-10 "
                >
        or
    </span>
    <a
                    class="button cta-check-availability button button-purple outline d-xxl-flex-inline d-xl-flex-inline d-lg-flex-inline d-md-flex-inline d-sm-flex-inline d-xs-flex flex-middle flex-center "
                href="/appointment">
        Check Availability
    </a>

</div>


    </div>
</section>
<!-- .Expert Vetted -->

		<!-- How It Works -->
			<section   id="how-it-works"   class="py-50  bg-base-200 ">
    <div class="wrapper-full ">

                    <span class="  d-block  text-center mb-10">
                <img class="lazy" data-src="https://public-assets.getluna.com/images/line_title.svg" alt="Separator" width="45px" height="6px">
            </span>
            <h2 class="color-purple-800 mt-0 text-center font-weight-normal ">How it works</h2>


        <div class="row mb-30 mb-xs-0 mb-sm-0  mt-40  mw-1100-px m-auto ">

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="we-come-you" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/we-come-you.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Get matched with a therapist</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="at-home" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/at-home.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Sessions On Your Schedule
</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="in-app" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/in-app.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Heal Faster With Expert Care
</h3>

                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">We assess your condition, goals, and lifestyle before pairing you with the right rehab expert.
</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Get therapy at home or online – no clinic stress, no waiting lines.
</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Track progress, improve mobility, and reduce pain with consistent guided sessions.
</p>
                </article>


                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="we-come-you" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/we-come-you.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Get matched with a therapist</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Work with the same physical therapist who’s an expert in your condition for every appointment.</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="at-home" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/at-home.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Sessions On Your Schedule
</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Get therapy at home or online – no clinic stress, no waiting lines.
</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="in-app" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getluna.com/images/icons/in-app.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Heal Faster With Expert Care
</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Track progress, improve mobility, and reduce pain with consistent guided sessions.
</p>
                </article>
                    </div>


                    <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="d-none"
                href="tel:866-525-3175">
        Call 866-525-3175
    </a>

            <a
                            class="button cta-modal-mobile d-xxl-none d-xl-none d-lg-none d-md-flex-inline d-sm-flex-inline d-xs-flex button-purple d-flex-inline flex-middle flex-center mb-xs-20 "
                        href="tel:866-525-3175"
            role="button">
            Call 866-525-3175
        </a>

    <span
                    class="d-none d-md-inline d-sm-inline mx-10 "
                >
        or
    </span>
    <a
                    class="button cta-check-availability button button-purple outline d-xxl-flex-inline d-xl-flex-inline d-lg-flex-inline d-md-flex-inline d-sm-flex-inline d-xs-flex flex-middle flex-center "
                href="/appointment">
        Check Availability
    </a>

</div>
            </div>

</section>
<!-- End How It Works -->




		<!-- Reviews -->
	<section id="testimonials" class="py-40 py-xs-25 py-sm-25  bg-purple-000 ">
    <div class="wrapper">
        <span class="d-block text-center mb-10">
            <img class="lazy" data-src="https://public-assets.getluna.com/images/line_title.svg" alt="Separator" width="45px" height="6px">
        </span>
        <h2 class="color-purple-800 mt-0 text-center font-weight-normal d-flex flex-middle flex-center flex-wrap d-xs-block">
                            Thousands of patients <img alt="heart" class="lazy mw-30-px d-inline-block mx-5" data-src="https://public-assets.getluna.com/images/heart.svg" width="30px" height="30px"> Luna
                    </h2>

        <p
                            class="d-none"
            >Read what your neighbors are saying about Luna. <a class="color-teal-600 c-pointer" role="button" data-toggle="modal" data-target="#modal-video">And watch a video.</a>
        </p>
    </div>


    <div class="testimonials-corousel relative">
        <div class="d-xxl-block d-xl-block d-lg-block d-md-block d-sm-none d-xs-none">
            <article class="testimonial-carousel-1 owl-carousel owl-theme">
                                                                                                                            <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I feel lucky I found a company called Luna.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Anton S.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I was able to setup an appointment within a few days. Other places I called could not get me in for another 2-3 weeks.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Anthony K.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I can’t imagine why I would ever go back to an actual PT office. Bottom line – I love Luna.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - T.C.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Fantastic! It was so convenient having my daughter treated AT HOME! My daughter loved her therapist!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Linda F.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>We feel blessed to have such a wonderful physical therapist. Thank you Luna.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Darleen B.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>This was my first visit with the therapist and I must say it was great. He was very professional and knowledgeable.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Evelina F.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Personally, it seems like a no-brainer to have a physical therapist come to my office.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Scott S.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Amazing experience! I definitely recommend Luna!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Carol L.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I have been through PT twice and working with Rehabrionhas been much better than dealing with an actual clinic.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Tyler H.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>All of the treatment time is devoted to me as a patient without distraction, bravo!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Robin M.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>My physical therapist from Rehabrionis great!  She comes to my home which is ideal and convenient for me.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Charlie B.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>The therapists are understanding and motivated to deliver the best care possible. Highly recommended!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Adam H.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>My therapist has been extremely timely and professional...if you’re seeking physical therapy, these folks are great.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Kent G.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>All of the therapy, until Luna, was not reaching the level of care that I needed. Rehabrionis dedicated to MY goal.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Chris W.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>This app is the greatest invention. Rehabrionis a great way to get treated. Absolutely using this service again.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Daryl W.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Luna’s service is great, and Matt is fantastic and extremely professional... coming to my house makes my life it so much easier.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Ron U.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>The app works great and the staff is quick to respond. It seamlessly billed my insurance.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Christiano C.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Can’t tell you how dedicated the Rehabrionphysical therapists are - incredibly knowledgeable and work with my schedule!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Dave Z.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>The physical therapist was knowledgeable and skilled. He was also supportive and answered all my questions.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Joyce C.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I love how convenient it is that they come to the house especially if you have kiddos.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Majida M.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I absolutely love the convenience. I will definitely recommend Rehabrionto friends and family!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Yulia K.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                        </article>

            <article class="testimonial-carousel-2 owl-carousel owl-theme">

                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Rehabrionmakes PT super easy with a simple to use app, direct billing to insurance, and care within your home.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Pooneet G.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>As an athlete - running, weights, yoga - I’ve had a lot of physical therapy. Rehabrionis a huge step forward!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Vineet B.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I work from home and I am always looking for ways to save time. Rehabrionwas perfect and my therapist is outstanding!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Sanjit M.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>The therapist that arrived was on time and provided some of the best physical therapy I have ever received.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Ann J.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I had an excellent therapy session with Daniel.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Vedantham S.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Everything about Rehabrionworks for me: in-house visits, setting goals, and an amazing physical therapist.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Helane Z.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>What a difference I am noticing in my shoulder! I thoroughly recommend Luna.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Chris T.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Rehabrionis great - the convenience of booking AT HOME visits all through an app makes getting better so much easier.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Andrea C.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Fantastic experience. I look forward to our sessions.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Michael O.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Punctual, thorough, and professional. Great appointment.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Natasha P.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>They’re really flexible in terms of finding an open appointment slot quickly. The treatment made a huge difference!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Remy B.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                        <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Rehabrionis super convenient and saves a lot of time since they come to your home. Will definitely use Rehabrionin the future!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Andrew K.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>OMG! Our PT knows her anatomy and left me with the feeling of confidence in curing my pain. She is AMAZING!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Audrey R.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I have already recommended Rehabrionto a handful of people because of my great experience from Mona and Luna!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Catalina B.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                                                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>I recommend this to anyone I know who wants/needs physical therapy. I see improvement every single week!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Paige M.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Best therapy I have ever received. It was great being in the privacy of my own home and receiving the help that I needed.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Sandra M.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Gavin was exceptional. When he was evaluating me, he asked questions and actually listened to my answers.</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Taelor Y.</p>
                                <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                            </div>
                                                                                                                                    <div class="shadow-center-3 w-500-px w-xs-300-px h-200-px p-25 m-15 relative bg-base-100">
                                <p>Rehabrionhas been so helpful to helping me recover after a recent shoulder injury and the app is super easy to use!</p>
                                <p class="absolute left-5 bottom-10 font-weight-500 mb-0"> - Thomas B.</p>
                                <img alt="Google Local" class="owl-lazy absolute right-5 bottom-10 h-20-px w-auto" data-src="https://public-assets.getluna.com/images/google_local.svg" width="90px" height="20px">
                            </div>

            </article>
        </div>
        <div class="d-xxl-none d-xl-none d-lg-none d-md-none d-sm-block d-xs-block">

            <article class="testimonial-carousel-3 owl-carousel owl-theme">

                                                            <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Rehabrionmakes PT super easy with a simple to use app, direct billing to insurance, and care within your home.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Pooneet G.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I feel lucky I found a company called Luna.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Anton S.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">As an athlete - running, weights, yoga - I’ve had a lot of physical therapy. Rehabrionis a huge step forward!</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Vineet B.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I was able to setup an appointment within a few days. Other places I called could not get me in for another 2-3 weeks.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Anthony K.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I work from home and I am always looking for ways to save time. Rehabrionwas perfect and my therapist is outstanding!</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Sanjit M.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I can’t imagine why I would ever go back to an actual PT office. Bottom line – I love Luna.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - T.C.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">The therapist that arrived was on time and provided some of the best physical therapy I have ever received.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Ann J.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Fantastic! It was so convenient having my daughter treated AT HOME! My daughter loved her therapist!</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Linda F.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">We feel blessed to have such a wonderful physical therapist. Thank you Luna.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Darleen B.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">This was my first visit with the therapist and I must say it was great. He was very professional and knowledgeable.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Evelina F.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I had an excellent therapy session with Daniel.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Vedantham S.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Personally, it seems like a no-brainer to have a physical therapist come to my office.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Scott S.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Everything about Rehabrionworks for me: in-house visits, setting goals, and an amazing physical therapist.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Helane Z.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Amazing experience! I definitely recommend Luna!</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Carol L.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">What a difference I am noticing in my shoulder! I thoroughly recommend Luna.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Chris T.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">I have been through PT twice and working with Rehabrionhas been much better than dealing with an actual clinic.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Tyler H.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Rehabrionis great - the convenience of booking AT HOME visits all through an app makes getting better so much easier.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Andrea C.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">All of the treatment time is devoted to me as a patient without distraction, bravo!</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Robin M.</p>
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">Fantastic experience. I look forward to our sessions.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Michael O.</p>
                            <img alt="Yelp" class="owl-lazy absolute right-5 bottom-10 h-30-px w-auto" data-src="https://public-assets.getluna.com/images/yelp_logo.svg" width="61px" height="30px">
                        </div>
                                                                                <div class="shadow-center-3 w-500-px w-xs-300-px h-250-px h-sm-200-px p-25 m-15 relative bg-base-100">
                            <p class="body-small">My physical therapist from Rehabrionis great!  She comes to my home which is ideal and convenient for me.</p>
                            <p class="absolute left-10 bottom-10 font-weight-500 mb-0"> - Charlie B.</p>
                        </div>
                                                </article>
        </div>

        <a class="arrow prev d-flex absolute left-5 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
             role="button">
            <img class="w-50 lazy" data-src="https://public-assets.getluna.com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
        </a>
        <a class="arrow next d-flex absolute right-5 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
            role="button">
            <img class="w-50 lazy" data-src="https://public-assets.getluna.com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
        </a>
    </div>
</section>

<!-- End Reviews -->


{{-- procing patientcomponents --}}
		<section id="exclusive-provider" class="bg-section relative overflow-hidden color-base-100 py-60 py-xs-0 py-md-0 py-sm-0">
			<div class="bg bg-pos-y-top bg-pos-x-100 lazy absolute left-0 top-0 right-0 m-auto d-xs-none d-md-none d-sm-none h-100" data-src="https://public-assets.getluna.com/images/aarp-home-bg.webp"></div>

			<div class="wrapper py-90 py-md-20 py-sm-20 py-xs-20 mt-md-40 mt-sm-40 mt-xs-40">
				<div class="row flex-sm-center flex-xs-center flex-md-center">
					<div
						class="col-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-md-center text-sm-center text-xs-center">
						<img class="w-100 mw-500-px lazy mb-25 d-inline-block d-sm-none d-xs-none" alt="AARP Rehabrionprovider" data-src="https://public-assets.getluna.com/images/aarp-luna.svg">
						<img class="w-100 mw-200-px lazy mb-25 d-none d-sm-inline-block d-xs-inline-block" data-src="https://public-assets.getluna.com/images/aarp-vertical.svg">
						<p class="color-base-900 lh-14 mb-md-0 mb-xs-0 mb-sm-0">Rehabrionis the exclusive provider of physical therapy to AARP members. Renowned for our commitment to high-quality care, Rehabrionis the only PT provider to carry the AARP name.</p>
					</div>
				</div>
			</div>

			<img
					alt="Background"
					class="d-none d-sm-block d-xs-block d-md-block lazy w-100 relative h-auto"
					data-src="https://public-assets.getluna.com/images/aarp-home-bg-mobile.webp"
					width="991px"
					height="660px">
		</section>

{{-- pricing --}}

		<!-- FAQs -->
			<section id="faq" class="py-40 py-xs-25 py-sm-25 py-md-0 py-sm-0 py-xs-0 pb-md-40 pb-xs-40 pb-sm-40 d-flex flex-end d-sm-block d-xs-block d-md-block relative overflow-hidden">

            <div class="bg bg-pos-y-top bg-pos-x-25 lazy absolute left-0 top-0 right-0 m-auto d-xs-none d-md-none d-sm-none h-100 mnh-1100-px" data-src="https://public-assets.getluna.com/images/faq-bg.webp"></div>

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
            <h2 class="
                 color-purple-800  font-weight-normal mt-0 px-xs-15 px-sm-15 text-xs-center text-sm-center text-md-center mb-sm-0 mb-xs-0 mb-md-0">Frequently asked questions</h2>

            <div class="accordion wrapper">
                                    <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom  border-bottom    active " >
                        <a
                            class="accordion-toogle relative c-pointer no-decoration" role="button"
                                                    >
                                                            <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                                <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">Where are Luna therapists seeing patients?</h3>

                        </a>
                        <div class="accordion-content  pl-30 ">
                        <p>You can book directly with Rehabrion.
 <a class="color-blue c-pointer" data-toggle="modal"
        data-target="#modal-map" role="button">See our service areas.</a></p>
                        </div>
                    </article>
                                    <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom  border-bottom" >
                        <a
                            class="accordion-toogle relative c-pointer no-decoration" role="button"
                                                    >
                                                            <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                                <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">Do you offer home visits?
</h3>

                        </a>
                        <div class="accordion-content  pl-30 ">
                              <p> At-home physiotherapy is one of our core services.

</p>
                        </div>
                    </article>
             <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom  border-bottom   " >
                        <a
                            class="accordion-toogle relative c-pointer no-decoration" role="button"
                                                    >
                                                            <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                                <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">Do you provide online sessions?
</h3>

                        </a>
                        <div class="accordion-content  pl-30 ">
            <p>Virtual rehab sessions are available.
 <a class="color-blue c-pointer" data-toggle="modal" data-target="#modal-prescription" role="button">Read more about prescriptions.</a></p>
                        </div>
                    </article>
                                    <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom  border-bottom   " >
                        <a
                            class="accordion-toogle relative c-pointer no-decoration" role="button"
                                                    >
                                                            <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                                <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">How long will recovery take?
</h3>

                        </a>
                        <div class="accordion-content  pl-30 ">
<p>Every case is different. Your therapist will guide you clearly.
 <a href="/how-it-works#table-comparison" rel="noopener noreferrer" target="_blank" role="button">See our clinic comparison chart.</a></p>
                        </div>
                    </article>
                                    <article class="accordion-item py-25 py-sm-20 py-xs-20 border-xs-bottom border-md-bottom border-xs-bottom   " >
                        <a
                            class="accordion-toogle relative c-pointer no-decoration" role="button"
                                                    >
                                                            <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                                <h3 class="font-weight-400 color-purple-600 mb-10 pl-30 d-inline-block mt-0">Can I see the same physical therapist every session?</h3>

                        </a>
                        <div class="accordion-content  pl-30 ">
                                                                                                                                                <p>We strive to have a single therapist work with each patient for their entire course of care. In very rare cases, your scheduling priorities may require adjustments, but you’ll always know who is seeing you for your appointment in advance.</p>
                        </div>
                    </article>
















            </div>
        </div>
    </div>
</section>

<!-- EndFAQs -->

		<!-- How It Works -->
<!-- WHY IN-HOME PHYSIOTHERAPY IS BETTER -->
<section id="why-on-demand" class="py-50 bg-base-200">
  <div class="wrapper-full">

    <h2 class="color-purple-800 mt-0 text-center font-weight-normal">
      Why in-home physiotherapy is better
    </h2>

    <div class="mb-30 text-center">
      Why Rehabrion’s care model works better for your recovery.
    </div>

    <!-- ROW 1: TOP 3 POINTS -->
    <div class="row mw-1100-px m-auto">

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-user-check why-icon"></i>
        </div>
        <h4>Personalized One-on-One Care</h4>
        <p>
          Every session is dedicated entirely to you for focused treatment and faster,
          more effective recovery.
        </p>
      </div>

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-house-medical why-icon"></i>
        </div>
        <h4>No Travel Stress</h4>
        <p>
          No traffic, no parking, no waiting rooms. Your physiotherapist comes
          directly to your home.
        </p>
      </div>

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-clock why-icon"></i>
        </div>
        <h4>Flexible Scheduling</h4>
        <p>
          Book sessions at times that easily fit your routine and daily lifestyle.
        </p>
      </div>

    </div>

    <!-- ROW 2: BOTTOM 3 POINTS -->
    <div class="row mw-1100-px m-auto">

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-heart-pulse why-icon"></i>
        </div>
        <h4>Faster Recovery at Home</h4>
        <p>
          Healing in a familiar environment increases comfort, confidence,
          and speeds up progress.
        </p>
      </div>

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-user-doctor why-icon"></i>
        </div>
        <h4>Consistent Therapist Support</h4>
        <p>
          You work with the same therapist throughout your treatment for better
          tracking and continuity of care.
        </p>
      </div>

      <div class="col-lg-4 col-md-4 why-grid-card">
        <div class="why-icon-wrapper">
          <i class="fa-solid fa-clipboard-check why-icon"></i>
        </div>
        <h4>Better Adherence to Rehab Plans</h4>
        <p>
          Home-based care improves consistency and helps you complete your
          rehab program successfully.
        </p>
      </div>

    </div>

    <!-- CTA (optional) -->
    <div class="text-center mt-30">
      <a href="/appointment" class="button button-purple outline">
        Check Availability
      </a>
    </div>

  </div>
</section>
<!-- END WHY IN-HOME PHYSIOTHERAPY IS BETTER -->
</main>


@endsection
