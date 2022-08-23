<div data-anchor="page3" class="pp-scrollable text-white section section-3">
    <div class="scroll-wrap">
        <div class="section-bg" style="background-image:url(asset/frontend/images/bg/resume.jpg);"></div>
        <div class="scrollable-content">
            <div class="vertical-centred">
                <div class="boxed boxed-inner">
                    <div class="vertical-title d-none d-lg-block"><span>Resume</span></div>
                    <div class="boxed">
                        <div class="container">
                            <div class="intro">
                                <div class="row row-resume">
                                    <div class="col-md-6">
                                        <div class="col-resume">
                                            <h4 class="title-uppercase">Education</h4>
                                            <div class="resume-content">
                                                <div class="resume-inner">
                                                    @foreach ($educations as $item)
                                                    <div class="resume-row">
                                                        <h6 class="resume-type">{{ $item->exam }}</h6>
                                                        <p class="resume-study">{{ $item->school }}</p>
                                                        <p class="resume-date text-primary">Year of Passing:
                                                            {{ $item->passing_year }}</p>
                                                        @if ($item->gpa != null)
                                                        <p class="resume-text">{{ $item->gpa }}</p>
                                                        @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-resume">
                                            <h4 class="title-uppercase">Courses</h4>
                                            <div class="resume-content">
                                                <div class="resume-inner">
                                                    @foreach ($courses as $item)
                                                    <div class="resume-row">
                                                        <h6 class="resume-type">{{ $item->title }}</h6>
                                                        <p class="resume-study">{{ $item->institute }}</p>
                                                        <p class="resume-date text-primary">Duration:
                                                            {{ $item->duration }}</p>
                                                        @if ($item->org != null)
                                                        <p class="resume-text">{{ $item->org }}</p>
                                                        @endif
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
    </div>
</div>
