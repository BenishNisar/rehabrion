@extends("Layout.layout")
@section("Content")


     <main class="how-it-works-page">
        <section class="bg-base-100 py-50" id="hero-section">
            <!-- Trigger to change Phone style on Header -->
            <span class="trigger-header-phone"></span>
            <!-- .Trigger -->
           <div class="wrapper">
             <div class="row flex-middle">
               <div class="col-6 col-md-12 col-xs-12 col-sm-12 mb-md-25 mb-xs-25 mb-sm-25">
                <div class="px-50 px-sm-0 px-md-0 px-xs-0">
                    <h1 class="mt-0 mb-20 color-purple-800">We’re helping people get care and feel better at home...</h1>
                    <p>Our Clinical Method combines exceptional therapists, in-home care delivery, and integrated care coordination to ensure that each and every patient reaches their recovery goals.</p>
                </div>

               </div>
               <div class="col-6 col-md-12 col-xs-12 col-sm-12">
                 <img src="https://public-assets.getRehabrion .com/images/20240621_070624_541539c8-d00e-4f70-bb50-33b2deef7a15_background_image.jpg" class="w-100 rounded-large" />
               </div>
             </div>
           </div>
        </section>
        <section id="check-cta" class="p-20 bg-purple-600 d-sm-none d-xs-none">
            <div class="wrapper d-flex d-sm-block d-xs-block mx-auto flex-center flex-middle text-center">
                <p class="mb-0 color-base-100 mr-20 mr-sm-0 mr-xs-0 mb-xs-20 mb-sm-20">
                    Proudly serving patients across the United States.
                </p>
                <a class="button button-purple outline bg-base-100 shadow-center-4 d-flex-inline flex-middle flex-center" href="/appointment" target="_blank">Check Availability</a>
            </div>
        </section>

        <section id="percent-circled" class="py-50 bg-base-200">
  <div class="wrapper">
    <span class="  d-none  text-center mb-10">
      <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
    </span>
    <h2 class="mt-0 text-center mb-20 color-purple-800 font-weight-normal">Clinic-based care doesn’t work for most patients</h2>
    <p class="text-center mb-40">Sadly, no-shows, cancellations, and drop-outs are the norm in physical therapy.</p>
    <div class="row">
      <div class="col-4 col-sm-12 mb-sm-20 col-xs-12 mb-xs-20">
        <svg viewBox="0 0 36 36" class="circular-chart">
          <path class="circle-bg"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
            stroke-dasharray="21, 100"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <text x="18" y="20.35" class="percentage">21%</text>
        </svg>
        <p class="text-center px-30 mt-20 px-md-0 mw-sm-300-px mw-xs-300-px mx-sm-auto mx-xs-auto px-xs-0 px-sm-0">21% of patients who are prescribed physical therapy never start treatment.</p>
      </div>
      <div class="col-4 col-sm-12 mb-sm-20 col-xs-12 mb-xs-20 ">
        <svg viewBox="0 0 36 36" class="circular-chart">
          <path class="circle-bg"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
            stroke-dasharray="30, 100"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <text x="18" y="20.35" class="percentage">30%</text>
        </svg>
        <p class="text-center px-30 mt-20 px-md-0 mw-sm-300-px mw-xs-300-px mx-sm-auto mx-xs-auto px-xs-0 px-sm-0">Only 30% of patients who start physical therapy finish their care plan—the rest give up!</p>
      </div>
      <div class="col-4 col-sm-12 mb-sm-20 col-xs-12">
        <svg viewBox="0 0 36 36" class="circular-chart">
          <path class="circle-bg"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <path class="circle"
            stroke-dasharray="42, 100"
            d="M18 2.0845
              a 15.9155 15.9155 0 0 1 0 31.831
              a 15.9155 15.9155 0 0 1 0 -31.831"
          />
          <text x="18" y="20.35" class="percentage">42%</text>
        </svg>
        <p class="text-center mb-0 px-30 mt-20 px-md-0 mw-sm-300-px mw-xs-300-px mx-sm-auto mx-xs-auto px-xs-0 px-sm-0">42% of patients report being dissatisfied with their physical therapy options.</p>
      </div>
    </div>
  </div>
