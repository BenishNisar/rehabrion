@extends("Layout.layout")
@section("Content")


 <main class="contact-page">
  <section class="bg-purple-000 py-50 py-sm-40 py-xs-30">
    <div class="wrapper px-sm-30 px-xs-30">
      <!-- Trigger to change Phone style on Header -->
      <span class="trigger-header-phone"></span>
      <!-- .Trigger -->
        <h1 class="mt-0 color-purple-700 mb-20 text-center font-weight-normal">Contact us</h1>
        <p class="mb-0 text-center">Serving patients <a class="c-pointer" data-href="/contact-us" data-toggle="scroll-action" data-offset="map-container">across the United States.</a></p>
    </div>
  </section>

  <section class="py-40 py-sm-25 py-xs-20">
    <div class="wrapper px-xs-20 px-sm-20">
      <div class="row">
        <div class="col-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="row">
                        <div class="col-12 col-xs-12">
              <h3 class="color-purple-700 mb-10 mt-sm-0 mt-xs-0">Corporate Headquarters</h3>
              <p class="mb-0 d-flex"><span class="d-inline-block mr-15"><img class="lazy icon-mini" data-src="https://public-assets.getRehabrion .com/images/contact_address.svg" alt="address" width="10px" height="15px"></span>PO Box 290609<br>Nashville, TN 37229</p>
              <p class="mb-0"><span class="d-inline-block mr-10"><img class="lazy icon-mini" data-src="https://public-assets.getRehabrion .com/images/contact_phone.svg" alt="phone" width="15px" height="15px"></span><a class="color-base-900" href="tel:(866) 525-3175">(866) 525-3175</a></p>
              <p class="mb-0"><span class="d-inline-block mr-10"><img class="lazy icon-mini" data-src="https://public-assets.getRehabrion .com/images/fax.svg" alt="fax" width="15px" height="15px"></span><a class="color-base-900" href="tel:(628) 246-8418">(628) 246-8418</a></p>
            </div>

          </div>

          <hr class="w-85 w-md-100 w-sm-100 w-xs-100 border-base-400 ml-0 my-30 hr-2">

                      <div class="accordion">
              <article class="accordion-item ">
                <a class="accordion-toogle relative c-pointer no-decoration mb-15">
                  <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                  <h3 class="color-purple-700 mt-0 pl-30 mb-0">Concierge / Scheduling</h3>
                </a>
                <div class="accordion-content pl-30 mt-15">
                  <div class="row">
                    <div class="col-6 col-xs-12">
                      <h5 class="color-purple-700 body mt-0 mb-10">Mon - Fri</h5>
                      <p class="mb-0">
                        6 am - 6 pm <small class="font-12 font-weight-lighter">PST</small> <br>
                        7 am - 7 pm <small class="font-12 font-weight-lighter">MST</small> <br>
                        8 am - 8 pm <small class="font-12 font-weight-lighter">CST</small> <br>
                        9 am - 9 pm <small class="font-12 font-weight-lighter">EST</small>
                      </p>
                    </div>
                    <div class="col-6 col-xs-12">
                      <h5 class="color-purple-700 body mt-0 mb-10 mt-xs-15">Sat - Sun</h5>
                      <p class="mb-0">
                        8 am - 4:30 pm <small class="font-12 font-weight-lighter">PST</small> <br>
                        9 am - 5:30 pm <small class="font-12 font-weight-lighter">MST</small> <br>
                        10 am - 6:30 pm <small class="font-12 font-weight-lighter">CST</small> <br>
                        11 am - 7:30 pm <small class="font-12 font-weight-lighter">EST</small>
                      </p>
                    </div>
                  </div>
                </div>
              </article>
            </div>


          <hr class="w-85 w-md-100 w-sm-100 w-xs-100 border-base-400 ml-0 my-30 hr-2">
                      <div class="accordion">
              <article class="accordion-item ">
                <a class="accordion-toogle relative c-pointer no-decoration mb-15" role='button'>
                    <span class="accordion-icon mr-10 top-sm-0 top-xs-0"></span>
                    <h3 class="color-purple-700 mt-0 pl-30 mb-0">Concierge / Billing</h3>
                </a>
                <div class="accordion-content pl-30 mt-15">
                  <div class="row">
                    <div class="col-6 col-xs-12">
                      <h5 class="color-purple-700 body mt-0 mb-10">Mon - Fri</h5>
                      <p class="mb-0">
                        8 am - 5 pm <small class="font-12 font-weight-lighter">PST</small> <br>
                        9 am - 6 pm <small class="font-12 font-weight-lighter">MST</small> <br>
                        9:30 am - 6:30 pm <small class="font-12 font-weight-lighter">CST</small> <br>
                        11 am - 8 pm <small class="font-12 font-weight-lighter">EST</small>
                      </p>
                    </div>
                  </div>
                </div>
              </article>
            </div>

                  </div>
