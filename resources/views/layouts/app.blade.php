<!doctype html  >
<html lang="{{ App::getLocale() }}"
@if (App::getLocale()=='ar')
dir="rtl"
@else
dir="ltr"
@endif
>
<head>
   @include('includes.head')
</head>
<body >

    @include('includes.header')

   <main id="main">
           @yield('content')

           {{-- offer --}}
           <x-offerModal/>
   </main>

    @include('includes.footer')


</body>
</html>