</section>
        <!-- How-it-works-->
                        <section   id="how-it-works"   class="py-50  bg-base-100 ">
    <div class="wrapper-full ">

                    <span class="  d-none  text-center mb-10">
                <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
            </span>
            <h2 class="color-purple-800 mt-0 text-center font-weight-normal ">Rehabrion  makes physical therapy a help, not a hassle</h2>
                            <div class="mb-30 text-center  mw-800-px mx-auto "><p>Whether you’re recovering from surgery or trying to regain strength and mobility, Rehabrion  makes it easy to do physical therapy from the comfort of your home.</p></div>


        <div class="row mb-30 mb-xs-0 mb-sm-0  mt-40  mw-1100-px m-auto ">

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="we-come-you" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/we-come-you.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Find a therapist</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="at-home" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/at-home.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Receive care on your time</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="in-app" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/in-app.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Heal faster with Rehabrion </h3>

                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Rehabrion  will match you with an exceptional therapist who is an expert in your condition.</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Your therapist will come to your house for 45-55 minutes of uninterrupted, 1:1 treatment.</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">In-between sessions, your therapist will prescribe you custom exercises through the Rehabrion <sup>®</sup> app.</p>
                </article>


                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="we-come-you" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/we-come-you.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Find a therapist</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Rehabrion  will match you with an exceptional therapist who is an expert in your condition.</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="at-home" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/at-home.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Receive care on your time</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Your therapist will come to your house for 45-55 minutes of uninterrupted, 1:1 treatment.</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="in-app" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/in-app.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Heal faster with Rehabrion </h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">In-between sessions, your therapist will prescribe you custom exercises through the Rehabrion <sup><sup>®</sup></sup> app.</p>
                </article>
                    </div>


                    <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="d-none"
                href="tel:866-525-3175">
        Call 866-525-3175
    </a>

            <a
                            class="d-none"
                        href="tel:866-525-3175"
            role="button">
            Call 866-525-3175
        </a>

    <span
                    class="d-none "
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

