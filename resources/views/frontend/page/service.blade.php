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
        <section class="tp-service-area pt-90 pb-40">
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
        </section>
    @endif

@endsection
