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
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/swiper-bundle.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/aos.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/default.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/main.css" />

</head>

<body>
    @include('layouts.frontend.header')

    <main>
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.odometer.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/gsap.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/ScrollTrigger.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/SplitText.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/gsap-animation.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.parallaxScroll.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/swiper-bundle.js"></script>
    {{--
    <script src="{{ asset('frontend') }}/assets/js/ajax-form.js"></script> --}}
    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script>
        const circles = document.querySelectorAll(".circle");
        circles.forEach((circle) => {
            circle.innerHTML = circle.textContent.replace(/\S/g, "<span>$&</span>");
            const elements = circle.querySelectorAll("span");
            for (let i = 0; i < elements.length; i++) {
                elements[i].style.transform = "rotate(" + i * 17 + "deg)";
            }
        });
    </script>
</body>

</html>