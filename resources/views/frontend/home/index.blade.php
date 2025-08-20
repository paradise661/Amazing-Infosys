@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.global.seo', [
        'name' => $setting['homepage_seo_title'] ?? 'Amazing Infosys',
        'title' => $setting['homepage_seo_title'] ?? 'Amazing Infosys',
        'description' => $setting['homepage_seo_description'] ?? '',
        'keyword' => $setting['homepage_seo_keywords'] ?? '',
        'schema' => $setting['homepage_seo_schema'] ?? '',
        'seoimage' => $setting['homepage_image'] ?? '',
        'created_at' => '2018-02-26T08:09:15+00:00',
        'updated_at' => '2018-02-26T10:54:05+00:00',
    ])
@endsection
@php
    $imgTag = get_image($request->image, '', 'home-project'); // returns <img ...>
    preg_match('/src="([^"]+)"/', $imgTag, $matches);
    $requestsrc = $matches[1] ?? null;
@endphp

@section('content')
                                                                                                    <main class="fix">
                                                                                                        <!-- banner-area -->
                                                                                                        {{-- <section class="banner-area banner-bg">
                                                                                                            <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100"
                                                                                                                data-background="{{ asset('frontend') }}/assets/img/banner/banner_bg.jpg"></div>
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-lg-6">
                                                                                                                        <div class="banner-content">
                                                                                                                            <span class="sub-title" data-aos="fade-up" data-aos-delay="0">{!! $sliders->name ?? '' !!}</span>
                                                                                                                            <div data-aos="fade-up" data-aos-delay="400">{!! $sliders->description ?? '' !!}</div>
                                                                                                                            <a href="about" class="btn" data-aos="fade-up" data-aos-delay="600">Read More</a>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="banner-social">
                                                                                                                    <h5 class="title text-primary">Follow us</h5>
                                                                                                                    <ul class="list-wrap">
                                                                                                                        @if ($socialdata->isNotEmpty())
                                                                                                                            @foreach ($socialdata as $data)
                                                                                                                                <li>
                                                                                                                                    <a href="{{ $data->link ?? '' }}"><i class="{{ $data->icon ?? '' }}"></i></a>
                                                                                                                                </li>
                                                                                                                            @endforeach
                                                                                                                        @endif
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                                <div class="banner-scroll">
                                                                                                                    <a href="#about">Scroll Down <span><i class="fas fa-arrow-right"></i></span></a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </section> --}}

                                                                                                        <section class="banner__area-four banner__bg-four">
                                                                                                                <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100" data-background="{{ asset('frontend')}}/assets/img/banner/h5_banner_bg.jpg"></div>
                                                                                                                <div class="container">
                                                                                                                    <div class="row align-items-center justify-content-center">
                                                                                                                        <div class="col-lg-6">
                                                                                                                            <div class="banner__content-four">
                                                                                                                                {{-- <h2 class="title" data-aos="fade-up" data-aos-delay="100">Agency's Vision for the <span>Next Generation</span> of Advertising</h2> --}}
                                                                                                                                <h2 class="title" data-aos="fade-up" data-aos-delay="100">{!! $sliders->name ?? '' !!}</h2>
                                                                                                                                <p data-aos="fade-up" data-aos-delay="300">{!! $sliders->description ?? '' !!}</p>
                                                                                                                                <a href="about" class="btn" data-aos="fade-up" data-aos-delay="600">Read More</a>
                                                                                                                                <div class="shape">
                                                                                                                                    {{-- <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_shape01.png" alt="Apexa" class="rotateme dark-opacity" /> --}}
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-lg-6 col-md-9">
                                                                                                                            <div class="banner__img-two">
                                                                                                                                <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_img01.png" alt="Apexa" />
                                                                                                                                <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_img02.png" alt="Apexa" />
                                                                                                                                <div class="img__shape">
                                                                                                                                    {{-- <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_shape02.png" alt="Apexa" class="rightToLeft dark-opacity" /> --}}
                                                                                                                                    {{-- <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_shape03.png" alt="Apexa" class="alltuchtopdown dark-opacity" /> --}}
                                                                                                                                    <img src="{{ asset('frontend')}}/assets/img/banner/h5_banner_shape04.png" alt="Apexa" />
                                                                                                                                    {{-- <img class="dark-opacity" src="assets/img/banner/h5_banner_shape05.png" alt="Apexa" /> --}}
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section>
                                                                                                        <!-- banner-area-end -->
                                                                                                        <!-- brand-area -->
                                                                                                        <div class="brand-area">
                                                                                                            <div class="container">
                                                                                                                <div class="swiper-container brand-active">
                                                                                                                    <div class="swiper-wrapper">
                                                                                                                        @foreach ($partners as $item)
                                                                                                                            <div class="swiper-slide">
                                                                                                                                <div class="brand-item">
                                                                                                                                    {!! get_image($item->image) !!}

                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                         <!-- brand-area -->
                                                                                                        {{-- <div class="brand__area-eight">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="swiper-container brand-active">
                                                                                                                            <div class="swiper-wrapper">
                                                                                                                                @foreach ($partners as $item)
                                                                                                                                    <div class="swiper-slide">
                                                                                                                                        <div class="brand-item">
                                                                                                                                            {!! get_image($item->image) !!}
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                @endforeach
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div> --}}

                                                                                                        <!-- brand-area -->
                                                                                                        <!-- about-area -->
                                                                                                        {{-- <section id="about" class="about-area pt-120 pb-120">
                                                                                                            <div class="container">
                                                                                                                <div class="row align-items-center">
                                                                                                                    <div class="col-lg-6">
                                                                                                                        <div class="about-img-wrap">
                                                                                                                            <div class="mask-img-wrap">
                                                                                                                                @if (!$setting['homepage_image'] == null)
                                                                                                                                    {!! get_image($setting['homepage_image']) !!}
                                                                                                                                @else
                                                                                                                                    <img src="{{ asset('frontend') }}/assets/img/images/about_img01.jpg" alt="pexa" />
                                                                                                                                @endif
                                                                                                                            </div>
                                                                                                                            <div class="shape">
                                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/about_shape01.png" alt="Apexa" />
                                                                                                                            </div>
                                                                                                                            <div class="experience-year">
                                                                                                                                <div class="icon">
                                                                                                                                    <i class="flaticon-trophy"></i>
                                                                                                                                </div>
                                                                                                                                <div class="content">
                                                                                                                                    <h6 class="circle rotateme">Years Of - Experience 25 -</h6>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-lg-6">
                                                                                                                        <div class="about-content">
                                                                                                                            <div class="section-title mb-35 tg-heading-subheading animation-style3">
                                                                                                                                <span class="sub-title">Simply Know</span>
                                                                                                                                <h2 class="title tg-element-title">
                                                                                                                                    About Company
                                                                                                                                </h2>
                                                                                                                            </div>
                                                                                                                            <div class="about-list">
                                                                                                                                <ul class="list-wrap">
                                                                                                                                    <li>
                                                                                                                                        <div class="icon">
                                                                                                                                            <i class="flaticon-target"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="content">
                                                                                                                                            <h4 class="title">Business Solutions</h4>
                                                                                                                                            <p>Smart software and web solutions to grow your business.</p>
                                                                                                                                        </div>
                                                                                                                                    </li>
                                                                                                                                    <li>
                                                                                                                                        <div class="icon">
                                                                                                                                            <i class="flaticon-profit"></i>
                                                                                                                                        </div>
                                                                                                                                        <div class="content">
                                                                                                                                            <h4 class="title">Quality Services</h4>
                                                                                                                                            <p>Reliable, secure, and scalable IT services you can trust</p>
                                                                                                                                        </div>
                                                                                                                                    </li>
                                                                                                                                </ul>
                                                                                                                            </div>
                                                                                                                            <p>{!! $setting['homepage_description'] ?? '' !!}</p>
                                                                                                                            <div class="about-bottom">
                                                                                                                                <div class="author-wrap">
                                                                                                                                    @foreach ($teams as $team)
                                                                                                                                        @if ($team->position == 'CEO')
                                                                                                                                            <div class="thumb">
                                                                                                                                                {!! get_image($team->image, '', 'team') !!}
                                                                                                                                            </div>
                                                                                                                                            <div class="content">
                                                                                                                                                <h4 class="title">{{ $team->name ?? '' }} <span>, @if ($team->position)
                                                                                                                                                            {{ $team->position ?? '' }}
                                                                                                                                                        @endif
                                                                                                                                                    </span></h4>
                                                                                                                                            </div>
                                                                                                                                        @endif
                                                                                                                                    @endforeach
                                                                                                                                </div>
                                                                                                                                <a href="about" class="btn btn-two">Read More</a>
                                                                                                                            </div>

                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>

                                                                                                        </section> --}}
                                                                                                        <!-- about-area-end -->
                                                                                                        <!-- services-area -->

                                                                                                    <section class="services__area-seven services__bg-seven">
                                                                                                    <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100" data-background="{{ asset('frontend') }}/assets/img/bg/h5_services_bg.jpg"></div>
                                                                                                    <div class="container">
                                                                                                        <div class="row justify-content-center">
                                                                                                            <div class="col-lg-7">
                                                                                                                <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                                                                                                                    <span class="sub-title">WHAT WE OFFER</span>
                                                                                                                    <h2 class="title tg-element-title">Unlocking the Power of <br> Technology</h2>
                                                                                                                    {{-- <p class="tg-element-title">
                                                                                                                        Mauris ut enim sit amet lacus ornare ullamcorper Praesent plaacerat <br />
                                                                                                                        neque eu purus rhoncus vel tincidunt odio ultrices.
                                                                                                                    </p> --}}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="services__item-wrap-two">
                                                                                                            <div class="row justify-content-center gutter-24">
                                                                                                                @foreach ($services as $key => $srvs)
                                                                                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                                                                                        <div class="services__item-five">
                                                                                                                            <div class="services__icon-five">
                                                                                                                                @if($key == 0)
                                                                                                                                    <i class="flaticon-profit"></i>
                                                                                                                                @elseif ($key == 1)
                                                                                                                                    <i class="flaticon-light-bulb"></i>
                                                                                                                                @elseif ($key == 2)
                                                                                                                                    <i class="flaticon-startup"></i>
                                                                                                                                @elseif($key == 3)
                                                                                                                                    <i class="flaticon-target"></i>
                                                                                                                                @endif
                                                                                                                                <div class="services__icon-shape">
                                                                                                                                    <div class="shape one">
                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="89" viewBox="0 0 100 89" fill="none">
                                                                                                                                                <path
                                                                                                                                                    d="M89.3997 20.1665C90.5806 21.4322 91.2497 23.0786 91.2607 24.7458C91.2717 26.4129 90.6237 27.965 89.4585 29.0627L82.7168 35.3787C83.8857 34.2836 85.4772 33.7354 87.141 33.8548C88.8049 33.9742 90.4049 34.7514 91.589 36.0153C92.7732 37.2792 93.4445 38.9265 93.4553 40.5946C93.4661 42.2627 92.8154 43.815 91.6465 44.9101L89.4391 46.9782C90.7021 46.1158 92.2814 45.7931 93.8594 46.075C95.4374 46.3569 96.897 47.2225 97.9445 48.4977C98.9919 49.7729 99.5496 51.363 99.5051 52.948C99.4607 54.5331 98.8175 55.9955 97.705 57.041L66.4218 86.3494C65.306 87.3914 63.8048 87.938 62.2202 87.8791C60.6357 87.8202 59.0853 87.1602 57.881 86.0319C56.6767 84.9037 55.908 83.3908 55.7294 81.7978C55.5509 80.2048 55.9757 78.6498 56.9185 77.4457L46.2874 87.4056C45.1185 88.5008 43.5271 89.0489 41.8632 88.9295C40.1994 88.8101 38.5994 88.033 37.4152 86.769C36.2311 85.5051 35.5598 83.8579 35.549 82.1898C35.5382 80.5217 36.1888 78.9693 37.3578 77.8742L42.5545 73.0055C41.5403 73.9509 40.2052 74.4903 38.7733 74.5334C37.3414 74.5764 35.8998 74.1205 34.6905 73.242C33.4812 72.3636 32.5777 71.1161 32.1318 69.7089C31.6858 68.3017 31.7245 66.8205 32.2413 65.5139L22.1964 74.9247C21.0275 76.0198 19.4361 76.5679 17.7722 76.4485C16.1084 76.3291 14.5084 75.552 13.3242 74.2881C12.1401 73.0241 11.4688 71.3769 11.458 69.7088C11.4472 68.0407 12.0978 66.4883 13.2667 65.3932L25.0674 54.3375C23.8985 55.4326 22.3071 55.9808 20.6432 55.8614C18.9794 55.742 17.3794 54.9649 16.1952 53.7009C15.0111 52.437 14.3398 50.7898 14.329 49.1217C14.3182 47.4536 14.9688 45.9012 16.1377 44.8061L11.4359 49.2111C10.267 50.3062 8.67555 50.8544 7.01169 50.735C5.34784 50.6156 3.74784 49.8384 2.56369 48.5745C1.37954 47.3106 0.708235 45.6633 0.697453 43.9952C0.686672 42.3271 1.3373 40.7748 2.5062 39.6797L35.5613 8.71135C36.7302 7.61624 38.3217 7.06808 39.9855 7.18747C41.6494 7.30686 43.2494 8.08401 44.4335 9.34795C45.6177 10.6119 46.289 12.2591 46.2998 13.9272C46.3105 15.5953 45.6599 17.1477 44.491 18.2428L61.4956 2.31173C62.6645 1.21663 64.2559 0.668477 65.9198 0.787863C67.5836 0.90725 69.1836 1.6844 70.3678 2.94834C71.5519 4.21229 72.2232 5.8595 72.234 7.5276C72.2448 9.19571 71.5942 10.7481 70.4253 11.8432L65.2285 16.7119C66.242 15.7657 67.5766 15.2252 69.0084 15.181C70.4403 15.1369 71.8821 15.5918 73.092 16.4694C74.3019 17.3471 75.2063 18.594 75.6532 20.001C76.1001 21.4079 76.0625 22.8893 75.5466 24.1964L80.5275 19.5299C81.699 18.4397 83.2895 17.8948 84.9518 18.014C86.6141 18.1333 88.2131 18.9071 89.3997 20.1665Z"
                                                                                                                                                    fill="currentcolor"
                                                                                                                                                />
                                                                                                                                            </svg>


                                                                                                                                    </div>
                                                                                                                                    <div class="shape two">

                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                                                                                                                                                <path d="M7.36755 4.37738C7.36755 6.02099 6.03514 7.3534 4.39153 7.3534C2.74792 7.3534 1.41552 6.02099 1.41552 4.37738C1.41552 2.73376 2.74792 1.40136 4.39153 1.40136C6.03514 1.40136 7.36755 2.73376 7.36755 4.37738Z" stroke="currentcolor" stroke-width="1.19041" />
                                                                                                                                            </svg>

                                                                                                                                    </div>
                                                                                                                                    <div class="shape three rotateme">

                                                                                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 9 9" fill="none">
                                                                                                                                                <path d="M1.70898 1.73877L7.06581 7.0956M1.70898 7.0956L7.06581 1.73877" stroke="currentcolor" stroke-width="1.92846" stroke-linecap="round" stroke-linejoin="round" />
                                                                                                                                            </svg>

                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="services__content-five">
                                                                                                                                <h2 class="title"><a
                                                                                                                                                href="{{ route('servicesingle', $srvs->slug) }}">{{ $srvs->name ?? '' }}</a></h2>
                                                                                                                                <p class="desc">{{ stripLetters($srvs->description, 135, '...') }}</p>
                                                                                                                                <a href="{{ route('servicesingle', $srvs->slug) }}" class="btn">Read More</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                @endforeach

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>


                                                                                                <section class="about__area-eight pt-5">
                                                                                                <div class="container">
                                                                                                    <div class="row align-items-center justify-content-center">
                                                                                                        <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                                                                                                            <div class="about__img-wrap-seven">
                                                                                                                {{-- <img src="{{ asset('frontend') }}/assets/img/images/inner04_about_img.jpg" alt="Apexa" /> --}}
                                                                                                                {!! get_image($setting['homepage_image']) !!}
                                                                                                                <div class="about__award-box about__award-box-two">
                                                                                                                    <div class="icon">
                                                                                                                        <i class="flaticon-trophy"></i>
                                                                                                                    </div>
                                                                                                                    <div class="content">
                                                                                                                        @foreach ($counters as $key => $count)
                                                                                                                            @if ($key == 0)
                                                                                                                                <h2 class="title">{{ $count->count_num ?? '' }}+</h2>
                                                                                                                            @endif
                                                                                                                        @endforeach
                                                                                                                        <p>
                                                                                                                            Satisfied Client
                                                                                                                        </p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="shape">
                                                                                                                    {{-- <img src="{{ asset('frontend') }}/assets/img/images/h5_about_shape.png" alt="Apexa" class="ribbonRotate" /> --}}
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-lg-6">
                                                                                                            <div class="about__content-seven">
                                                                                                                <div class="section-title mb-25">
                                                                                                                    <span class="sub-title">ABOUT COMPANY</span>
                                                                                                                    <h2 class="title wow">Business Growth Creativity Meet Our <span>Agency's Experts</span></h2>
                                                                                                                </div>
                                                                                                                <p>{!! $setting['homepage_description'] ?? '' !!}</p>
                                                                                                                <div class="about__content-inner-five">
                                                                                                                    <div class="about__list-img-four">
                                                                                                                        <img src="{{ asset('frontend') }}/assets/img/images/about_list_img04.png" alt="Apexa" />
                                                                                                                    </div>
                                                                                                                    <div class="about__list-box">
                                                                                                                        <ul class="list-wrap">
                                                                                                                            <li><i class="flaticon-arrow-button"></i>100% Client Satisfaction</li>
                                                                                                                            <li><i class="flaticon-arrow-button"></i>Web & Mobile App Solutions</li>
                                                                                                                            <li><i class="flaticon-arrow-button"></i>100% Secure Money Back</li>
                                                                                                                            <li><i class="flaticon-arrow-button"></i>24/7 Technical Support</li>
                                                                                                                        </ul>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <a href="contact-us" class="btn btn-two">Contact With Us</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </section>


                                                                                            <section class="choose__area-five">
                                                                                                 <div class="container">
                                                                                                     <div class="row align-items-center justify-content-center">
                                                                                                         <div class="col-lg-6 col-md-9">
                                                                                                             <div class="choose__img-wrap-five">
                                                                                                                 <img src="{{ asset('frontend') }}/assets/img/images/h5_choose_img01.jpg" alt="Apexa" />
                                                                                                                 <img src="{{ asset('frontend') }}/assets/img/images/h5_choose_img02.jpg" alt="Apexa" />
                                                                                                                 <img src="{{ asset('frontend') }}/assets/img/images/h5_choose_shape01.jpg" alt="Apexa" data-parallax='{"x" : 40}' />
                                                                                                             </div>
                                                                                                         </div>
                                                                                                         <div class="col-lg-6">
                                                                                                             <div class="choose__content-five">
                                                                                                                 <div class="section-title mb-30 tg-heading-subheading animation-style3">
                                                                                                                     <span class="sub-title">Why Choose Our Service</span>
                                                                                                                     <h2 class="title tg-element-title">{{ $whychoose->name ?? '' }}</h2>
                                                                                                                 </div>
                                                                                                                 <p>{!! $whychoose->description ?? '' !!}</p>
                                                                                                                 <div class="choose__box-wrap">
                                                                                                                     <div class="row">
                                                                                                                         <div class="col-sm-6">
                                                                                                                             <div class="choose__box">
                                                                                                                                 <div class="icon">
                                                                                                                                     <i class="flaticon-email"></i>
                                                                                                                                 </div>
                                                                                                                                 <div class="content">
                                                                                                                                     <h4 class="title">E-mail Marketing</h4>
                                                                                                                                     <p>
                                                                                                                                        We help you build effective email campaigns that reach the right audience,
                                                                                                                                     </p>
                                                                                                                                 </div>
                                                                                                                             </div>
                                                                                                                         </div>
                                                                                                                         <div class="col-sm-6">
                                                                                                                             <div class="choose__box">
                                                                                                                                 <div class="icon">
                                                                                                                                     <i class="flaticon-finance"></i>
                                                                                                                                 </div>
                                                                                                                                 <div class="content">
                                                                                                                                     <h4 class="title">Business Growth</h4>
                                                                                                                                     <p>
                                                                                                                                        Our digital strategies and IT solutions are designed to streamline your operations
                                                                                                                                     </p>
                                                                                                                                 </div>
                                                                                                                             </div>
                                                                                                                         </div>
                                                                                                                     </div>
                                                                                                                 </div>
                                                                                                                 <div class="shape">
                                                                                                                 </div>
                                                                                                             </div>
                                                                                                         </div>
                                                                                                     </div>
                                                                                                 </div>
                                                                                             </section>


                                                                                                        <!-- choose-area-end -->
                                                                                                        <!-- counter-area -->
                                                                                                        <section class="counter-area">
                                                                                                            <div class="container">
                                                                                                                <div class="row justify-content-center">
                                                                                                                    @php
                                                                                                                        $icons = [0 => 'flaticon-trophy', 1 => 'flaticon-happy', 2 => 'flaticon-user'];
                                                                                                                    @endphp
                                                                                                                    @foreach ($counters as $key => $count)
                                                                                                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                                                                                                            <div class="counter-item">
                                                                                                                                <div class="icon">
                                                                                                                                    <i class="{{ $icons[$key] }}"></i>
                                                                                                                                </div>
                                                                                                                                <div class="content">
                                                                                                                                    <h2 class="count"><span class="odometer"
                                                                                                                                            data-count="{{ $count->count_num ?? '' }}"></span>+</h2>
                                                                                                                                    <p>
                                                                                                                                        {{ $count->name ?? '' }}
                                                                                                                                    </p>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    @endforeach
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="counter-shape-wrap">
                                                                                                                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/counter_shape01.png"
                                                                                                                    alt="Apexa" data-aos="fade-right" data-aos-delay="400" />
                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/counter_shape02.png" alt="Apexa"
                                                                                                                    data-parallax='{"x" : 100 , "y" : -100 }' />
                                                                                                                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/counter_shape03.png"
                                                                                                                    alt="Apexa" data-aos="fade-left" data-aos-delay="400" />
                                                                                                            </div>
                                                                                                        </section>
                                                                                                        <!-- counter-area-end -->
                                                                                                        <!-- project-area -->
                                                                                                        {{-- <section class="project-area">
                                                                                                            <div class="container">
                                                                                                                <div class="row justify-content-center">
                                                                                                                    <div class="col-xl-6 col-lg-7">
                                                                                                                        <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                                                                                                                            <span class="sub-title">OUR PROJECTS</span>
                                                                                                                            <h2 class="title tg-element-title">Let’s Discover All Our Clients Recent Project</h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="project-item-wrap">
                                                                                                                <div class="container custom-container-two">
                                                                                                                    <div class="row">
                                                                                                                        @foreach ($projects as $key => $prj)
                                                                                                                            <div class="col-xl-3 col-md-6">
                                                                                                                                <div class="project-item">
                                                                                                                                    <div class="project-thumb">
                                                                                                                                        <a href="{{ route('projectsingle', $prj->slug) }}">
                                                                                                                                            {!! get_image($prj->image, '', 'home-project') !!}
                                                                                                                                        </a>
                                                                                                                                    </div>
                                                                                                                                    <div class="project-content">
                                                                                                                                        <div class="left-side-content">
                                                                                                                                            <h4 class="title"><a
                                                                                                                                                    href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a>
                                                                                                                                            </h4>
                                                                                                                                        </div>
                                                                                                                                        <div class="link-arrow">
                                                                                                                                            <a href="{{ route('projectsingle', $prj->slug) }}">
                                                                                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15"
                                                                                                                                                    fill="none">
                                                                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                                                                                        d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                                                                                                                        fill="currentcolor" />
                                                                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                                                                                        d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                                                                                                                        fill="currentcolor" />
                                                                                                                                                </svg>
                                                                                                                                            </a>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                    <div class="row justify-content-center">
                                                                                                                        <div class="col-12">
                                                                                                                            <div class="project-content-bottom">

                                                                                                                                <a href="project-details" class="btn">See All Projects</a>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="project-shape-wrap">
                                                                                                                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/project/project_shape01.png"
                                                                                                                    alt="Apexa" class="alltuchtopdown" />
                                                                                                                <img src="{{ asset('frontend') }}/assets/img/project/project_shape02.png" alt="Apexa"
                                                                                                                    class="rotateme" />
                                                                                                            </div>
                                                                                                        </section> --}}

                                                                                                        <section class="project__area">
                                                                                                            <div class="container-fluid p-0">
                                                                                                                <div class="swiper-container project-active-two">
                                                                                                                    <div class="swiper-wrapper">
                                                                                                                        @foreach ($projects as $key => $prj)
                                                                                                                            <div class="swiper-slide">
                                                                                                                                <div class="project__item-four">
                                                                                                                                    <div class="project__thumb-four">
                                                                                                                                        <a href="{{ route('projectsingle', $prj->slug) }}">
                                                                                                                                                {!! get_image($prj->image, '', 'home-project') !!}
                                                                                                                                                </a>
                                                                                                                                    </div>
                                                                                                                                    <div class="project__content-four">
                                                                                                                                        <div class="left-content">
                                                                                                                                            <h4 class="title"><a
                                                                                                                                                    href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a></h4>
                                                                                                                                            <span>{{ $prj->category ?? '' }}</span>
                                                                                                                                        </div>
                                                                                                                                        <a href="{{ route('projectsingle', $prj->slug) }}" class="right-arrow"><i class="flaticon-arrow-button"></i></a>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                        {{-- <div class="swiper-slide">
                                                                                                                            <div class="project__item-four">
                                                                                                                                <div class="project__thumb-four">
                                                                                                                                    <a href="project-details"><img src="{{ asset('frontend') }}/assets/img/project/h5_project_img02.jpg" alt="Apexa" /></a>
                                                                                                                                </div>
                                                                                                                                <div class="project__content-four">
                                                                                                                                    <div class="left-content">
                                                                                                                                        <h4 class="title"><a href="project-details">Business Consulting</a></h4>
                                                                                                                                        <span>Business Strategy</span>
                                                                                                                                    </div>
                                                                                                                                    <a href="project-details" class="right-arrow"><i class="flaticon-arrow-button"></i></a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="swiper-slide">
                                                                                                                            <div class="project__item-four">
                                                                                                                                <div class="project__thumb-four">
                                                                                                                                    <a href="project-details"><img src="{{ asset('frontend') }}/assets/img/project/h5_project_img03.jpg" alt="Apexa" /></a>
                                                                                                                                </div>
                                                                                                                                <div class="project__content-four">
                                                                                                                                    <div class="left-content">
                                                                                                                                        <h4 class="title"><a href="project-details">Digital Agency</a></h4>
                                                                                                                                        <span>Modern Strategy</span>
                                                                                                                                    </div>
                                                                                                                                    <a href="project-details" class="right-arrow"><i class="flaticon-arrow-button"></i></a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="swiper-slide">
                                                                                                                            <div class="project__item-four">
                                                                                                                                <div class="project__thumb-four">
                                                                                                                                    <a href="project-details"><img src="{{ asset('frontend') }}/assets/img/project/h5_project_img04.jpg" alt="Apexa" /></a>
                                                                                                                                </div>
                                                                                                                                <div class="project__content-four">
                                                                                                                                    <div class="left-content">
                                                                                                                                        <h4 class="title"><a href="project-details">Inventory Tracking</a></h4>
                                                                                                                                        <span>Modern Strategy</span>
                                                                                                                                    </div>
                                                                                                                                    <a href="project-details" class="right-arrow"><i class="flaticon-arrow-button"></i></a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="swiper-slide">
                                                                                                                            <div class="project__item-four">
                                                                                                                                <div class="project__thumb-four">
                                                                                                                                    <a href="project-details"><img src="{{ asset('frontend') }}/assets/img/project/h5_project_img03.jpg" alt="Apexa" /></a>
                                                                                                                                </div>
                                                                                                                                <div class="project__content-four">
                                                                                                                                    <div class="left-content">
                                                                                                                                        <h4 class="title"><a href="project-details">Digital Agency</a></h4>
                                                                                                                                        <span>Modern Strategy</span>
                                                                                                                                    </div>
                                                                                                                                    <a href="project-details" class="right-arrow"><i class="flaticon-arrow-button"></i></a>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div> --}}
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </section>

                                                                                                        <!-- request-area-end -->
                                                                                                        <!-- team-area -->
                                                                                                        <section class="team-area pt-120 pb-90">
                                                                                                            <div class="container">
                                                                                                                <div class="row align-items-center">
                                                                                                                    <div class="col-xl-7 col-lg-6">
                                                                                                                        <div class="section-title mb-40 tg-heading-subheading animation-style3">
                                                                                                                            <span class="sub-title">{{ $setting['team_title'] ?? 'Our Team' }}</span>
                                                                                                                            <h2 class="title tg-element-title">
                                                                                                                                {!! $setting['team_description'] ??
    'Leading the Way in IT <br>
                                                                                                                                                                                                Innovation' !!}
                                                                                                                            </h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-xl-5 col-lg-6">
                                                                                                                        <div class="section-content">
                                                                                                                            {{-- <p>Our power of choice is untrammelled and when nothing preven tsbeing able to do what we
                                                                                                                                                                        like best every pleasure.</p> --}}
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="team-item-wrap">
                                                                                                                    <div class="row justify-content-center">
                                                                                                                        @foreach ($teams as $team)
                                                                                                                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                                                                                                                <div class="team-item">
                                                                                                                                    <div class="team-thumb">
                                                                                                                                        {!! get_image($team->image, '', 'team') !!}
                                                                                                                                        <div class="team-social">
                                                                                                                                            <div class="social-toggle-icon">
                                                                                                                                                <i class="fas fa-share-alt"></i>
                                                                                                                                            </div>
                                                                                                                                            <ul class="list-wrap">
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                                                                                                                                </li>
                                                                                                                                                <li>
                                                                                                                                                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                                                                                                                                </li>
                                                                                                                                            </ul>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="team-content">
                                                                                                                                        <h4 class="title"><a href="team-details">{{ $team->name ?? '' }}</a></h4>
                                                                                                                                        <span>
                                                                                                                                            @if ($team->position)
                                                                                                                                                {{ $team->position ?? '' }}
                                                                                                                                            @endif
                                                                                                                                        </span>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        @endforeach
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </section>
                                                                                                        <!-- team-area-end -->
                                                                                                        <!-- consulting-area -->
                                                                                                        <section class="consulting-area">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="consulting-inner-wrap shine-animate-item">
                                                                                                                            <div class="consulting-content">
                                                                                                                                <div class="content-left">
                                                                                                                                    @foreach ($counters as $key => $count)
                                                                                                                                        @if ($key == 0)
                                                                                                                                            <h2 class="title">{{ $count->count_num ?? '' }}+</h2>
                                                                                                                                            <span>Satisfied <br />
                                                                                                                                                Clients</span>
                                                                                                                                        @endif
                                                                                                                                    @endforeach
                                                                                                                                </div>
                                                                                                                                <div class="content-right">
                                                                                                                                    <h2 class="title">{{ $consult->name ?? '' }}</h2>
                                                                                                                                    <p>{!! $consult->description ?? '' !!}</p>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="consulting-img shine-animate">
                                                                                                                                {{-- <img src="{{ asset('frontend') }}/assets/img/images/consulting_img.jpg" alt="Apexa" /> --}}
                                                                                                                                {!! get_image($consult->image, '', 'team') !!}
                                                                                                                            </div>
                                                                                                                            <div class="consulting-shape">
                                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/consulting_shape.png"
                                                                                                                                    alt="Apexa" />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </section>
                                                                                                        <!-- consulting-area-end -->
                                                                                                        <!-- testimonial-area -->
                                                                                                        <section class="testimonial-area">
                                                                                                            <div class="container">
                                                                                                                <div class="row align-items-center justify-content-center">
                                                                                                                    <div class="col-lg-6 order-0 order-lg-2">
                                                                                                                        <div class="swiper-container testimonial-active">
                                                                                                                            <div class="swiper-wrapper">

                                                                                                                                @foreach ($revs as $rev)
                                                                                                                                    <div class="swiper-slide">
                                                                                                                                        <div class="testimonial-item">
                                                                                                                                            <div class="testimonial-info">
                                                                                                                                                <h4 class="title">{{ $rev->name ?? '' }}</h4>
                                                                                                                                                <span>{{ $rev->position ?? '' }}</span>
                                                                                                                                            </div>
                                                                                                                                            <div class="testimonial__rating">
                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                                <i class="fas fa-star"></i>
                                                                                                                                            </div>
                                                                                                                                            <div class="testimonial-content">
                                                                                                                                                <p>{!! $rev->description ?? '' !!}</p>
                                                                                                                                                <div class="icon"><i class="fas fa-quote-right"></i></div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                @endforeach
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="testimonial-slider-dot">
                                                                                                                            <div class="swiper testimonial-nav">
                                                                                                                                <div class="swiper-wrapper">
                                                                                                                                    @foreach ($revs as $rev)
                                                                                                                                        <div class="swiper-slide">
                                                                                                                                            <button>{!! get_image($rev->image, '', 'home-review') !!}</button>
                                                                                                                                        </div>
                                                                                                                                    @endforeach
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-lg-6 col-md-8">
                                                                                                                        <div class="testimonial-img-wrap">
                                                                                                                            <img src="{{ asset('frontend') }}/assets/img/images/testimonial_img.png" alt="Apexa" />
                                                                                                                            <div class="img-shape">
                                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape01.png"
                                                                                                                                    alt="Apexa" />
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="testimonial-shape-wrap">
                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape05.png" alt="Apexa"
                                                                                                                    data-aos="fade-up" data-aos-delay="400" />
                                                                                                                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/testimonial_shape06.png"
                                                                                                                    alt="Apexa" data-aos="fade-left" data-aos-delay="400" />
                                                                                                            </div>
                                                                                                        </section>
                                                                                                        <!-- testimonial-area-end -->
                                                                                                        <!-- blog-post-area -->
                                                                                                        <section class="blog-post-area blog-post-bg">
                                                                                                            <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100 end-0"
                                                                                                                data-background="assets/img/bg/blog_post_bg.jpg"></div>
                                                                                                            <div class="container position-relative z-1">
                                                                                                                <div class="row justify-content-center">
                                                                                                                    <div class="col-xl-6">
                                                                                                                        <div class="section-title text-center mb-40 tg-heading-subheading animation-style3">
                                                                                                                            <span class="sub-title">{{ $setting['blog_title'] ?? 'Latest News' }}</span>
                                                                                                                            <h2 class="title tg-element-title text-primary"> {!! $setting['blog_info'] ?? 'Taking your business to <br> the next level' !!}</h2>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row justify-content-center">
                                                                                                                    @foreach ($blogs as $blog)
                                                                                                                        <div class="col-xl-4 col-lg-6 col-md-10">
                                                                                                                            <div class="blog-post-item shine-animate-item">
                                                                                                                                <div class="blog-post-thumb">
                                                                                                                                    <a class="shine-animate" href="{{ route('blogsingle', $blog->slug) }}">
                                                                                                                                        {!! get_image($blog->image, '', 'home-blog') !!}
                                                                                                                                    </a>
                                                                                                                                    {{-- <a href="blog" class="post-tag">Business</a> --}}
                                                                                                                                </div>
                                                                                                                                <div class="blog-post-content">
                                                                                                                                    <h2 class="title">
                                                                                                                                        <a href="{{ route('blogsingle', $blog->slug) }}">{{ $blog->name ?? '' }}</a>
                                                                                                                                    </h2>
                                                                                                                                    <div class="blog-avatar">
                                                                                                                                        <div class="avatar-thumb">
                                                                                                                                            <img src="{{ asset('frontend') }}/assets/img/blog/blog_avatar01.png"
                                                                                                                                                alt="Apexa" />
                                                                                                                                        </div>
                                                                                                                                        <div class="avatar-content">
                                                                                                                                            {{-- <p>By <a href="blog-details">Doman Smith</a></p> --}}
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="blog-post-meta">
                                                                                                                                        <ul class="list-wrap">
                                                                                                                                            <li>
                                                                                                                                                <a href="{{ route('blogsingle', $blog->slug) }}" class="btn">Read
                                                                                                                                                    More</a>
                                                                                                                                            </li>
                                                                                                                                            <li><i
                                                                                                                                                    class="fas fa-calendar-alt"></i>{{ date('d', strtotime($blog->created_at)) }}
                                                                                                                                                {{ date('M', strtotime($blog->created_at)) }}</li>
                                                                                                                                        </ul>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    @endforeach

                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="blog-shape-wrap">
                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/blog_shape01.png" alt="Apexa"
                                                                                                                    data-aos="fade-right" data-aos-delay="400" />
                                                                                                                <img src="{{ asset('frontend') }}/assets/img/images/blog_shape02.png" alt="Apexa"
                                                                                                                    data-aos="fade-left" data-aos-delay="400" />
                                                                                                            </div>
                                                                                                        </section>
                                                                                                        <!-- blog-post-area-end -->
                                                                                                        <!-- call-back-area -->

                                                                                                        <!-- call-back-area-end -->
                                                                                                    </main>
@endsection
