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
                {{-- <section class="tp-blog-3-area pt-90 pb-90">
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
                </section> --}}
                <section class="tp-blog-3-area pt-90 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                             @foreach ($blogs as $blog)
                                <div class="col-xl-4 col-lg-6 col-md-10">
                                    <div class="blog-post-item shine-animate-item">
                                        <div class="blog-post-thumb">
                                                    <a class="shine-animate" href="{{ route('blogsingle', $blog->slug) }}">
                                                {!! get_image($blog->image, '', 'home-blog') !!}
                                            </a>
                                            {{-- <a href="blog" class="post-tag">Business</a> --}}
                                        </div>
                                        <div class="blog-post-content">
                                            <h2 class="title">
                                                    <a href="{{ route('blogsingle', $blog->slug) }}">{{$blog->name ?? '' }}</a>
                                                </h2>
                                            <div class="blog-avatar">
                                                <div class="avatar-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/img/blog/blog_avatar01.png" alt="Apexa" />
                                                </div>
                                                <div class="avatar-content">
                                                    {{-- <p>By <a href="blog-details">Doman Smith</a></p> --}}
                                                </div>
                                            </div>
                                            <div class="blog-post-meta">
                                                <ul class="list-wrap">
                                                    <li>
                                                        <a href="{{ route('blogsingle', $blog->slug) }}" class="btn">Read More</a>
                                                    </li>
                                                    <li><i class="fas fa-calendar-alt"></i>{{ date('d', strtotime($blog->created_at)) }} {{ date('M', strtotime($blog->created_at)) }}</li>
                                                </ul>
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
