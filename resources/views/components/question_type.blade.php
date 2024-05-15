<div class="col-6 col-lg-3 col-md-3 col-sm-6 type  ">
    <div class="full-card d-block text-center text-capitalize ">
         {{-- image --}}
        <div class="type-img">
          <img class="img-fluid " src="{{ asset($type->image) }}" alt="">
        </div>
        {{-- title --}}
        <div class="type-title">
           <h5>
            @if (App::getLocale() == 'en')
            {{ $type->question_type_details }}
            @else
            {{ $type->question_type_details_ar }}
            @endif
            </h5>
        </div>

    </div>
  </div>


