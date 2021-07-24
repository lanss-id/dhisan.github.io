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

    <main class="portfolio-grid-page">
        <div class="container">
            <h1 class="oleez-page-title">Standard List</h1>

            <div class="row">
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_9@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_8@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_7@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_6@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_5@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_4@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_3@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_2@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
                </div>
                <div class="col-md-4 portfolio-card wow fadeInUp">
                    <div class="project-thumbnail-wrapper">
                        <img src="assets/images/Standard_list_blog/Standard_1@2x.jpg" alt="portffolio" class="project-thumbnail">
                    </div>
                    <h5 class="project-name">Simple Design</h5>
                    <p class="project-category">Branding</p>
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