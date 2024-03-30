
<section class="fun-facts text-center">
    <div class="container">
        <div class=" facts">


            <x-fact_item :animate="'fade-up'"  :count="$facts->signedpdf_count" :title="trans('main.signedpdf_count')" />
            <x-fact_item :animate="'fade-down'"  :count="$facts->responses_count" :title="trans('main.responses_count')" />
            <x-fact_item :animate="'zoom-in'"  :count="$facts->createdforms_count" :title="trans('main.createdforms_count')" />
            <x-fact_item :animate="'fade-down'"  :count="$facts->linkedkiosks_count" :title="trans('main.linkedkiosks_count')" />
            <x-fact_item :animate="'fade-up'"  :count="$facts->createdaccount_count" :title="trans('main.createdaccount_count')" />



        </div>
    </div>
</section>
