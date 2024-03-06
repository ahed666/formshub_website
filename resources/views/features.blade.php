@extends('layouts.app')
@section('title', 'Features - discovere our features ')
@section('meta_description', 'Explore the features of our feedback web app. Learn how our platform can help you gather valuable insights from your customers, analyze data, and improve your products and services.')

@section('content')
<!-- ======= Features Section ======= -->

@php
$title=trans('main.features_title');
$text=trans('main.features_text') ;
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
                <h2 class="mb-4">Seamlessly Communicate</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
                <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="assets/img/undraw_svg_2.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
                <h2 class="mb-4">Gather Feedback</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
                <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 me-auto">
                <h2 class="mb-4">Present Designs Inspiration</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
                <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="assets/img/undraw_svg_3.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 ms-auto order-2">
                <h2 class="mb-4">Powerful App Design </h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidunt dolore mollitia esse natus beatae.</p>
                <p><a href="#">Read More</a></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
                <img src="assets/img/undraw_svg_4.svg" alt="Image" class="img-fluid">
            </div>
        </div>
    </div>
</section>





@stop
