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
                                        <div class="col-lg-8">
                                            <div class="tp-project-details-wrapper">
                                                <div class="tp-project-details-thumb">
                                                    {{-- {!! get_image($content->image, '', 'project') !!} --}}
                                                    <img src="{{ asset('frontend/assets/img/images/about_img01.jpg') }}">
                                                </div>
                                            </div>
                                        </div>
                                    {{-- @if ($content->client || $content->category || $content->date)
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
                                    @endif --}}
                                    <div class="col-lg-3">
                                     <div class="project__details-info">
                                        <h4 class="title">Project Details</h4>
                                        <ul class="list-wrap">
                                            <li><span>Category:</span>{{ $content->category ?? '' }}</li>
                                            <li><span>Date:</span>{{ $content->date ?? '' }}</li>

                                        </ul>
                                    </div>
                                </div>
                                    </div>
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
                                                                {{-- <img src="{{ asset('frontend/assets/img/images/about_img01.jpg') }}"> --}}
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

                             <!-- project-area -->
                            {{-- <section class="tp-project-details-area project-area">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-6 col-lg-7">
                                            <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                                                <span class="sub-title">OUR PROJECTS</span>
                                                <h2 class="title tg-element-title">Let’s Discover All Our Clients Recent Project</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-item-wrap">
                                    <div class="container custom-container-two">
                                        <div class="row">
                                            @foreach ($projects as $key => $prj)
                                                <div class="col-xl-3 col-md-6">
                                                    <div class="project-item">
                                                        <div class="project-thumb">
                                                            <a href="{{ route('projectsingle', $prj->slug) }}">
                                                                {!! get_image($prj->image, '', 'home-project') !!}
                                                            </a>
                                                        </div>
                                                        <div class="project-content">
                                                            <div class="left-side-content">
                                                                <h4 class="title"><a href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a></h4>
                                                            </div>
                                                            <div class="link-arrow">
                                                                <a href="{{ route('projectsingle', $prj->slug) }}">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 15" fill="none">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                                            fill="currentcolor" />
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                            d="M17.6293 3.27957C17.7117 2.80341 17.4427 2.34763 17.0096 2.17812C16.9477 2.15385 16.8824 2.13552 16.8144 2.12376L6.96081 0.419152C6.41654 0.325049 5.89911 0.689856 5.80491 1.23411C5.71079 1.77829 6.07564 2.29578 6.61982 2.38993L14.0946 3.68295L1.36574 12.6573C0.914365 12.9756 0.806424 13.5995 1.12467 14.0509C1.44292 14.5022 2.06682 14.6102 2.51819 14.2919L15.247 5.31753L13.954 12.7923C13.8598 13.3365 14.2247 13.854 14.7689 13.9482C15.3131 14.0422 15.8305 13.6774 15.9248 13.1332L17.6293 3.27957Z"
                                                                            fill="currentcolor" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                         <div class="row justify-content-center">
                                            <div class="col-12">
                                                <div class="project-content-bottom">

                                                    <a href="project-details" class="btn">See All Projects</a>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="project-shape-wrap">
                                    <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/project/project_shape01.png" alt="Apexa"
                                        class="alltuchtopdown" />
                                    <img src="{{ asset('frontend') }}/assets/img/project/project_shape02.png" alt="Apexa" class="rotateme" />
                                </div>
                            </section> --}}
@endsection
