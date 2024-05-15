
<section class="fun-facts text-center">
    <div class="container">
        <div class=" row">
               @php

                   $kiosksvg='<svg class="fact_svg"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M1 4.85714C1 3.21069 2.41423 2 4 2H20C21.5858 2 23 3.21069 23 4.85714V14.1429C23 15.7893 21.5858 17 20 17H13V20H16.5C17.0523 20 17.5 20.4477 17.5 21C17.5 21.5523 17.0523 22 16.5 22H7.5C6.94772 22 6.5 21.5523 6.5 21C6.5 20.4477 6.94772 20 7.5 20H11V17H4C2.41423 17 1 15.7893 1 14.1429V4.85714ZM4 4C3.37663 4 3 4.45225 3 4.85714V14.1429C3 14.5477 3.37663 15 4 15H20C20.6234 15 21 14.5477 21 14.1429V4.85714C21 4.45225 20.6234 4 20 4H4Z" fill="currentColor"/> </g>

</svg>';
                    $formsvg='<svg  class="fact_svg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

<g id="SVGRepo_bgCarrier" stroke-width="0"/>

<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

<g id="SVGRepo_iconCarrier"> <path d="M4 7C4 5.11438 4 4.17157 4.58579 3.58579C5.17157 3 6.11438 3 8 3H16C17.8856 3 18.8284 3 19.4142 3.58579C20 4.17157 20 5.11438 20 7V15C20 17.8284 20 19.2426 19.1213 20.1213C18.2426 21 16.8284 21 14 21H10C7.17157 21 5.75736 21 4.87868 20.1213C4 19.2426 4 17.8284 4 15V7Z" stroke="currentColor" stroke-width="2"/> <path d="M15 18L15 21M9 18L9 21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/> <path d="M9 8L15 8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/> <path d="M9 12L15 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/> </g>

</svg>';
                    $pdfsvg='<svg class="fact_svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 0 1 9 9v.375M10.125 2.25A3.375 3.375 0 0 1 13.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 0 1 3.375 3.375M9 15l2.25 2.25L15 12" />
</svg>';
   $responsesvg='<svg class="fact_svg"  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="SVGRepo_bgCarrier" stroke-width="0"/>
<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
<g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M6.4 3.80353C7.55322 2.26658 10 3.08182 10 5.00302V8.00928C14.6772 7.86093 17.7771 9.50672 19.7796 11.7657C21.8614 14.1142 22.6633 17.0184 22.9781 18.9028C23.116 19.7283 22.5806 20.3237 22.0149 20.5275C21.4711 20.7234 20.7467 20.6283 20.2749 20.0531C18.6945 18.1261 15.5 15.4884 10 15.4884V18.997C10 20.9182 7.55321 21.7334 6.4 20.1965L1.6 13.7992C0.800001 12.733 0.800001 11.267 1.6 10.2008L6.4 3.80353ZM8 5.00302L3.2 11.4003C2.93333 11.7557 2.93333 12.2443 3.2 12.5997L8 18.997V14.5C8 13.9477 8.44772 13.5 9 13.5H10C17 13.5 20.6009 17.4621 20.6009 17.4621C20.1828 16.0361 19.4749 14.4371 18.2829 13.0924C16.7183 11.3273 14.5 10 10 10H9C8.44772 10 8 9.55228 8 9V5.00302Z" fill="currentColor"/> </g>
</svg>';
               @endphp

            <x-fact_item :svg="$pdfsvg"  :count="$facts->signedpdf_count" :title="trans('main.signedpdf_count')" />
            <x-fact_item :svg="$responsesvg"  :count="$facts->responses_count" :title="trans('main.responses_count')" />
            <x-fact_item :svg="$formsvg"  :count="$facts->createdforms_count" :title="trans('main.createdforms_count')" />
            <x-fact_item :svg="$kiosksvg"  :count="$facts->linkedkiosks_count" :title="trans('main.linkedkiosks_count')" />
            {{-- <x-fact_item :animate="'fade-up'"  :count="$facts->createdaccount_count" :title="trans('main.createdaccount_count')" /> --}}



        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

<script>
    new PureCounter({
    selector: '.purecounter',
    duration: 3,
    delay: 100,
    repeat: false,
    decimals: 0,
    legacy: true,
    filesizing: false,
    currency: false,
    separator: false,
});
</script>
