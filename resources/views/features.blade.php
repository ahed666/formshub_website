@extends('layouts.app')
@section('title', 'Features - discovere our features ')
@section('meta_description', 'Explore the features of our feedback web app. Learn how our platform can help you gather valuable insights from your customers, analyze data, and improve your products and services.')

@section('content')
<!-- ======= Features Section ======= -->

@php
$title=trans('main.features_title');
$text='' ;
@endphp
@php
        $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
        ->name('Features')
        ->description('Discover the features of our product. Learn how it can help you improve your business.')
        ->url(url()->current());

@endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection
<x-header_section :title="$title" :text="$text" />

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 me-auto">
                <h2 class="mb-4">{{ __('main.feature1_title') }}</h2>
                <p class="mb-4">{{ __('main.feature1_text') }}</p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('images/website_images/svg/simplicity.svg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
                <h2 class="mb-4">{{ __('main.feature2_title') }}</h2>
                <p class="mb-4">{{ __('main.feature2_text') }}.</p>

            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('images/website_images/svg/centralized_control.svg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 me-auto">
                <h2 class="mb-4">{{ __('main.feature3_title') }}</h2>
                <p class="mb-4">{{ __('main.feature3_text') }}</p>

            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('images/website_images/svg/customized_questions.svg')}}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
                <h2 class="mb-4">{{ __('main.feature4_title') }}</h2>
                <p class="mb-4">{{ __('main.feature4_text') }}</p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('images/website_images/svg/eco_friendly.svg') }}" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>





@stop
