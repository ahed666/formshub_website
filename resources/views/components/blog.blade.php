<div class="col">
<article class=" blog">
    <div class="post-entry">
      <a href="{{ route('blogs.details_blog',$blog->id) }}" class="blog-image-div d-block mb-4">
        <img  src="{{asset($blog->details->image1)  }}" alt="Image" class="" title="image-{{ $blog->title }}">
      </a>
    </div>
      <div class="post-text">
        <h3 class="blog-title"><a href="{{ route('blogs.details_blog',$blog->id) }}">{{ $blog->title }}</a></h3>


      </div>
      <div class="blog-footer">
         {{-- date posted --}}
        <div class="post-meta">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"></path>
                <path fill-rule="evenodd" d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
            </svg>
            @php
                use Carbon\Carbon;
                $date = Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('Y-n-j');
            @endphp
            <span class="blog-date">{{ $date }} </span>

        </div>

        {{-- who posted --}}
        <div class="post-meta">

                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"></path>
					<path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
					<path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"></path>
				</svg>
             <span class="author">
                {{ $blog->created_by }}
             </span>

        </div>

      </div>

</article>
</div>
