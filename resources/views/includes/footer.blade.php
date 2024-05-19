
<footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>{{ __('main.aboutformshub') }}</h3>
          <p class="about-text-footer">{{ __('main.aboutformshub_text') }}</p>
          {{-- <p class="social">
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
            <a href="#"><span class="bi bi-linkedin"></span></a>
          </p> --}}
        </div>
        <div class="col-md-8 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-6 mb-4 mb-md-0 d-grid  ">
              <h3>{{ __('main.navigation') }}</h3>
              <ul class="list-unstyled">

                <li><a href="{{ route('pricing') }}">{{ __('main.pricing') }}</a></li>
                <li><a href="{{ route('whyformshub') }}">{{ __('main.whyformshub') }}</a></li>
                <li><a href="{{ route('contact') }}">{{ __('main.contactus') }}</a></li>
                <li><a href="{{ route('kiosk') }}">{{ __('main.kiosk') }}</a></li>
                <li><a href="{{ route('knowledgebase') }}">{{ __('main.knowledgebase') }}</a></li>
                <li><a href="{{ route('termsandconditions') }}" target="_blank">{{ __('main.termsandconditions') }}</a></li>
                <li><a href="{{ route('privacypolicy') }}" target="_blank">{{ __('main.privacypolicy') }}</a></li>
              </ul>
            </div>
            {{-- <div class="col-md-4 mb-4 mb-md-0">
              <h3>{{ __('main.services') }}</h3>
              <ul class="list-unstyled">


              </ul>
            </div> --}}
            <div class="col-md-6 mb-4 mb-md-0 dropdown d-grid ">
                <div class="d-flex justify-content-center align-items-center mb-2">
                <a class=" dropdown-toggle dropdown-langauge" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    @if(App::getLocale()=="ar")
                    العربية
                    @else
                    English
                    @endif
                </a>

                <ul class="dropdown-menu">

                    <form method="POST" action="{{ route('setLocale','en') }}">
                        @csrf
                        <button class="buttonlang" type="submit">English</button>
                    </form>

                    <form method="POST" action="{{ route('setLocale','ar') }}">
                        @csrf
                       <button class="buttonlang" type="submit">العربية</button>
                    </form>


                </ul>
                </div>
                <div>
                    <!-- TrustBox widget - Review Collector -->
                    <div class="trustpilot-widget" data-locale="en-US" data-template-id="56278e9abfbbba0bdcd568bc" data-businessunit-id="663cd67ae4a435815eeccd3a" data-style-height="52px" data-style-width="100%">
                        <a href="https://www.trustpilot.com/review/formshub.net" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget -->
                </div>

            </div>
          </div>
        </div>
      </div>



    </div>
    <div  class="row justify-content-center text-center copyright-section">
        <div class="col-md-7">
          <p class="copyright">&copy; {{ __('main.copyright',['name'=>__('main.formshub')]) }}</p>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=SoftLand
          -->
            {{ __('main.designedby') }}<a href="http://www.netcore.ae/"> {{ __('main.netcoreitsolutions') }}</a>
          </div>
        </div>
    </div>
  </footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js') }}"></script>

  <script src="{{ asset('assets/vendor/aos/aos.js') }} "></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

