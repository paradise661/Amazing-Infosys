<footer class="tp-footer-3-area pt-90 p-relative z-index-1" data-bg-color="#0E1E2A">
    <div class="tp-footer-3-bg">
        <img src="{{ asset('frontend') }}/assets/img/footer/footer-3/img-1.png" alt="">
    </div>
    <div class="container">
        <div class="tp-footer-3-main">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-3-widget tp-footer-3-col-1 mb-50">
                        <div class="tp-footer-logo mb-30">
                            <a href="/">
                                <img src="{{ $setting['site_footer_logo'] ? asset(get_media($setting['site_footer_logo'])->fullurl) : '' }}"
                                    alt="{{ $setting['site_footer_logo'] ? get_media($setting['site_footer_logo'])->alt : 'Amazing Infosys' }}">
                            </a>
                        </div>
                        <div class="tp-footer-3-widget-content">
                            <p>{{ $setting['site_information'] ?? '' }}</p>
                            @if ($socialdata->isNotEmpty())
                                <div class="tp-footer-widget-social">
                                    @foreach ($socialdata as $data)
                                        <a href="{{ $data->link ?? '' }}" target="_blank">
                                            <i class="{{ $data->icon ?? '' }}"></i>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-3-widget tp-footer-3-col-2 mb-50">
                        <h3 class="tp-footer-widget-title">About Us</h3>
                        <div class="tp-footer-3-widget-content">
                            @php
                                $menus = getMenus(2);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-3-widget tp-footer-3-col-3 mb-50">
                        <h3 class="tp-footer-widget-title">Useful Links</h3>
                        <div class="tp-footer-3-widget-content">
                            @php
                                $menus = getMenus(4);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="tp-footer-3-widget tp-footer-3-col-4 mb-50">
                        <h3 class="tp-footer-widget-title">Our Services</h3>
                        <div class="tp-footer-3-widget-content">
                            @php
                                $menus = getMenus(3);
                            @endphp
                            @if ($menus)
                                <ul>
                                    @foreach ($menus as $key => $value)
                                        <li>
                                            <a href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">
                                                {{ $value->name ?? $value->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-footer-2-copyright-area p-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="tp-footer-2-copyright-inner">
                        <p>© Amazing Infosys {{ date('Y') }} | All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="tp-footer-2-copyright-inner text-lg-end">
                        @php
                            $menus = getMenus(5);
                        @endphp
                        @if ($menus)
                            @foreach ($menus as $key => $value)
                                <a class="ml-25" href="{{ $value->slug }}" target="{{ $value->target ?? '_self' }}">
                                    {{ $value->name ?? $value->title }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
