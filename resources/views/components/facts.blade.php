

<section class="fun-facts text-center">
    <div class="container">
        <div class="row">


              <x-fact_item :count="$facts->signedpdf_count" :title="trans('main.signedpdf_count')"  />
              <x-fact_item :count="$fact->responses_count" :title="trans('main.responses_count')"  />
              <x-fact_item :count="$fact->createdforms_count" :title="trans('main.createdforms_count')"  />
              <x-fact_item :count="$fact->linkedkiosks_count" :title="trans('main.linkedkiosks_count')"  />
              <x-fact_item :count="$fact->createdaccount_count" :title="trans('main.createdaccount_count')"  />



        </div>
    </div>
</section>
