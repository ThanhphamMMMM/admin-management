<<<<<<< Updated upstream
@extends('layouts.auth')

@section('title','Sign up')

@section('css')

@section('heading','Register')

@section('p','Register your account by providing your personal information.')

@endsection

@section('form')
 <form class="needs-validation" action="{{ route('auth.process')}}" method="POST">
=======
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <title>Around | Sign In - Image</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Around - Multipurpose Bootstrap Template">
    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
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
    <link rel="stylesheet" href="{{ asset('theme/css/notification.css')}}">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
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
              <!-- Rigister view-->
              <div class="cs-view show" id="signin-view">
                <h1 class="h2">Register</h1>
                <p class="font-size-ms text-muted mb-4">Register your account by providing information during registration.</p>
                @if (session('success')) 
                    <div class="success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error')) 
                    <div class="error">
                        {{ session('error') }}
                    </div>
                @endif
                <br>
                <form class="needs-validation" action="{{ route('auth.process')}}" method="POST">
>>>>>>> Stashed changes
                    @csrf
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Full name" name="fullname" value="{{ old('fullname')}}" required>
                    @error('fullname')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="tel" placeholder="Phone" name="tel" value="{{ old('tel')}}" required>
                    @error('tel')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Address" name="address" value="{{ old('address')}}" required>
                    @error('address')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="date" placeholder="Brithday" name="birthday" value="{{ old('birthday')}}" required>
                    @error('birthday')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email')}}" required>
                    @error('email')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="cs-password-toggle form-group">
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                    @error('password')
                        <div style="color:red;">{{ $message }}</div>
                    @enderror
                    <label class="cs-password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                  <div class="cs-password-toggle form-group">
                    <input class="form-control" type="password" placeholder="Confirm password" name="password_confirmation" required>
                    <label class="cs-password-toggle-btn">
                      <input class="custom-control-input" type="checkbox"><i class="fe-eye cs-password-toggle-indicator"></i><span class="sr-only">Show password</span>
                    </label>
                  </div>
                  <button class="btn btn-primary btn-block" type="submit">Register</button>
                  <p class="font-size-sm pt-3 mb-0">Already have an account? <a href='{{ route('auth.login')}}' class='font-weight-medium' data-view='#signin-view'>Sign in</a></p>
                </form>
<<<<<<< Updated upstream

@endsection


@section('js')
@endsection


=======
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer class="cs-footer py-4">
      
    </footer>
    <!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span><i class="btn-scroll-top-icon fe-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}"></script>
    <script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
    <!-- Main theme script-->
    <script src="theme/js/theme.min.js"></script>
  </body>
</html>
>>>>>>> Stashed changes
