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
        <section class="tp-testimonial-3-area pt-120 pb-90">
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
        </section>
    @endif
@endsection
