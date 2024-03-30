@php
$responses_svg='<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="fact_svg">
    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 0 1 1.037-.443 48.282 48.282 0 0 0 5.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>
';
$forms_svg='<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg class="fact_svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-83.3 -83.3 656.60 656.60" xml:space="preserve" width="800px" height="800px">
    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
    <g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M450,0h-410c-22.056,0-40,17.944-40,40v280c0,22.056,17.944,40,40,40h235v120c0,4.118,2.524,7.814,6.358,9.314 c1.184,0.463,2.417,0.687,3.639,0.687c2.738,0,5.42-1.126,7.35-3.218L409.38,360H450c22.056,0,40-17.944,40-40V40 C490,17.944,472.057,0,450,0z M470,320c0,11.028-8.972,20-20,20h-45c-2.791,0-5.455,1.167-7.348,3.217L295,454.423V350 c0-5.523-4.477-10-10-10h-245c-11.028,0-20-8.972-20-20V40c0-11.028,8.972-20,20-20h410c11.028,0,20,8.972,20,20V320z"/> <path d="M144.881,80.001c-3.957,0.047-7.513,2.423-9.072,6.06l-75,175l18.383,7.878L106.594,205h79.982l29.329,64.158 l18.189-8.315l-80-175C152.45,82.244,148.863,79.974,144.881,80.001z M115.167,185l30.129-70.302L177.433,185H115.167z"/> <rect x="255.001" y="115" width="80" height="20"/> <rect x="350" y="115" width="60" height="20"/> <rect x="255.001" y="165" width="180" height="20"/> <rect x="255.001" y="215" width="75" height="20"/> </g> </g> </g> </g>
    </svg>';
@endphp
<section class="fun-facts text-center">
    <div class="container">
        <div class=" facts">


            <x-fact_item :svg="$responses_svg" :count="$facts->signedpdf_count" :title="trans('main.signedpdf_count')" />
            <x-fact_item :svg="$responses_svg" :count="$facts->responses_count" :title="trans('main.responses_count')" />
            <x-fact_item :svg="$forms_svg" :count="$facts->createdforms_count" :title="trans('main.createdforms_count')" />
            <x-fact_item :svg="$responses_svg" :count="$facts->linkedkiosks_count" :title="trans('main.linkedkiosks_count')" />
            <x-fact_item :svg="$responses_svg" :count="$facts->createdaccount_count" :title="trans('main.createdaccount_count')" />



        </div>
    </div>
</section>
