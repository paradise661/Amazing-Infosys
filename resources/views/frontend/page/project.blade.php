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

    @if ($projects->isNotEmpty())
        {{-- <section class="tp-portfolio-area pt-90 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    @foreach ($projects as $key => $prj)
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-portfolio-wrapper text-center mb-30 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".{{ $key++ }}s">
                                <div class="tp-portfolio-thumb">
                                    <a href="{{ route('projectsingle', $prj->slug) }}">
                                        {!! get_image($prj->image, '', 'home-project') !!}
                                    </a>
                                </div>
                                <div class="tp-portfolio-content p-relative">
                                    <h3 class="tp-portfolio-title"><a
                                            href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> --}}
    @endif

     {{-- @if ($category->isNotEmpty())
        <div class="case-study-area pt-100 pb-70">
            <div class="container">
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        @foreach ($category as $key => $value)
                            <button class="nav-link{{ $key == 0 ? ' active' : '' }}" id="nav-cats{{ $value->id }}-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-cats{{ $value->id }}" type="button"
                                role="tab" aria-controls="nav-cats{{ $value->id }}"
                                aria-selected="true">{{ $value->name }}</button>
                        @endforeach
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    @foreach ($category as $key => $value)
                        <div class="tab-pane fade{{ $key == 0 ? ' show active' : '' }}" id="nav-cats{{ $value->id }}"
                            role="tabpanel" aria-labelledby="nav-cats{{ $value->id }}-tab" tabindex="0">
                            <div class="row pt-45">
                                @if ($value->id == 1)
                                    @forelse($value->projects as $prj)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="case-study-item">
                                                <a href="{{ route('projectsingle', $prj->slug) }}">
                                                    {!! get_image($prj->image, '', 'home-project') !!}
                                                </a>
                                                <div class="content">
                                                    <h3><a
                                                            href="{{ route('projectsingle', $prj->slug) }}">{{ $prj->name ?? '' }}</a>
                                                    </h3>
                                                    <a class="more-btn" href="{{ route('projectsingle', $prj->slug) }}">
                                                        <i class="bx bx-right-arrow-alt"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <p>No Projects to display.</p>
                                        </div>
                                    @endforelse
                                @elseif ($value->id == 3)
                                    @php
                                        $latestReels = $value->projects->sortByDesc('created_at')->take(9);
                                    @endphp
                                    @forelse($latestReels as $prj)
                                        <div class="col-lg-4 col-md-6 reel-item">
                                            <div class="reel-study reel-card">
                                                <div class="reel-video-container">
                                                    <video class="reel-video" preload="none" loop muted
                                                        poster="{{ $prj->url ?: get_media_url($prj->image) }}">
                                                        <source src="{{ $prj->url ?: get_media_url($prj->image) }}"
                                                            type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                    <button class="sound-toggle" aria-label="Unmute Video">
                                                        <i class="bx bx-volume-mute"></i>
                                                    </button>
                                                </div>
                                                <div class="contents">
                                                    <h3 style="color: white;">{{ $prj->name ?? '' }}</h3>
                                                    <a class="more-btn"
                                                        href="{{ route('projectsingle', $prj->slug) }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <p>No Reels to display.</p>
                                        </div>
                                    @endforelse
                                    @if ($value->projects->count() > 6)
                                        <div class="col-12 text-center mt-4">
                                            <a class="default-btn btn-bg-two border-radius-50 text-center"
                                                href="https://www.youtube.com/@ParadiseITSolution" target="_blank">
                                                View More
                                            </a>
                                        </div>
                                    @endif
                                @else
                                    @forelse($value->projects as $prj)
                                        <div class="col-lg-3 col-md-6">
                                            <div class="case-study-item design">
                                                <a data-fancybox="demo"
                                                    href="{{ $prj->url ? $prj->url : get_media_url($prj->image) }}">
                                                    {!! get_image($prj->image) !!}
                                                </a>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <p>No Projects to display.</p>
                                        </div>
                                    @endforelse
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif --}}




{{-- @if (!empty($category))
    <div class="case-study-area pt-100 pb-70">
        <div class="container">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    @foreach ($category as $catName => $projects)
                        <button class="nav-link{{ $loop->first ? ' active' : '' }}"
                            id="nav-cats{{ Str::slug($catName) }}-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-cats{{ Str::slug($catName) }}"
                            type="button"
                            role="tab"
                            aria-controls="nav-cats{{ Str::slug($catName) }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $catName ?? 'Uncategorized' }}
                        </button>
                    @endforeach
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                @foreach ($category as $catName => $projects)
                    <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}"
                        id="nav-cats{{ Str::slug($catName) }}"
                        role="tabpanel"
                        aria-labelledby="nav-cats{{ Str::slug($catName) }}-tab"
                        tabindex="0">
                        <div class="row pt-45">
                            @forelse($projects as $prj)
                                <div class="col-lg-3 col-md-6">
                                    <div class="case-study-item design">
                                        <a data-fancybox="demo"
                                           href="{{ $prj->url ?: get_media_url($prj->image) }}">
                                            {!! get_image($prj->image) !!}
                                        </a>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p>No Projects to display.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif --}}




