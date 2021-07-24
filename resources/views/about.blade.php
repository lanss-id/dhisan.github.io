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
    
    <main class="about-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInLeft">About Us</h1>
        </div>
        <img src="assets/images/a.png" alt="about" class="img-fluid wow fadeInUp ">
        <div class="container">           
            <p class="mt-5 oleez-page-header-content wow fadeInLeft" style="font-size: 20px">
                &emsp;Dhisan Atelier is a professional architect and interior design studio in Bandung that provides services for building design solutions to the best exterior and interior construction according to your budget. Based in the city of Bandung, Dhisan was formed in 2021 with 4 solid main team formations between architects, interior designers, managers and creative teams. <br> <br>
                &emsp;We have a passion for creating design solutions that prioritize function, ergonomics, aesthetics, and environmental responsibility. At Dhisan studio, we are committed to providing full service to clients with high quality designs and according to client satisfaction.
            </p>
            <section class="oleez-about-features">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title">Perfect Design</h4>
                        <p class="feature-card-content">Dhisan Atelier is committed to providing designs according to your wishes without compromising the artistic value in design</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title">Careful Planning</h4>
                        <p class="feature-card-content">Not only designing, we also make careful planning from 0 until your house can be built and occupied</p>
                    </div>
                    <div class="col-md-4 mb-5 mb-md-0 feature-card wow fadeInUp">
                        <h5 class="feature-card-title">Best Execution</h4>
                        <p class="feature-card-content">We pay great attention to details because the best designs are designs that provide perfect details so that artistic value is realized</p>
                    </div>
                </div>
            </section>
            <section class="oleez-what-we-do">
                <div class="row">
                    <div class="col-lg-11 offset-lg-1">
                        <h2 class="section-title wow fadeInUp">Service Options</h2>
                        <h4 class="section-subtitle wow fadeInUp">We provide service options so that our clients are more satisfied</h4>
                        <div class="row d-flex justify-content-around">
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title">Architect design package</h5>
                                <ul class="what-we-do-list">
                                    <li>Cost and design consultation</li>
                                    <li>Schematic programming concept</li>
                                    <li>Construction work drawing</li>
                                    <li>3d modeling </li>
                                    <li>Animation visualization </li>
                                    <li>Budget planning</li>
                                    <li>IMB Administration</li>
                                    <li>Field supervision</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title">Interior design package</h5>
                                <ul class="what-we-do-list">
                                    <li>Cost and design consultation</li>
                                    <li>Schematic programming concept</li>
                                    <li>Construction work drawing</li>
                                    <li>3d modeling </li>
                                    <li>Animation visualization </li>
                                    <li>Custom furniture</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-5 mb-md-0 wow fadeInUp">
                                <h5 class="what-we-do-list-title">How We Work</h5>
                                <ul class="what-we-do-list">
                                    <li>Team and client meetings</li>
                                    <li>Programming concepts and requests from clients</li>
                                    <li>Transparency of the design budget plan</li>
                                    <li>Design concept development on request</li>
                                    <li>Supervision of development in the field</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="oleez-about-work-with-us wow fadeInUp">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        {{-- <h2 class="section-title">Cara Kerja Kami</h2> --}}
                        {{-- <p class="section-subtitle">Would you like us to <a href="#!">work</a>  on your brand identity? We would be happy to <a href="#!">help</a>.</p> --}}
                        <div class="row d-flex justify-content-around">
                        <a href="{{ url('/contact') }}" class="btn work-with-us-btn">Order Now</a>
                    </div>
                </div>
            </section>
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
</body>
@include('layouts.script')
<script>
    new WOW().init();
</script>

</html>