</section>        <!-- .How-it-works-->

        <section id="clinical-method" class="bg-base-200 py-50">
  <div class="wrapper">
    <span class="  d-none  text-center mb-10">
      <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
    </span>
    <h2 class="mt-0 text-center mb-20 color-purple-800 font-weight-normal">The Rehabrion  Clinical Method™</h2>
    <p class="mw-800-px text-center mx-auto mb-30">The Rehabrion  Clinical Method™ is based on three key pillars designed to ensure that all patients experience the full healing potential of physical therapy.</p>

    <div class="d-block d-sm-none d-xs-none text-center overflow-y-hidden border-purple-600 mnh-45-px no-scrollbar-xl no-scrollbar-xxl mb-35 text-nowrap"
        data-containers="#medical-tabs">
        <a data-target="#tab-one"
            data-activeClass="color-purple-600 border-purple-600 border-bottom-2" role="button"
            data-defaultClass="color-base-900" data-toggle="tab-action" data-containerActiveClass="d-block"
            data-selector="true"
            class="no-decoration py-15 px-40 c-pointer color-purple-600 border-purple-600 border-bottom-2">1. Exceptional therapists</a>
          <a data-target="#tab-two"
            data-activeClass="color-purple-600 border-purple-600 border-bottom-2" role="button"
            data-defaultClass="color-base-900" data-toggle="tab-action" data-containerActiveClass="d-block"
            data-selector="true"
            class="no-decoration py-15 px-40 c-pointer color-base-900">2. In-home care delivery</a>
          <a data-target="#tab-three"
            data-activeClass="color-purple-600 border-purple-600 border-bottom-2" role="button"
            data-defaultClass="color-base-900" data-toggle="tab-action" data-containerActiveClass="d-block"
            data-selector="true"
            class="no-decoration py-15 px-40 c-pointer color-base-900">3. Integrated care coordination</a>
    </div>
    <div class="d-none d-xs-block d-sm-block mb-25">

      <select name="tabs-options" id="tabs-options" class="w-100 input-element mt-5">
        <option value="#tab-one">1. Exceptional therapists</option>
        <option value="#tab-two">2. In-home care delivery</option>
        <option value="#tab-three">3. Integrated care coordination</option>
      </select>
    </div>
    <div class="row flex-middle" id="medical-tabs">
      <div class="col-6 col-sm-12 col-xs-12 mb-sm-20 mb-xs-20" >
        <div id="tab-one" class="tab-container d-block">
            <p class="mb-30">The Rehabrion  Clinical Method™ starts with the wonderful group of physical therapists who we hand-select for the platform:</p>
            <ul>
              <li class="mb-10">The average Rehabrion  therapist has over 10 years of experience.</li>
              <li class="mb-10">All Rehabrion  therapists have at least 3 years of experience.</li>
              <li class="mb-10">All Rehabrion  therapists are vetted, licensed, and insured.</li>
              <li class="mb-10">Over 50% of Rehabrion  therapists are doctorates of PT.</li>
              <li class="mb-10">Rehabrion  therapists are trained in <a href="/conditions-we-treat" target="_blank">many different specialties</a>.</li>
              <li class="mb-10">Only therapists with the best patient feedback are on Rehabrion .</li>
            </ul>
        </div>
        <div id="tab-two" class="tab-container d-none">
            <p class="mb-30">The Rehabrion  Clinical Method™ is based on a simple belief: patients recover best where they feel most comfortable—at home!</p>
            <ul>
              <li class="mb-10">87% of physical therapy programs can be done at home.</li>
              <li class="mb-10">90% of patients choose in-home convenience over a facility.</li>
              <li class="mb-10">Sessions are 45-55 minutes of 1:1 time with a licensed PT.</li>
              <li class="mb-10">Rehabrion  care plans are tailored to each patient's environment.</li>
              <li class="mb-10">Rehabrion  patients stay with the same PT for their entire journey.</li>
              <li class="mb-10">80%+ of Rehabrion  patients meet their recovery goals!</li>
            </ul>
        </div>
        <div id="tab-three" class="tab-container d-none">
          <p class="mb-30">The Rehabrion  Clinical Method™ leverages integrated care coordination, so you can:</p>
          <ul>
            <li class="mb-10">Personalize your care plan with notes from your doctor.</li>
            <li class="mb-10">Chat with your therapist anytime in-between sessions.</li>
            <li class="mb-10">Access video exercise plans prescribed by your PT.</li>
            <li class="mb-10">Keep caregivers informed with automated updates.</li>
            <li class="mb-10">Issues are directly escalated to your doctor for visibility.</li>
            <li class="mb-10">We'll get a prescription from your doctor for you, if needed.</li>
          </ul>
        </div>
      </div>
      <div class="col-6 col-sm-12 col-xs-12">
        <img class="lazyload w-75 d-block mx-auto" data-src="https://www.getRehabrion .com/images/medical3.webp" alt="Clinical methdods">
      </div>
    </div>
  </div>
