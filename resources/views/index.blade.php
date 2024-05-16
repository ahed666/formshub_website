@extends('layouts.app')
@section('title', trans('main.home_tab'))
@section('meta_description', 'Welcome to FormsHub, your go-to feedback web app. Gather valuable insights and feedback from your customers, analyze data, and improve your products and services.')



  @section('content')

@section('schema_markup')
    {!! $schemaMarkup->toScript() !!}
@endsection
  <section class="hero-section" id="hero">



    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-8 text-center ">
              <h1 data-aos="fade-right" class="hero-text-title">{{ __('main.home_header_title') }}</h1>
              <p class="mb-5 hero-text-text" data-aos="fade-right" data-aos-delay="100">
                {{ __('main.home_header_text') }}

              </p>
              <p class="d-flex justify-content-center align-items-center space-x-1" data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                <a  href="{{ config('app.sub_domain_name') }}" class=" button mx-1">{{ __('main.home_header_button') }}</a>
                <a  href="{{ route('kiosk') }}" class="button mx-1">{{ __('main.orderkiosk') }}</a>
            </p>
            </div>
            <div class="col-lg-4 iphone-wrap">
                @if (App::getLocale() == 'en')
                    <img src="/images/website_images/home_image1-en.png" class="phone-1" alt="kiosk with stand">
                @else
                    <img src="/images/website_images/home_image1-ar.png" class="phone-1" alt="kiosk with stand">
                @endif

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
          <div class="col-md-8" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.tools_home_title') }}</h2>
          </div>
        </div>
        <div class="tools-div justify-content-between text-center mb-5" data-aos="fade-right">
            <div class="tools-image">
              <img src="{{ asset('images/website_images/second_section_home.png') }}" alt="Image" class="img-second_section_home ">
            </div>
            <div class="grid tools ">
                 @php
                     $title=trans('main.tool1_title');
                     $text=trans('main.tool1_text');
                 @endphp
                <x-tool :icon="'bi-highlighter'" :delay="'200'" :animate="'fade-left'" :title="$title" :text="$text" />
                @php
                    $title=trans('main.tool2_title');
                    $text=trans('main.tool2_text');
                @endphp
               <x-tool :icon="'bi-clipboard-check'" :delay="'500'" :animate="'fade-left'" :title="$title" :text="$text" />
                @php
                    $title=trans('main.tool3_title');
                    $text=trans('main.tool3_text');
                @endphp
                <x-tool :icon="'bi-graph-up-arrow'" :delay="'1000'" :animate="'fade-left'" :title="$title" :text="$text" />


            </div>
        </div>



      </div>
    </section>

    {{-- whyformshub --}}
    <section class="section whyformshub_home">




        <div class="container" >

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8" data-aos="fade-in">
                <h2 class="section-heading">{{ __('main.whyformshub') }}</h2>

                </div>
            </div>
            <div class="row gy-4 features feature-div">

                @foreach ( $features as $feature )
                <x-feature :feature="$feature" />
                @endforeach

            </div>
            <div class="show-more-btn-div col-12 col-lg-12 col-md-12 col-sm-12">
                <a  href="{{route('whyformshub') }}" class="button mx-1">{{ __('main.showmore') }}</a>

            </div>
        </div>

    </section>

    {{-- Digital Signature  video --}}
    <section class="section  ">
        <div class="container" >

            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8" data-aos="fade-in">
                <h2 class="section-heading">{{ __('main.howworks_title') }}</h2>
                </div>
            </div>
            <div class="video-div  " >
                <div class="video video1">

                        <div class=" card video-card">
                            <video class="video_signature" autoplay muted loop >
                                <source src="{{ asset('/videos/signature.mp4')}}" type="video/mp4" />
                                Your browser does not support the video tag.
                            </video>
                            <p class="text">
                                {{ __('main.digitalsignaturevideo_title') }}
                            </p>
                        </div>

                </div>
                <div class="video video2">

                    <div class=" card video-card">

                    <video class="video_signature" autoplay muted loop >
                        <source src="{{ asset('/videos/questionsform.mp4')}}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                    <p class="text">
                        {{ __('main.customformvideo_title') }}
                    </p>
                    </div>


                </div>
        </div>


    </section>

    {{-- steps --}}
    <section class="section steps_home">

      <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8" data-aos="fade-up">
            <h2 class="section-heading">{{ __('main.howstart') }}</h2>
            </div>
        </div>
        <div class="row">
            @php
            $title=trans('main.step1_title');
            $text=trans('main.step1_text');
            $href= config('app.sub_domain_name') ;
            $linktext=trans('main.createone') ;
            @endphp
            <x-step :Step="'1'" animate="'fade-right'" :title="$title" :text="$text" :href="$href" :linktext="$linktext" />

            @php
            $title=trans('main.step2_title');
            $text=trans('main.step2_text');
            $href= route('kiosk') ;
            $linktext=trans('main.ordernow') ;
            @endphp
            <x-step :Step="'2'" animate="'fade-right'" :title="$title" :text="$text" :href="$href" :linktext="$linktext" />


            @php
            $title=trans('main.step3_title');
            $text=trans('main.step3_text');
            $href= config('app.sub_domain_name') ;
            $linktext=trans('main.startnow') ;
            @endphp
            <x-step :Step="'3'" animate="'fade-right'" :title="$title" :text="$text" :href="$href" :linktext="$linktext" />


        </div>
      </div>

    </section>



    {{-- facts --}}
    <section class="section facts_section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8" data-aos="fade-up">
                  <h2 class="section-heading">{{ __('main.facts') }}</h2>
                </div>
            </div>

            <x-facts :facts="$facts" />
        </div>
    </section>





  @stop

