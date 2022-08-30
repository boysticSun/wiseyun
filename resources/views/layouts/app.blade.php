<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', '智慧wise') - 智慧wise工业云</title>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  <link href="/css/swiper-bundle.css" rel="stylesheet">

  @yield('styles')

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    @yield('banner')

    <div class="bg-white">
      <div class="container">
        @yield('statistics')
      </div>
    </div>

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    <div class="bg-white root-floor-snd">
      @yield('cloudindex')
    </div>

    <div class="root-floor-thd">
      @yield('news')
    </div>

    <div class="content-container">

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>

  @yield('scripts')

  <script>

    var bannerSwiper = new swiper(".bannerSwiper", {
      autoHeight: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
      },
      speed: 1000,
      loop: true,
      pagination: {
        el: ".bannerSwiper .swiper-pagination",
        clickable: true,
      },
      observer:true,
      observeParents:true
    });

    var newSwiper = new swiper(".newsSwiper", {
      autoHeight: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
      },
      speed: 1000,
      loop: true,
      pagination: {
        el: ".newsSwiper .swiper-pagination",
        clickable: true,
        dynamicBullets: true,
      },
      observer:true,
      observeParents:true
    });

  </script>
</body>

</html>
