<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon"
        href="{{ asset($setting['site_fav_icon'] ? get_media($setting['site_fav_icon'])->fullurl : 'frontend/images/logo.png') }}"
        type="image/x-icon">
    <link rel="icon"
        href="{{ asset($setting['site_fav_icon'] ? get_media($setting['site_fav_icon'])->fullurl : 'frontend/images/logo.png') }}"
        type="image/x-icon">
    @yield('seo')

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css">
</head>

<body>
    @include('layouts.frontend.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/waypoints.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/meanmenu.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/slick.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/range-slider.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/nice-select.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/purecounter.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/isotope-pkgd.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('admin/assets/js/toast-new.js') }}"></script>
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>

</html>
