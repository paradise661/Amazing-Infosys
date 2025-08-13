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
    @if ($teams->isNotEmpty())
        <section class="tp-team-3-area p-relative pt-120">
            <div class="container">
                <div class="row">
                    @foreach ($teams as $team)
                        <div class="col-md-4">
                            <div class="tp-team-3-item text-center mb-30">
                                <div class="tp-team-3-thumb">

                                    {!! get_image($team->image, '', 'team') !!}
                                    <div class="tp-team-3-social">
                                        <a class="icon-1" href="#"><i class="fa fa-phone"></i></a>
                                        <a class="icon-2" href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                                <div class="tp-team-3-content">
                                    <h3 class="tp-team-2-title">{{ $team->name ?? '' }}</h3>
                                    @if ($team->position)
                                        <p>{{ $team->position ?? '' }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
