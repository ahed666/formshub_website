<!-- resources/views/layouts/app.blade.php or any other Blade template -->



    <!-- Your other HTML content -->

    <!-- Offer Modal -->
    <div class="modal fade" id="offerModal" tabindex="-1" role="dialog" aria-labelledby="offerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="offerModalLabel">{{ __('main.specialoffer_modal_title') }}</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <img  src="{{ asset('images/offers/offer1.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="modal-footer d-flex justify-content-center ">
              <a type="button" href="{{ route('make-order') }}" class="button button-offer">{{ __('main.ordernow') }}</a>
            </div>
          </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


   <script src="{{ asset('assets/js/offer.js') }}"></script>
