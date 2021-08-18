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

    <main class="shop-page">
        <div class="container">
            <div class="page-header mb-3 wow fadeInUp">
                <h2 class="page-title">Meet Our Team</h2>
                <a href="{{ url('/') }}" class="py-2 pr-4 pl-3 text-white bg-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                  </svg> Back</a>
            </div>
            <div class="oleez-landing-section content" style="margin-top: -9rem">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="assets/images/tim/tim-1.png" alt="product" class="product-thumbnail">
                        </div>
                        <div class="text-left">
                            <h5 class="product-title">Ade Hikmah Ravsanjani</h5>
                            <p class="">Founder, CEO, Architect</p>
                            <div class="oleez-landing-section-team">
                                <div class="oleez-landing-section-content">
                                    <div class="landing-team-card">
                                        <nav class="team-card-social-links">
                                            <a href="#!">Fb</a>
                                            <a href="#!">Wa</a>
                                            <a href="#!">In</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="assets/images/tim/tim-2.png" alt="product" class="product-thumbnail">
                        </div>
                        <div class="text-left">
                            <h5 class="product-title">Muhammad Ali Akbar, S. P.</h5>
                            <p class="">Manager, Finance Admin</p>
                            <div class="oleez-landing-section-team">
                                <div class="oleez-landing-section-content">
                                    <div class="landing-team-card">
                                        <nav class="team-card-social-links">
                                            <a href="#!">Fb</a>
                                            <a href="#!">Wa</a>
                                            <a href="#!">In</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="assets/images/tim/tim-3.png" alt="product" class="product-thumbnail">
                        </div>
                        <div class="text-left">
                            <h5 class="product-title">Muhammad Ifan Fauzan, S. Ds</h5>
                            <p class="">Designer Interior, CC</p>
                            <div class="oleez-landing-section-team">
                                <div class="oleez-landing-section-content">
                                    <div class="landing-team-card">
                                        <nav class="team-card-social-links">
                                            <a href="#!">Fb</a>
                                            <a href="#!">Wa</a>
                                            <a href="#!">In</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="assets/images/tim/tim-4.png" alt="product" class="product-thumbnail">
                        </div>
                        <div class="text-left">
                            <h5 class="product-title">Alien Abdillah</h5>
                            <p class="">Architect, Drafter</p>
                            <div class="oleez-landing-section-team">
                                <div class="oleez-landing-section-content">
                                    <div class="landing-team-card">
                                        <nav class="team-card-social-links">
                                            <a href="#!">Fb</a>
                                            <a href="#!">Wa</a>
                                            <a href="#!">In</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 product-card wow fadeInUp">
                        <div class="product-thumbnail-wrapper">
                            <img src="assets/images/tim/tim-5.png" alt="product" class="product-thumbnail">
                        </div>
                        <div class="text-left">
                            <h5 class="product-title">Maulana Kayyis Purnadiva</h5>
                            <p class="">Web Developer</p>
                            <div class="oleez-landing-section-team">
                                <div class="oleez-landing-section-content">
                                    <div class="landing-team-card">
                                        <nav class="team-card-social-links">
                                            <a href="#!">Fb</a>
                                            <a href="#!">Wa</a>
                                            <a href="#!">In</a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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