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
            <div class="owl-carousel owl-theme">



                    <div class="item">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo2.png') }}" title="signature pdf example on kiosk" alt="signature pdf example on kiosk">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo1.png') }}" title="statistics question on kiosk" alt="statistics question on kiosk">

                    </div>



            </div>
          </div>
        </div>




</div>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js') }}"></script>

<script>
    const carousel = document.querySelector('.owl-carousel');

    carousel.owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
