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
    @if ($sliders)
        <section class="tp-hero-3-area tp-hero-3-height d-flex align-items-center p-relative" data-bg-color="#F4F5FA">
            <div class="tp-hero-3-shape">
                <img class="shape-bg-1" src="{{ asset('frontend') }}/assets/img/hero/home-3/shape-1.png" alt="">
                <img class="shape-bg-2" src="{{ asset('frontend') }}/assets/img/hero/home-3/shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="tp-hero-3-main-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="tp-hero-3-content p-relative z-index-1 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".3s">
                                <div class="tp-hero-3-title-wrapper">
                                    <span class="tp-section-title-pre">{{ $sliders->name ?? 'About Company' }}</span>
                                    {!! $sliders->description ?? '<h2 class="tp-hero-title">Empowering your business through technology</h2>' !!}
                                </div>
                                <div class="tp-hero-3-btn-wrapper d-flex flex-wrap">
                                    <div class="tp-hero-btn mr-30">
                                        <a class="tp-btn" href="{{ $sliders->link }}">Learn More <span><i
                                                    class="fa-regular fa-circle-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-hero-3-thumb p-relative wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".3s">
                                {!! get_image($sliders->image, '', 'banner-slider') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="tp-about-3-area p-relative pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-about-3-thumb-wrapper p-relative wow fadeInLeft" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="tp-about-3-thumb">
                            {!! get_image($setting['homepage_image']) !!}
                            <img class="shape-1" src="{{ asset('frontend') }}/assets/img/about/home-3/img-2.png"
                                alt="">
                            <img class="shape-2" src="{{ asset('frontend') }}/assets/img/about/home-3/img-3.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-about-3-wrapper">
                        <div class="tp-about-3-title-wrapper">
                            <span class="tp-section-title-pre">About Company</span>
                            <h3 class="tp-section-title">{{ $setting['homepage_title'] ?? '' }}</h3>
                        </div>
                        <div class="fast">{!! $setting['homepage_description'] ?? '' !!}</div>
                        <div class="tp-about-btn">
                            <a class="tp-btn" href="/about-us/">Read More<span><i
                                        class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($services->isNotEmpty())
        <section class="tp-process-2-area p-relative pb-90 pt-90" data-bg-color="#0E1E2A">
            <div class="tp-process-2-shape">
                <img src="{{ asset('frontend') }}/assets/img/process/home-3/shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-process-2-title-wrapper text-center mb-55">
                            <span class="tp-section-title-pre">What we’re Offering</span>
                            <h3 class="tp-section-title">Unlocking the Power of <br> Technology</h3>
                        </div>
                    </div>
                    @foreach ($services as $srvs)
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-offer-wrapper p-relative mb-30 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".3s">
                                <div class="tp-offer-wrapper-thumb">
                                    <a href="{{ route('servicesingle', $srvs->slug) }}">
                                        {!! get_image($srvs->image, '', 'home-service') !!}
                                    </a>
                                </div>
                                <div class="tp-offer-wrapper-content">
                                    <h3 class="tp-offer-title"><a
                                            href="{{ route('servicesingle', $srvs->slug) }}">{{ $srvs->name ?? '' }}</a>
                                    </h3>
                                    <p>{{ stripLetters($srvs->description, 135, '...') }}
                                    </p>
                                    <div class="tp-offer-wrapper-btn">
                                        <a class="tp-btn-transparent" href="{{ route('servicesingle', $srvs->slug) }}">Read
                                            More<span><i class="fa-regular fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if ($projects->isNotEmpty())
        <section class="tp-portfolio-area pt-90 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-portfolio-title-wrapper mb-55">
                            <span class="tp-section-title-pre">Project Portfolio</span>
                            <h3 class="tp-section-title">Where IT Meets Your <br> Vision</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-portfolio-btn text-start text-lg-end">
                            <a class="tp-btn" href="projects">View All Project <span><i
                                        class="fa-regular fa-plus"></i></span></a>
                        </div>
                    </div>
                    @foreach ($projects as $key => $prj)
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-portfolio-wrapper text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".{{ $key++ }}s">
                                <div class="tp-portfolio-thumb">
                                    <a href="{{ route('projectsingle', $prj->slug) }}">
                                        {!! get_image($prj->image, '', 'home-project') !!}
                                    </a>
                                </div>
                                <div class="tp-portfolio-content p-relative">
                                    <h3 class="tp-portfolio-title"><a
                                            href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if ($whowe)
        <section class="tp-features-3-area p-relative pt-80 pb-80">
            <div class="container">
                <div class="tp-features-3-bg"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-features-3-wrapper">
                            <div class="tp-features-3-title-wrapper">
                                <span class="tp-section-title-pre">{{ $whowe->name ?? '' }}</span>
                            </div>
                            {!! $whowe->description ?? '' !!}
                            <div class="tp-features-3-btn">
                                <a class="tp-btn" href="/about-us">Discover More<span><i
                                            class="fa-regular fa-plus"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-features-3-thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            {!! get_image($whowe->image) !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($teams->isNotEmpty())
        <section class="tp-team-3-area p-relative pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-team-3-title-wrapper mb-55 text-center">
                            <span class="tp-section-title-pre">{{ $setting['team_title'] ?? 'Our Team' }}</span>
                            <h3 class="tp-section-title">{!! $setting['team_description'] ?? 'Leading the Way in IT <br> Innovation' !!}</h3>
                        </div>
                    </div>
                    <div class="tp-team-3-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($teams as $team)
                                <div class="swiper-slide">
                                    <div class="tp-team-3-item text-center mb-30">
                                        <div class="tp-team-3-thumb">

                                            {!! get_image($team->image, '', 'team') !!}
                                            <div class="tp-team-3-social">
                                                <a class="icon-1" href="#"><i class="fa fa-phone"></i></a>
                                                <a class="icon-2" href="#"><i class="fa fa-envelope"></i></a>
                                            </div>
                                        </div>
                                        <div class="tp-team-3-content">
                                            <h3 class="tp-team-2-title">{{ $team->name ?? '' }}</h3>
                                            @if ($team->position)
                                                <p>{{ $team->position ?? '' }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tp-team-3-active-controls text-center pt-20">
                        <div class="slider_pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($partners->isNotEmpty())
        <div class="brand-area-two pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-team-3-title-wrapper mb-55 text-center">
                            <span class="tp-section-title-pre">Our Valued Customer</span>
                            <h3 class="tp-section-title">We are proud to serve 25+ customers!!!</h3>
                        </div>
                    </div>
                    <div class="client-swipper swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($partners as $item)
                                <div class="swiper-slide">
                                    <div class="brand-item media-wrapper">
                                        {!! get_image($item->image) !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if ($setting['reviews'])
        <section class="tp-testimonial-3-area pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-testimonial-3-title-wrapper mb-55">
                            <span class="tp-section-title-pre">
                                {{ $setting['reviewtitle'] ?? 'Our Testimonials' }}</span>
                            <h3 class="tp-section-title">
                                {!! $setting['reviewinfo'] ?? 'Expert Solutions for Your <br> IT Challenges' !!}</h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-testimonial-3-btn text-start text-lg-end">
                            <a class="tp-btn" href="/reviews/">Read More <span><i
                                        class="fa-regular fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                    @foreach ($setting['reviews'] as $rv)
                        @php
                            $rev = getReviewByID($rv);
                        @endphp
                        @if ($rev)
                            <div class="col-lg-6">
                                <div class="tp-testimonial-3-wrapper d-flex mb-30 wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay=".3s">
                                    <div class="tp-testimonial-3-thumb-wrapper">
                                        <div class="tp-testimonial-3-thumb">
                                            {!! get_image($rev->image, '', 'home-review') !!}
                                        </div>
                                        <div class="tp-testimonial-item-review text-end">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial-3-content">
                                        <h3 class="tp-testimonial-3-title">{{ $rev->name ?? '' }}</h3>
                                        <span class="tp-testimonial-3-description">{{ $rev->position ?? '' }}</span>
                                        {!! $rev->description ?? '' !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if ($counters->isNotEmpty())
        <section class="tp-counter-3-area p-relative z-index-1 pt-120 pb-90">
            <div class="container">
                <div class="tp-counter-3-bg"></div>
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-counter-3-wrapper mb-30">
                            <h3 class="tp-counter-3-title">Building Better Solutions</h3>
                        </div>
                    </div>
                    @foreach ($counters as $count)
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-counter-3-wrapper text-center mb-30">
                                <div class="tp-counter-2-item-content">
                                    <h4 class="tp-counter-2-title"><span class="purecounter"
                                            data-purecounter-duration="2"
                                            data-purecounter-end="{{ $count->count_num ?? '' }}"></span>{{ $count->num_postfix ?? 'K+' }}
                                    </h4>
                                    <p>{{ $count->name ?? '' }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="tp-contact-3-area p-relative pt-120 pb-120" data-bg-color="#0E1E2A">
        <div class="tp-contact-3-bg wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s"
            data-background="{{ get_media_url($setting['home_contact_image'], asset('frontend/assets/img/others/contact-img-3.jpg')) }}">
        </div>
        <div class="container">
            <div class="tp-contact-3-shape">
                <img src="{{ asset('frontend') }}/assets/img/others/shape/contact-shape-4.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="tp-contact-3-title-wrapper">
                        <span class="tp-section-title-pre">Talk to us</span>
                        <h3 class="tp-section-title">Looking for the Best IT <br> Business Solutions?</h3>
                    </div>
                    <div class="tp-contact-wrapper">
                        <form class="tp-contact-form contact-3" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Your Name">
                                        <span class="text-danger">
                                            <span id="name-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="text" name="phone"
                                            placeholder="Enter Phone" />
                                        <span class="text-danger">
                                            <span id="phone-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email"
                                            placeholder="Enter Email" name="email" />
                                        <span class="text-danger">
                                            <span id="email-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" type="text" name="subject"
                                            placeholder="Enter Subject" />
                                        <span class="text-danger">
                                            <span id="subject-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="message" placeholder="Enter Message"></textarea>
                                        <span class="text-danger">
                                            <span id="message-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tp-contact-box-btn">
                                        <button class="tp-btn" id="contact_submit" type="submit">
                                            Submit <span class="d-none" id="contact-loader"><i
                                                    class="fas fa-sync fa-spin"></i></span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($blogs->isNotEmpty())
        <section class="tp-blog-3-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="tp-blog-2-title-wrapper mb-40">
                            <span class="tp-section-title-pre">{{ $setting['blog_title'] ?? 'Latest News' }}</span>
                            <h3 class="tp-section-title">
                                {!! $setting['blog_info'] ?? 'Taking your business to <br> the next level' !!}</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tp-blog-2-nav text-end">
                            <button class="blog-button-prev-1" type="button"><i class="fa-regular fa-arrow-left"></i>
                            </button>
                            <button class="blog-button-next-1" type="button"><i class="fa-regular fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="tp-blog-3-active swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($blogs as $blog)
                                <div class="swiper-slide">
                                    <div class="tp-blog-3-item p-relative mb-30">
                                        <div class="tp-blog-2-item-thumb">
                                            <a href="{{ route('blogsingle', $blog->slug) }}">
                                                {!! get_image($blog->image, '', 'home-blog') !!}
                                            </a>
                                        </div>
                                        <div class="tp-blog-3-date">
                                            <h4>{{ date('d', strtotime($blog->created_at)) }}</h4>
                                            <h4>{{ date('M', strtotime($blog->created_at)) }}</h4>
                                        </div>
                                        <div class="tp-blog-3-item-content">
                                            <h3 class="tp-blog-2-title"><a
                                                    href="{{ route('blogsingle', $blog->slug) }}">{{ $blog->name ?? '' }}</a>
                                            </h3>
                                            <p>{{ stripLetters($blog->description, 135, '...') }}
                                            </p>
                                            <div class="tp-blog-3-btn">
                                                <a class="tp-btn-transparent"
                                                    href="{{ route('blogsingle', $blog->slug) }}">Read More<span><i
                                                            class="fa-regular fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="tp-cta-3-area p-relative">
        <div class="container">
            <div class="tp-cta-3-box-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-cta-3-wrapper d-flex align-items-center justify-content-center mb-30">
                            <div class="tp-cta-3-icon">
                                <span><i class="fa-sharp fa-solid fa-location-dot"></i></span>
                            </div>
                            <div class="tp-cta-3-content">
                                <h3 class="tp-cta-3-title">Address</h3>
                                <a href="{{ $setting['site_location_url'] ?? '' }}"
                                    target="_blank">{{ $setting['site_location'] ?? '' }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-cta-3-wrapper d-flex align-items-center justify-content-center mb-30">
                            <div class="tp-cta-3-icon">
                                <span><i class="fa-solid fa-phone"></i></span>
                            </div>
                            <div class="tp-cta-3-content">
                                <h3 class="tp-cta-3-title">Call Us On</h3>
                                <a href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="tp-cta-3-wrapper d-flex align-items-center justify-content-center mb-30">
                            <div class="tp-cta-3-icon">
                                <span><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div class="tp-cta-3-content">
                                <h3 class="tp-cta-3-title">E-mail Us</h3>
                                <a
                                    href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
