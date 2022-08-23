<div data-anchor="page5" class="pp-scrollable text-white section section-5">
    <div class="scroll-wrap">
        <div class="bg-changer">
            <div class="section-bg" style="background-image:url(asset/frontend/images/bg/project1.jpg);"></div>
            <div class="section-bg" style="background-image:url(asset/frontend/images/bg/project2.jpg);"></div>
            <div class="section-bg" style="background-image:url(asset/frontend/images/bg/project3.jpg);"></div>
            <div class="section-bg" style="background-image:url(asset/frontend/images/bg/project4.jpg);"></div>
            <div class="section-bg" style="background-image:url(asset/frontend/images/bg/project5.jpg);"></div>
        </div>
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title  d-none d-lg-block"><span>my works</span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="title-uppercase text-white">LATEST PROJECTS</h2>
                                        <div class="row-project-box row">
                                            @foreach ($projects as $item)
                                            <div class="col-project-box col-sm-6 col-md-4 col-lg-4">
                                                <a href="{{ $item->url }}" target="_blank" class="project-box">
                                                    <div class="project-box-inner">
                                                        <h5>{{ $item->name }}</h5>
                                                        <div class="project-category">{{ $item->type }}</div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                        <a href="https://github.com/FahimSakib?tab=repositories" target="_blank" class="h5 link-arrow text-white">view all projects <i
                                                class="icon icon-chevron-right"></i></a>
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
