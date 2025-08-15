{{-- <section class="breadcrumb__area pt-305 pb-110 p-relative z-index-1 fix" data-bg-color="#112046">
    <div class="breadcrumb__bg" data-background="{{ asset('frontend') }}/assets/img/breadcrumb/bg.png"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumb__content">
                    <h3 class="breadcrumb__title">{{ $name ?? '' }}</h3>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="breadcrumb__content">
                    <div class="breadcrumb__list text-center text-sm-end">
                        <span><a href="/">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        @if ($parentname && $parentlink)
                        <span><a href="{{ $parentlink ?? '' }}">{{ $parentname ?? '' }}</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        @endif
                        <span>{{ $name ?? '' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="breadcrumb__area pb-110 p-relative breadcrumb__bg">
    <div class="bg-img position-absolute top-0 start-0 w-100 h-100"
        data-background="{{ asset('frontend') }}/assets/img/bg/breadcrumb_bg.jpg">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content" style="padding-top: 150px;">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="/">Home></a></li>
                            @if ($parentname && $parentlink)
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ $parentlink ?? '' }}">{{
                                    $parentname ?? '' }}</a></li>
                            @endif
                            <span>{{ $name ?? '' }}</span> --}}
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $name ?? '' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape">
        {{-- <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape01.png" alt="Apexa"
            class="dark-opacity" /> --}}
        {{-- <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape02.png" alt="Apexa"
            class="rightToLeft dark-opacity" /> --}}
        {{-- <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape03.png" alt="Apexa"
            class="dark-opacity" />
        <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape04.png" alt="Apexa" class="dark-opacity" />
        --}}
        {{-- <img src="{{ asset('frontend') }}/assets/img/images/breadcrumb_shape05.png" alt="Apexa"
            class="alltuchtopdown dark-opacity" /> --}}
    </div>
</section>