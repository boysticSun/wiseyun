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

    @yield('searchbar')

    <div class="bg-white">
      <div class="container">
        @yield('statistics')
      </div>
    </div>

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    <div class="bg-custom">
      @yield('customcontent')
    </div>

    <div class="bg-white">
      @yield('whitecontent')
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

    @include('layouts._right_float_bar')

  </div>

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>

  @yield('scripts')

  <script>

    // BANNER轮播图组
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

    // 新闻资讯轮播组
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

    // 需求市场页采购轮播组
    var purchaseSwiper = new swiper(".purchaseSwiper", {
      autoHeight: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
      },
      speed: 1000,
      loop: true,
      pagination: {
        el: ".purchaseSwiper .swiper-pagination",
        clickable: true,
      },
      observer:true,
      observeParents:true
    });

    // 需求市场页供应轮播组
    var purchaseSwiper = new swiper(".supplySwiper", {
      autoHeight: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false,
      },
      speed: 1000,
      loop: true,
      pagination: {
        el: ".supplySwiper .swiper-pagination",
        clickable: true,
      },
      observer:true,
      observeParents:true
    });

    $(document).ready(function() {

      // 导航栏二级菜单
      $('.navbar-brand').hover(function(){
        if($(this).find('.snd-navbar-brand').css('display') == 'none') {
          $(this).find('.snd-navbar-brand').slideDown(500);
        }
      },function(){
        $(this).find('.snd-navbar-brand').slideUp(500);
      })

      // $("#go-top").slideUp(1000);

      /*滑动回到顶部*/
      $("#go-top").click(function(){
        $(document).scrollTop(0);
      })
      /*滑块超过固定高度按钮划出(slideDown)*/
      $(document).scroll(function(){
        var h = $(document).scrollTop();
        var win_h = $(window).height();
        if(h > win_h*0.2){
          $("#go-top").slideDown(1000);
        }else{
          $("#go-top").slideUp(1000);
        }
      })
      /*the end*/
    })

  </script>
</body>

</html>