</section>

        <!-- About you -->
        <section id="about-you" class="bg-section relative overflow-hidden color-base-100 py-100 py-md-70 py-sm-50 py-xs-50 overlay-100">
            <div class="bg absolute left-0 right-0 top-0 bottom-0 w-100 h-100 z-index-n lazy bg-pos-y-10 bg-pos-md-x-70 bg-pos-sm-x-70 bg-pos-xs-x-85" data-src="https://www.getRehabrion .com/images/how-it-works.jpg"></div>
            <div class="wrapper">
                <h2 class="font-weight-norma text-center">Did you know...over 20,000 physicians actively refer to Rehabrion ?</h2>
            </div>
        </section>
        <!-- End About you -->

        <section id="resources" class=" bg-purple-000 py-60 ">
  <div class="wrapper">
    <span class="  d-none  text-center mb-10">
      <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
    </span>
    <h2  class=" mt-0 text-center mb-40 color-purple-800 font-weight-normal ">Research on the Rehabrion  Clinical Method™</h2>
    <div class="row">
              <article class="col-4 col-md-12 col-sm-12 col-xs-12">
          <a href="/resources/exceptional-cms-medicare-provider" class="no-decoration color-base-900">
            <div class="row flex-middle mb-md-25 mb-sm-25 mb-xs-25">
              <div class="col-12 col-md-4 col-sm-6">
                <img alt="Hero banner" data-src="https://public-assets.getRehabrion .com/images/resources/20240214_110237_299b0be1-ac7b-44ef-98cf-cbac7134224f_resource.webp" class="lazy w-auto h-200-px h-xs-150-px d-block mx-auto">
              </div>
              <div class="col-12 col-md-8 col-sm-6">
                <h4 class="color-purple-800 font-weight-600 my-15 truncate-title-cards">Rehabrion ’s Excellence in Outpatient Physical Therapy</h4>
                <p class="color-base-900 d-sm-none d-xs-none truncate-text-cards ">This article analyzes Rehabrion &#039;s recognition as an &quot;Exceptional Provider&quot; by CMS via MIPS for two consecutive years.</p>
                <span class="d-blockcolor-teal-600">Read more</span>
              </div>
            </div>
          </a>
        </article>
              <article class="col-4 col-md-12 col-sm-12 col-xs-12">
          <a href="/resources/pathways-whitepaper" class="no-decoration color-base-900">
            <div class="row flex-middle mb-md-25 mb-sm-25 mb-xs-25">
              <div class="col-12 col-md-4 col-sm-6">
                <img alt="Hero banner" data-src="https://public-assets.getRehabrion .com/images/resources/20230828_150802_da5d3048-2bf0-480b-b6b8-815e1596fb68_resource.webp" class="lazy w-auto h-200-px h-xs-150-px d-block mx-auto">
              </div>
              <div class="col-12 col-md-8 col-sm-6">
                <h4 class="color-purple-800 font-weight-600 my-15 truncate-title-cards">Improving Clinical Outcomes After Total Joint Replacement</h4>
                <p class="color-base-900 d-sm-none d-xs-none truncate-text-cards ">Rehabrion  Pathways optimizes patient outcomes through coordinated postoperative care, including communication and transparency.</p>
                <span class="d-blockcolor-teal-600">Read more</span>
              </div>
            </div>
          </a>
        </article>
              <article class="col-4 col-md-12 col-sm-12 col-xs-12">
          <a href="/resources/analysis-of-patient-care-preferences-for-physical-therapy" class="no-decoration color-base-900">
            <div class="row flex-middle mb-md-25 mb-sm-25 mb-xs-25">
              <div class="col-12 col-md-4 col-sm-6">
                <img alt="Hero banner" data-src="https://public-assets.getRehabrion .com/images/resources/20230725_150733_600024c0-9053-480a-a43d-e4e9d9855577_resource.webp" class="lazy w-auto h-200-px h-xs-150-px d-block mx-auto">
              </div>
              <div class="col-12 col-md-8 col-sm-6">
                <h4 class="color-purple-800 font-weight-600 my-15 truncate-title-cards">Analysis of Patient Care Preferences for PT</h4>
                <p class="color-base-900 d-sm-none d-xs-none truncate-text-cards ">A survey of 1,000 patients rated their willingness to use physical therapy care models: in-person at-home, facility-based, and virtual.</p>
                <span class="d-blockcolor-teal-600">Read more</span>
              </div>
            </div>
          </a>
        </article>

    </div>
  </div>