<div class="col-6 col-xl-6 col-lg-6 relative d-md-none d-sm-none d-xs-none">
  <div class="hbspt-form d-block p-30 bg-base-100 shadow-center-4 rounded">
      <h3 class="mt-0 mb-5 color-purple-700">Send a Message</h3>
      <p class="body-small">
          Please note: Appointment cancellations can only be made by phone
          (<a href="tel:866-525-3175">866-525-3175</a>) or via the <a href="/apps">Rehabrion  app</a>.
      </p>

      <form method="POST" action="#">
          <div class="row">
              <div class="col-6 col-xs-12">
                  <div class="form-item mb-15">
                      <label class="d-block body-small mb-5">First Name*</label>
                      <input type="text" name="first_name" class="input-element w-100" required>
                  </div>
              </div>
              <div class="col-6 col-xs-12">
                  <div class="form-item mb-15">
                      <label class="d-block body-small mb-5">Last Name*</label>
                      <input type="text" name="last_name" class="input-element w-100" required>
                  </div>
              </div>
          </div>

          <div class="form-item mb-15">
              <label class="d-block body-small mb-5">Email*</label>
              <input type="email" name="email" class="input-element w-100" required>
          </div>

          <div class="form-item mb-15">
              <label class="d-block body-small mb-5">Phone Number*</label>
              <input type="text" name="phone" class="input-element w-100" required>
          </div>

          <div class="form-item mb-20">
              <label class="d-block body-small mb-5">Message</label>
              <textarea name="message" rows="4" class="input-element w-100"></textarea>
          </div>

          <button type="submit" class="button button-purple">
              Send Message
          </button>
      </form>
  </div>
</div>


<div class="d-none d-md-block d-sm-block d-xs-block">
    <hr class="w-85 w-md-100 w-sm-100 w-xs-100 border-base-400 ml-0 my-30 hr-2">

    <div class="hbspt-form mt-30 p-30 bg-base-100 shadow-center-4 rounded">
        <h3 class="mt-0 mb-5 color-purple-800">Send a Message</h3>
        <p class="body-small">
            Please note: Appointment cancellations can only be made by phone
            (<a href="tel:866-525-3175">866-525-3175</a>) or via the <a href="/apps">Rehabrion  app</a>.
        </p>

        <form method="POST" action="#">
            @csrf

            <div class="form-item mb-15">
                <label class="d-block body-small mb-5">First Name*</label>
                <input type="text" name="first_name" class="input-element w-100" required>
            </div>

            <div class="form-item mb-15">
                <label class="d-block body-small mb-5">Last Name*</label>
                <input type="text" name="last_name" class="input-element w-100" required>
            </div>

            <div class="form-item mb-15">
                <label class="d-block body-small mb-5">Email*</label>
                <input type="email" name="email" class="input-element w-100" required>
            </div>

            <div class="form-item mb-15">
                <label class="d-block body-small mb-5">Phone Number*</label>
                <input type="text" name="phone" class="input-element w-100" required>
            </div>

            <div class="form-item mb-20">
                <label class="d-block body-small mb-5">Message</label>
                <textarea name="message" rows="4" class="input-element w-100"></textarea>
            </div>

            <button type="submit" class="button button-purple">
                Send Message
            </button>
        </form>
    </div>
</div>

      </div>
    </div>
  </section>

  <section class="py-40 py-xs-25 py-sm-25" id="map-container">
    <div class="wrapper px-xs-20 px-sm-20">
      <span class="d-block text-center">
        <img class="lazyload" data-src="https://public-assets.getRehabrion .com/images/line_title.svg" alt="Separator" width="45px" height="6px"/>
      </span>
      <h2 class="color-purple-800 mt-0 mb-20 text-center font-weight-normal">Where we serve</h2>


      <div class="row flex-center" id="map-container-contact">
        <div class="col-7 col-md-12 col-sm-12 col-xs-12 c-pointer">
          <div id="regions_div_contact"></div>
        </div>
        <div class="col-12 d-xxl-none d-xl-none d-lg-none d-md-none">
          <div class="form-item align-left mb-20">
            <select name="states-map-contact" id="states-map-contact" class="input-element mt-5">
              <option value="" disabled selected>Select a state</option>
            </select>
          </div>
        </div>
        <div class="col-5 col-md-12 col-sm-12 col-xs-12 d-none" id="regions-content-contact">
        </div>
        <div class="col-12 d-flex flex-center flex-middle mt-30 d-sm-block d-xs-block shadow-center-sm-3 shadow-center-xs-3 p-sm-20 p-xs-20 text-xs-center text-sm-center">
          <img alt="Rehabrion  Logo" class="modal-logo mw-70-px d-sm-block d-xs-block m-sm-auto m-xs-auto mr-10 h-auto" src="https://public-assets.getRehabrion .com/images/logo.svg" width="70px" height="20px">
          <p class="mb-0 mt-5 color-purple-600 d-sm-block d-xs-block pl-10 p-sm-0 p-xs-0 border-left border-sm-0 border-xs-0 body-small"><a href="/locations">See our full service area list</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- Modal -->
<section class="modal-container p-15 mw-700-px" id="modalCallText" >
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
<!-- .Modal --></main>

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
<a class="overlay-modal" id="overlay-modal-map" role="button" aria-label="overlay"></a>
<!-- .Modal-Maps -->



@endsection
