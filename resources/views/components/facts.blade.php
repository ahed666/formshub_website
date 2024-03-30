
<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
             @foreach ($facts as $fact )
              <x-fact_item :fact="$fact" />

             @endforeach
        </div>
    </div>
</section>
