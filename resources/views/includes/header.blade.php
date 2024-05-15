<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center navmobile">

      <div class="logo">
        <a href="{{ route('home') }}"><img  src="{{ asset('assets/img/logos/logo.png') }}" alt="main logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="{{ (request()->routeIs('home')) ? 'active' : '' }}" href="{{ route('home') }}">{{ __('main.home') }}</a></li>


          <li><a class="{{ (request()->routeIs('kiosk')) ? 'active' : '' }}" href="{{ route('kiosk') }}">{{ __('main.kiosk') }}</a></li>
          <li><a class="{{ (request()->routeIs('blogs.index')) ? 'active' : '' }}" href="{{ route('blogs.index') }}">{{ __('main.blog') }}</a></li>

          <li class="dropdown">

                <a class="   dropdown_navbar "  role="button" id="webappDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('main.webapp') }}
                </a>
                <ul class="dropdown-menu d-none " aria-labelledby="webappDropdown">
                    <li >
                      <a  class="submenu_item" href="{{ route('whyformshub') }}">{{ __('main.whyformshub_header') }}</a>
                    </li>
                    <li >
                        <a  class="submenu_item" href="{{ route('typesofquetions') }}">{{ __('main.typesofquetions') }}</a>
                      </li>
                    <li><a class="submenu_item" href="{{ route('pricing') }}">{{ __('main.pricing') }}</a></li>

                </ul>

        </li>
          <li  class="dropdown">

                <a class="  dropdown_navbar" href="#" role="button" id="helpDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ __('main.help') }}
                </a>
                <ul class="dropdown-menu d-none " aria-labelledby="helpDropdown">
                    <li >
                      <a class="submenu_item"  href="{{ route('knowledgebase') }}">{{ __('main.knowledgebase') }}</a>

                    </li>
                    <li>
                        <a class="submenu_item"  href="{{ route('contact') }}">{{ __('main.contactus') }}</a>
                    </li>
                </ul>

        </li>








           <li class="gotoapp_navbar">

                <a href="{{ config('app.sub_domain_name') }}" class=" gotoapp_navbar_button">{{ __('main.gotoapp_button') }}</a>
                <a href="{{ route('kiosk') }}" class=" orderkiosk_navbar_button">{{ __('main.orderkiosk') }}</a>

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
