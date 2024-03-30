

<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
            {{ $facts }}
             @for ($i =0 ; $i <count($facts) ; $i++)
                   {{ $facts[$i] }}
             @endfor
              {{-- <x-fact_item :count="$fact" :title="trans('main.'.$fact)"  /> --}}


        </div>
    </div>
</section>
