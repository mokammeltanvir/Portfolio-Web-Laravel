<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio | @yield('title')</title>
  <!-- Include CSS Stylesheet -->
  @include('frontend.layouts.inc.style')
</head>

<body>
  <div class="preloader">
    <img src="{{ asset('frontend/assets') }}/images/preloader.gif" alt="">
  </div>

  <!-- include Navbar -->
  @include('frontend.layouts.inc.navbar')

  <div class="main_wrapper" data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary" tabindex="0">

    @yield('content')    

    <!-- Include Footer -->
   @include('frontend.layouts.inc.footer')
  </div>

  <!-- Include JS script -->
  @include('frontend.layouts.inc.script')
</body>

</html>