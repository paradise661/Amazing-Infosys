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

            <section class="tp-features-3-area p-relative pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="tp-features-3-wrapper">
                                {!! $content->description ?? '' !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="tp-features-3-thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                                {!! get_image($content->image) !!}
                            </div>
                            {{-- <div class="tp-features-3-thumb wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="{{ asset('frontend/assets/img/images/about_img01.jpg') }}">
                            </div> --}}

                        </div>
                    </div>
                </div>
            </section>
@endsection
