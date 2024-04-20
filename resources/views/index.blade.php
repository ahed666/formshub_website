@extends('layouts.app')
@section('title', 'Feedback Web App |  Feedback kiosk in UAE ')
@section('meta_description', 'Welcome to FormsHub, your go-to feedback web app. Gather valuable insights and feedback from your customers, analyze data, and improve your products and services.')



  @section('content')

@section('schema_markup')
    {!! $schemaMarkup->toScript() !!}
@endsection
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center text-lg-start">
              <h1 data-aos="fade-right">{{ __('main.home_header_title') }}</h1>
              <p class="mb-5" data-aos="fade-right" data-aos-delay="100">{{ __('main.home_header_text') }}<a class="" style="color:white;margin-left:2px; margin-right:2px;"  href="{{ config('app.sub_domain_name') }}">{{ __('main.readmore') }}</a></p>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="{{ config('app.sub_domain_name') }}" class="btn btn-outline-white">{{ __('main.home_header_button') }}</a></p>
            </div>
            <div class="col-lg-4 iphone-wrap">
              {{-- <img src="assets/img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="assets/img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200"> --}}
              <img src="/images/website_images/home_image1.png" class="phone-1" alt="home image 1">
                {{-- <x-homepageimage /> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container" >

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.tools_home_title') }}</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="">
              <img src="{{ asset('images/website_images/second_section_home.png') }}" alt="Image" class="img-second_section_home ">
            </div>
        </div>

        <div class="row tools">
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-highlighter"></i>
              </div>
              <h3 class="mb-3">{{ __('main.tool1_title') }}</h3>
              <p>{{ __('main.tool1_text') }}</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-clipboard-check"></i>
              </div>
              <h3 class="mb-3">{{ __('main.tool2_title') }}</h3>
              <p>{{ __('main.tool2_text') }}</p>
            </div>
          </div>
          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-1 text-center">
              <div class="wrap-icon icon-1">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3 class="mb-3">{{ __('main.tool3_title') }}</h3>
              <p>{{ __('main.tool3_text') }}</p>
            </div>
          </div>
        </div>

      </div>
    </section>

    {{-- Digital Signature  video --}}
    <section class="section">
        <div class="container" >

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.digitalsignature_title') }}</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="">
                <video class="video_signature" autoplay muted loop >
                    <source src="{{ asset('/videos/signature.mp4')}}" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        </div>
    </section>
    {{-- forms  video --}}
    <section class="section">
        <div class="container" >

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.customform_title') }}</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
            <div class="">
                <video class="video_signature" autoplay muted loop >
                    <source src="{{ asset('/videos/questionsform.mp4')}}" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        </div>
    </section>
    {{-- steps --}}
    <section class="section">

      <div class="container">
        {{-- <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-6 mb-5">
            <img src="assets/img/undraw_svg_1.svg" alt="Image" class="img-fluid">
          </div>
        </div> --}}
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.howstart') }}</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="step">
              <span class="number">01</span>
              <h3>{{ __('main.step1_title') }}</h3>
              <p>{{ __('main.step1_text') }} <a class="link" href="{{ config('app.sub_domain_name') }}">{{ __('main.createone') }}</a> </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">02</span>
              <h3>{{ __('main.step2_title') }}</h3>
              <p>{{ __('main.step2_text') }}<a class="link" href="{{ route('kiosk') }}">{{ __('main.ordernow') }}</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="step">
              <span class="number">03</span>
              <h3>{{ __('main.step3_title') }}</h3>
              <p>{{ __('main.step3_text') }}<a class="link" href="{{ config('app.sub_domain_name') }}">{{ __('main.readmore') }}</a></p>
            </div>
          </div>
        </div>
      </div>

    </section>
    {{-- facts --}}
    <section class="section facts_section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-5" data-aos="fade-up">
                  <h2 class="section-heading">{{ __('main.facts') }}</h2>
                </div>
            </div>
            <x-facts :facts="$facts" />
        </div>
    </section>





  @stop

