<!doctype html >
<html lang="{{ App::getLocale() }}" >
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
