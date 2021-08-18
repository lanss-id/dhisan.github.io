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

    <main class="portfolio-list">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">Standard List</h1>
            <article class="project">
                <div class="row">
                    <div class="col-md-4 mb-5 md-mb-0 project-content wow fadeInLeft">
                        <h2 class="project-title">Simple Design Showcase</h2>
                        <a href="#!" class="project-link">view project</a>
                    </div>
                    <div class="col-md-7 mb-5">
                        <div class="project-thumbnail-wrapper wow fadeInRight">
                            <img src="assets/images/Project_1@2x.jpg" alt="project">
                        </div>
                    </div>
                </div>
            </article>
            <article class="project">
                <div class="row">
                    <div class="col-md-4 mb-5 md-mb-0 project-content wow fadeInLeft">
                        <h2 class="project-title">Simple Design Showcase</h2>
                        <a href="#!" class="project-link">view project</a>
                    </div>
                    <div class="col-md-7 wow fadeInRight">
                        <div class="project-thumbnail-wrapper">
                            <img src="assets/images/Project_2@2x.jpg" alt="project">
                        </div>
                    </div>
                </div>
            </article>
            <article class="project">
                <div class="row">
                    <div class="col-md-4 mb-5 md-mb-0 project-content wow fadeInLeft">
                        <h2 class="project-title">Simple Design Showcase</h2>
                        <a href="#!" class="project-link">view project</a>
                    </div>
                    <div class="col-md-7 wow fadeInRight">
                        <div class="project-thumbnail-wrapper">
                            <img src="assets/images/Project_3@2x.jpg" alt="project">
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </main>
    
    @include('layouts.footer')

    <!-- Modals -->
    <!-- Off canvas social menu -->
    @include('partials.off-canvas')
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