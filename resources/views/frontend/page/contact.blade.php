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
    <section class="tp-conatct-information-area pt-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tp-contact-information-wrapper justify-content-center d-flex">
                        <div class="tp-contact-map-info mr-30">
                            <div class="tp-contact-map-info-wrapper d-flex">
                                <div class="tp-contact-map-info-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="tp-contact-map-info-content">
                                    <h3 class="tp-contact-map-info-title">Contacts</h3>
                                    <a href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-contact-map-info mr-30">
                            <div class="tp-contact-map-info-wrapper d-flex">
                                <div class="tp-contact-map-info-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/email.svg" alt="">
                                </div>
                                <div class="tp-contact-map-info-content">
                                    <h3 class="tp-contact-map-info-title">Email</h3>
                                    <a
                                        href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="tp-contact-map-info">
                            <div class="tp-contact-map-info-wrapper d-flex">
                                <div class="tp-contact-map-info-icon">
                                    <img src="{{ asset('frontend') }}/assets/img/icon/location.svg" alt="">
                                </div>
                                <div class="tp-contact-map-info-content">
                                    <h3 class="tp-contact-map-info-title">Location</h3>
                                    <a href="{{ $setting['site_location_url'] ?? 'javascript:void(0)' }}"
                                        target="_blank">{{ $setting['site_location'] ?? '' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($setting['site_email'])
        <div class="tp-contact-map-area pb-130">
            <div class="container">
                <div class="row">
                    <div class="tp-contact-map-wrapper">
                        <div class="tp-contact-map-content">
                            <iframe src="{{ $setting['site_location_url'] ?? '' }}" width="600" height="450"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <section class="tp-contact-area pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-contact-box">
                        {!! $content->description ?? '' !!}
                        <form id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tp-contact-box-input mb-3">
                                        <input class="mb-0" id="name" name="name" type="text"
                                            placeholder="Your Name">
                                        <span class="text-danger">
                                            <span id="name-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-contact-box-input mb-3">
                                        <input class="mb-0" id="phone" type="text" name="phone"
                                            placeholder="Enter Phone" />
                                        <span class="text-danger">
                                            <span id="phone-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-contact-box-input mb-3">
                                        <input class="mb-0" id="email" type="email" placeholder="Enter Email"
                                            name="email" />
                                        <span class="text-danger">
                                            <span id="email-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-contact-box-input mb-3">
                                        <input class="mb-0" id="subject" type="text" name="subject"
                                            placeholder="Enter Subject" />
                                        <span class="text-danger">
                                            <span id="subject-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tp-contact-box-input mb-3">
                                        <textarea class="mb-0" id="message" name="message" placeholder="Enter Message"></textarea>
                                        <span class="text-danger">
                                            <span id="message-error"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tp-contact-box-btn">
                                        <button class="tp-btn" id="contact_submit" type="submit">
                                            Submit <span class="d-none" id="contact-loader"><i
                                                    class="fas fa-sync fa-spin"></i></span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