</section>

        <!-- Table Comparison -->
        <section id="table-comparison" class="py-50 ">
  <div class="wrapper">
      <span class="  d-none  text-center mb-10">
        <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
      </span>
      <h2 class=" mt-0 text-center mb-20 color-purple-800 font-weight-normal ">Rehabrion  vs. the Clinic</h2>
      <p class="text-center">Same price, better value! Recover faster, and more conveniently.</p>

      <div class="d-block text-center mt-40 mb-40">

          <img class="lazy mw-100-p d-sm-none d-xs-none" data-src="https://www.getRehabrion .com/images/comparison.svg">
          <img class="lazy mw-100-p d-none d-xs-block d-sm-block mx-auto" data-src="https://www.getRehabrion .com/images/comparison_mobile.svg">
              </div>
      <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="d-none"
                href="tel:866-525-3175">
        Call 866-525-3175
    </a>

            <a
                            class="d-none"
                        href="tel:866-525-3175"
            role="button">
            Call 866-525-3175
        </a>

    <span
                    class="d-none "
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
</section>        <!-- ./Table Comparison -->

        <section id="achieves" class="py-50 bg-purple-000">
            <div class="wrapper">


              <div class="row flex-middle">
                <div class="col-6 col-sm-12 col-xs-12">
                    <h2 class="mt-0 mb-30 color-purple-600 font-weight-normal h1">Acclaim for the Rehabrion  Clinical Method™</h2>
                    <p class="mx-auto">For three years in a row, Rehabrion  has been awarded the highest possible performance score by Medicare.</p>
                </div>
                <div class="col-6 col-sm-12 col-xs-12">
                    <img class="lazy w-100 mw-300-px d-block mx-auto" data-src="https://www.getRehabrion .com/images/prize.svg">
                </div>
              </div>

        </section>

       <!-- PricingPatientsComponent -->
			<!-- Use Your Insurance -->