@if (!empty($category))
    <div class="case-study-area pt-100 pb-70">
        <div class="container">
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    @foreach ($category as $catName => $projects)
                        <button class="project-nav-link project-btn {{ $loop->first ? ' active' : '' }}"
                            id="nav-cats{{ Str::slug($catName) }}-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#nav-cats{{ Str::slug($catName) }}"
                            type="button"
                            role="tab"
                            aria-controls="nav-cats{{ Str::slug($catName) }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $catName ?? 'Uncategorized' }}
                        </button>
                    @endforeach
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                @foreach ($category as $catName => $projects)
                    <div class="tab-pane fade{{ $loop->first ? ' show active' : '' }}"
                        id="nav-cats{{ Str::slug($catName) }}"
                        role="tabpanel"
                        aria-labelledby="nav-cats{{ Str::slug($catName) }}-tab"
                        tabindex="0">
                        <div class="row pt-45">
                            @forelse($projects as $key => $prj)
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card shadow-sm rounded-2 h-100">
                                        @if($catName == 'Reels')
                                                                                                 {{-- <video class="reel-video" preload="none" loop muted>
                                                                                                <source src="{{ asset('storage/paradise-20250211094250-20250818081852.mp4') }}"
                                                                                                    type="video/mp4">
                                                                                                    Your browser does not support the video tag.
                                                                                                    </video>
                                                                                                        <button class="sound-toggle" aria-label="Unmute Video">
                                                                                                        <i class="bx bx-volume-mute"></i>
                                                                                                        </button> --}}
                                         <div class="video-card">
                                          <video class="video-el"autoplay playsinline muted preload="metadata" poster="{{ get_media_url($prj->image) }}">
                                            <source src="{{ asset(get_media_url($prj->image)) }}" type="video/mp4">
                                          </video>
                                          <!-- Big center play -->
                                          <button class="big-play" aria-label="Play">
                                            <!-- Play SVG -->
                                            <svg viewBox="0 0 24 24" width="28" height="28" aria-hidden="true">
                                              <path d="M8 5v14l11-7z" fill="currentColor"></path>
                                            </svg>
                                          </button>
                                          <!-- Bottom controls -->
                                          <div class="controls">
                                            <button class="btn-play" aria-label="Play/Pause">
                                              <!-- Play icon (default) -->
                                              <svg class="icon-play" viewBox="0 0 24 24" width="18" height="18"><path d="M8 5v14l11-7z" fill="currentColor"/></svg>
                                              <!-- Pause icon (hidden initially) -->
                                              <svg class="icon-pause" viewBox="0 0 24 24" width="18" height="18" style="display:none"><path d="M6 5h4v14H6zm8 0h4v14h-4z" fill="currentColor"/></svg>
                                            </button>
                                            <button class="btn-mute" aria-label="Mute/Unmute">
                                              <!-- Volume -->
                                              <svg class="icon-volume" viewBox="0 0 24 24" width="18" height="18">
                                                <path d="M3 10v4h4l5 4V6L7 10H3zM16.5 12a4.5 4.5 0 0 0-1.8-3.6l1.2-1.6A6.5 6.5 0 0 1 18.5 12a6.5 6.5 0 0 1-2.6 5.2l-1.2-1.6A4.5 4.5 0 0 0 16.5 12z" fill="currentColor"/>
                                              </svg>
                                              <!-- Muted -->
                                              <svg class="icon-muted" viewBox="0 0 24 24" width="18" height="18" style="display:none">
                                                <path d="M3 10v4h4l5 4V6L7 10H3z" fill="currentColor"/>
                                                <path d="M22 6L6 22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                              </svg>
                                            </button>
                                          </div>
                                        </div>

                                        @else
                                        <a data-fancybox="demo" href="{{ asset('frontend/assets/img/images/about_img01.jpg') }}">
                                            {!! get_image($prj->image) !!}
                                        </a>
                                        @endif
                                        <div class="card-body text-center">
                                            <h6 class="card-title">{{ $prj->name }}</h6>
                                            {{-- <p class="card-text text-muted small">Short description goes here.</p> --}}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p>No Projects to display.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<script>
document.querySelectorAll('.video-card').forEach(card => {
  const video    = card.querySelector('.video-el');
  const bigPlay  = card.querySelector('.big-play');
  const btnPlay  = card.querySelector('.btn-play');
  const btnMute  = card.querySelector('.btn-mute');

  const iconPlay  = btnPlay.querySelector('.icon-play');
  const iconPause = btnPlay.querySelector('.icon-pause');
  const iconVol   = btnMute.querySelector('.icon-volume');
  const iconMute  = btnMute.querySelector('.icon-muted');

  // helper: update icons
  function setPlayIcon(playing){
    iconPlay.style.display  = playing ? 'none' : 'block';
    iconPause.style.display = playing ? 'block' : 'none';
    bigPlay.classList.toggle('hide', playing);
  }
  function setMuteIcon(muted){
    iconVol.style.display  = muted ? 'none' : 'block';
    iconMute.style.display = muted ? 'block' : 'none';
  }

  // default states
  setPlayIcon(false);
  setMuteIcon(true); // video starts muted

  // events
  bigPlay.addEventListener('click', () => {
    video.play();
  });

  btnPlay.addEventListener('click', () => {
    if (video.paused) video.play(); else video.pause();
  });

  btnMute.addEventListener('click', () => {
    video.muted = !video.muted;
  });

  // keep icons in sync with actual state
  video.addEventListener('play',  () => setPlayIcon(true));
  video.addEventListener('pause', () => setPlayIcon(false));
  video.addEventListener('ended', () => setPlayIcon(false));
  video.addEventListener('volumechange', () => setMuteIcon(video.muted));
});
</script>


