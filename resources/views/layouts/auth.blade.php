<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS & JS-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="stylesheet" href="{{ asset('theme/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/js/theme.min.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/simplebar/dist/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/notification.css')}}">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
      .cs-page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all .4s .2s ease-in-out;
        transition: all .4s .2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
      }
      .cs-page-loading.active {
        opacity: 1;
        visibility: visible;
      }
      .cs-page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity .2s ease-in-out;
        transition: opacity .2s ease-in-out;
        opacity: 0;
      }
      .cs-page-loading.active > .cs-page-loading-inner {
        opacity: 1;
      }
      .cs-page-loading-inner > span {
        display: block;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        font-weight: normal;
        color: #737491;
      }
      .cs-page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: .75rem;
        vertical-align: text-bottom;
        border: .15em solid #766df4;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner .75s linear infinite;
        animation: spinner .75s linear infinite;
      }
      @-webkit-keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }
      @keyframes spinner {
        100% {
          -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
        }
      }

    </style>
    <!-- Page loading scripts-->
    <script>
      (function () {
        window.onload = function () {
          var preloader = document.querySelector('.cs-page-loading');
          preloader.classList.remove('active');
          setTimeout(function () {
            preloader.remove();
          }, 2000);
        };
      })();

    </script>
    <!-- Vendor Styles-->
    <link rel="stylesheet" media="screen" href="theme/vendor/simplebar/dist/simplebar.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="theme/css/theme.min.css">
  </head>
  <!-- Body-->
  <body>
    <!-- Page loading spinner-->
    <div class="cs-page-loading active">
      <div class="cs-page-loading-inner">
        <div class="cs-page-spinner"></div><span>Loading...</span>
      </div>
    </div>
    <main class="cs-page-wrapper d-flex flex-column">
      <div class="d-none d-md-block position-absolute w-50 h-100 bg-size-cover" style="top: 0; right: 0; background-image: url(images/anhnen.jpg);"></div>
      <!-- Actual content-->
      <section class="container d-flex align-items-center pt-7 pb-3 pb-md-4" style="flex: 1 0 auto;">
        <div class="w-100 pt-3">
          <div class="row">
            <div class="col-lg-4 col-md-6 offset-lg-1">
              <!-- Sign in view-->
              <div class="cs-view show" id="signin-view">
                <h1 class="h2">@yield('heading')</h1>
                <p class="font-size-ms text-muted mb-4">@yield('p')</p>

                @if (session('error'))
                    <div class="error">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="success">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('form')
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="cs-footer py-4">
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fe-arrow-up">   </i></a>
    <script src="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
     @yield('js')
    <!-- Main theme script-->
    <script src="theme/js/theme.min.js"></script>
  </body>
</html>

