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

        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">{{ __('main.kioskinfo_title') }}</h2>
            <p class="mb-4">{{ __('main.kioskinfo_text') }}</p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
            <div class="gallery-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"">
                <div class="swiper-wrapper" style="padding: 40px 0px">



                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo2.png') }}" title="signature pdf example on kiosk" alt="signature pdf example on kiosk">
                    </div>
                    <div class="swiper-slide">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo1.png') }}" title="statistics question on kiosk" alt="statistics question on kiosk">

                    </div>


                <!-- Add more slides as needed -->
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            </div>
          </div>
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
        slidesPerView: 1,
        spaceBetween: 20
      },
      992: {
        slidesPerView: 1,
        spaceBetween: 20
      }
    }
        });
    });
</script>
