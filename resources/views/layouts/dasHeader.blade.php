<div class="top-bar theme-bg-primary-darken">
    <div class="container dasHeader">
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
                        <a class="nav-link {{ request()->is('new-project') ? 'active' : '' }}" href="new_project">New Project</a>
                    </li>
                   
                    <li class="nav-item dropdown me-0">
                        <a class="nav-link dropdown-toggle px-3 px-lg-2" href="#" id="navigationLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/sunwhite.jpeg" alt="avata" class="rounded-circle img-thumbnail" width="30">
                            {Name}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right text-capitalize shadow-lg pt-0" aria-labelledby="navigationLink">
                            <div class="card">
                                <div class="card-header d-none d-lg-block">
                                    <span class="header-text">Hi, {Name} </span>
                                </div>
                                <div class="card-body p-0">
                                    {{-- <a class="dropdown-item" href="userProfile"><i class="la la-user pe-2"></i>Profile</a>
                                    <a class="dropdown-item" href="referral"><i class="la la-user-plus pe-2"></i>Refferals</a>
                                    <a class="dropdown-item" href="settings"><i class="la la-gear pe-2"></i>Setting</a> --}}
                                    <a class="dropdown-item" href="#"><i class="la la-power-off pe-2"></i>Logout</a>
                                </div>
                            </div>
                            
                        </div>
                    </li>
                    
                </ul>
                <span id="slide-line"></span>
            </div>
        </nav>
    </div><!--//container-->
</div>
