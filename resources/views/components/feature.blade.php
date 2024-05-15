<div class="col-6 col-lg-3 col-md-3 col-sm-6  ">
    <div class="full-card d-block bg-white text-center text-capitalize feature">
    <div class="d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3 icon">
        <i class="bi bi-star-fill"></i>

    </div>
    <div>
      <h3 class=" feature-title">
        @if (App::getLocale() == 'en')
        {{ $feature['title'] }}
        @else
        {{ $feature['title_ar'] }}
        @endif

    </h3>
      <p class="feature-text">
        @if (App::getLocale() == 'en')
        {{ $feature['feature_text_english'] }}
        @else
        {{ $feature['feature_text_arabic'] }}
        @endif
        @if($feature['blog_id']!=null)
      <a class="link-primary" href="{{ route('blogs.details_blog',['id'=>$feature['blog_id']]) }}">Read more</a>
      @endif
      </p>

    </div>
    </div>
  </div>


