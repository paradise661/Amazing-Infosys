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
    @if ($faqs->isNotEmpty())
        <section class="home-faq mt-48 mb-72">
            <div class="container">
                <div class="accordion mt-24" id="accordionExample">
                    @foreach ($faqs as $key => $fq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $key }}">
                                <button class="accordion-button{{ $key == 0 ? '' : ' collapsed' }}" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $key }}" type="button" aria-expanded="true"
                                    aria-controls="collapse{{ $key }}">
                                    {{ $fq->question ?? '' }}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse{{ $key == 0 ? ' show' : '' }}"
                                id="collapse{{ $key }}" data-bs-parent="#accordionExample"
                                aria-labelledby="heading{{ $key }}">
                                <div class="accordion-body">
                                    <div class="small">{!! $fq->answer ?? '' !!}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
