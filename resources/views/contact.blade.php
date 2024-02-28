@extends('layouts.app')
@section('title', 'Contact Us - Leave a message ')
@section('meta_description', 'Contact us to get in touch with our team. Leave us a message and we will get back to you as soon as possible.')

@section('content')

    @php
    $title=trans('main.contact_title');
    $text=trans('main.contact_text');
    @endphp
    @php
    use Spatie\SchemaOrg\Schema;

        $contactPage = Schema::webPage()
            ->name('Contact Us')
            ->description('Contact us to get in touch with our team. Leave us a message and we will get back to you as soon as possible.')
            ->url(url()->current());

        $contactPage->toScript();
    @endphp
    @section('schema_markup')
        {!! $contactPage->toScript() !!}
    @endsection
    <x-header_section :title="$title" :text="$text" />

    <section class="section">
      <div class="container">
        <div class="row mb-5 align-items-end">
          <div class="col-md-6" data-aos="fade-up">

            <h2>{{ __('main.form_title') }}</h2>
            <p class="mb-0">{{ __('main.form_text') }}</p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
            <ul class="list-unstyled">
              <li class="mb-3">
                <strong class="d-block mb-1">{{ __('main.address') }}</strong>
                <span>{{ __('main.address_value') }}</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">{{ __('main.phone') }}</strong>
                <span>+1 232 3235 324</span>
              </li>
              <li class="mb-3">
                <strong class="d-block mb-1">{{ __('main.email') }}</strong>
                <span>{{ __('main.email_value') }}</span>
              </li>
            </ul>
          </div>

          <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
            <form action="{{ route('sendemail') }}" method="post" role="form" id="contactForm" >
               @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">{{ __('main.name') }}</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <label for="name">{{ __('main.email') }}</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">{{ __('main.subject') }}</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="col-md-12 form-group mt-3">
                  <label for="name">{{ __('main.message') }}</label>
                  <textarea class="form-control" name="message" required></textarea>
                </div>

                {{-- <div class="col-md-12 mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div> --}}

                <div class="col-md-6 form-group mt-2">
                  <input id="submitButton" type="submit" class="btn btn-primary d-block w-100" value="{{ __('main.sendmessage') }}">
                </div>
              </div>

            </form>
          </div>

        </div>
      </div>
    </section>






  <!-- ======= Footer ======= -->
  <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-3.6.4.min.js') }}"></script>

    <script>
          var translations = @json(__('main'));

        $(document).ready(function () {
            $('#contactForm').submit(function () {
                $('#submitButton').prop('disabled', true);
                $('#submitButton').prop('value',"Sending..");
            });
        });
    </script>

   @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: translations.success,
            text: '{{ session('success') }}',
            confirmButtonColor:'#f3f4f6',
            confirmButtonText:`<h5 style='color:000000;border:0;box-shadow: none;'>ok</h5>`,
        });
    </script>
    @endif

    @if($errors->has('message'))
        <script>
            Swal.fire({
                icon: 'error',
                title: translations.error,
                text: '{{ $errors->first('message') }}',
            });
        </script>
    @endif
@stop
