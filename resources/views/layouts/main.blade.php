<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- SEO Meta Tags-->
    {{--    <meta name="description" content="Around - Multipurpose Bootstrap Template">--}}
    {{--    <meta name="keywords" content="bootstrap, business, consulting, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, multipurpose, product landing, shop, software, ui kit, web studio, landing, html5, css3, javascript, gallery, slider, touch, creative">--}}
    {{--    <meta name="author" content="Createx Studio">--}}
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    {{--    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">--}}
    {{--    <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">--}}
    {{--    <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">--}}
    {{--    <link rel="manifest" href="../site.webmanifest">--}}
    {{--    <link rel="mask-icon" color="#5bbad5" href="../safari-pinned-tab.svg">--}}
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles-->
    {{--    <link rel="stylesheet" media="screen" href="../vendor/simplebar/dist/simplebar.min.css"/>--}}
    <link rel="stylesheet" href="{{ asset('theme/vendor/simplebar/dist/simplebar.min.css')}}">
    {{--    <link rel="stylesheet" media="screen" href="../vendor/prismjs/themes/prism.css"/>--}}
    {{--    <link rel="stylesheet" media="screen" href="../vendor/prismjs/plugins/toolbar/prism-toolbar.css"/>--}}
    {{--    <link rel="stylesheet" media="screen" href="../vendor/prismjs/plugins/line-numbers/prism-line-numbers.css"/>--}}
    <link rel="stylesheet" href="{{ asset('theme/vendor/prismjs/themes/prism.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/prismjs/plugins/toolbar/prism-toolbar.css')}}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/prismjs/plugins/line-numbers/prism-line-numbers.css')}}">
    <!-- Main Theme Styles + Bootstrap-->
    {{--    <link rel="stylesheet" media="screen" href="../css/theme.min.css">--}}
    <link rel="stylesheet" href="{{ asset('theme/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<!-- Body-->
<body>

<main class="container-fluid">
    <!-- Main content-->
    <section class="cs-offcanvas-enabled row pb-3 pb-md-4">
        <div class="col">
            <!-- Navbar-->
            <header class="navbar navbar-expand navbar-light fixed-top navbar-box-shadow bg-light px-3 px-lg-4"
                    data-scroll-header><a class="navbar-brand d-lg-none" href="typography.html"><img width="58"
                                                                                                     src="../img/logo/logo-icon.png"
                                                                                                     alt="Around"/></a>
                <button class="navbar-toggler d-block d-lg-none mr-3 ml-auto" type="button" data-toggle="offcanvas"
                        data-offcanvas-id="componentsNav"><span class="navbar-toggler-icon"></span></button>
                <ul class="navbar-nav ml-auto d-none d-lg-flex">
                    <li class="nav-item"><a class="nav-link" href="../index.html"><i
                                class="fe-eye align-middle mt-n1 mr-2"></i>Live preview</a></li>
                    <li class="nav-item">
                        <div class="nav-link disabled text-border px-1">|</div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../docs/dev-setup.html"><i
                                class="fe-file-text align-middle mt-n1 mr-2"></i>Documentation</a></li>
                    <li class="nav-item">
                        <div class="nav-link disabled text-border px-1">|</div>
                    </li>
                </ul>
                <a class="btn btn-primary btn-shadow ml-lg-4"
                   href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/" target="_blank"
                   rel="noopener"><i class="fe-shopping-cart mr-2 d-none d-sm-inline-block"></i>Buy now</a>
            </header>
            <!-- Side navigation (Off-canvas)-->
            <aside class="cs-offcanvas cs-offcanvas-collapse bg-dark" id="componentsNav">
                <div class="cs-offcanvas-cap bg-darker d-none d-lg-block py-2">
                    <a class="navbar-brand py-1 around" href="typography.html">
                        <img width="153" src="theme/img/logo/logo-icon.png" alt="Around"/>
                    </a>
                <div class="cs-offcanvas-cap bg-darker d-flex d-lg-none">
                    <div class="d-flex align-items-center mt-1">
                        <h5 class="text-light mb-0 mr-3">Menu</h5><span class="badge badge-danger">UI Kit</span>
                    </div>
                    <button class="close text-light lead" type="button" data-toggle="offcanvas"
                            data-offcanvas-id="componentsNav"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="d-flex d-lg-none align-items-center py-4 px-3 border-bottom border-light">
                    <a class="btn btn-outline-light btn-block btn-sm mr-2" href="../index.html">
                        <i class="fe-eye mr-2"></i>Preview</a>
                    <a class="btn btn-outline-light btn-block btn-sm mt-0" href="../docs/dev-setup.html">
                        <i class="fe-file-text mr-2"></i>Docs</a></div>
                <div class="cs-offcanvas-body pt-4 pb-grid-gutter" data-simplebar data-simplebar-inverse>
                    <h6 class="text-light pt-2 pb-2 border-bottom border-light">User</h6>
                    <a class="nav-link-style nav-link-light font-size-sm" href="#">List</a>
                    <a class="nav-link-style nav-link-light font-size-sm" href="#">Roles</a>
                </div>
            </aside>
            <!-- Page title-->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </section>
</main>

<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll>
    <span class="btn-scroll-top-tooltip text-muted font-size-sm mr-2">Top</span>
    <i class="btn-scroll-top-icon fe-arrow-up"></i></a>

<!-- Vendor scrits: js libraries and plugins-->
{{--<script src="../vendor/jquery/dist/jquery.slim.min.js"></script>--}}
<script src="{{ asset('theme/vendor/jquery/dist/jquery.slim.min.js')}}"></script>
{{--<script src="../vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ asset('theme/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('theme/vendor/bs-custom-file-input/dist/bs-custom-file-input.min.js')}}"></script>
{{--<script src="../vendor/simplebar/dist/simplebar.min.js"></script>--}}
<script src="{{ asset('theme/vendor/simplebar/dist/simplebar.min.js')}}"></script>
{{--<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>--}}
<script src="{{ asset('theme/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>
{{--<script src="../vendor/prismjs/components/prism-core.min.js"></script>--}}
{{--<script src="../vendor/prismjs/components/prism-markup.min.js"></script>--}}
{{--<script src="../vendor/prismjs/components/prism-clike.min.js"></script>--}}
{{--<script src="../vendor/prismjs/components/prism-javascript.min.js"></script>--}}
{{--<script src="../vendor/prismjs/components/prism-pug.min.js"></script>--}}
{{--<script src="../vendor/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>--}}
{{--<script src="../vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>--}}
{{--<script src="../vendor/prismjs/plugins/line-numbers/prism-line-numbers.min.js"></script>--}}

<script src="{{ asset('theme/vendor/prismjs/components/prism-core.min.js')}}"></script>
<script src="{{ asset('theme/vendor/prismjs/components/prism-markup.min.js')}}"></script>
<script src="{{ asset('theme/vendor/prismjs/components/prism-clike.min.js')}}"></script>
<script src="{{ asset('theme/vendor/prismjs/components/prism-javascript.min.js')}}"></script>
<script src="{{ asset('theme/vendor/prismjs/components/prism-pug.min.js')}}"></script>
<script src="{{ asset('theme/vendor/plugins/toolbar/prism-toolbar.min.js')}}"></script>
<script src="{{ asset('theme/vendor/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js')}}"></script>
<script src="{{ asset('theme/vendor/plugins/line-numbers/prism-line-numbers.min.js')}}"></script>

<!-- Main theme script-->
<script src="{{ asset('theme/js/theme.min.js') }}"></script>
</body>
</html>