<section id="use-your-insurance" class="py-40 py-xs-25 py-sm-25">
    <div class="wrapper-full">
        <span class="  d-none  text-center mb-10">
            <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
        </span>
        <h2 class="color-purple-800 mt-0 text-center font-weight-normal">Use insurance or pay a flat fee</h2>
        <p class="text-center mb-40">No matter how you pay for treatment, there’s <a role="button" class="color-teal-600 c-pointer" data-toggle="modal" data-target="#modal-prescription">no prescription required</a> to start.</p>

        <div class="row mw-1050-px m-auto d-md-none d-sm-none d-xs-none">
            <div class="col-4 p-10">
                <article class="text-center p-20 shadow-center-3 h-100">
                    <img alt="with-insurance" class="lazy mw-100-px m-auto d-block my-15" data-src="https://public-assets.getRehabrion .com/images/icons/with-insurance.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder">Commercial insurance</h3>
                    <h3 class="font-weight-normal">Standard co-pay</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-5">
                        <a class="color-teal-600 c-pointer" role="button" data-toggle="modal" data-target="#modal-brands">We accept all major commercial insurance plans, including most PPOs and select HMOs.</a>
                    </p>
                </article>
            </div>
            <div class="col-4 p-10">
                <article class="text-center p-20 shadow-center-3 h-100">
                    <img alt="medicare" class="lazy mw-100-px m-auto d-block my-15" data-src="https://public-assets.getRehabrion .com/images/icons/medicare.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder">Medicare</h3>
                    <h3 class="font-weight-normal">Covered by Medicare</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-5">Most Medicare plans with a secondary cover the majority of the cost to you.</p>
                </article>
            </div>
            <div class="col-4 p-10">
                <article class="text-center p-20 shadow-center-3 h-100">
                    <img alt="no-insurance" class="lazy mw-100-px m-auto d-block my-15" data-src="https://public-assets.getRehabrion .com/images/icons/no-insurance.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder">Self-pay</h3>
                    <h3 class="font-weight-normal">$125 per visit</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-5">You won’t be charged until after your visit is completed.</p>
                </article>
            </div>
        </div>

        <div class="d-none d-md-block d-sm-block d-xs-block relative">
            <div class="items-insurances owl-carousel owl-theme">
                <article class="text-center w-300-px h-350-px px-15 py-25 shadow-center-3 m-10 bg-base-100">
                    <img alt="with-insurance" class="owl-lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/with-insurance.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder my-15">Commercial insurance</h3>
                    <h3 class="font-weight-normal my-15">Standard co-pay</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-0">
                        <a class="color-teal-600 c-pointer" role="button" data-toggle="modal" data-target="#modal-brands">We accept all major commercial insurance plans, including most PPOs and select HMOs.</a>
                    </p>
                </article>

                <article class="text-center w-300-px h-350-px px-15 py-25 shadow-center-3 m-10 bg-base-100">
                    <img alt="medicare" class="owl-lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/medicare.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder my-15">Medicare</h3>
                    <h3 class="font-weight-normal my-15">Covered by Medicare</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-0">Most Medicare plans with a secondary cover the majority of the cost to you.</p>
                </article>

                <article class="text-center w-300-px h-350-px px-15 py-25 shadow-center-3 m-10 bg-base-100">
                    <img alt="no-insurance" class="owl-lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/no-insurance.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 font-weight-bold font-weight-bolder my-15">Self-pay</h3>
                    <h3 class="font-weight-normal my-15">$125 per visit</h3>
                    <p class="lh-11 lh-xxl-13 lh-xl-13 lh-lg-13 mb-0">You won’t be charged until after your visit is completed.</p>
                </article>
            </div>
            <a class="arrow prev d-flex absolute left-0 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
                 role="button">
                <img class="w-50 lazy" data-src="https://public-assets.getRehabrion .com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
            </a>
            <a class="arrow next d-flex absolute right-0 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
                role="button">
                <img class="w-50 lazy" data-src="https://public-assets.getRehabrion .com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
            </a>
        </div>

        <p class="mw-700-px mx-auto text-center mt-30 font-italic font-weight-600 font-18">Patients may be responsible for a co-pay, any remaining deductible, and a small Concierge fee per visit. We’ll confirm all costs with you when you book.</p>

    </div>

    <div class="wrapper-full mt-40">

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
<!-- .Use Your Insurance -->		<!-- EndPricingPatientsComponent -->




        <!-- How-it-works-->
            <section   id="why-on-demand"   class="py-50  bg-base-200 ">
    <div class="wrapper-full ">

                    <span class="  d-none  text-center mb-10">
                <img class="lazy" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
            </span>
            <h2 class="color-purple-800 mt-0 text-center font-weight-normal ">Why in-home PT is better</h2>
                            <div class="mb-30 text-center "><p>More convenience means our patients actually complete their care plans.</p></div>


        <div class="row mb-30 mb-xs-0 mb-sm-0  mt-40  mw-1100-px m-auto  d-md-none d-sm-none d-xs-none ">

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="personalized" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/personalized.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">1:1 personalized treatments</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="pt-equipment" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/pt-equipment.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Equipment comes to you</h3>

                </article>

                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                    <img alt="safe" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/safe.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Convenient care</h3>

                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">45-55 minutes of in-person care means faster recovery in fewer treatments.</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Your PT will bring a treatment table and a mobile kit. 90% of cases don’t need heavy machines.</p>
                </article>


                <article class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 d-sm-none d-xs-none">
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block">Skip the clinic. Get care that's covered by insurance. Safely delivered to you, on your schedule.</p>
                </article>


                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="personalized" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/personalized.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">1:1 personalized treatments</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">45-55 minutes of in-person care means faster recovery in fewer treatments.</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="pt-equipment" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/pt-equipment.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Equipment comes to you</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Your PT will bring a treatment table and a mobile kit. 90% of cases don’t need heavy machines.</p>
                </article>
                                            <article class="col-sm-12 col-xs-12 mb-sm-20 mb-xs-20 d-none d-xs-block d-sm-block">
                    <img alt="safe" class="lazy mw-100-px m-auto d-block" data-src="https://public-assets.getRehabrion .com/images/icons/safe.svg" height="100px" width="100px">
                    <h3 class="color-purple-800 mt-25 text-center font-weight-normal mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-300-px mw-xl-300-px mw-lg-300-px mw-xl-300-px mnh mx-auto d-block">Convenient care</h3>
                                        <p class="text-center mw-250-px mw-sm-300-px mw-xs-300-px mw-xxl-100-p mw-xl-100-p mx-auto d-block mb-sm-0 mb-xs-0">Skip the clinic. Get care that's covered by insurance. Safely delivered to you, on your schedule.</p>
                </article>
                    </div>

                    <div class="d-none mb-25  d-md-block d-sm-block d-xs-block relative ">
                <div class="why-on-demand-carousel owl-carousel owl-theme">

                        <article class="text-center w-300-px mw-xs-300-px h-350-px px-15 py-25 py-md-15 shadow-center-3 m-10 bg-base-100 d-flex flex-wrap flex-middle flex-center">
                            <img alt="personalized" class="owl-lazy mw-100-px m-auto d-block mt-10" data-src="https://public-assets.getRehabrion .com/images/icons/personalized.svg" height="100px" width="100px">
                            <h3 class="color-purple-800 mt-25 text-center font-weight-normal my-15">1:1 personalized treatments</h3>
                                                        <p class="text-center mb-0">45-55 minutes of in-person care means faster recovery in fewer treatments.</p>
                        </article>

                        <article class="text-center w-300-px mw-xs-300-px h-350-px px-15 py-25 py-md-15 shadow-center-3 m-10 bg-base-100 d-flex flex-wrap flex-middle flex-center">
                            <img alt="pt-equipment" class="owl-lazy mw-100-px m-auto d-block mt-10" data-src="https://public-assets.getRehabrion .com/images/icons/pt-equipment.svg" height="100px" width="100px">
                            <h3 class="color-purple-800 mt-25 text-center font-weight-normal my-15">Equipment comes to you</h3>
                                                        <p class="text-center mb-0">Your PT will bring a treatment table and a mobile kit. 90% of cases don’t need heavy machines.</p>
                        </article>

                        <article class="text-center w-300-px mw-xs-300-px h-350-px px-15 py-25 py-md-15 shadow-center-3 m-10 bg-base-100 d-flex flex-wrap flex-middle flex-center">
                            <img alt="safe" class="owl-lazy mw-100-px m-auto d-block mt-10" data-src="https://public-assets.getRehabrion .com/images/icons/safe.svg" height="100px" width="100px">
                            <h3 class="color-purple-800 mt-25 text-center font-weight-normal my-15">Convenient care</h3>
                                                        <p class="text-center mb-0">Skip the clinic. Get care that's covered by insurance. Safely delivered to you, on your schedule.</p>
                        </article>
                                    </div>
                <a class="arrow prev d-flex absolute left-0 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
                     role="button">
                    <img class="w-50 lazy" data-src="https://public-assets.getRehabrion .com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
                </a>
                <a class="arrow next d-flex absolute right-0 top-0 bottom-0 m-auto shadow-center-1 flex-center flex-middle c-pointer d-xs-none"
                    role="button">
                    <img class="w-50 lazy" data-src="https://public-assets.getRehabrion .com/images/arrow-right-testimonial.svg" alt="arrow" width="20px" height="20px">
                </a>
            </div>

                    <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="d-none"
                href="tel:866-525-3175">
        Call 866-525-3175
    </a>

            <a
                            class="d-none"
                        href="tel:866-525-3175"
            role="button">
            Call 866-525-3175
        </a>

    <span
                    class="d-none "
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

