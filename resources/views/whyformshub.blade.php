@extends('layouts.app')
@section('title',  trans('main.whyformshub_tab'))
@section('meta_description', 'Explore the features of our feedback web app. Learn how our platform can help you gather valuable insights from your customers, analyze data, and improve your products and services.')

@section('content')
<!-- ======= Features Section ======= -->

@php
$title=trans('main.whyformshub_title');
$text=trans('main.whyformshub_text'); ;
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

<section class="section all_features">
    <div class="container">
        <div class="row gy-4 features">
            @foreach ( $features as $feature )
            <x-feature :feature="$feature" />

            @endforeach

        </div>
    </div>
</section>







@stop
