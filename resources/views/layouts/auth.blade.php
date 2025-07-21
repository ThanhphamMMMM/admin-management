<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" media="screen" href="{{ asset('theme/vendor/simplebar/dist/simplebar.min.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('theme/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
     @yield('css')
  </head>
  <body>

    <main class="cs-page-wrapper d-flex flex-column">
      <div class="d-none d-md-block position-absolute w-50 h-100 bg-size-cover image-custom ">
      </div>
      <section class="container d-flex align-items-center pt-7 pb-3 pb-md-4" >
        <div class="w-100 pt-3">
          <div class="row ">
            <div class="col-lg-4 col-md-6 offset-lg-1">
              <!-- view form-->
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

    <a class="btn-scroll-top" href="#" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">
            Top
        </span>
        <i class="btn-scroll-top-icon fe-arrow-up"></i>
    </a>
    <!--inport js-->
    <script src="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
    <script src="{{ asset('theme/js/theme.min.js')}}"></script>
    @yield('js')
  </body>
</html>

