

<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
            {{ $facts->toArray()  }}

              {{-- <x-fact_item :count="$fact" :title="trans('main.'.$fact)"  /> --}}


        </div>
    </div>
</section>
