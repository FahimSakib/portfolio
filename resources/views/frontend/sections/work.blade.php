<div data-anchor="page2" class="pp-scrollable section section-2">
    <div class="scroll-wrap">
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title text-white  d-none d-lg-block"><span>what I do</span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro">
                                <div class="row align-items-center">
                                    <div class="col-xl-7">
                                        <div class="experience-box pb-5">
                                            <div class="experience-content">
                                                <div class="experience-number text-texture">{{ !empty($work->experience) ? $work->experience : '2' }}</div><br
                                                    class="d-block d-sm-none">
                                                <div class="experience-info">Years<br>Experience<br>Working
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <h2 class="title-uppercase"> <span class="text-primary">the
                                                best</span> {{ !empty($work->heading) ? $work->heading : 'Website Around' }}</h2>
                                                {{ !empty($work->heading) ? $work->heading : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.' }}
                                        <div class="progress-bars">
                                            @foreach ($skills as $item)
                                            <div class="clearfix">
                                                <div class="number float-left">{{ $item->title }}</div>
                                                <div class="number float-right">{{ $item->percentage }}%</div>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $item->percentage }}%"
                                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            @endforeach                                      
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
</div>
