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
   </main>

       @include('includes.footer')

</div>
</body>
</html>
