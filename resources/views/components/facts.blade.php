

<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
            {{ $facts }}
             @foreach ($facts as $i =>$fact )
             {{ $fact}}
             @endforeach
              {{-- <x-fact_item :count="$fact" :title="trans('main.'.$fact)"  /> --}}


        </div>
    </div>
</section>
