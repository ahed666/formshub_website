

<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
             @foreach ($facts as $fact )
              <x-fact_item :count="$fact" :title="trans('main.'.$fact)"  />

             @endforeach
        </div>
    </div>
</section>
