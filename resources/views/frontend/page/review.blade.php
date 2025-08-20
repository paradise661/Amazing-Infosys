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
    @if ($reviews->isNotEmpty())
        {{-- <section class="tp-testimonial-3-area pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    @foreach ($reviews as $key => $rev)
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
                    @endforeach
                </div>
            </div>
        </section> --}}

         <section class="new-testimonial-area">
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
                                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape01.png" alt="Apexa" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-shape-wrap">
                <img src="{{ asset('frontend') }}/assets/img/images/testimonial_shape05.png" alt="Apexa" data-aos="fade-up"
                    data-aos-delay="400" />
                <img class="dark-opacity" src="{{ 'frontend' }}/assets/img/images/testimonial_shape06.png" alt="Apexa"
                    data-aos="fade-left" data-aos-delay="400" />
            </div>
        </section>
    @endif
@endsection
