@extends('layouts.app')
@section('title', $blog->title)
@section('meta_description', $blog->header)

@section('content')

    @php
    $title=$blog->title;
    // $blog->created_at.'.By'.$blog->created_by
    $text=$blog->created_at->format('Y-m-d').' .By '.$blog->created_by;
    @endphp
@section('schema_markup')
{!! $schemaMarkup !!}
@endsection
    <x-header_section :title="$title" :text="$text" />

  <main id="main">



    <section class="site-section mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-content ">

            <p class="lead my-5 d-flex justify-content-center align-items-center">
                @if (App::getLocale() == 'en')
                     {{ $blog->details->header }}
                @else
                {{ $blog->details->header_ar }}
                @endif
            </p>

            @if ($blog->details->image2==null)

                <div class="row mb-5">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                   <img src="{{asset($blog->details->image1)  }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" class="img-fluid">


                    </div>

                </div>
             @else
                <div class="row mb-5">
                    <div class="col-md-6">
                    <img src="{{asset($blog->details->image1)  }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" class="img-fluid">

                    </div>
                    <div class="col-md-6">
                    <img src="{{asset($blog->details->image2)  }}" alt="{{ $blog->title }}" title="{{ $blog->title }}" class="img-fluid">

                    </div>
                </div>
             @endif


            <div class="d-flex justify-content-center align-items-center">

               @if (App::getLocale() == 'en')
               {!! $blog->details->text !!}
                @else
                {!! $blog->details->text_ar !!}
                @endif
            </div>
            {{-- <div class="pt-5">
              <p>Categories: <a href="#">Design</a>, <a href="#">Events</a> Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div> --}}



          </div>

        </div>
      </div>
    </section>



  </main><!-- End #main -->

  @stop