</section>        <!-- .How-it-works-->

        <section id="quality-safety" class="bg-section relative overflow-hidden color-base-100 py-50 py-md-40 py-sm-40 py-xs-40">
            <div class="bg absolute left-0 right-0 top-0 bottom-0 w-100 h-100 z-index-n bg-pos-md-x-70 bg-pos-sm-x-70 bg-pos-xs-x-40" style="background-image: url(https://public-assets.getRehabrion .com/images/quality-safety.webp)"></div>
            <div class="wrapper d-flex flex-middle flex-between">
                <div class="w-xs-30">
                    <img class="mw-150-px w-auto lazy w-xs-100 mw-xs-100-px mx-auto d-block" data-src="https://www.getRehabrion .com/images/secure_website.webp" />
                </div>
                <div class="w-xs-30">
                    <img class="mw-150-px w-auto lazy w-xs-100 mw-xs-100-px mx-auto d-block" data-src="https://www.getRehabrion .com/images/hipaa.webp" />
                </div>
                <div class="w-xs-30">
                    <img class="mw-100-px w-auto lazy w-xs-100 mw-xs-100-px mx-auto d-block" data-src="https://www.getRehabrion .com/images/iso.webp" />
                </div>
            </div>
        </section>



        <!-- modals -->
            <!-- Modal-Maps -->

    <section class="modal-container p-15 mw-750-px" id="modal-prescription" >
    <div class="modal-body ">
        <a role="button" class="modal-close close c-pointer z-index-1 overflow-hidden">
            <img alt="close" class="lazyload w-100" data-src="https://public-assets.getRehabrion .com/images/close-button.svg" width="20px" height="18px"/>
        </a>
        <div class="row py-20">
                <div class="col-12 px-25">

                    <span class="d-block text-center">
                        <img class="lazyload" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
                    </span>
                    <h2 class="color-purple-800 mt-0 text-center font-weight-normal">Commercial insurance / Self-pay rules</h2>
                    <p class="text-center">Direct Access rules allow patients to be seen without a prescription. In most states, a physician referral is not required for a physical therapist to treat a patient.</p>

                    <span class="d-block text-center">
                        <img class="lazyload" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
                    </span>
                    <h2 class="color-purple-800 mt-0 text-center font-weight-normal">Medicare rules</h2>
                    <p class="text-center">Medicare requires a signed plan of care for physical therapy. Your Rehabrion  therapist will create a plan of care during your first visit, and the Rehabrion  team will work with your doctor to get it approved. You will need a new plan of care established every 90 days or 10 visits whichever is sooner.</p>



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
            </div>
    </div>
