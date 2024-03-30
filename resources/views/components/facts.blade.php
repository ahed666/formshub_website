
<section class="fun-facts text-center">
    <div class="container">
        <div class="row">
             @foreach ($facts as $fact )
              <x-fact :fact="$fact" />

             @endforeach
        </div>
    </div>
</section>
