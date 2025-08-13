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
        'parentname' => 'Projects',
        'parentlink' => '/projects',
    ])

    <section class="tp-project-details-area pt-130 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-project-details-wrapper">
                        <div class="tp-project-details-thumb">
                            {!! get_image($content->image, '', 'project') !!}
                        </div>
                    </div>
                </div>
            </div>
            @if ($content->client || $content->category || $content->date)
                <div class="tp-project-details-category">
                    <div class="row justify-content-center">
                        @if ($content->client)
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-project-details-category-item text-center mb-30">
                                    <h4 class="tp-project-details-category-item-title">Clients:</h4>
                                    <p>{{ $content->client ?? '' }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($content->category)
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-project-details-category-item text-center mb-30">
                                    <h4 class="tp-project-details-category-item-title">Category:</h4>
                                    <p>{{ $content->category ?? '' }}</p>
                                </div>
                            </div>
                        @endif
                        @if ($content->date)
                            <div class="col-lg-3 col-md-6">
                                <div class="tp-project-details-category-item text-center mb-30">
                                    <h4 class="tp-project-details-category-item-title">Date:</h4>
                                    <p>{{ $content->date ?? '' }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
            <div class="tp-project-details-wrapper">
                {!! $content->description ?? '' !!}
            </div>
        </div>
    </section>
    @if ($projects->isNotEmpty())
        <section class="tp-portfolio-area pt-90 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="tp-portfolio-title-wrapper mb-55">
                            <span class="tp-section-title-pre">Project Portfolio</span>
                            <h3 class="tp-section-title">Where IT Meets Your <br> Vision</h3>
                        </div>
                    </div>
                    @foreach ($projects as $prj)
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-portfolio-wrapper text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".2s">
                                <div class="tp-portfolio-thumb">
                                    <a href="{{ route('projectsingle', $prj->slug) }}">
                                        {!! get_image($prj->image, '', 'home-project') !!}
                                    </a>
                                </div>
                                <div class="tp-portfolio-content p-relative">
                                    <h3 class="tp-portfolio-title"><a
                                            href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
