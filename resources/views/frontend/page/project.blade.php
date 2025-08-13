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

    @if ($projects->isNotEmpty())
        <section class="tp-portfolio-area pt-90 pb-90">
            <div class="container">
                <div class="row align-items-center">
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

@endsection