</section>
<a class="overlay-modal" id="overlay-modal-prescription" role="button" aria-label="overlay"></a>
<!-- .Modal-Maps -->            <!-- Modal-Maps -->
    <section class="modal-container p-15 mw-900-px" id="modal-brands" >
    <div class="modal-body ">
        <a role="button" class="modal-close close c-pointer z-index-1 overflow-hidden">
            <img alt="close" class="lazyload w-100" data-src="https://public-assets.getRehabrion .com/images/close-button.svg" width="20px" height="18px"/>
        </a>
        <span class="d-block text-center">
            <img class="lazyload" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px">
        </span>
                    <h3 class="color-purple-800 mt-0 text-center font-weight-normal mw-700-px mx-auto">We accept all major commercial insurance plans, including most PPOs, select HMOs, and Medicare. Rehabrion  is covered by:</h3>

                            <div id="health-logos">
		<div class="row flex-center">
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Medicare" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/medicare/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Aetna" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/aetna/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Anthem Blue Cross Blue Shield" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/0fd0ed8d_f651_44ef_86da_dbdc64ac9b1e/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Cigna" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/6c86388e_4dd6_477d_9bc8_7d5689df5263/20240429_090415_logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="United Healthcare" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/unitedhealthcare/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Humana" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/humana/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="MultiPlan" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/5ee10128_c651_4b76_80f9_3b8b9002f5fd/logo.svg">
						</div>
									</div>
							<div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6">
											<div class="brand-item mw-100-p mb-5">
							<img class="lazyload mw-100-p" alt="Tricare" height="60" width="150" data-src="https://public-assets.getRehabrion .com/images/insurances/tricare/logo.svg">
						</div>
									</div>
					</div>
	</div>


            <div class="mt-30 ">
                <div id="fold-buttons" class="mt-xs-10 mt-sm-10  text-center ">
    <a
                    class="button cta-phone-desktop d-xxl-flex-inline d-xl-flex-inline d-lg-flex-inline d-md-none d-sm-none d-xs-none button-purple flex-middle flex-center "
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
                    class=" mx-10 d-xs-none"
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
    </div>
</section>
<a class="overlay-modal" id="overlay-modal-brands" role="button" aria-label="overlay"></a>
<!-- .Modal-Maps -->        <!-- .modals -->

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


@endsection
