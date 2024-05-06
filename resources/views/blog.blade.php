@extends('layouts.app')
@section('title', 'Blog Posts')
@section('meta_description', 'Explore our latest blog posts for insightful articles on formshub.  Stay informed and inspired with our expertly crafted content.')

@section('content')

    @php
    $title=trans('main.blogs_title');
    $text='' ;
    @endphp
@section('schema_markup')
{!! $schemaMarkup !!}
@endsection
    <x-header_section :title="$title" :text="$text" />



    <section class="section">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 bg-posts-row row-cols-md-3 mb-2">

          @foreach ($blogs as $blog )

              <x-blog :blog="$blog" />
          @endforeach



        </div>


      </div>

    </section>



 @stop
