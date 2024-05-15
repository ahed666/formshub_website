@extends('layouts.app')
@section('title',  trans('main.types_questions'))
@section('meta_description', 'Craft a tailored feedback form encompassing diverse question types that align with your expectations, ensuring precise feedback acquisition for optimal insights.')

@section('content')
<!-- ======= Features Section ======= -->

@php
$title=trans('main.typesofquestions_title');
$text=trans('main.typesofquestions_text'); ;
@endphp
@php
        $schemaMarkup = \Spatie\SchemaOrg\Schema::webPage()
        ->name('Types Of Questions')
        ->description('Craft a tailored feedback form encompassing diverse question types that align with your expectations, ensuring precise feedback acquisition for optimal insights.')
        ->url(url()->current());

@endphp
@section('schema_markup')
{!! $schemaMarkup->toScript() !!}
@endsection



<x-header_section :title="$title" :text="$text" />

<section class="section all_types">
    <div class="container">
        <div class="row gy-4 types">
            @foreach ( $types_questions as $type )
            <x-question_type :type="$type" />

            @endforeach

        </div>
    </div>
</section>







@stop
