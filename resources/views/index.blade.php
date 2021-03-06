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

    <main>
        <section>          
            @include('partials.intro')
        <section class="oleez-landing-section oleez-landing-section-about">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">01</span> <img src="assets/images/Group-3.svg" alt="ollez" height="12px">
                    </div>
                    <div class="row landing-about-content wow fadeInUp">
                        <div class="col-md-6">
                            <h2>Prinsip kami</h2>
                        </div>
                        <div class="col-md-6">
                            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio corporis delectus dolorem possimus, dolor rerum.</p> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_3.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Desain Sempurna</h5>
                            <p class="about-feature-description mb-5">Dhisan Atelier berkomitmen untuk memberikan desain sesuai keinginan Anda tanpa mengurangi nilai fungsional maupun artistik dalam desain.</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_1.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Perancangan Matang</h5>
                            <p class="about-feature-description mb-5">Tidak hanya desain yang sempurna, kami juga akan merancang setiap detail fungsional pada bangunan anda.</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="assets/images/icon_2.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Hasil Terbaik</h5>
                            <p class="about-feature-description">Kami selalu berusaha untuk memberikan hasil yang membuat anda puas atas jasa kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-projects" style="background-color: rgb(214, 214, 211)">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number text-white">02</span> <img src="assets/images/Group-3.svg" alt="oleez" height="12px">
                    </div>
                    <h2 class="section-title wow fadeInUp">Projek Kami <a href="{{ url('/gallery') }}" class="all-projects-link text-decoration-none">View All</a></h2>
                    <div class="landing-projects-carousel wow fadeIn">
                        <div class="card landing-project-card">
                            <img src="assets/images/galery/Picture13.png" class="card-img" alt="Project 1">
                            <div class="card-img-overlay" style="background: rgba(68, 68, 68, 0.5); backdrop-filter: blur(2px);">
                                <p class="project-title">Wintergreen House</p>
                                <p class="project-category" style="margin-bottom: 50px">Interior Desain</p>
                            </div>
                        </div>
                        <div class="card landing-project-card">
                            <img src="assets/images/galery/Picture1.jpg" class="card-img" alt="Project 2">
                            <div class="card-img-overlay" style="background: rgba(68, 68, 68, 0.5); backdrop-filter: blur(2px);">
                                <p class="project-title">Lavender House</p>
                                <p class="project-category">Interior Desain</p>
                            </div>
                        </div>
                        <div class="card landing-project-card">
                            <img src="assets/images/galery/forest.jpg" class="card-img" alt="Project 3";>
                            <div class="card-img-overlay" style="background: rgba(68, 68, 68, 0.5); backdrop-filter: blur(2px);">
                                <p class="project-title">Entrance Gate</p>
                                <p class="project-category">Interior Desain</p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-navbtn-wrapper"></div>
                </div>
            </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-team" id="tim">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">03</span> <img src="assets/images/Group-3.svg" alt="ollez" height="12px">
                    </div>
                    <div class="row landing-team-content wow fadeInUp">
                        <div class="col-md-6">
                            <h2 class="section-title wow fadeInUp">
                                Tim Kami
                            </h2>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-5 mb-md-4 landing-team-card wow flipInY">
                            <img src="assets/images/tim/tim-1.png" alt="Team Member" class="team-card-img">
                            <h5 class="team-card-name">Ade Hikmah Ravsanjani</h5>
                            <p class="team-card-job">Founder, CEO, Arsitek</p>
                            <nav class="team-card-social-links">
                                <a href="https://www.facebook.com/adehikmah.ravsanjani" target="_blank" rel="noopener noreferrer">Fb</a>
                                <a href="https://wa.me/6281902780609" target="_blank" rel="noopener noreferrer">Wa</a>
                                <a href="https://www.instagram.com/ravsanjani__/" target="_blank" rel="noopener noreferrer">In</a>
                            </nav>
                        </div>                       
                        <div class="col-md-4 mb-5 mb-md-4 landing-team-card wow flipInY">
                            <img src="assets/images/tim/tim-2.png" alt="Team Member" class="team-card-img">
                            <h5 class="team-card-name">Muhammad Ali Akbar, S. P.</h5>
                            <p class="team-card-job">Manager, Admin Keuangan</p>
                            <nav class="team-card-social-links">
                                <a href="https://www.facebook.com/malkbr" target="_blank" rel="noopener noreferrer">Fb</a>
                                <a href="https://wa.me/6287822676788" target="_blank" rel="noopener noreferrer">Wa</a>
                                <a href="https://www.instagram.com/mali_asp/" target="_blank" rel="noopener noreferrer">In</a>
                            </nav>
                        </div>
                        <div class="col-md-4 mb-5 mb-md-4 d-flex align-items-center">
                            <a href="{{ url('/our-team') }}" class="pl-4 pr-3 py-2 bg-dark text-white">View All <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                              </svg></a>
                        </div>
                        <div class="team-navbtn-wrapper"></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="oleez-landing-section oleez-landing-section-client">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">04</span> <img src="assets/images/Group-3.svg" alt="ollez" height="12px">
                    </div>
                    <h2 class="section-title mb-1 wow fadeInUp">Partners & clients</h2>
                    <p class="client-section-subtitle">We???re constantly refining our product. Adding new features. Working to help your business grow.</p>
                    <div class="row">
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_4.png" alt="client" height="50px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_2.png" alt="client" height="50px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_1.png" alt="client" height="50px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_6.png" alt="client" height="50px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_3.png" alt="client" height="50px">
                            </div>
                        </div>
                        <div class="col-md-4 client-logo-wrapper wow flipInX">
                            <div class="client-logo">
                                <img src="assets/images/client_5.png" alt="client" height="50px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="oleez-landing-section oleez-landing-section-news">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number text-white">05</span> <img src="assets/images/Group-3.svg" alt="ollez" height="12px">
                    </div>
                    <h2 class="section-title wow fadeInUp">Recent News & Stories.</h2>
                    <p class="news-section-subtitle wow fadeInUp">Share your stories and news with everyone.</p>
                    <div class="row">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-1 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="assets/images/Team_1_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by Colabrio</h6>
                                            <p class="news-post-date">July 5, 2019</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="post-category">Digital Strategy</span> 4 min read
                                    </div>
                                    <h5 class="post-title">The Ultimate Guide to Make Your WordPress Journal.</h5>
                                    <a href="#!" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-2 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="assets/images/Team_2_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by Stormie</h6>
                                            <p class="news-post-date">July 5, 2019</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="post-category">Personal</span> 4 min read
                                    </div>
                                    <h5 class="post-title">The Highly Contemporary UI/UX Design from a london.</h5>
                                    <a href="#!" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="news-card news-card-3 wow fadeInUp">
                                <div class="card-body">
                                    <div class="author-info media">
                                        <img src="assets/images/Team_3_Copy_2@2x.jpg" alt="author" class="author-avatar">
                                        <div class="media-body">
                                            <h6 class="author-name">Posted by Angela</h6>
                                            <p class="news-post-date">July 5, 2019</p>
                                        </div>
                                    </div>
                                    <div class="post-meta">
                                        <span class="post-category">Personal</span> 4 min read
                                    </div>
                                    <h5 class="post-title">A Color Exercise for our Brand???s Illustration </h5>
                                    <a href="#!" class="post-permalink">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <section class="oleez-landing-section oleez-landing-section-testimonials" style="background-color: rgb(214, 214, 211)">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number text-white">04</span> <img src="assets/images/Group-3.svg" alt="ollez" height="12px">
                    </div>
                    <div class="d-md-flex justify-content-between wow fadeInUp">
                        <div class="testimonial-section-content">
                            <h2 class="section-title">What our clients say</h2>
                            <p class="section-subtitle">Share your stories and news with everyone.</p>
                        </div>
                        <div class="testimonial-carousel-navbtn-wrapper"></div>
                    </div>
                    <div class="landing-testimonial-carousel wow fadeInUp">
                        <div class="landing-testimonial-card">
                            <div class="media">
                                <img src="assets/images/Client_1@2x.jpg" alt="client" class="testimonial-card-img">
                                <div class="media-body">
                                    <p class="testimonial-card-content">
                                        The revulsion in our feelings was therefore all the greater when the car suddenly escaped from this height of desolation, and a magnificent prospect burst upon our view.
                                    </p>
                                    <h6 class="testimonial-card-name">Winnie Warner</h6>
                                    <p class="testimonial-card-company">Creative Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="landing-testimonial-card">
                            <div class="media">
                                <img src="assets/images/Client_2@2x.jpg" alt="client" class="testimonial-card-img">
                                <div class="media-body">
                                    <p class="testimonial-card-content">
                                        The revulsion in our feelings was therefore all the greater when the car suddenly escaped from this height of desolation, and a magnificent prospect burst upon our view.
                                    </p>
                                    <h6 class="testimonial-card-name">Wesley Ford</h6>
                                    <p class="testimonial-card-company">Creative Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="landing-testimonial-card">
                            <div class="media">
                                <img src="assets/images/Client_3@2x.jpg" alt="client" class="testimonial-card-img">
                                <div class="media-body">
                                    <p class="testimonial-card-content">
                                        The revulsion in our feelings was therefore all the greater when the car suddenly escaped from this height of desolation, and a magnificent prospect burst upon our view.
                                    </p>
                                    <h6 class="testimonial-card-name">Winnie Warner</h6>
                                    <p class="testimonial-card-company">Creative Company</p>
                                </div>
                            </div>
                        </div>
                        <div class="landing-testimonial-card">
                            <div class="media">
                                <img src="assets/images/Client_4@2x.jpg" alt="client" class="testimonial-card-img">
                                <div class="media-body">
                                    <p class="testimonial-card-content">
                                        The revulsion in our feelings was therefore all the greater when the car suddenly escaped from this height of desolation, and a magnificent prospect burst upon our view.
                                    </p>
                                    <h6 class="testimonial-card-name">Wesley Ford</h6>
                                    <p class="testimonial-card-company">Creative Company</p>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
        </section> --}}
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
        new WOW({mobile: false}).init();
    </script>
</body>


</html>