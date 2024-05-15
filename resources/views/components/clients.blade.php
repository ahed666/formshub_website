<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<section class="section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8" data-aos="fade-up">
                <h2 class="section-heading">{{ __('main.clients') }}</h2>
                </div>
            </div>


            <div class="row">
                <div class="owl-carousel owl-theme client-logo " id="client-logo">
                      @foreach ($clients as $client)
                      <div class="item  ">
                        <a href="#"><img src="{{ env('WEBAPP_URL') }}{{ __('/') }}{{ $client->client_logo }}" class="" alt="client-logo"></a>
                    </div>
                      @endforeach



                </div>
            </div>
        </div>

</section>


     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script>
    $('.client-logo').owlCarousel({
            loop: true,
            margin: 0,
            dots: false,
            nav: false,
            autoplay: true,
            navText: ["<i class='icofont icofont-thin-left'></i>", "<i class='icofont icofont-thin-right'></i>"],
            responsive: {
                0: {
                    items: 3
                },
                300: {
                    items: 3
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 5
                }
            }
        })
  </script>
