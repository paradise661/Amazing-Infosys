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

@section('content')
        <main class="fix">
        <!-- banner-area -->
        <section class="banner-area banner-bg">
            <div class="bg-img position-absolute top-0 bottom-0 start-0 w-100 h-100"
                data-background="{{ asset('frontend') }}/assets/img/banner/banner_bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <span class="sub-title" data-aos="fade-up" data-aos-delay="0">We Are Expert In This
                                Field</span>
                            {{-- <h2 class="title text-primary" data-aos="fade-up" data-aos-delay="200">{{ $sliders->name ?? 'About Company' }}</h2> --}}
                            <p data-aos="fade-up" data-aos-delay="400">{!! $sliders->description ?? '' !!}</p>
                            <a href="about" class="btn" data-aos="fade-up" data-aos-delay="600">Read More</a>
                        </div>
                        {{-- <div class="banner-shape">
                            <img src="{{ asset('frontend') }}/assets/img/banner/banner_shape01.png" alt="Apexa" class="rightToLeft" />
                            <img src="{{ asset('frontend') }}/assets/img/banner/banner_shape02.png" alt="Apexa" class="ribbonRotate" />
                        </div> --}}
                    </div>
                </div>
                <div class="banner-social">
                    <h5 class="title text-primary">Follow us</h5>
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
                        <li>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="banner-scroll">
                    <a href="#about">Scroll Down <span><i class="fas fa-arrow-right"></i></span></a>
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
        <!-- about-area -->
        <section id="about" class="about-area pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img-wrap">
                            <div class="mask-img-wrap">
                                 @if(!$setting['homepage_image'] == Null)
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
                                <span class="sub-title">Simply Know About</span>
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
                                            <p>Semper egetuis tellus urna condi</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Quality Services</h4>
                                            <p>Semper egetuis tellus urna condi</p>
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
                                                {{-- <img src="assets/img/images/sign.png" alt="Apexa" /> --}}
                                                <h4 class="title">{{ $team->name ?? '' }} <span>, @if ($team->position)
                                                    {{ $team->position ?? '' }}
                                                @endif</span></h4>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                <a href="about" class="btn btn-two">Read More</a>
                            </div>
                            {{-- <div class="about-shape-wrap">
                                <img src="assets/img/images/about_shape03.png" alt="Apexa" />
                                <img src="assets/img/images/about_shape04.png" alt="Apexa" class="ribbonRotate" />
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="about-left-shape dark-opacity">
                <img class="dark-opacity" src="assets/img/images/about_shape02.png" alt="Apexa" />
            </div> --}}
        </section>
        <!-- about-area-end -->
        <!-- services-area -->
        <section class="services-area services-bg position-relative">
            <div class="bg-img position-absolute top-0 bottom-0 start-0 end-0 z-0"
                data-background="{{ asset('frontend') }}/assets/img/bg/services_bg.jpg"></div>
            <div class="container position-relative z-1">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-40 tg-heading-subheading animation-style3">
                            <span class="sub-title">WHAT WE OFFER</span>
                            <h2 class="title tg-element-title text-primary">Unlocking the Power of <br> Technology</h2>
                        </div>
                    </div>
                </div>
                <div class="services-item-wrap">
                    <div class="row justify-content-center">
                        @foreach ($services as $srvs)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                                <div class="services-item shine-animate-item">
                                    <div class="services-thumb">
                                        {{-- <a href="services-details" class="shine-animate"><img
                                                src="assets/img/services/services_img01.jpg" alt="Apexa" /></a> --}}
                                        <a href="{{ route('servicesingle', $srvs->slug) }}" class="shine-animate">
                                        {!! get_image($srvs->image, '', 'home-service') !!}
                                        </a>
                                    </div>
                                    <div class="services-content">
                                        <div class="icon">
                                            <i class="flaticon-profit"></i>
                                        </div>
                                        <h4 class="title"><a href="{{ route('servicesingle', $srvs->slug) }}">{{ $srvs->name ?? '' }}</a></h4>
                                        <p>{{ stripLetters($srvs->description, 135, '...') }}</p>
                                        <a href="{{ route('servicesingle', $srvs->slug) }}" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="services-bottom-content">
                    <p>Empowering Businesses through Strategic Consulting With Us</p>
                    <a href="services" class="btn">See All Services</a>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
        <!-- choose-area -->
        <section class="choose-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-0 order-lg-2">
                        <div class="choose-img-wrap">
                            <img src="assets/img/images/choose_img01.jpg" alt="Apexa" />
                            <img src="assets/img/images/choose_img02.jpg" alt="Apexa" data-parallax='{"x" : 50 }' />
                            <img src="assets/img/images/choose_img_shape.png" alt="Apexa"
                                class="alltuchtopdown dark-opacity" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-content">
                            <div class="section-title white-title mb-30 tg-heading-subheading animation-style3">
                                <span class="sub-title">Why We Are The Best</span>
                                <h2 class="title tg-element-title">
                                    We Offer Business Insight <br />
                                    World Class Consulting
                                </h2>
                            </div>
                            <p>We successfully cope with tasks of varying complexity provide area longerty guarantees
                                and regularly master new Practice Following gies heur portfolio includes dozen.</p>
                            <div class="choose-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-investment"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Business Solutions</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-investment-1"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Market Analysis</h4>
                                            <p>Semper egetuis kelly for tellus urna area condition.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="choose-shape-wrap">
                <img src="assets/img/images/choose_shape01.png" alt="Apexa" data-aos="fade-right"
                    data-aos-delay="400" />
                <img class="dark-opacity" src="assets/img/images/choose_shape02.png" alt="Apexa" data-aos="fade-left"
                    data-aos-delay="400" />
            </div>
        </section>
        <!-- choose-area-end -->
        <!-- counter-area -->
        <section class="counter-area">
            <div class="container">
                <div class="row justify-content-center">
                     @foreach ($counters as $count)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="counter-item">
                                <div class="icon">
                                    <i class="flaticon-trophy"></i>
                                </div>
                                <div class="content">
                                    <h2 class="count"><span class="odometer" data-count="{{ $count->count_num ?? '' }}"></span>+</h2>
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
                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/counter_shape01.png" alt="Apexa" data-aos="fade-right"
                    data-aos-delay="400" />
                <img src="{{ asset('frontend') }}/assets/img/images/counter_shape02.png" alt="Apexa"
                    data-parallax='{"x" : 100 , "y" : -100 }' />
                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/counter_shape03.png" alt="Apexa" data-aos="fade-left"
                    data-aos-delay="400" />
            </div>
        </section>
        <!-- counter-area-end -->
        <!-- project-area -->
        <section class="project-area">
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
                                            <h4 class="title"><a href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a></h4>
                                            {{-- <span>Business Strategy</span> --}}
                                        </div>
                                        <div class="link-arrow">
                                            <a href="project-details">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
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
                                <p>
                                    We successfully cope with tasks of varying complexity, <br />
                                    provide long-term guarantees and regularly
                                </p>
                                <a href="project-details" class="btn">See All Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-shape-wrap">
                <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/project/project_shape01.png" alt="Apexa"
                    class="alltuchtopdown" />
                <img src="{{ asset('frontend') }}/assets/img/project/project_shape02.png" alt="Apexa" class="rotateme" />
            </div>
        </section>
        <!-- project-area-end -->
        <!-- request-area -->
        <section class="request-area request-bg" data-background="assets/img/bg/request_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="request-content text-center tg-heading-subheading animation-style3">
                            <h2 class="title tg-element-title text-white">Offering The Best Experience Of Business
                                Consulting Services</h2>
                            <div class="content-bottom">
                                <a href="tel:{{ $setting['site_phone'] ?? '' }}" class="btn text-white">Request a Call</a>
                                <div class="content-right">
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <span class="text-white">Call Us</span>
                                        <a class="text-white" href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="request-shape">
                <img src="assets/img/images/request_shape01.png" alt="Apexa" data-aos="fade-right"
                    data-aos-delay="400" />
                <img src="assets/img/images/request_shape02.png" alt="Apexa" data-aos="fade-left"
                    data-aos-delay="400" />
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
                                {!! $setting['team_description'] ?? 'Leading the Way in IT <br>
                        Innovation' !!}
                            </h2>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="section-content">
                            <p>Our power of choice is untrammelled and when nothing preven tsbeing able to do what we
                                like best every pleasure.</p>
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
                                        <span>@if ($team->position)
                                        {{ $team->position ?? '' }}
                                        @endif</span>
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
                                    <h2 class="title">40+</h2>
                                    <span>Consulting <br />
                                        farm</span>
                                </div>
                                <div class="content-right">
                                    <h2 class="title">Trusted , Happy & Satisfied Businesses</h2>
                                    <p>When you work with HR Solutions, you get the best. We provide adaptable solutions
                                        that allow you to be a part of the entire process</p>
                                </div>
                            </div>
                            <div class="consulting-img shine-animate">
                                <img src="{{ asset('frontend') }}/assets/img/images/consulting_img.jpg" alt="Apexa" />
                            </div>
                            <div class="consulting-shape">
                                <img src="{{ asset('frontend') }}/assets/img/images/consulting_shape.png" alt="Apexa" />
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
                                            <p>“{!! $rev->description ?? '' !!}”</p>
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
                                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape01.png" alt="Apexa" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-shape-wrap">
                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape05.png" alt="Apexa" data-aos="fade-up"
                    data-aos-delay="400" />
                <img class="dark-opacity" src="assets/img/images/testimonial_shape06.png" alt="Apexa"
                    data-aos="fade-left" data-aos-delay="400" />
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
                                            <a href="{{ route('blogsingle', $blog->slug) }}">{{$blog->name ?? '' }}</a>
                                        </h2>
                                    <div class="blog-avatar">
                                        <div class="avatar-thumb">
                                            <img src="{{ asset('frontend') }}/assets/img/blog/blog_avatar01.png" alt="Apexa" />
                                        </div>
                                        <div class="avatar-content">
                                            {{-- <p>By <a href="blog-details">Doman Smith</a></p> --}}
                                        </div>
                                    </div>
                                    <div class="blog-post-meta">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="{{ route('blogsingle', $blog->slug) }}" class="btn">Read More</a>
                                            </li>
                                            <li><i class="fas fa-calendar-alt"></i>{{ date('d', strtotime($blog->created_at)) }} {{ date('M', strtotime($blog->created_at)) }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="blog-shape-wrap">
                <img src="{{ asset('frontend') }}/assets/img/images/blog_shape01.png" alt="Apexa" data-aos="fade-right" data-aos-delay="400" />
                <img src="{{ asset('frontend') }}/assets/img/images/blog_shape02.png" alt="Apexa" data-aos="fade-left" data-aos-delay="400" />
            </div>
        </section>
        <!-- blog-post-area-end -->
        <!-- call-back-area -->
        <section class="call-back-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-back-content">
                            <div class="section-title white-title mb-10 tg-heading-subheading animation-style3">
                                <h2 class="title tg-element-title">Talk to us</h2>
                            </div>
                            <p>Looking for the Best IT <br> Business Solutions?</p>
                            <div class="shape">
                                <img class="dark-opacity" src="assets/img/images/call_back_shape.png" alt="Apexa"
                                    data-aos="fade-right" data-aos-delay="400" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-back-form">
                            <form action="{{ route('inquiry') }}" id="contact-form" method="POST">
                                 @csrf      
                                <div class="row">
                                    @if(session('success'))
                                        <div class="alert alert-success">
                                                {{ session('success') }}
                                          </div>
                                      @endif
                                      {{-- Error Messages --}}
                                    @if($errors->any())s
                                        <div class="alert alert-danger">
                                            <ul class="mb-0">
                                                @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name *" value="{{ old('name') }}" />
                                            <span class="text-danger">
                                            <span id="name-error"></span>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="E-mail *" value="{{ old('email') }}" />
                                            <span class="text-danger">
                                            <span id="email-error"></span>

                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="number" name="phone" placeholder="Phone *" value="{{ old('phone') }}" />
                                            <span class="text-danger">
                                            <span id="phone-error"></span>
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="subject" placeholder="Subject *" value="{{ old('subject') }}" />
                                            <span class="text-danger">
                                            <span id="subject-error"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" name="message" placeholder="Message *" value="{{ old('message') }}" />
                                             <span class="text-danger">
                                             <span id="message-error"></span>
                                             </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button id="contact_submit" type="submit" class="btn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-back-area-end -->
    </main>
@endsection
