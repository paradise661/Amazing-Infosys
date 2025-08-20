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
                        {{-- <section class="tp-conatct-information-area pt-130">
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
                        </section> --}}


                        <section class="contact__area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-map">
                                                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.96011341744386!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sbd!4v1685027435635!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe> --}}
                                                    <iframe src="{{ $setting['site_location_url'] ?? '' }}" allowfullscreen loading="lazy"></iframe>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-lg-5">
                                                <div class="contact__content">
                                                    <div class="section-title mb-35">
                                                        <h2 class="title">How can we help you?</h2>
                                                        <p>When an unknown printer took a galley of type and scrambled it to make type pecimen book. It has survived not only five areafact types remaining essentially unchangedIt</p>
                                                    </div>
                                                    <div class="contact__info">
                                                        <ul class="list-wrap">
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-pin"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="title">Address</h4>
                                                                    <p>{{ $setting['site_location'] ?? '' }}</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-phone-call"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="title">Phone</h4>
                                                                    <a href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <i class="flaticon-mail"></i>
                                                                </div>
                                                                <div class="content">
                                                                    <h4 class="title">E-mail</h4>
                                                                    <a href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="contact__form-wrap">
                                                    <h2 class="title">Give Us a Message</h2>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <form id="contact-form" action="{{ route('inquiry') }}" method="POST">
                                                        @csrf
                                                         {{-- Success Alert --}}
                                                        @if(session('success'))
                                                            <script>
                                                                Swal.fire({
                                                                    toast: true,
                                                                    position: 'top-end',  // side alert
                                                                    icon: 'success',
                                                                    title: "{{ session('success') }}",
                                                                    showConfirmButton: false,
                                                                    timer: 3000,
                                                                    timerProgressBar: true
                                                                });
                                                            </script>
                                                        @endif

                                                        {{-- Error Alerts --}}
                                                        @if($errors->any())
                                                            <script>
                                                                Swal.fire({
                                                                    toast: true,
                                                                    position: 'top-end',
                                                                    icon: 'error',
                                                                    title: 'Please check the form',
                                                                    html: `{!! implode('<br>', $errors->all()) !!}`,
                                                                    showConfirmButton: false,
                                                                    timer: 4000,
                                                                    timerProgressBar: true
                                                                });
                                                            </script>
                                                        @endif
                                                        <div class="form-grp">
                                                            <input type="text" name="subject" placeholder="Subject"></input>
                                                        </div>      
                                                        <div class="form-grp">
                                                            <textarea name="message" placeholder="Message"></textarea>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-grp">
                                                                    <input type="text" name="name" placeholder="Name" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-grp">
                                                                    <input type="email" name="email" placeholder="Email" />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-grp">
                                                                    <input type="number" name="phone" placeholder="Phone" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <div class="form-grp checkbox-grp">
                                                            <input type="checkbox" name="checkbox" id="checkbox" />
                                                            <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                                        </div> --}}
                                                        <button type="submit" class="btn">Submit post</button>
                                                    </form>
                                                    <p class="ajax-response mb-0"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
@endsection
