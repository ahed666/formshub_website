<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center navmobile">

      <div class="logo">
       <img  src="{{ asset('assets/img/logos/logo.png') }}" alt="main logo">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="{{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">{{ __('main.home') }}</a></li>
          <li><a class="{{ (request()->routeIs('features')) ? 'active' : '' }}" href="{{ route('features') }}">{{ __('main.features') }}</a></li>
          <li><a class="{{ (request()->routeIs('pricing')) ? 'active' : '' }}" href="{{ route('pricing') }}">{{ __('main.pricing') }}</a></li>
          <li><a class="{{ (request()->routeIs('kiosk')) ? 'active' : '' }}" href="{{ route('kiosk') }}">{{ __('main.kiosk') }}</a></li>

          <li>
            <div class="dropdown dropdown_help">
                <a class="btn dropdown-toggle navbar_submenu_help" href="#" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('main.help') }}
                </a>
                <ul class="dropdown-menu d-none " aria-labelledby="languageDropdown">
                    <li >
                      <a class="submenu_item"  href="{{ route('knowledgebase') }}">{{ __('main.knowledgebase') }}</a>

                    </li>
                    <li>
                        <a class="submenu_item"  href="{{ route('contact') }}">{{ __('main.contactus') }}</a>
                    </li>
                </ul>
            </div>
        </li>

          {{-- <li><a class="{{ (request()->routeIs('knowledgebase')) ? 'active' : '' }}" href="{{ route('knowledgebase') }}">{{ __('main.knowledgebase') }}</a></li>
          <li><a class="{{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('main.contactus') }}</a></li> --}}






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
