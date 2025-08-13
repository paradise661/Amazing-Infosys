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
        'parentname' => 'Services',
        'parentlink' => '/services',
    ])
    <section class="tp-service-detils-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="tp-service-details-wrapper">
                        <div class="tp-service-details-thumb">
                            {!! get_image($content->image, '', 'project') !!}
                        </div>
                        <div class="tp-service-details-wrapper-2">
                            {!! $content->description ?? '' !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tp-service-widget">
                        @if ($services->isNotEmpty())
                            <div class="tp-service-widget-item mb-115">
                                <div class="tp-service-widget-tab">
                                    <ul>
                                        @foreach ($services as $srvs)
                                            <li><a href="{{ route('servicesingle', $srvs->slug) }}">{{ $srvs->name ?? '' }}
                                                    <i class="fa-regular fa-plus"></i></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        <div class="tp-service-widget-touch text-center mb-50">
                            <div class="tp-service-widget-touch-icon">
                                <span>
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                            </div>
                            <h3 class="tp-service-widget-title">GET TOUCH</h3>
                            <p>For fast service</p>
                            <a href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
