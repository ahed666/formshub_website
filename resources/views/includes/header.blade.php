<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center navmobile">

      <div class="logo">
       <img  src="{{ asset('assets/img/logos/logo.png') }}" alt="">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">{{ __('main.home') }}</a></li>
          <li><a class="{{ (request()->routeIs('features')) ? 'active' : '' }}" href="{{ route('features') }}">{{ __('main.features') }}</a></li>
          <li><a class="{{ (request()->routeIs('pricing')) ? 'active' : '' }}" href="{{ route('pricing') }}">{{ __('main.pricing') }}</a></li>
          <li><a class="{{ (request()->routeIs('products')) ? 'active' : '' }}" href="{{ route('products') }}">{{ __('main.products') }}</a></li>
          <li><a class="{{ (request()->routeIs('knowledgebase')) ? 'active' : '' }}" href="{{ route('knowledgebase') }}">{{ __('main.knowledgebase') }}</a></li>
          <li><a class="{{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('main.contactus') }}</a></li>



            {{-- <li class="btn-group">
                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(App::getLocale()=="ar")
                    English
                    @else
                    العربية
                    @endif
                </button>
                <div class="dropdown-menu">
                    <a  href="{{ route('setLocale','en') }}">English</a>
                    <a  href="{{ route('setLocale','ar') }}">العربية</a>

                </div>

           </li> --}}
       

           <li class="gotoapp_navbar">

                <a href="{{ config('app.sub_domain_name') }}" class=" gotoapp_navbar_button">{{ __('main.gotoapp_button') }}</a>

          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>


      </nav><!-- .navbar -->
      {{-- go to app --}}


    </div>
  </header>
  <script>
    function changeLocale(select) {
        var selectedValue = select.options[select.selectedIndex].value;
        window.location.href = "{{ route('setLocale', '') }}/" + selectedValue;
    }
</script>
