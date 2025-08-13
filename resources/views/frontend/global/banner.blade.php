<section class="breadcrumb__area pt-305 pb-110 p-relative z-index-1 fix" data-bg-color="#112046">
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
</section>
