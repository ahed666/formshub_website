<style>
.owl-carousel-container {
    position: relative;
}

.owl-carousel-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
}

.owl-carousel-prev {
    left: 10px;
}

.owl-carousel-next {
    right: 10px;
}

.owl-carousel {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
}

.owl-carousel div {
    flex: 0 0 auto;
    width: 100%;
    scroll-snap-align: start;
}


</style>
<link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}">

<div class="container" data-aos="fade-up">

        <div class="row align-items-center">
          <div class="col-md-4 ms-auto order-2">
            <h2 class="mb-4">{{ __('main.kioskinfo_title') }}</h2>
            <p class="mb-4">{{ __('main.kioskinfo_text') }}</p>
          </div>
          <div class="col-md-6 owl-carousel-container" data-aos="fade-right">
            <div class="owl-carousel owl-theme">



                    <div class="item">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo2.png') }}" title="signature pdf example on kiosk" alt="signature pdf example on kiosk">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('images/website_images/kioskinfo1.png') }}" title="statistics question on kiosk" alt="statistics question on kiosk">

                    </div>



            </div>
            <button class="owl-carousel-nav owl-carousel-prev">Prev</button>
            <button class="owl-carousel-nav owl-carousel-next">Next</button>
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
});
document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.querySelector('.owl-carousel');
    const prevButton = document.querySelector('.owl-carousel-prev');
    const nextButton = document.querySelector('.owl-carousel-next');

    let isDragging = false;
    let startPosition = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;

    let items = document.querySelectorAll('.owl-carousel div');
    let itemWidth = items[0].offsetWidth;

    items.forEach(item => {
        item.addEventListener('mousedown', e => {
            isDragging = true;
            startPosition = e.pageX - carousel.offsetLeft;
            prevTranslate = currentTranslate;

            item.style.cursor = 'grabbing';
        });

        item.addEventListener('mousemove', e => {
            if (isDragging) {
                const currentPosition = e.pageX - carousel.offsetLeft;
                const translate = currentPosition - startPosition;

                currentTranslate = prevTranslate + translate;
                carousel.style.transform = `translateX(${currentTranslate}px)`;
            }
        });

        item.addEventListener('mouseup', () => {
            isDragging = false;

            item.style.cursor = 'grab';
        });

        item.addEventListener('mouseleave', () => {
            isDragging = false;

            item.style.cursor = 'grab';
        });
    });

    window.addEventListener('resize', () => {
        itemWidth = items[0].offsetWidth;
    });

    prevButton.addEventListener('click', () => {
        currentTranslate += itemWidth;
        if (currentTranslate > 0) {
            currentTranslate = 0;
        }
        carousel.style.transform = `translateX(${currentTranslate}px)`;
    });

    nextButton.addEventListener('click', () => {
        currentTranslate -= itemWidth;
        const maxTranslate = -(items.length - 1) * itemWidth;
        if (currentTranslate < maxTranslate) {
            currentTranslate = maxTranslate;
        }
        carousel.style.transform = `translateX(${currentTranslate}px)`;
    });
});
</script>
