<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.link')
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        @include('layouts.navbar')
    </header>

    <main class="blog-grid-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Blog Grid</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_2@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_8@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_7@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_6@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_5@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_4@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_3@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_2@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post-card wow fadeInUp">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="assets/images/Bloggrid/Bloggrid_1@2x.jpg" alt="blog">
                        </div>
                        <p class="blog-post-date">January 29, 2020</p>
                        <h5 class="blog-post-title">Why you must experience design at least once</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pb-5 mb-5">
                        <nav class="oleez-pagination d-flex align-items-center justify-content-center wow fadeInUp">
                            <a href="#!" class="active">01</a>
                            <a href="#!">02</a>
                            <a href="#!">03</a>
                            <a href="#!" class="next">&rarr;</a>
                        </nav>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')
    
        <!-- Modals -->
        <!-- Off canvas social menu -->
        <nav id="offCanvasMenu" class="off-canvas-menu">
            <button type="button" class="close" aria-label="Close" data-dismiss="offCanvasMenu">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="oleez-social-menu">
                <li>
                    <a href="#!" class="oleez-social-menu-link">Facebook</a>
                </li>
                <li>
                    <a href="#!" class="oleez-social-menu-link">Instagram</a>
                </li>
                <li>
                    <a href="#!" class="oleez-social-menu-link">Behance</a>
                </li>
                <li>
                    <a href="#!" class="oleez-social-menu-link">Dribbble</a>
                </li>
                <li>
                    <a href="#!" class="oleez-social-menu-link">Email</a>
                </li>
            </ul>
        </nav>
        <!-- Full screen search box -->
        <div id="searchModal" class="search-modal">
            <button type="button" class="close" aria-label="Close" data-dismiss="searchModal">
                <span aria-hidden="true">&times;</span>
            </button>
            <form action="index.html" method="get" class="oleez-overlay-search-form">
                <label for="search" class="sr-only">Search</label>
                <input type="search" class="oleez-overlay-search-input" id="search" name="search" placeholder="Search here">
            </form>
        </div>
        @include('layouts.script')
        <script>
            new WOW().init();
        </script>
    </body>

    </html>