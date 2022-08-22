<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ route('admin.hero.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-address-card"></i></div>
                    Hero Section
                </a>
                <a class="nav-link" href="{{ route('admin.work.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-laptop-file"></i></div>
                    Work
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-list-check"></i></div>
                    Skills
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.skill.index') }}">Index</a>
                        <a class="nav-link" href="{{ route('admin.skill.create') }}">Create</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEducation"
                    aria-expanded="false" aria-controls="collapseEducation">
                    <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                    Education
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseEducation" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.education.index') }}">Index</a>
                        <a class="nav-link" href="{{ route('admin.education.create') }}">Create</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCourse"
                    aria-expanded="false" aria-controls="collapseCourse">
                    <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-user"></i></div>
                    Courses
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseCourse" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.course.index') }}">Index</a>
                        <a class="nav-link" href="{{ route('admin.course.create') }}">Create</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProject"
                    aria-expanded="false" aria-controls="collapseProject">
                    <div class="sb-nav-link-icon"><i class="fas fa-bars-progress"></i></div>
                    Projects
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseProject" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="">Index</a>
                        <a class="nav-link" href="">Create</a>
                    </nav>
                </div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                    Contacts
                </a>
            </div>
        </div>
    </nav>
</div>
