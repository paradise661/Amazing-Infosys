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

    @if (!empty($content->image || $content->description))
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
    </section>

@endsection
