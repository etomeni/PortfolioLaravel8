<div class="top-bar theme-bg-primary-darken">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark position-relative">
            <ul class="social-list list-inline mb-0">
                <li class="list-inline-item"><a class="text-white" href="https://twitter.com/sun1white"><i class="fab fa-twitter fa-fw"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="https://facebook.com/amsundaywhite"><i class="fab fa-facebook fa-fw"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="https://linkedin.com/in/sunday-white"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="https://github.com/etomeni"><i class="fab fa-github-alt fa-fw"></i></a></li>
                <li class="list-inline-item"><a class="text-white" href="http://sunday.rf.gd/"><i class="fas fa-globe fa-fw"></i></a></li>
                <!-- <li class="list-inline-item"><a class="text-white" href="http://sunday.rf.gd/"><i class="fab fa-globe fa-fw"></i></a></li> -->
            </ul><!--//social-list-->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse text-uppercase" id="navigation">
                <ul class="navbar-nav ms-lg-auto">
                    <li class="nav-item me-lg-3">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item me-lg-3">
                        <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="projects">Projects</a>
                    </li>
                    <!-- <li class="nav-item me-lg-3">
                        <a class="nav-link" href="talks">Talks</a>
                    </li>
                    <li class="nav-item me-lg-3">
                        <a class="nav-link" href="blog">Blog</a>
                    </li> -->
                    <li class="nav-item me-lg-3">
                        <a class="nav-link {{ request()->is('resume') ? 'active' : '' }}" href="resume">Resume</a>
                    </li>
                    <li class="nav-item me-lg-3">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="contact">Contact</a>
                    </li>
                    
                </ul>
                <span id="slide-line"></span>
            </div>
        </nav>
    </div><!--//container-->
</div>