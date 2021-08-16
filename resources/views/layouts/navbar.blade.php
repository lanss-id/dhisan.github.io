<nav class="navbar navbar-expand-lg navbar-light" style="">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="assets/images/font-dark.svg" alt="Oleez" height="38px"></a>
            <ul class=" nav nav-actions d-lg-none ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
                aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item {{request()->is('/', 'our-team')?'active':''}}">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{request()->is('about')?'active':''}}">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{request()->is('portfolio', 'portfolio-list', 'gallery')?'active':''}} dropdown-toggle" href="#!" id="portfolioDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Project</a>
                        <div class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <a class="dropdown-item" href="{{ url('/portfolio-list') }}">Portfolio list</a>
                            <a class="dropdown-item" href="{{ url('/gallery') }}">Gallery</a>
                            <a class="dropdown-item" href="{{ url('/portfolio') }}">Portfolio grid</a>
                        </div>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link {{request()->is('blog-standard', 'blog-grid', 'blog-post')?'active':''}} dropdown-toggle" href="#!" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="{{ url('/blog-standard') }}">Blog Standard</a>
                            <a class="dropdown-item" href="{{ url('/blog-grid') }}">Blog grid</a>
                            <a class="dropdown-item" href="{{ url('/blog-post') }}">Blog Post</a>
                        </div>
                    </li> --}}
                    <li class="nav-item {{request()->is('contact')?'active':''}}">
                        <a class="nav-link " href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav d-none d-lg-flex">
                    <li class="nav-item ml-5">
                        <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                            <img src="assets/images/social icon@2x.svg" alt="social-nav-toggle">
                        </a>
                    </li>
                </ul>
            </div>
        </nav>