<footer>
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="fw-logo mb-25">
                                <a href="index.html"><img
                                        src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                        alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Amazing Infosys' }}"></a>
                            </div>
                            <div class="footer-content">
                                <p>{{ $setting['site_information'] ?? '' }}</p>
                                <div class="footer-social">
                                    <ul class="list-wrap">
                                        @if ($socialdata->isNotEmpty())
                                            @foreach ($socialdata as $data)
                                                <li>
                                                    <a href="{{ $data->link ?? '' }}"><i
                                                            class="{{ $data->icon ?? '' }}"></i></a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Information</h4>
                            <div class="footer-info-list">
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <a
                                                href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <a
                                                href="mailto:{{ $setting['site_email'] ?? '' }}">{{ $setting['site_email'] ?? '' }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <p>{{ $setting['site_location'] ?? '' }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Top Links</h4>
                            <div class="footer-link-list">
                                @php
                                    $menus = getMenus(4);
                                @endphp
                                @if ($menus)
                                    <ul class="list-wrap">
                                        @foreach ($menus as $key => $value)
                                            <li><a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">
                                                    {{ $value->name ?? $value->title }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Instagram Posts</h4>
                            <div class="footer-instagram">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta01.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta02.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta03.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta04.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta05.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><img src="assets/img/images/footer_insta06.jpg"
                                                alt="Apexa" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 order-0 order-lg-2">
                        <div class="footer-newsletter">
                            <h4 class="title text-primary">Newsletter SignUp!</h4>
                            <form action="#">
                                <input type="text" placeholder="e-mail Type . . ." />
                                <button class="btn btn-two" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="copyright-text">
                            <p>Copyright © <a href="index.html">Amazing Infosys {{ date('Y') }}</a> | All Right Reserved

                            </p>
                            <a href="contact">Support Terms & Conditions Privacy Policy.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape">
            <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/footer_shape01.png" alt="Apexa"
                data-aos="fade-right" data-aos-delay="400" />
            <img class="dark-opacity" src="{{ asset('frontend') }}/assets/img/images/footer_shape02.png" alt="Apexa"
                data-aos="fade-left" data-aos-delay="400" />
            <img src="{{ asset('frontend') }}/assets/img/images/footer_shape03.png" alt="Apexa"
                data-parallax='{"x" : 100 , "y" : -100 }' />
        </div>
    </div>
</footer>