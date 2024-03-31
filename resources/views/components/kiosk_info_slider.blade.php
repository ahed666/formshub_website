<style>



</style>
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">

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
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>

<script>

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:4000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
</script>
