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
        'parentname' => 'Blogs',
        'parentlink' => '/blogs',
    ])

    <section class="tp-postbox-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-8">
                    <div class="tp-postbox-wrapper">
                        <article class="tp-postbox-item mb-60">
                            <div class="tp-postbox-item-thumb p-relative">
                                {!! get_image($content->image, 'w-100', 'blog') !!}
                                <div class="tp-postbox-tag">
                                    <p><i class="fa-light fa-calendar-days"></i>
                                        {{ date('F d, Y', strtotime($content->created_at)) }}</p>
                                </div>
                            </div>
                            <div class="tp-postbox-details-content pb-4">
                                {!! $content->description ?? '' !!}
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-xxl-4 col-xl-4 col-lg-4">
                    <div class="tp-sidebar-wrapper">

                        @if ($blogs->isNotEmpty())
                            <div class="tp-sidebar-widget mb-60">
                                <h3 class="tp-sidebar-widget-title">Recent Post</h3>
                                <div class="tp-sidebar-widget-content">
                                    <div class="tp-sidebar-post tp-rc__post">
                                        @foreach ($blogs as $blog)
                                            <div class="tp-rc__post mb-20 d-flex align-items-center">
                                                <div class="tp-rc__post-thumb mr-20">
                                                    <a href="{{ route('blogsingle', $blog->slug) }}">
                                                        {!! get_image($blog->image, '', 'sidebar') !!}
                                                    </a>
                                                </div>
                                                <div class="tp-rc__post-content">
                                                    <div class="tp-rc__meta">
                                                        <span>July 21, 2023</span>
                                                    </div>
                                                    <h3 class="tp-rc__post-title">
                                                        <a
                                                            href="{{ route('blogsingle', $blog->slug) }}">{{ $blog->name }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
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
