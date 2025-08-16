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

            @if ($services->isNotEmpty())
                {{-- <section class="tp-service-area pt-90 pb-40">
                    <div class="container">
                        <div class="row">
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
                </section> --}}
                {{-- <div class="services-item-wrap"> --}}
                    <section class="tp-service-area pt-90 pb-40">
                            <div class="container">
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
                        </section>
            @endif

@endsection
