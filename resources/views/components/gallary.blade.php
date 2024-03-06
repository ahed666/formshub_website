<style>
    .swiper-container {
  width: 100%;
  height: 100%;
}

    /* .swiper-slide {
    text-align: center;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f5f5f5;
    color: #333;

    } */
</style>
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css') }}">

<div class="container" data-aos="fade-up">
    <div class="section-title">
        <h2 class="section-heading">gallary</h2>
         <p></p><p>Designed for both, simplicity and power. Enjoy viewing many system boards.</p><p></p>
      </div>
<div class="gallery-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"">
    <div class="swiper-wrapper" style="padding: 40px 0px">

        @foreach ( $gallaryimages as $image )

        <div class="swiper-slide">
            <a href="{{ asset($image->src) }}" class="glightbox">
             <img class="img-fluid" src="{{ asset($image->src) }}" title="{{ $image->title }}" alt="{{ $image->alt }}">
            </a>
        </div>
        @endforeach

      <!-- Add more slides as needed -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
</div>

</div>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js') }}"></script>

<script>

        const lightbox = GLightbox({   touchNavigation: true,
    loop: true,
    autoplayVideos: true });

    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800, // Adjust as needed
            easing: 'ease-in-out', // Adjust as needed
        });

        var swiper = new Swiper('.swiper-container', {
            speed: 400,
    loop: true,
    rtl:true,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      640: {
        slidesPerView: 3,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    }
        });
    });
</script>
