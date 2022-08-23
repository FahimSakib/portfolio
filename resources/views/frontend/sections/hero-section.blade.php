<div data-anchor="page1" class="pp-scrollable text-white section section-1">
    <div class="scroll-wrap">
        @if (!empty($heroSection->cover))
        <div class="section-bg" style="background-image:url({{ asset('storage/hero_section/'.$heroSection->cover) }});">
        </div>
        @else
        <div class="section-bg" style="background-image:url(asset/frontend/images/bg/main.jpg);"></div>
        @endif
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title d-none d-lg-block"><span>Welcome</span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro">
                                <div class="row">
                                    <div class="col-md-8 col-lg-6">
                                        <p class="subtitle-top">Welcome
                                            To<br>{{ !empty($heroSection->welcome) ? $heroSection->welcome : 'Fahim' }}
                                        </p>
                                        <h1 class="display-2 text-white"><span class="text-primary">Hello</span> I
                                            am<br> {{ !empty($heroSection->name) ? $heroSection->name : 'Fahim' }}.</h1>
                                        {{-- <a href="https://www.youtube.com/watch?v=0O2aH4XLbto"
                                            class="popup-youtube icon ion-ios-play"></a> --}}
                                        {{-- <a class="btn mt-5" href="#">Download CV</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
