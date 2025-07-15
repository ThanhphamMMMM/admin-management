<!DOCTYPE html>
<html lang="vi">S
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- import css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="{{ asset('theme/vendor/prismjs/themes/prism.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('theme/vendor/prismjs/plugins/toolbar/prism-toolbar.css')}}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('theme/vendor/prismjs/plugins/line-numbers/prism-line-numbers.css')}}"/>
    <link rel="stylesheet" href="{{ asset('theme/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @yield('css')
  </head>
    <!-- Body-->
      <body>
        <main class="container-fluid">
          <!-- Main content-->
          <section class="cs-offcanvas-enabled row pb-3 pb-md-4 ">
            <div class="col-xl col_custom">
              <!-- Navbar-->
              <header class="navbar navbar-expand navbar-light fixed-top navbar-box-shadow bg-light px-3 px-lg-4" data-scroll-header="">
                <button class="navbar-toggler d-block d-lg-none mr-3 ml-auto" type="button" data-toggle="offcanvas" data-offcanvas-id="componentsNav"></button>
                  <ul class="navbar-nav ml-auto d-none d-lg-flex">
                    <div class="nav-item dropdown-avata-wrapper mr-5">
                          <a class="nav-link" href="#">AVATA</a>
                              <ul class="dropdown-avata">
                                <li><a class="dropdown-tt" href="#">Thông tin</a></li>
                                <li><a class="dropdown-dx" href="#">Đăng xuất</a></li>
                              </ul>
                    </div>
                  </ul>
              </header>
                <!-- MENU TRÁI-->
                <aside class="cs-offcanvas cs-offcanvas-collapse bg-dark">
                    <div id="componentsNav">
                        <div class="cs-offcanvas-cap bg-darker d-none d-lg-block py-2">
                            <a class="navbar-brand py-1 ml-3" href="#">
                                <img class="img-custom" src="{{ asset('images/anhlogo.png') }}" alt="anhlogo">
                            </a>
                        </div>
                        <div class="cs-offcanvas-body pt-4 pb-grid-gutter" data-simplebar="init" data-simplebar-inverse="">
                            <div class="simplebar-wrapper wrapper-custem ">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset offset-custom "></div>
                            </div>
                        </div>
                    </div>
                        <!-- Dropdown -->
                      <div class="dropdown">
                        <button class="btn btn-primary ml-5 mb-5">
                          <a href="#" class="text-decoration-none text-white">Trang chủ</a>
                        </button>

                        <button type="button" class="btn btn-primary dropdown-toggle ml-5 mb-5" data-bs-toggle="dropdown">
                          Quản lý vai trò <i class="fe-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('role.index')}}">Hiển thị danh sách vai trò</a></li>
                          <li><a class="dropdown-item" href="{{ route('role.create')}}">Thêm mới vai trò</a></li>
                        </ul>

                        <button type="button" class="btn btn-primary dropdown-toggle ml-5 mb-5 " data-bs-toggle="dropdown">
                          Quản lý người dùng <i class="fe-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('user.index')}}">Hiển thị danh sách & hồ sơ người dùng</a></li>
                          <li><a class="dropdown-item" href="{{ route('user.create')}}">Thêm mới người dùng</a></li>
                        </ul>
                      </div>
                </aside>
                <!-- CONTENT-->
                <section class="pb-5 mb-md-2" id="tables-basic">
                  <div class="card border-0 box-shadow-lg cardh">
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane fade active show" id="result1" role="tabpanel">
                          <div class="table-responsive">
                            @yield('content')
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            </div>
          </section>
      </main>
        <!-- inport js-->
        <script src="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/components/prism-core.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/components/prism-markup.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/components/prism-clike.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/components/prism-javascript.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/components/prism-pug.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>
        <script src="{{ asset('theme/vendor/prismjs/plugins/line-numbers/prism-line-numbers.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('theme/js/theme.min.js')}}"></script>
        @yield('js')
      </body>
</html>

