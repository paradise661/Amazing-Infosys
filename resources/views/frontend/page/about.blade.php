@extends('layouts.frontend.master')

@section('seo')
    @include('frontend.global.seo', [
        'name' => $content->name ?? '',
        'title' => $content->seo_title ?? $content->name,
        'description' => $content->seo_description ?? '',
        'keyword' => $content->seo_keywords ?? '',
        'schema' => $content->seo_schema ?? '',
        'seoimage' => $content->image ?? '',
        'created_at' => $content->created_at,
        'updated_at' => $content->updated_at,
    ])
@endsection

@section('content')
    @include('frontend.global.banner', [
        'name' => $content->name,
        'banner' => $content->banner ?? null,
        'parentname' => '',
        'parentlink' => '',
    ])

    {{-- @if (!empty($content->image || $content->description))
        <section class="tp-about-area p-relative pt-150 pb-130">
            <div class="tp-about-shape">
                <img src="{{ asset('frontend') }}/assets/img/about/about-bg.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tp-about-thumb-wrapper p-relative wow fadeInLeft" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <div class="tp-about-thumb">
                                {!! get_image($content->image) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-about-wrapper">
                            <div class="tp-about-title-wrapper">
                                <span class="tp-section-title-pre">{{ $content->name ?? 'ABOUT US' }}</span>
                            </div>
                            {!! $content->description ?? '' !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if ($faqs->isNotEmpty())
        <section class="tp-faq-area p-relative pt-70 pb-60" data-bg-color="#F4F5FA">
            <div class="tp-faq-bg-img wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s"
                data-background="{{ asset('frontend') }}/assets/img/others/faq-img.jpg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6"></div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-faq-wrapper">
                            <div class="tp-faq-title-wrapper mb-40">
                                <span class="tp-section-title-pre">Some FAQ’s</span>
                                <h3 class="tp-section-title">Got something you need <br> help with?</h3>
                            </div>
                            <div class="tp-faq-tab-content tp-accordion">
                                <div class="accordion" id="general_accordion">
                                    @foreach ($faqs as $key => $faq)
                                        <div class="accordion-item{{ $key == 0 ? ' tp-faq-active' : '' }}">
                                            <h2 class="accordion-header" id="heading{{ $key }}">
                                                <button class="accordion-button{{ $key == 0 ? '' : ' collapse' }}"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                                                    type="button" aria-expanded="true"
                                                    aria-controls="collapse{{ $key }}">
                                                    {{ $faq->question ?? '' }}
                                                </button>
                                            </h2>
                                            <div class="accordion-collapse collapse{{ $key == 0 ? '' : ' show' }}"
                                                id="collapse{{ $key }}" data-bs-parent="#general_accordion"
                                                aria-labelledby="heading{{ $key }}">
                                                <div class="accordion-body">
                                                    {!! $faq->answer ?? '' !!}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if ($projects->isNotEmpty())
        <section class="tp-portfolio-area pb-90 pt-90">
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

    @if ($teams->isNotEmpty())
        <section class="tp-team-3-area p-relative pb-90">
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

    @if ($setting['reviews'])
        <section class="tp-testimonial-3-area pt-90 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-testimonial-3-title-wrapper mb-55">
                            <span class="tp-section-title-pre">
                                {{ $setting['review_title'] ?? 'Our Testimonials' }}</span>
                            <h3 class="tp-section-title">
                                {!! $setting['review_description'] ?? 'Expert Solutions for Your <br> IT Challenges' !!}</h3>
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

    <section class="tp-contact-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-contact-wrapper">
                        <div class="tp-contact-title-wrapper mb-55">
                            <span class="tp-section-title-pre">GET IN TOUCH</span>
                            <h3 class="tp-section-title">Start Your Journey ?</h3>
                        </div>
                        <form class="tp-contact-form" id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Your Full Name</label>
                                        <input class="form-control" id="name" name="name" type="text"
                                            placeholder="Enter Name">
                                        <span class="text-danger">
                                            <span id="name-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Phone</label>
                                        <input class="form-control" id="phone" type="text" name="phone"
                                            placeholder="Enter Phone" />
                                        <span class="text-danger">
                                            <span id="phone-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Email</label>
                                        <input class="form-control" id="email" type="email"
                                            placeholder="Enter Email" name="email" />
                                        <span class="text-danger">
                                            <span id="email-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label">Subject</label>
                                        <input class="form-control" id="subject" type="text" name="subject"
                                            placeholder="Enter Subject" />
                                        <span class="text-danger">
                                            <span id="subject-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="label">Message</label>
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
                <div class="col-lg-6">
                    <div class="tp-contact-thumb-wrapper p-relative wow fadeInRight" data-wow-duration="1s"
                        data-wow-delay=".3s">
                        <div class="tp-contact-thumb-shape">
                            <img class="shape-1"
                                src="{{ asset('frontend') }}/assets/img/others/shape/contact-shape-1.png" alt="">
                            <img class="shape-2"
                                src="{{ asset('frontend') }}/assets/img/others/shape/contact-shape-2.png" alt="">
                            <img class="shape-3"
                                src="{{ asset('frontend') }}/assets/img/others/shape/contact-shape-3.png" alt="">
                        </div>
                        {!! get_image($setting['about_contact_image']) !!}
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
                                <a href="contact-us" class="btn btn-two">Contact Us</a>
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

@endsection
