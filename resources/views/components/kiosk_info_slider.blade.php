<style>



</style>
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">

<div class=" text" data-aos="fade-up">

        <div class="row content ">







            <div class="col-md-4 ms-auto order-2 info-kiosk-div">
                <h2 class="mb-4 title">{{ __('main.kioskinfo_title') }}</h2>
                <p class="mb-4">{{ __('main.kioskinfo_text') }}</p>
                <div class="d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-primary" onclick="scrollToSection('order-now')">{{ __('main.ordernow') }}</button>
                </div>
           </div>

        </div>




</div>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js') }}"></script>

<script>
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}
// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:10,
//     nav:true,
//     autoplay:true,
//     autoplayTimeout:4000,
//     autoplayHoverPause:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:1
//         }
//     }
// })
</script>
