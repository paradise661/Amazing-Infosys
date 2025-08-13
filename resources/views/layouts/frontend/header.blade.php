<div class="back-to-top-wrapper">
    <button class="back-to-top-btn" id="back_to_top" type="button">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
</div>

<div class="search-area">
    <div class="search-inner p-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="search-wrapper">
                        <div class="search-close">
                            <button class="search-close-btn">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="search-content pt-35">
                            <h3 class="heading text-center mb-30">Hi! How can we help You?</h3>
                            <div class="d-flex justify-content-center px-5">
                                <div class="search w-100 p-relative">
                                    <input class="search-input" type="text" placeholder="Search...">
                                    <a class="search-icon" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-overlay"></div>

<div class="offcanvas__area">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-50 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                    <a href="/">
                        <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                            alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Amazing Infosys' }}">
                    </a>
                </div>
            </div>
            <div class="tp-main-menu-mobile fix d-xl-none mb-40"></div>

            <div class="offcanvas__contact">
                <h4 class="offcanvas__title">Contacts</h4>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="{{ $setting['site_location_url'] ?? '' }}"
                            target="_blank">{{ $setting['site_location'] ?? '' }} </a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="mailto:{{ $setting['site_email'] ?? '' }}"> {{ $setting['site_email'] ?? '' }} </a>
                    </div>
                </div>
                <div class="offcanvas__contact-content d-flex">
                    <div class="offcanvas__contact-content-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="offcanvas__contact-content-content">
                        <a href="tel:{{ $setting['site_phone'] ?? '' }}"> {{ $setting['site_phone'] ?? '' }}</a>
                    </div>
                </div>
            </div>
            <div class="offcanvas__social">
                <a class="icon facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="icon twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="icon youtube" href="#"><i class="fab fa-youtube"></i></a>
                <a class="icon linkedin" href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>

<header class="tp-header-3-area tp-header-transparent tp-header-height p-relative">
    <div class="tp-header-3-main header__sticky p-relative" id="header-sticky">
        <div class="container">
            <div class="tp-header-3-box">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="tp-header-3-main-left p-relative d-flex justify-content-xl-center">
                            <div class="tp-header-logo">
                                <a href="/">
                                    <img src="{{ $setting['site_main_logo'] ? asset(get_media($setting['site_main_logo'])->fullurl) : '' }}"
                                        alt="{{ $setting['site_main_logo'] ? get_media($setting['site_main_logo'])->alt : 'Amazing Infosys' }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 d-none d-xl-block">
                        <div class="tp-main-menu-3-area d-flex align-items-center">
                            <div class="tp-main-menu">
                                <nav class="tp-main-menu-content">
                                    @php
                                        $menus = getMenus(1);
                                    @endphp
                                    @if ($menus)
                                        <ul>
                                            @foreach ($menus as $key => $value)
                                                @php
                                                    $mainclass = isset($value->children) ? ' has-dropdown' : '';
                                                @endphp
                                                <li class="{{ $mainclass }}">
                                                    <a href="{{ $value->slug }}"
                                                        target="{{ $value->target ?? '_self' }}">{{ $value->name ?? $value->title }}
                                                    </a>
                                                    @if (isset($value->children))
                                                        <ul class="submenu">
                                                            @foreach ($value->children as $key => $child)
                                                                @foreach ($child as $key => $data)
                                                                    @php
                                                                        $subclass = isset($data->children) ? ' has-dropdown' : '';
                                                                    @endphp
                                                                    <li class="{{ $subclass }}">
                                                                        <a href="{{ $data->slug }}"
                                                                            target="{{ $data->target ?? '_self' }}">
                                                                            {{ $data->name ?? $data->title }}
                                                                        </a>
                                                                        @if (isset($data->children))
                                                                            <ul class="submenu">
                                                                                @foreach ($data->children as $key => $subchild)
                                                                                    @foreach ($subchild as $key => $subdata)
                                                                                        @php
                                                                                            $sclass = isset($subdata->children) ? ' has-dropdown' : '';
                                                                                        @endphp
                                                                                        <li
                                                                                            class="{{ $sclass }}">
                                                                                            <a href="{{ $subdata->slug }}"
                                                                                                target="{{ $subdata->target ?? '_self' }}">
                                                                                                {{ $subdata->name ?? $subdata->title }}
                                                                                            </a>
                                                                                            @if (isset($subdata->children))
                                                                                                <ul class="submenu">
                                                                                                    @foreach ($subdata->children as $key => $sschild)
                                                                                                        @foreach ($sschild as $key => $sbdata)
                                                                                                            <li>
                                                                                                                <a href="{{ $sbdata->slug }}"
                                                                                                                    target="{{ $sbdata->target ?? '_self' }}">
                                                                                                                    {{ $sbdata->name ?? $sbdata->title }}
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        @endforeach
                                                                                                    @endforeach
                                                                                                </ul>
                                                                                            @endif
                                                                                        </li>
                                                                                    @endforeach
                                                                                @endforeach
                                                                            </ul>
                                                                        @endif
                                                                    </li>
                                                                @endforeach
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-6">
                        <div class="tp-header-3-main-right d-flex align-items-center justify-content-center">
                            <div class="tp-header-3-contact d-none d-xl-block z-index-1">
                                <div class="tp-header-3-contact-inner d-flex align-items-center">
                                    <div class="tp-header-contact-icon">
                                        <span><i class="fa-solid fa-phone"></i></span>
                                    </div>
                                    <div class="tp-header-contact-content">
                                        <p>Need Support?</p>
                                        <span><a
                                                href="tel:{{ $setting['site_phone'] ?? '' }}">{{ $setting['site_phone'] ?? '' }}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-header-hamburger-btn d-xl-none offcanvas-open-btn">
                                <button class="hamburger-btn">
                                    <span>
                                        <svg width="29" height="24" viewBox="0 0 29 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0 1.13163C0 0.506972 0.499692 0 1.11538 0H20.4487C21.0644 0 21.5641 0.506972 21.5641 1.13163C21.5641 1.7563 21.0644 2.26327 20.4487 2.26327H1.11538C0.499692 2.26327 0 1.7563 0 1.13163ZM27.8846 10.5619H1.11538C0.499692 10.5619 0 11.0689 0 11.6935C0 12.3182 0.499692 12.8252 1.11538 12.8252H27.8846C28.5003 12.8252 29 12.3182 29 11.6935C29 11.0689 28.5003 10.5619 27.8846 10.5619ZM14.5 21.1238H1.11538C0.499692 21.1238 0 21.6308 0 22.2555C0 22.8801 0.499692 23.3871 1.11538 23.3871H14.5C15.1157 23.3871 15.6154 22.8801 15.6154 22.2555C15.6154 21.6308 15.1157 21.1238 14.5 21.1238Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
