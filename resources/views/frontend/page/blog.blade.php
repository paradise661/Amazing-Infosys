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
    @if ($blogs->isNotEmpty())
        <section class="tp-blog-3-area pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="tp-blog-3-active swiper-container">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class="col-md-4">
                                    <div class="tp-blog-3-item p-relative mb-30">
                                        <div class="tp-blog-2-item-thumb">
                                            <a href="{{ route('blogsingle', $blog->slug) }}">
                                                {!! get_image($blog->image, '', 'home-blog') !!}
                                            </a>
                                        </div>
                                        <div class="tp-blog-3-date">
                                            <h4>{{ date('d', strtotime($content->created_at)) }}</h4>
                                            <h4>{{ date('M', strtotime($content->created_at)) }}</h4>
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
@endsection
